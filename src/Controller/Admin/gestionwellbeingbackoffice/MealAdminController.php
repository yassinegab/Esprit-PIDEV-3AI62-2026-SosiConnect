<?php

namespace App\Controller\Admin\gestionwellbeingbackoffice;

use App\Entity\Meal;
use App\Entity\User;
use App\Form\MealType;
use App\Repository\MealRepository;
use App\Service\QwenService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/meal', name: 'app_meal_')]
class MealAdminController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(Request $request, MealRepository $repository): Response
    {
        $search = (string)$request->query->get('search');
        $sortField = (string)$request->query->get('sortField', 'createAt');
        $sortDirection = (string)$request->query->get('sortDirection', 'DESC');
        
        $meals = $repository->findBySearchAndSort($search, $sortField, $sortDirection);
        $stats = $repository->getStatistics();

        return $this->render('admin/gestionwellbeingbackoffice/meal/index.html.twig', [
            'meals' => $meals,
            'stats' => $stats,
            'searchTerm' => $search,
            'sortField' => $sortField,
            'sortDirection' => $sortDirection,
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, QwenService $qwenService): Response
    {
        $meal = new Meal();
        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();
        // If no user is logged in (which shouldn't happen in admin), or if we want to fallback
        if (!$user) {
            $user = $this->entityManager->getRepository(User::class)->find(1);
        }
        $meal->setUser($user);
        $meal->setCreateAt(new \DateTimeImmutable());

        $form = $this->createForm(MealType::class, $meal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageName')->getData();

            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $targetDir = $this->getParameter('meal_images_directory');
                if (!is_string($targetDir)) {
                    throw new \RuntimeException('meal_images_directory parameter must be a string.');
                }

                try {
                    $imageFile->move($targetDir, $newFilename);
                    $meal->setImageName($newFilename);

                    $fullPath = (string)$targetDir . '/' . $newFilename;
                    $analysis = $qwenService->analyzeMeal($fullPath, (string)$meal->getDescription());

                    // Parse JSON response
                    $cleanJson = preg_replace('/^```json\s*|\s*```$/', '', trim((string)$analysis));
                    $data = json_decode((string)$cleanJson, true);

                    if (json_last_error() === JSON_ERROR_NONE && is_array($data)) {
                        $meal->setCalories($data['calories'] ?? null);
                        $meal->setSugar($data['sugar'] ?? null);
                        $meal->setProtein($data['protein'] ?? null);

                        $aiText = $data['analysis'] ?? '';
                        if (!empty($data['stress_link'])) {
                            $aiText .= "\n\n**Stress Insight:** " . $data['stress_link'];
                        }
                        $meal->setAiAnalysis($aiText);
                    } else {
                        $meal->setAiAnalysis($analysis);
                    }
                } catch (FileException $e) {
                    $this->addFlash('error', 'Image upload failed: ' . $e->getMessage());
                }
            }

            $this->entityManager->persist($meal);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_meal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/gestionwellbeingbackoffice/meal/new.html.twig', [
            'meal' => $meal,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Meal $meal): Response
    {
        return $this->render('admin/gestionwellbeingbackoffice/meal/show.html.twig', [
            'meal' => $meal,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Meal $meal, EntityManagerInterface $entityManager, QwenService $qwenService): Response
    {
        $form = $this->createForm(MealType::class, $meal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageName')->getData();

            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $targetDir = $this->getParameter('meal_images_directory');
                if (!is_string($targetDir)) {
                    throw new \RuntimeException('meal_images_directory parameter must be a string.');
                }

                try {
                    $imageFile->move($targetDir, $newFilename);
                    $meal->setImageName($newFilename);

                    $fullPath = (string)$targetDir . '/' . $newFilename;
                    $analysis = $qwenService->analyzeMeal($fullPath, (string)$meal->getDescription());

                    // Parse JSON response
                    $cleanJson = preg_replace('/^```json\s*|\s*```$/', '', trim((string)$analysis));
                    $data = json_decode((string)$cleanJson, true);

                    if (json_last_error() === JSON_ERROR_NONE && is_array($data)) {
                        $meal->setCalories($data['calories'] ?? null);
                        $meal->setSugar($data['sugar'] ?? null);
                        $meal->setProtein($data['protein'] ?? null);

                        $aiText = $data['analysis'] ?? '';
                        if (!empty($data['stress_link'])) {
                            $aiText .= "\n\n**Stress Insight:** " . $data['stress_link'];
                        }
                        $meal->setAiAnalysis($aiText);
                    } else {
                        $meal->setAiAnalysis($analysis);
                    }
                } catch (FileException $e) {
                    $this->addFlash('error', 'Image upload failed: ' . $e->getMessage());
                }
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_meal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/gestionwellbeingbackoffice/meal/edit.html.twig', [
            'meal' => $meal,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Meal $meal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $meal->getId(), (string)$request->request->get('_token', ''))) {
            $entityManager->remove($meal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_meal_index', [], Response::HTTP_SEE_OTHER);
    }
}
