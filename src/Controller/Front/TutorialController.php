<?php

namespace App\Controller\Front;

use App\Entity\VideoTutorial;
use App\Repository\VideoTutorialRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/aide/tutoriels')]
class TutorialController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('', name: 'aide_tutorials')]
    public function index(Request $request, VideoTutorialRepository $repository): Response
    {
        $search = $request->query->get('search');
        $category = $request->query->get('category');

        if ($search) {
            $tutorials = $repository->search($search);
        } elseif ($category) {
            $tutorials = $repository->findByCategory($category);
        } else {
            $tutorials = $repository->findPublished();
        }

        $categories = $repository->getCategories();
        $popular = $repository->getPopular(3);

        return $this->render('front/aide/tutorials/index.html.twig', [
            'tutorials' => $tutorials,
            'categories' => $categories,
            'popular' => $popular,
            'search' => $search,
            'currentCategory' => $category,
        ]);
    }

    #[Route('/{id}', name: 'aide_tutorial_view')]
    public function view(VideoTutorial $tutorial): Response
    {
        $tutorial->incrementViewCount();
        $this->entityManager->flush();

        return $this->render('front/aide/tutorials/view.html.twig', [
            'tutorial' => $tutorial,
        ]);
    }

    #[Route('/{id}/like', name: 'aide_tutorial_like', methods: ['POST'])]
    public function like(VideoTutorial $tutorial): Response
    {
        $tutorial->incrementLikeCount();
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'likeCount' => $tutorial->getLikeCount(),
        ]);
    }
}
