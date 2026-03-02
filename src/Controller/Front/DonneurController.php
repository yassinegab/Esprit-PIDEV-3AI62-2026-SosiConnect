<?php

namespace App\Controller\Front;

use App\Entity\Donneur;
use App\Service\QrCodeService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/don')]
class DonneurController extends AbstractController
{
    #[Route('/inscription', name: 'donneur_inscription')]
    public function inscription(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {

            $nom = trim($request->request->get('nom'));
            $prenom = trim($request->request->get('prenom'));
            $age = (int) $request->request->get('age');
            $telephone = trim($request->request->get('telephone'));
            $groupe = $request->request->get('groupe_sanguin');

            $groupesAutorises = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];

            if (strlen($nom) < 2 || strlen($prenom) < 2) {
                $this->addFlash('error', 'Nom ou prénom invalide');
                return $this->redirectToRoute('donneur_inscription');
            }

            if ($age < 18 || $age > 65) {
                $this->addFlash('error', 'Âge invalide pour le don');
                return $this->redirectToRoute('donneur_inscription');
            }

            if (!preg_match('/^[0-9]{8,15}$/', $telephone)) {
                $this->addFlash('error', 'Téléphone invalide');
                return $this->redirectToRoute('donneur_inscription');
            }

            if (!in_array($groupe, $groupesAutorises)) {
                $this->addFlash('error', 'Groupe sanguin invalide');
                return $this->redirectToRoute('donneur_inscription');
            }

            $donneur = new Donneur();
            $donneur
                ->setNom($nom)
                ->setPrenom($prenom)
                ->setAge($age)
                ->setTelephone($telephone)
                ->setGroupeSanguin($groupe)
                ->setDisponible(true);

            // Handle profile image upload
            $profileImage = $request->files->get('profile_image');
            if ($profileImage) {
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                $maxSize = 5 * 1024 * 1024; // 5MB

                if (!in_array($profileImage->getMimeType(), $allowedTypes)) {
                    $this->addFlash('error', 'Format d\'image invalide. Utilisez JPG, PNG ou GIF.');
                    return $this->redirectToRoute('donneur_inscription');
                }

                if ($profileImage->getSize() > $maxSize) {
                    $this->addFlash('error', 'L\'image est trop volumineuse. Maximum 5MB.');
                    return $this->redirectToRoute('donneur_inscription');
                }

                $donneur->setProfileImageFile($profileImage);
            }

            $em->persist($donneur);
            $em->flush();

            $this->addFlash('success', '🩸 Inscription réussie. Merci pour votre engagement.');

            return $this->redirectToRoute('donneur_inscription');
        }

        return $this->render('front/don/inscription.html.twig');
    }

    #[Route('/donneur/{id}', name: 'donneur_public')]
    public function publicProfile(Donneur $donneur, QrCodeService $qrCodeService): Response
    {
        $qrCode = $qrCodeService->generateDonorCardQr($donneur->getId());

        return $this->render('front/don/donneur_public.html.twig', [
            'donneur' => $donneur,
            'qr_code' => $qrCode,
        ]);
    }
}
