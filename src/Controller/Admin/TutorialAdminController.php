<?php

namespace App\Controller\Admin;

use App\Entity\VideoTutorial;
use App\Repository\VideoTutorialRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/tutoriels')]
class TutorialAdminController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('', name: 'admin_tutorials')]
    public function index(VideoTutorialRepository $repository): Response
    {
        $tutorials = $repository->findBy([], ['displayOrder' => 'ASC', 'createdAt' => 'DESC']);
        $categories = $repository->getCategories();

        return $this->render('admin/aide/tutorials/index.html.twig', [
            'tutorials' => $tutorials,
            'categories' => $categories,
        ]);
    }

    #[Route('/new', name: 'admin_tutorial_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $tutorial = new VideoTutorial();
            $tutorial->setTitle($request->request->get('title'));
            $tutorial->setDescription($request->request->get('description'));
            $tutorial->setVideoUrl($request->request->get('video_url'));
            $tutorial->setCategory($request->request->get('category', 'general'));
            $tutorial->setDuration((int) $request->request->get('duration', 0));
            $tutorial->setDisplayOrder((int) $request->request->get('display_order', 0));
            $tutorial->setIsPublished($request->request->getBoolean('is_published', true));

            $this->entityManager->persist($tutorial);
            $this->entityManager->flush();

            $this->addFlash('success', 'Tutoriel créé avec succès');
            return $this->redirectToRoute('admin_tutorials');
        }

        return $this->render('admin/aide/tutorials/form.html.twig', [
            'tutorial' => null,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_tutorial_edit', methods: ['GET', 'POST'])]
    public function edit(VideoTutorial $tutorial, Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $tutorial->setTitle($request->request->get('title'));
            $tutorial->setDescription($request->request->get('description'));
            $tutorial->setVideoUrl($request->request->get('video_url'));
            $tutorial->setCategory($request->request->get('category', 'general'));
            $tutorial->setDuration((int) $request->request->get('duration', 0));
            $tutorial->setDisplayOrder((int) $request->request->get('display_order', 0));
            $tutorial->setIsPublished($request->request->getBoolean('is_published', true));

            $this->entityManager->flush();

            $this->addFlash('success', 'Tutoriel mis à jour');
            return $this->redirectToRoute('admin_tutorials');
        }

        return $this->render('admin/aide/tutorials/form.html.twig', [
            'tutorial' => $tutorial,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_tutorial_delete', methods: ['POST'])]
    public function delete(VideoTutorial $tutorial): Response
    {
        $this->entityManager->remove($tutorial);
        $this->entityManager->flush();

        $this->addFlash('success', 'Tutoriel supprimé');
        return $this->redirectToRoute('admin_tutorials');
    }

    #[Route('/{id}/toggle', name: 'admin_tutorial_toggle', methods: ['POST'])]
    public function toggle(VideoTutorial $tutorial): Response
    {
        $tutorial->setIsPublished(!$tutorial->isPublished());
        $this->entityManager->flush();

        $this->addFlash('success', $tutorial->isPublished() ? 'Tutoriel publié' : 'Tutoriel dépublié');
        return $this->redirectToRoute('admin_tutorials');
    }
}
