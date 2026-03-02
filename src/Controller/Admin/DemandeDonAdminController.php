<?php

namespace App\Controller\Admin;

use App\Entity\DemandeDon;
use App\Entity\Don;
use App\Repository\DemandeDonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/don')]
class DemandeDonAdminController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('/demandes', name: 'admin_demandes')]
    public function index(Request $request, DemandeDonRepository $repository): Response
    {
        $page = max(1, (int) $request->query->get('page', 1));
        $search = $request->query->get('search');
        $type = $request->query->get('type');

        $qb = $repository->createQueryBuilder('d')
            ->orderBy('d.dateDemande', 'DESC');

        if ($search) {
            $qb->andWhere('d.region LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($type) {
            $qb->andWhere('d.typeDemande = :type')
               ->setParameter('type', $type);
        }

        $itemsPerPage = 10;
        $qb->setFirstResult(($page - 1) * $itemsPerPage)
           ->setMaxResults($itemsPerPage);

        $demandes = $qb->getQuery()->getResult();
        
        $totalQb = clone $qb;
        $totalQb->select('COUNT(d.id)');
        $total = $totalQb->getQuery()->getSingleScalarResult();

        return $this->render('admin/don/demandes.html.twig', [
            'demandes' => $demandes,
            'pagination' => [
                'total' => $total,
                'pages' => (int) ceil($total / $itemsPerPage),
                'current' => $page,
            ],
            'filters' => [
                'search' => $search,
                'type' => $type,
            ],
        ]);
    }

    #[Route('/demandes/delete/{id}', name: 'admin_demande_delete', methods: ['POST'])]
    public function delete(DemandeDon $demande, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('delete' . $demande->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide');
            return $this->redirectToRoute('admin_demandes');
        }

        $this->entityManager->remove($demande);
        $this->entityManager->flush();

        $this->addFlash('success', 'Demande supprimée avec succès');

        return $this->redirectToRoute('admin_demandes');
    }

    #[Route('/demandes/approve/{id}', name: 'admin_demande_approve', methods: ['POST'])]
    public function approve(DemandeDon $demande, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('approve' . $demande->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide');
            return $this->redirectToRoute('admin_demandes');
        }

        $don = new Don();
        $don->setTypeDon($demande->getTypeDemande());
        $don->setTypeSanguin($demande->getTypeSanguin());
        $don->setTypeOrgane($demande->getTypeOrgane());
        $don->setRegion($demande->getRegion());
        $don->setUrgence($demande->isUrgence());
        $don->setStatut('EN_ATTENTE');

        $this->entityManager->persist($don);
        $this->entityManager->remove($demande);
        $this->entityManager->flush();

        $this->addFlash('success', 'Demande approuvée et convertie en don');

        return $this->redirectToRoute('admin_demandes');
    }
}
