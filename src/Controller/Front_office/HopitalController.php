<?php

namespace App\Controller\Front_office;

use App\Entity\Hopital;
use App\Repository\HopitalRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/hopitaux')]
class HopitalController extends AbstractController
{
    /**
     * ✅ Liste des hôpitaux avec carte Google Maps
     * Route corrigée — suppression du doublon /hopitaux/hopitaux
     * ✅ BUNDLE KnpPaginatorBundle — pagination ajoutée
     */
    #[Route('', name: 'frontoffice_hopitaux', methods: ['GET'])]
    public function index(
        Request $request,
        HopitalRepository $hopitalRepository,
        PaginatorInterface $paginator          // ✅ NOUVEAU — KnpPaginatorBundle
    ): Response {
        $hopitaux = $hopitalRepository->findAll();

        // ✅ BUNDLE KnpPaginator — paginer la liste des hôpitaux
        $pagination = $paginator->paginate(
            $hopitalRepository->createQueryBuilderAll(),  // QueryBuilder pour KnpPaginator
            $request->query->getInt('page', 1),
            2   // 2 hôpitaux par page (tu peux augmenter à 6, 9, 12...)
        );

        // Votre code Google Maps — INCHANGÉ
        $hopitauxGeo = [];
        foreach ($hopitaux as $h) {
            if ($h->getLatitude() && $h->getLongitude()) {
                $hopitauxGeo[] = [
                    'id'       => $h->getId(),
                    'nom'      => $h->getNom(),
                    'adresse'  => $h->getAdresse(),
                    'tel'      => $h->getTel(),
                    'urgences' => $h->isServiceUrgenceDispo(),
                    'capacite' => $h->getCapacite(),
                    'lat'      => $h->getLatitude(),
                    'lng'      => $h->getLongitude(),
                    'url'      => $this->generateUrl('app_hopital_show', ['id' => $h->getId()]),
                ];
            }
        }

        return $this->render('Front_office/hopital/index.html.twig', [
            'hopitaux'     => $hopitaux,       // conservé — utilisé par Google Maps
            'hopitaux_geo' => $hopitauxGeo,    // conservé — utilisé par Google Maps
            'geo_count'    => count($hopitauxGeo),
            'pagination'   => $pagination,     // ✅ pour la pagination dans le template
        ]);
    }

    /**
     * ✅ Détail hôpital avec carte Google Maps centrée sur l'établissement
     */
    #[Route('/{id}', name: 'app_hopital_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(Hopital $hopital): Response
    {
        return $this->render('Front_office/hopital/show.html.twig', [
            'hopital' => $hopital,
            // ✅ Passer la clé ORS depuis les paramètres Symfony
            'ors_api_key' => $this->getParameter('app.ors_api_key'),
        ]);
    }
}