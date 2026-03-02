<?php

namespace App\Controller\Admin;

use App\Entity\FAQ;
use App\Repository\FAQRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/faq')]
class FAQAdminController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('', name: 'admin_faq')]
    public function index(FAQRepository $repository): Response
    {
        $faqs = $repository->findBy([], ['displayOrder' => 'ASC', 'createdAt' => 'DESC']);
        $categories = $repository->getCategories();

        return $this->render('admin/aide/faq/index.html.twig', [
            'faqs' => $faqs,
            'categories' => $categories,
        ]);
    }

    #[Route('/new', name: 'admin_faq_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $faq = new FAQ();
            $faq->setQuestion($request->request->get('question'));
            $faq->setAnswer($request->request->get('answer'));
            $faq->setCategory($request->request->get('category', 'general'));
            $faq->setDisplayOrder((int) $request->request->get('displayOrder', 0));
            $faq->setIsPublished($request->request->getBoolean('isPublished', true));

            $this->entityManager->persist($faq);
            $this->entityManager->flush();

            $this->addFlash('success', 'FAQ créée avec succès');
            return $this->redirectToRoute('admin_faq');
        }

        return $this->render('admin/aide/faq/form.html.twig', [
            'faq' => null,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_faq_edit', methods: ['GET', 'POST'])]
    public function edit(FAQ $faq, Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $faq->setQuestion($request->request->get('question'));
            $faq->setAnswer($request->request->get('answer'));
            $faq->setCategory($request->request->get('category', 'general'));
            $faq->setDisplayOrder((int) $request->request->get('displayOrder', 0));
            $faq->setIsPublished($request->request->getBoolean('isPublished', true));
            $faq->setUpdatedAt(new \DateTime());

            $this->entityManager->flush();

            $this->addFlash('success', 'FAQ mise à jour');
            return $this->redirectToRoute('admin_faq');
        }

        return $this->render('admin/aide/faq/form.html.twig', [
            'faq' => $faq,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_faq_delete', methods: ['POST'])]
    public function delete(FAQ $faq, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('delete' . $faq->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide');
            return $this->redirectToRoute('admin_faq');
        }

        $this->entityManager->remove($faq);
        $this->entityManager->flush();

        $this->addFlash('success', 'FAQ supprimée');
        return $this->redirectToRoute('admin_faq');
    }

    #[Route('/{id}/toggle', name: 'admin_faq_toggle', methods: ['POST'])]
    public function toggle(FAQ $faq): Response
    {
        $faq->setIsPublished(!$faq->isPublished());
        $this->entityManager->flush();

        $status = $faq->isPublished() ? 'publiée' : 'dépubliée';
        $this->addFlash('success', sprintf('FAQ %s', $status));
        return $this->redirectToRoute('admin_faq');
    }
}
