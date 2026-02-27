<?php

namespace App\Controller\Front_office;

use App\Entity\DossierMedical;
use App\Form\DossierMedicalType;
use App\Repository\DossierMedicalRepository;
use App\Service\MedicalAIService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
// ✅ BUNDLE EXTERNE 6 — PHPMailer (vraiment externe, pas Symfony natif)
// composer require phpmailer/phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

#[Route('/dossier-medical')]
#[IsGranted('ROLE_USER')]
class DossierMedicalController extends AbstractController
{
    #[Route('/', name: 'dossier_medical_index', methods: ['GET'])]
    public function index(DossierMedicalRepository $dossierMedicalRepository): Response
    {
        $user = $this->getUser();
        if (!$user) return $this->redirectToRoute('app_login');
        $dossiers = $dossierMedicalRepository->findBy(['user' => $user]);
        return $this->render('Front_office/dossier_medical/index.html.twig', ['dossiers' => $dossiers]);
    }

    #[Route('/new', name: 'dossier_medical_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) return $this->redirectToRoute('app_login');
        $dossierMedical = new DossierMedical();
        $dossierMedical->setUser($user);
        $form = $this->createForm(DossierMedicalType::class, $dossierMedical);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($dossierMedical);
            $entityManager->flush();
            $this->addFlash('success', 'Dossier médical créé avec succès !');
            return $this->redirectToRoute('dossier_medical_index');
        }
        return $this->render('Front_office/dossier_medical/new.html.twig', [
            'dossier_medical' => $dossierMedical,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'dossier_medical_show', methods: ['GET'])]
    public function show(DossierMedical $dossierMedical): Response
    {
        if ($dossierMedical->getUser() !== $this->getUser()) throw $this->createAccessDeniedException();
        return $this->render('Front_office/dossier_medical/show.html.twig', ['dossier_medical' => $dossierMedical]);
    }

    #[Route('/{id}/edit', name: 'dossier_medical_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
    {
        if ($dossierMedical->getUser() !== $this->getUser()) throw $this->createAccessDeniedException();
        $form = $this->createForm(DossierMedicalType::class, $dossierMedical);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $dossierMedical->setDerniereMiseAJour(new \DateTime());
            $entityManager->flush();
            $this->addFlash('success', 'Dossier médical modifié avec succès !');
            return $this->redirectToRoute('dossier_medical_index');
        }
        return $this->render('Front_office/dossier_medical/edit.html.twig', [
            'dossier_medical' => $dossierMedical,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'dossier_medical_delete', methods: ['POST'])]
    public function delete(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
    {
        if ($dossierMedical->getUser() !== $this->getUser()) throw $this->createAccessDeniedException();
        if ($this->isCsrfTokenValid('delete'.$dossierMedical->getId(), $request->request->get('_token'))) {
            $entityManager->remove($dossierMedical);
            $entityManager->flush();
            $this->addFlash('success', 'Dossier médical supprimé avec succès !');
        }
        return $this->redirectToRoute('dossier_medical_index');
    }

    // ================================================================
    // ✅ IA 1 — Groq API (LLaMA 3.3-70b) — API EXTERNE
    // Analyse médicale complète : score santé, recommandations, médecins
    // ================================================================
    #[Route('/{id}/analyse-ia', name: 'dossier_medical_ai_analysis', methods: ['GET'])]
    public function analyzeWithAI(DossierMedical $dossierMedical, MedicalAIService $aiService): Response
    {
        if ($dossierMedical->getUser() !== $this->getUser()) throw $this->createAccessDeniedException();

        $dossierData = [
            'antecedents_medicaux' => $dossierMedical->getAntecedentsMedicaux() ?? 'Aucun',
            'maladies_chroniques'  => $dossierMedical->getMaladiesChroniques() ?? 'Aucune',
            'allergies'            => $dossierMedical->getAllergies() ?? 'Aucune',
            'traitements_en_cours' => $dossierMedical->getTraitementsEnCours() ?? 'Aucun',
            'diagnostics'          => $dossierMedical->getDiagnostics() ?? 'Aucun',
        ];

        try {
            $analysis = $aiService->analyzeMedicalRecord($dossierData);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur analyse IA : ' . $e->getMessage());
            return $this->redirectToRoute('dossier_medical_show', ['id' => $dossierMedical->getId()]);
        }

        return $this->render('Front_office/dossier_medical/ai_analysis.html.twig', [
            'dossier_medical' => $dossierMedical,
            'analysis' => $analysis,
        ]);
    }

    // ================================================================
    // ✅ IA 2 — Hugging Face API — API EXTERNE (2ème IA)
    // Modèle : facebook/bart-large-mnli (zero-shot classification médicale)
    // Clé gratuite : https://huggingface.co/settings/tokens
    // .env : HUGGINGFACE_API_KEY=hf_...
    // ================================================================
   #[Route('/{id}/analyse-hf', name: 'dossier_medical_hf_analysis', methods: ['GET'])]
public function analyzeWithHuggingFace(DossierMedical $dossierMedical): Response
{
    if ($dossierMedical->getUser() !== $this->getUser()) {
        throw $this->createAccessDeniedException();
    }

    $hfApiKey = $_ENV['HUGGINGFACE_API_KEY'] ?? '';

    $texte = implode('. ', array_filter([
        $dossierMedical->getMaladiesChroniques(),
        $dossierMedical->getAntecedentsMedicaux(),
        $dossierMedical->getDiagnostics(),
        $dossierMedical->getTraitementsEnCours(),
    ]));

    $hfResult = null;
    $hfError  = null;
    $httpCode = null;
    $modelName = "distilbert-base-uncased";


    if (empty($hfApiKey)) {
        $hfError = '⚠️ Clé API manquante dans .env';
    } elseif (empty($texte)) {
        $hfError = '⚠️ Aucune donnée médicale disponible';
    } else {

       $ch = curl_init('https://api-inference.huggingface.co/models/distilbert-base-uncased');



        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $hfApiKey,
                'Content-Type: application/json',
            ],
            CURLOPT_POSTFIELDS => json_encode([
                "inputs" => $texte,
                "parameters" => [
                    "candidate_labels" => [
                        "condition grave — urgence médicale",
                        "risque métabolique",
                        "risque cardiovasculaire élevé",
                        "condition modérée — suivi requis",
                        "condition légère — stable",
                        "risque respiratoire"
                    ]
                ]
            ]),
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => true,
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    


        $curlError = curl_error($ch);
        curl_close($ch);

       if ($httpCode === 200) {

    $data = json_decode($response, true);

    if (is_array($data)) {

        if (isset($data['labels']) && isset($data['scores'])) {
            $hfResult = array_combine($data['labels'], $data['scores']);
        } else {
            $hfError = '❌ Données labels/scores manquantes : ' . substr($response, 0, 300);
        }

        arsort($hfResult);

    } else {
        $hfError = '❌ Format inattendu : ' . substr($response, 0, 300);
    }



        } elseif ($httpCode === 503) {
            $hfError = '⏳ Modèle en chargement, réessayez dans 20 secondes';
        } elseif ($httpCode === 401 || $httpCode === 403) {
            $hfError = '🔑 Clé API invalide';
        } elseif ($httpCode === 410) {
            $hfError = '❌ Modèle obsolète';
        } else {
            $hfError = '❌ Erreur API (HTTP ' . $httpCode . ') ' .
                       ($curlError ? ' - cURL: ' . $curlError : '');
        }
    }

    return $this->render('Front_office/dossier_medical/hf_analysis.html.twig', [
        'dossier_medical' => $dossierMedical,
        'hf_result'       => $hfResult,
        'hf_error'        => $hfError,
        'http_code'       => $httpCode,
        'texte_analyse'   => $texte,
        'api_key_valide'  => !empty($hfApiKey),
        'model_name'      => $modelName,
    ]);
}
   // ✅ BUNDLE EXTERNE 6 — DomPDF
    // Export PDF professionnel du dossier médical
    // composer require dompdf/dompdf
    // ================================================================
    #[Route('/{id}/export-pdf', name: 'dossier_medical_export_pdf', methods: ['GET'])]
    public function exportPdf(DossierMedical $dossierMedical): Response
    {
        if ($dossierMedical->getUser() !== $this->getUser()) throw $this->createAccessDeniedException();

        $options = new \Dompdf\Options();
        $options->setIsHtml5ParserEnabled(true);
        $options->setIsRemoteEnabled(false);

        $dompdf = new \Dompdf\Dompdf($options);
        $html   = $this->renderView('Front_office/dossier_medical/pdf_export.html.twig', [
            'dossier' => $dossierMedical,
            'user'    => $this->getUser(),
            'date'    => new \DateTime(),
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response($dompdf->output(), 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="dossier-medical-' . $dossierMedical->getId() . '-' . date('Y-m-d') . '.pdf"',
        ]);
    }

    // ================================================================
    // ✅ BUNDLE EXTERNE 7 — PHPMailer (externe ≠ Symfony natif)
    // Envoi email HTML avec dossier médical
    // composer require phpmailer/phpmailer
    // .env : MAILER_HOST=smtp.gmail.com
    //        MAILER_USERNAME=votre@gmail.com
    //        MAILER_PASSWORD=votre_mot_de_passe_app
    //        MAILER_PORT=587
    // ================================================================
    #[Route('/{id}/send-email', name: 'dossier_medical_send_email', methods: ['GET'])]
    public function sendEmail(DossierMedical $dossierMedical): Response
    {
        if ($dossierMedical->getUser() !== $this->getUser()) throw $this->createAccessDeniedException();

        $user = $this->getUser();
        $mail = new PHPMailer(true); // ✅ PHPMailer — bundle externe

        try {
            $mail->isSMTP();
            $mail->Host       = $_ENV['MAILER_HOST'] ?? 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['MAILER_USERNAME'] ?? '';
            $mail->Password   = $_ENV['MAILER_PASSWORD'] ?? '';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = (int)($_ENV['MAILER_PORT'] ?? 587);
            $mail->CharSet    = 'UTF-8';

            $mail->setFrom('smarthealth@noreply.com', 'SmartHealth AI');
            $mail->addAddress($user->getEmail(), $user->getNom() . ' ' . $user->getPrenom());
            $mail->isHTML(true);
            $mail->Subject = '📋 Votre Dossier Médical #' . $dossierMedical->getId() . ' — SmartHealth AI';
            $mail->Body    = $this->renderView('Front_office/dossier_medical/email_dossier.html.twig', [
                'dossier' => $dossierMedical,
                'user'    => $user,
            ]);

            $mail->send();
            $this->addFlash('success', '✅ Dossier envoyé à ' . $user->getEmail() . ' via PHPMailer !');
        } catch (PHPMailerException $e) {
            $this->addFlash('error', '❌ Erreur PHPMailer : ' . $mail->ErrorInfo);
        }

        return $this->redirectToRoute('dossier_medical_index');
    }
}