<?php

namespace App\Controller\Front_office\GestionWellBeing;

use App\Entity\Meal;
use App\Entity\User;
use App\Form\MealType;
use App\Service\QwenService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/user/meal')]
class MealFrontController extends AbstractController
{
    public function __construct()
    {
    }

    /** @return \App\Entity\User|\Symfony\Component\Security\Core\User\UserInterface|null */
    private function getActualUser()
    {
        return $this->getUser();
    }

    #[Route('/new', name: 'user_meal_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, QwenService $qwenService): Response
    {
        $user = $this->getActualUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $meal = new Meal();
        if ($user instanceof User) {
            $meal->setUser($user); // Assign current user
        }

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

                    // AI Analysis
                    $fullPath = $targetDir . '/' . $newFilename;
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

            $entityManager->persist($meal);
            $entityManager->flush();

            return $this->redirectToRoute('user_wellbeing_index');
        }

        return $this->render('meal_front/new.html.twig', [
            'meal' => $meal,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'user_meal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Meal $meal, EntityManagerInterface $entityManager, QwenService $qwenService): Response
    {
        // Security check
        if ($meal->getUser() !== $this->getActualUser()) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(MealType::class, $meal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle image re-upload if needed
            $imageFile = $form->get('imageName')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $targetDir = $this->getParameter('meal_images_directory');
                if (!is_string($targetDir)) {
                    throw new \RuntimeException('meal_images_directory parameter must be a string.');
                }

                $imageFile->move($targetDir, $newFilename);
                $meal->setImageName($newFilename);

                // Re-analyze if image changes
                $fullPath = $targetDir . '/' . $newFilename;
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
            }

            $entityManager->flush();

            return $this->redirectToRoute('user_wellbeing_index');
        }

        return $this->render('meal_front/edit.html.twig', [
            'meal' => $meal,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'user_meal_delete', methods: ['POST'])]
    public function delete(Request $request, Meal $meal, EntityManagerInterface $entityManager): Response
    {
        if ($meal->getUser() !== $this->getActualUser()) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete' . $meal->getId(), (string)$request->request->get('_token', ''))) {
            $entityManager->remove($meal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_wellbeing_index');
    }

    #[Route('/{id}', name: 'user_meal_show', methods: ['GET'])]
    public function show(Meal $meal): Response
    {
        if ($meal->getUser() !== $this->getActualUser()) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('meal_front/show.html.twig', [
            'meal' => $meal,
        ]);
    }
}
