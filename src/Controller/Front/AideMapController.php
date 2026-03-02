<?php

namespace App\Controller\Front;

use App\Entity\LieuMedical;
use App\Entity\LieuMedicalReview;
use App\Repository\LieuMedicalRepository;
use App\Repository\LieuMedicalReviewRepository;
use App\Service\QrCodeService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/aide')]
class AideMapController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly ValidatorInterface $validator
    ) {}

    #[Route('/map', name: 'aide_map')]
    public function index(LieuMedicalRepository $repository, LieuMedicalReviewRepository $reviewRepository): Response
    {
        $lieux = $repository->findAll();
        
        if (empty($lieux)) {
            $lieux = [
                ['id' => 1, 'nom' => 'Dr. Ahmed Ben Ali', 'categorie' => 'Médecin', 'adresse' => 'Rue Habib Bourguiba, Tunis', 'telephone' => '+216 71 123 456', 'latitude' => 36.809, 'longitude' => 10.176],
                ['id' => 2, 'nom' => 'Dr. Salma Trabelsi', 'categorie' => 'Médecin', 'adresse' => 'Avenue Mohammed V, Tunis', 'telephone' => '+216 71 234 567', 'latitude' => 36.803, 'longitude' => 10.185],
                ['id' => 3, 'nom' => 'Pharmacie Centrale', 'categorie' => 'Pharmacie', 'adresse' => 'Place de la Kasbah, Tunis', 'telephone' => '+216 71 345 678', 'latitude' => 36.807, 'longitude' => 10.190],
                ['id' => 4, 'nom' => 'Pharmacie El Manar', 'categorie' => 'Pharmacie', 'adresse' => 'Rue El Manar, Tunis', 'telephone' => '+216 71 456 789', 'latitude' => 36.800, 'longitude' => 10.178],
                ['id' => 5, 'nom' => 'Hôpital Charles Nicolle', 'categorie' => 'Hôpital', 'adresse' => 'Boulevard du 9 Avril 1938, Tunis', 'telephone' => '+216 71 567 890', 'latitude' => 36.812, 'longitude' => 10.182],
                ['id' => 6, 'nom' => 'Clinique Les Oliviers', 'categorie' => 'Clinique', 'adresse' => 'Les Berges du Lac, Tunis', 'telephone' => '+216 71 678 901', 'latitude' => 36.838, 'longitude' => 10.228],
                ['id' => 7, 'nom' => 'Laboratoire Pasteur', 'categorie' => 'Laboratoire', 'adresse' => 'Rue Pasteur, Tunis', 'telephone' => '+216 71 789 012', 'latitude' => 36.805, 'longitude' => 10.170],
                ['id' => 8, 'nom' => 'Service des Urgences', 'categorie' => 'Urgence', 'adresse' => 'Hôpital La Rabta, Tunis', 'telephone' => '+216 71 890 123', 'latitude' => 36.810, 'longitude' => 10.175],
            ];
        } else {
            $lieuxData = [];
            foreach ($lieux as $lieu) {
                $avgRating = $reviewRepository->getAverageRating($lieu);
                $reviewCount = $reviewRepository->getReviewCount($lieu);
                $lieuxData[] = [
                    'id' => $lieu->getId(),
                    'nom' => $lieu->getNom(),
                    'categorie' => $lieu->getCategorie(),
                    'adresse' => $lieu->getAdresse(),
                    'telephone' => $lieu->getTelephone(),
                    'latitude' => $lieu->getLatitude(),
                    'longitude' => $lieu->getLongitude(),
                    'avgRating' => $avgRating,
                    'reviewCount' => $reviewCount,
                ];
            }
            $lieux = $lieuxData;
        }
        
        $categories = [];
        foreach ($lieux as $lieu) {
            $cat = $lieu['categorie'];
            if (!in_array($cat, $categories)) {
                $categories[] = $cat;
            }
        }

        return $this->render('front/aide/map.html.twig', [
            'lieux' => $lieux,
            'categories' => $categories,
        ]);
    }

    #[Route('/map/api', name: 'aide_map_api')]
    public function api(Request $request, LieuMedicalRepository $repository, LieuMedicalReviewRepository $reviewRepository): JsonResponse
    {
        $category = $request->query->get('category');
        $search = $request->query->get('search');

        $qb = $repository->createQueryBuilder('l');

        if ($category) {
            $qb->andWhere('l.categorie = :category')
               ->setParameter('category', $category);
        }

        if ($search) {
            $qb->andWhere('l.nom LIKE :search OR l.adresse LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $lieux = $qb->getQuery()->getResult();

        $data = array_map(function (LieuMedical $lieu) use ($reviewRepository) {
            return [
                'id' => $lieu->getId(),
                'nom' => $lieu->getNom(),
                'categorie' => $lieu->getCategorie(),
                'adresse' => $lieu->getAdresse(),
                'telephone' => $lieu->getTelephone(),
                'latitude' => $lieu->getLatitude(),
                'longitude' => $lieu->getLongitude(),
                'avgRating' => $reviewRepository->getAverageRating($lieu),
                'reviewCount' => $reviewRepository->getReviewCount($lieu),
            ];
        }, $lieux);

        return $this->json($data);
    }

    #[Route('/map/lieu/{id}/reviews', name: 'aide_map_reviews')]
    public function getReviews(LieuMedical $lieu, LieuMedicalReviewRepository $reviewRepository): JsonResponse
    {
        $reviews = $reviewRepository->findByLieu($lieu);
        $avgRating = $reviewRepository->getAverageRating($lieu);
        $reviewCount = $reviewRepository->getReviewCount($lieu);

        $data = [
            'lieu' => [
                'id' => $lieu->getId(),
                'nom' => $lieu->getNom(),
                'avgRating' => $avgRating,
                'reviewCount' => $reviewCount,
            ],
            'reviews' => array_map(function (LieuMedicalReview $review) {
                return [
                    'id' => $review->getId(),
                    'authorName' => $review->getAuthorName(),
                    'rating' => $review->getRating(),
                    'comment' => $review->getComment(),
                    'ratingStars' => $review->getRatingStars(),
                    'createdAt' => $review->getCreatedAt()->format('d/m/Y'),
                    'isVerified' => $review->isVerified(),
                    'helpfulCount' => $review->getHelpfulCount(),
                ];
            }, $reviews),
        ];

        return $this->json($data);
    }

    #[Route('/map/lieu/{id}/review', name: 'aide_map_review_add', methods: ['POST'])]
    public function addReview(LieuMedical $lieu, Request $request): JsonResponse
    {
        $review = new LieuMedicalReview();
        $review->setLieu($lieu);
        $review->setAuthorName($request->request->get('author_name'));
        $review->setAuthorEmail($request->request->get('author_email'));
        $review->setRating((int) $request->request->get('rating', 5));
        $review->setComment($request->request->get('comment'));

        $errors = $this->validator->validate($review);
        
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }
            return $this->json(['success' => false, 'errors' => $errorMessages], 400);
        }

        $this->entityManager->persist($review);
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'review' => [
                'id' => $review->getId(),
                'authorName' => $review->getAuthorName(),
                'rating' => $review->getRating(),
                'comment' => $review->getComment(),
                'ratingStars' => $review->getRatingStars(),
                'createdAt' => $review->getCreatedAt()->format('d/m/Y'),
            ],
        ]);
    }

    #[Route('/map/review/{id}/helpful', name: 'aide_map_review_helpful', methods: ['POST'])]
    public function markReviewHelpful(LieuMedicalReview $review): JsonResponse
    {
        $review->incrementHelpfulCount();
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'helpfulCount' => $review->getHelpfulCount(),
        ]);
    }

    #[Route('/map/lieu/{id}/qr', name: 'aide_map_qr')]
    public function getQrCode(LieuMedical $lieu, QrCodeService $qrCodeService): JsonResponse
    {
        $qrCode = $qrCodeService->generateMedicalLocationQr(
            $lieu->getLatitude(),
            $lieu->getLongitude(),
            $lieu->getNom()
        );

        return $this->json([
            'success' => true,
            'qrCode' => $qrCode,
            'googleMapsUrl' => sprintf(
                'https://www.google.com/maps/dir/?api=1&destination=%f,%f',
                $lieu->getLatitude(),
                $lieu->getLongitude()
            ),
        ]);
    }
}
