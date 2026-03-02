<?php
namespace App\Controller;

use App\Repository\CycleRepository;
use App\Service\HormonalPhaseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CyclePhasePageController extends AbstractController
{
    #[Route('/phases', name: 'cycle_phases')]
    public function index()
    {
        return $this->render('cycle/phases.html.twig');
    }

    #[Route('/phases/events', name: 'cycle_phases_events')]
    public function events(CycleRepository $repo, HormonalPhaseService $phaseService): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse([]);
        }

        $cycles = $repo->findBy(['user' => $user], ['dateDebutM' => 'ASC']);
        $events = [];

        foreach ($cycles as $cycle) {
            $cycleLength = 28; // par défaut
            $periods = $phaseService->generateCyclePhases($cycle); // toutes les phases
            
            // On récupère le jour de l'ovulation
            foreach ($periods as $phase) {
                if ($phase['title'] === 'Ovulation') {
                    $ovulationDate = $phase['start'];
                    break;
                }
            }

            // Créer période fertile : 5 jours avant et 5 jours après ovulation
            $ovulationDay = new \DateTime($ovulationDate);
            $startFertile = (clone $ovulationDay)->modify('-5 days');
            $endFertile = (clone $ovulationDay)->modify('+5 days');

            $current = clone $startFertile;
            while ($current <= $endFertile) {
                $events[] = [
                    'start' => $current->format('Y-m-d'),
                    'title' => '', // pas de titre
                    'allDay' => true,
                    'color' => ($current->format('Y-m-d') === $ovulationDay->format('Y-m-d')) ? '#90ee90' : '#b3f0b3',
                    'display' => 'background',
                    'extendedProps' => [
                        'emoji' => ($current->format('Y-m-d') === $ovulationDay->format('Y-m-d')) ? '🌸' : ''
                    ]
                ];
                $current->modify('+1 day');
            }
        }

        return new JsonResponse($events);
    }
}