<?php

namespace App\Controller\Front_office;

use App\Entity\RendezVous;
use App\Form\RendezVousType;
use App\Repository\RendezVousRepository;
use App\Service\EmailService;
use App\Service\QrCodeService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/rendez-vous')]
class RendezVousController extends AbstractController
{
    private PaginatorInterface $paginator;

    public function __construct(PaginatorInterface $paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * Liste paginée avec filtres + stats
     */
    #[Route('', name: 'app_rendez_vous_index', methods: ['GET'])]
    public function index(Request $request, RendezVousRepository $repository): Response
    {
        $user = $this->getUser();

        // Paramètres de recherche et filtre
        $search = $request->query->get('search', '');
        $statut = $request->query->get('statut', '');

        // Query de base avec jointures
        $queryBuilder = $repository->createQueryBuilder('r')
            ->leftJoin('r.patient', 'p')
            ->leftJoin('r.medecin', 'm')
            ->leftJoin('r.hopital', 'h')
            ->addSelect('p', 'm', 'h');

        // Filtre par utilisateur si pas admin
        if (!$this->isGranted('ROLE_ADMIN')) {
            $queryBuilder
                ->where('r.patient = :user OR r.medecin = :user')
                ->setParameter('user', $user);
        }

        // Recherche textuelle
        if (!empty($search)) {
            $queryBuilder
                ->andWhere('p.nom LIKE :search OR p.prenom LIKE :search OR m.nom LIKE :search OR h.nom LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut
        if (!empty($statut)) {
            $queryBuilder->andWhere('r.statut = :statut')
                ->setParameter('statut', $statut);
        }

        // Tri par date décroissante
        $queryBuilder->orderBy('r.dateRendezVous', 'DESC');

        // Pagination
        $pagination = $this->paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            10  // ← changé à 10 au lieu de 1 (plus raisonnable – à toi de régler)
        );

        // Statistiques globales (ou filtrées si tu veux affiner plus tard)
        $stats = [
            'total'     => $repository->count([]),
            'en_attente' => $repository->count(['statut' => 'En attente']),
            'confirme'  => $repository->count(['statut' => 'Confirmé']),
            'annule'    => $repository->count(['statut' => 'Annulé']),
        ];

        return $this->render('Front_office/rendez_vous/index.html.twig', [
            'pagination' => $pagination,
            'rendez_vous' => $pagination, // compatibilité template
            'stats'      => $stats,
            'search'     => $search,
            'statut'     => $statut,
        ]);
    }

    /**
     * Création de RDV + email de confirmation
     */
    #[Route('/new', name: 'app_rendez_vous_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ): Response {
        $rendezVous = new RendezVous();
        $form = $this->createForm(RendezVousType::class, $rendezVous);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion DateTimeImmutable → DateTime
            if ($rendezVous->getDateRendezVous() instanceof \DateTimeImmutable) {
                $rendezVous->setDateRendezVous(
                    \DateTime::createFromImmutable($rendezVous->getDateRendezVous())
                );
            }

            $entityManager->persist($rendezVous);
            $entityManager->flush();

            // Envoi email (optionnel si patient n’a pas d’email)
            try {
                $patient = $rendezVous->getPatient();
                if ($patient && $patient->getEmail()) {
                    $emailService->sendRdvConfirmation(
                        $patient->getEmail(),
                        $patient->getPrenom() . ' ' . $patient->getNom(),
                        $rendezVous->getMedecin()
                            ? 'Dr. ' . $rendezVous->getMedecin()->getPrenom() . ' ' . $rendezVous->getMedecin()->getNom()
                            : 'Non assigné',
                        $rendezVous->getHopital() ? $rendezVous->getHopital()->getNom() : 'Non assigné',
                        $rendezVous->getDateRendezVous(),
                        $rendezVous->getTypeConsultation() ?? 'Consultation'
                    );
                    $this->addFlash('success', 'Rendez-vous créé ! Un email de confirmation a été envoyé.');
                } else {
                    $this->addFlash('success', 'Rendez-vous créé avec succès !');
                }
            } catch (\Exception $e) {
                $this->addFlash('warning', 'Rendez-vous créé, mais erreur lors de l’envoi email.');
            }

            return $this->redirectToRoute('app_rendez_vous_index');
        }

        return $this->render('Front_office/rendez_vous/new.html.twig', [
            'rendez_vous' => $rendezVous,
            'form'        => $form,
        ]);
    }

    /**
     * Affichage détail + QR Code
     */
    #[Route('/{id}', name: 'app_rendez_vous_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(RendezVous $rendezVous, QrCodeService $qrCodeService): Response
    {
        $qrCode = null;
        try {
            $qrCode = $qrCodeService->generateRdvQrCode(
                $rendezVous->getId(),
                $rendezVous->getPatient()
                    ? $rendezVous->getPatient()->getPrenom() . ' ' . $rendezVous->getPatient()->getNom()
                    : 'Non assigné',
                $rendezVous->getMedecin()
                    ? 'Dr. ' . $rendezVous->getMedecin()->getPrenom() . ' ' . $rendezVous->getMedecin()->getNom()
                    : 'Non assigné',
                $rendezVous->getHopital() ? $rendezVous->getHopital()->getNom() : 'Non assigné',
                $rendezVous->getDateRendezVous() ? $rendezVous->getDateRendezVous()->format('d/m/Y H:i') : 'Non définie',
                $rendezVous->getTypeConsultation() ?? 'Consultation'
            );
        } catch (\Exception $e) {
            // QR code optionnel → on continue sans
        }

        return $this->render('Front_office/rendez_vous/show.html.twig', [
            'rendez_vous' => $rendezVous,
            'qrCode'      => $qrCode,
        ]);
    }

    /**
     * Édition du RDV
     */
    #[Route('/{id}/edit', name: 'app_rendez_vous_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Request $request, RendezVous $rendezVous, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RendezVousType::class, $rendezVous);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Rendez-vous modifié avec succès !');
            return $this->redirectToRoute('app_rendez_vous_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Front_office/rendez_vous/edit.html.twig', [
            'rendez_vous' => $rendezVous,
            'form'        => $form,
        ]);
    }

    /**
     * Suppression du RDV
     */
    #[Route('/{id}', name: 'app_rendez_vous_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Request $request, RendezVous $rendezVous, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $rendezVous->getId(), $request->request->get('_token'))) {
            $entityManager->remove($rendezVous);
            $entityManager->flush();
            $this->addFlash('success', 'Rendez-vous supprimé avec succès !');
        }

        return $this->redirectToRoute('app_rendez_vous_index', [], Response::HTTP_SEE_OTHER);
    }
}