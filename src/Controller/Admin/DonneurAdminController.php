<?php

namespace App\Controller\Admin;

use App\Entity\Donneur;
use App\Repository\DonneurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/don/donneurs')]
class DonneurAdminController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('', name: 'admin_donneurs')]
    public function index(Request $request, DonneurRepository $repository): Response
    {
        $page = max(1, (int) $request->query->get('page', 1));
        $search = $request->query->get('search');
        $groupe = $request->query->get('groupe');
        $disponible = $request->query->get('disponible');

        $qb = $repository->createQueryBuilder('d')
            ->orderBy('d.createdAt', 'DESC');

        if ($search) {
            $qb->andWhere('d.nom LIKE :search OR d.prenom LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($groupe) {
            $qb->andWhere('d.groupeSanguin = :groupe')
               ->setParameter('groupe', $groupe);
        }

        if ($disponible !== null && $disponible !== '') {
            $qb->andWhere('d.disponible = :disponible')
               ->setParameter('disponible', $disponible === '1');
        }

        $itemsPerPage = 10;
        $qb->setFirstResult(($page - 1) * $itemsPerPage)
           ->setMaxResults($itemsPerPage);

        $donneurs = $qb->getQuery()->getResult();

        $totalQb = clone $qb;
        $totalQb->select('COUNT(d.id)');
        $total = $totalQb->getQuery()->getSingleScalarResult();

        return $this->render('admin/don/donneurs.html.twig', [
            'donneurs' => $donneurs,
            'pagination' => [
                'total' => $total,
                'pages' => (int) ceil($total / $itemsPerPage),
                'current' => $page,
            ],
            'filters' => [
                'search' => $search,
                'groupe' => $groupe,
                'disponible' => $disponible,
            ],
            'groupes_sanguins' => ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'],
        ]);
    }

    #[Route('/toggle/{id}', name: 'admin_donneur_toggle', methods: ['POST'])]
    public function toggle(Donneur $donneur, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('toggle' . $donneur->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide');
            return $this->redirectToRoute('admin_donneurs');
        }

        $donneur->setDisponible(!$donneur->isDisponible());
        $this->entityManager->flush();

        $status = $donneur->isDisponible() ? 'disponible' : 'indisponible';
        $this->addFlash('success', sprintf('Donneur marqué comme %s', $status));

        return $this->redirectToRoute('admin_donneurs');
    }

    #[Route('/delete/{id}', name: 'admin_donneur_delete', methods: ['POST'])]
    public function delete(Donneur $donneur, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('delete' . $donneur->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide');
            return $this->redirectToRoute('admin_donneurs');
        }

        $this->entityManager->remove($donneur);
        $this->entityManager->flush();

        $this->addFlash('success', 'Donneur supprimé avec succès');

        return $this->redirectToRoute('admin_donneurs');
    }
}
