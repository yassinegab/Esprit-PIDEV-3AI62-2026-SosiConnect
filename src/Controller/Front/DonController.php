<?php

namespace App\Controller\Front;

use App\Entity\Don;
use App\Entity\Donneur;
use App\Repository\DonRepository;
use App\Service\CertificateService;
use App\Service\QrCodeService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/don')]
class DonController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly ValidatorInterface $validator
    ) {}

    #[Route('', name: 'don')]
    public function index(DonRepository $repository): Response
    {
        $stats = $repository->getStats();
        $recentDons = $repository->findRecent(5);

        return $this->render('front/don/index.html.twig', [
            'stats' => $stats,
            'recentDons' => $recentDons,
        ]);
    }

    #[Route('/declarer', name: 'don_new')]
    public function new(Request $request, DonRepository $repository): Response
    {
        $page = max(1, (int) $request->query->get('page', 1));
        
        $filters = [
            'search' => $request->query->get('search'),
            'typeDon' => $request->query->get('typeDon'),
            'dateFrom' => $request->query->get('dateFrom'),
            'dateTo' => $request->query->get('dateTo'),
            'sortOrder' => $request->query->get('sortOrder', 'DESC'),
        ];

        if ($request->isMethod('POST')) {
            $don = new Don();
            $don->setTypeDon($request->request->get('type_don'));
            $don->setTypeSanguin($request->request->get('type_sanguin') ?: null);
            $don->setTypeOrgane($request->request->get('type_organe') ?: null);
            $don->setRegion($request->request->get('region'));
            $don->setUrgence($request->request->getBoolean('urgence'));

            // Handle document upload
            $document = $request->files->get('document');
            
            if ($document) {
                $maxSize = 10 * 1024 * 1024; // 10MB
                if ($document->getSize() > $maxSize) {
                    $this->addFlash('error', 'Le fichier est trop volumineux. Maximum 10MB.');
                } else {
                    $don->setDocumentFile($document);
                }
            }

            $errors = $this->validator->validate($don);
            
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $this->entityManager->persist($don);
                $this->entityManager->flush();
                $this->addFlash('success', '🩸 Don déclaré avec succès ! Merci pour votre générosité.');
                return $this->redirectToRoute('don_new');
            }
        }

        $filters = array_filter($filters, fn($v) => $v !== null && $v !== '');
        $result = $repository->findPaginated($page, $filters);

        return $this->render('front/don/new.html.twig', [
            'dons' => $result['items'],
            'pagination' => [
                'total' => $result['total'],
                'pages' => $result['pages'],
                'current' => $result['currentPage'],
            ],
            'filters' => $filters,
            'types_sanguin' => Don::TYPES_SANGUIN,
            'types_organe' => Don::TYPES_ORGANE,
        ]);
    }

    #[Route('/historique', name: 'don_history')]
    public function history(Request $request, DonRepository $repository): Response
    {
        $page = max(1, (int) $request->query->get('page', 1));
        
        $filters = [
            'search' => $request->query->get('search'),
            'typeDon' => $request->query->get('typeDon'),
            'statut' => $request->query->get('statut'),
            'dateFrom' => $request->query->get('dateFrom'),
            'dateTo' => $request->query->get('dateTo'),
        ];

        $filters = array_filter($filters, fn($v) => $v !== null && $v !== '');
        $result = $repository->findPaginated($page, $filters);

        return $this->render('front/don/history.html.twig', [
            'dons' => $result['items'],
            'pagination' => [
                'total' => $result['total'],
                'pages' => $result['pages'],
                'current' => $result['currentPage'],
            ],
            'filters' => $filters,
        ]);
    }

    #[Route('/delete/{id}', name: 'don_delete', methods: ['POST'])]
    public function delete(Don $don, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('delete' . $don->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide');
            return $this->redirectToRoute('don_new');
        }

        $this->entityManager->remove($don);
        $this->entityManager->flush();

        $this->addFlash('success', 'Don supprimé');

        return $this->redirectToRoute('don_new');
    }

    #[Route('/{id}/certificat', name: 'don_certificate')]
    public function downloadCertificate(Don $don, CertificateService $certificateService): Response
    {
        $donneur = $this->entityManager->getRepository(Donneur::class)->findOneBy([], ['id' => 'DESC']);

        if (!$donneur) {
            $donneur = new Donneur();
            $donneur->setNom('Donneur');
            $donneur->setPrenom('Anonyme');
            $donneur->setGroupeSanguin($don->getTypeSanguin() ?: 'N/A');
        }

        if ($don->getStatut() !== 'VALIDÉ') {
            $this->addFlash('error', 'Le certificat n\'est disponible que pour les dons validés');
            return $this->redirectToRoute('don_history');
        }

        $pdfContent = $certificateService->generateDonationCertificate($don, $donneur);
        $filename = $certificateService->getCertificateFileName($don);

        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');

        return $response;
    }

    #[Route('/{id}/share', name: 'don_share')]
    public function share(Don $don): Response
    {
        $shareText = sprintf(
            "🩸 J'ai fait un don de %s via Wellness Connect ! Rejoignez le mouvement et sauvez des vies. 💪",
            $don->getTypeDon() === 'sang' ? 'sang' : 'moelle/os'
        );

        $shareUrl = $this->generateUrl('don', [], 0);

        return $this->json([
            'text' => $shareText,
            'url' => $shareUrl,
            'platforms' => [
                'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($shareUrl) . '&quote=' . urlencode($shareText),
                'twitter' => 'https://twitter.com/intent/tweet?text=' . urlencode($shareText) . '&url=' . urlencode($shareUrl),
                'whatsapp' => 'https://wa.me/?text=' . urlencode($shareText . ' ' . $shareUrl),
                'linkedin' => 'https://www.linkedin.com/sharing/share-offsite/?url=' . urlencode($shareUrl),
            ]
        ]);
    }

    #[Route('/certificat/{id}/verifier', name: 'don_certificate_verify')]
    public function verifyCertificate(Don $don): Response
    {
        return $this->render('front/don/certificate_verify.html.twig', [
            'don' => $don,
        ]);
    }
}
