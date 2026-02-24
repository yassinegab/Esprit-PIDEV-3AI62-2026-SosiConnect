<?php

namespace App\Controller\Front_office;

use App\Form\Filter\HopitalFilterType;
use App\Form\Filter\RendezVousFilterType;
use App\Repository\UserRepository;
use App\Repository\HopitalRepository;
use App\Repository\RendezVousRepository;
use Knp\Component\Pager\PaginatorInterface;
use Spiriit\Bundle\FormFilterBundle\Filter\FilterBuilderUpdaterInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceHomeController extends AbstractController
{
    #[Route('/services', name: 'app_service_home')]
    public function index(
        Request $request,
        UserRepository $userRepository,
        HopitalRepository $hopitalRepository,
        RendezVousRepository $rendezVousRepository,
        PaginatorInterface $paginator,
        FilterBuilderUpdaterInterface $filterBuilderUpdater
    ): Response {

        $filter = $request->query->get('filter', 'all');

        // ============================================================
        // ✅ HÔPITAUX
        // ============================================================
        $paginationHopitaux = null;
        $formHopital = null;

        if ($filter === 'hopital' || $filter === 'all') {
            $formHopital = $this->createForm(HopitalFilterType::class);
            $formHopital->handleRequest($request);

            $qbHopitaux = $hopitalRepository->createQueryBuilder('h');

            // ✅ SpiriitFormFilterBundle applique les filtres automatiques
            if ($formHopital->isSubmitted()) {
                $filterBuilderUpdater->addFilterConditions($formHopital, $qbHopitaux);
            }

            // ✅ Récupération MANUELLE des paramètres capacite_min/max depuis l'URL
            $capaciteMin = $request->query->get('capacite_min');
            $capaciteMax = $request->query->get('capacite_max');

            if ($capaciteMin !== null && $capaciteMin !== '') {
                $qbHopitaux->andWhere('h.capacite >= :capacite_min')
                           ->setParameter('capacite_min', (int)$capaciteMin);
            }

            if ($capaciteMax !== null && $capaciteMax !== '') {
                $qbHopitaux->andWhere('h.capacite <= :capacite_max')
                           ->setParameter('capacite_max', (int)$capaciteMax);
            }

            // ✅ KnpPaginatorBundle
            $paginationHopitaux = $paginator->paginate(
                $qbHopitaux,
                $request->query->getInt('page_hopital', 1),
                2,
                ['pageParameterName' => 'page_hopital']
            );
        }

        // ============================================================
        // ✅ RENDEZ-VOUS
        // ============================================================
        $paginationRdv = null;
        $formRdv = null;

        if ($filter === 'rdv' || $filter === 'all') {
            $formRdv = $this->createForm(RendezVousFilterType::class);
            $formRdv->handleRequest($request);

            $qbRdv = $rendezVousRepository->createQueryBuilder('r')
                ->leftJoin('r.patient', 'p')
                ->leftJoin('r.medecin', 'm')
                ->leftJoin('r.hopital', 'h')
                ->addSelect('p', 'm', 'h')
                ->orderBy('r.dateRendezVous', 'DESC');

            // ✅ SpiriitFormFilterBundle applique les filtres automatiques
            if ($formRdv->isSubmitted()) {
                $filterBuilderUpdater->addFilterConditions($formRdv, $qbRdv);
            }

            // ✅ Récupération MANUELLE des paramètres scoreAI_min/max depuis l'URL
            $scoreMin = $request->query->get('scoreAI_min');
            $scoreMax = $request->query->get('scoreAI_max');

            if ($scoreMin !== null && $scoreMin !== '') {
                $qbRdv->andWhere('r.scoreAI >= :score_min')
                      ->setParameter('score_min', (float)$scoreMin);
            }

            if ($scoreMax !== null && $scoreMax !== '') {
                $qbRdv->andWhere('r.scoreAI <= :score_max')
                      ->setParameter('score_max', (float)$scoreMax);
            }

            // ✅ KnpPaginatorBundle
            $paginationRdv = $paginator->paginate(
                $qbRdv,
                $request->query->getInt('page_rdv', 1),
                2,
                ['pageParameterName' => 'page_rdv']
            );
        }

        return $this->render('Front_office/service_home/index.html.twig', [
            'form_hopital'        => $formHopital?->createView(),
            'form_rdv'            => $formRdv?->createView(),
            'pagination_hopitaux' => $paginationHopitaux,
            'pagination_rdv'      => $paginationRdv,
            'medecin_count'       => $userRepository->countMedecins(),
            'patient_count'       => $userRepository->countPatients(),
            'hopital_count'       => $hopitalRepository->count([]),
            'filter'              => $filter,
            'total_hopitaux'      => $paginationHopitaux?->getTotalItemCount() ?? 0,
            'total_rdv'           => $paginationRdv?->getTotalItemCount() ?? 0,
            // ✅ Passer les valeurs au template pour pré-remplir les champs
            'capacite_min'        => $request->query->get('capacite_min', ''),
            'capacite_max'        => $request->query->get('capacite_max', ''),
            'scoreAI_min'         => $request->query->get('scoreAI_min', ''),
            'scoreAI_max'         => $request->query->get('scoreAI_max', ''),
        ]);
    }
}