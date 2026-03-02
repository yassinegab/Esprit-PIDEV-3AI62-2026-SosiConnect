<?php

namespace App\Controller\Admin;

use App\Entity\Don;
use App\Repository\DonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/don')]
class DonAdminController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('', name: 'admin_don')]
    public function index(DonRepository $repository): Response
    {
        return $this->render('admin/don/index.html.twig', [
            'stats' => $repository->getStats(),
            'recentDons' => $repository->findRecent(5),
        ]);
    }

    #[Route('/list', name: 'admin_don_list')]
    public function list(Request $request, DonRepository $repository): Response
    {
        $page = max(1, (int) $request->query->get('page', 1));
        
        $filters = [
            'search' => $request->query->get('search'),
            'statut' => $request->query->get('statut'),
            'typeDon' => $request->query->get('typeDon'),
            'urgence' => $request->query->get('urgence'),
            'dateFrom' => $request->query->get('dateFrom'),
            'dateTo' => $request->query->get('dateTo'),
            'sortField' => 'd.' . $request->query->get('sortField', 'dateDon'),
            'sortOrder' => $request->query->get('sortOrder', 'DESC'),
        ];

        $filters = array_filter($filters, fn($v) => $v !== null && $v !== '');

        $result = $repository->findPaginated($page, $filters);

        return $this->render('admin/don/list.html.twig', [
            'dons' => $result['items'],
            'pagination' => [
                'total' => $result['total'],
                'pages' => $result['pages'],
                'current' => $result['currentPage'],
            ],
            'filters' => $filters,
        ]);
    }

    #[Route('/validate/{id}', name: 'admin_don_validate', methods: ['POST'])]
    public function validate(Don $don, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('validate' . $don->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide');
            return $this->redirectToRoute('admin_don_list');
        }

        $don->setStatut('VALIDÉ');
        $this->entityManager->flush();

        $this->addFlash('success', 'Don validé avec succès');

        return $this->redirectToRoute('admin_don_list');
    }

    #[Route('/reject/{id}', name: 'admin_don_reject', methods: ['POST'])]
    public function reject(Don $don, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('reject' . $don->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide');
            return $this->redirectToRoute('admin_don_list');
        }

        $don->setStatut('REFUSÉ');
        $this->entityManager->flush();

        $this->addFlash('success', 'Don refusé');

        return $this->redirectToRoute('admin_don_list');
    }

    #[Route('/delete/{id}', name: 'admin_don_delete', methods: ['POST'])]
    public function delete(Don $don, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('delete' . $don->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide');
            return $this->redirectToRoute('admin_don_list');
        }

        $this->entityManager->remove($don);
        $this->entityManager->flush();

        $this->addFlash('success', 'Don supprimé');

        return $this->redirectToRoute('admin_don_list');
    }

    #[Route('/bulk-action', name: 'admin_don_bulk', methods: ['POST'])]
    public function bulkAction(Request $request, DonRepository $repository): Response
    {
        $action = $request->request->get('action');
        $ids = (array) $request->request->all('ids');

        if (empty($ids)) {
            $this->addFlash('warning', 'Aucun don sélectionné');
            return $this->redirectToRoute('admin_don_list');
        }

        if (!$this->isCsrfTokenValid('bulk_action', $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide');
            return $this->redirectToRoute('admin_don_list');
        }

        $dons = $repository->findBy(['id' => $ids]);

        foreach ($dons as $don) {
            match ($action) {
                'validate' => $don->setStatut('VALIDÉ'),
                'reject' => $don->setStatut('REFUSÉ'),
                'delete' => $this->entityManager->remove($don),
                default => null,
            };
        }

        $this->entityManager->flush();
        $this->addFlash('success', sprintf('%d don(s) traité(s)', count($dons)));

        return $this->redirectToRoute('admin_don_list');
    }
}
