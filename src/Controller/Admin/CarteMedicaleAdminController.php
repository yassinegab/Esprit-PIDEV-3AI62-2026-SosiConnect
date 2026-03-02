<?php

namespace App\Controller\Admin;

use App\Entity\LieuMedical;
use App\Repository\LieuMedicalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/aide/carte-medicale')]
class CarteMedicaleAdminController extends AbstractController
{

    #[Route('', name: 'admin_carte_medicale')]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        LieuMedicalRepository $repo
    ): Response
    {

        if ($request->isMethod('POST'))
        {

            $lieu = new LieuMedical();

            $lieu->setNom(
                $request->request->get('nom')
            );

            $lieu->setCategorie(
                $request->request->get('categorie')
            );

            $lieu->setAdresse(
                $request->request->get('adresse')
            );

            $lieu->setTelephone(
                $request->request->get('telephone')
            );

            $lieu->setLatitude(
                (float)$request->request->get('latitude')
            );

            $lieu->setLongitude(
                (float)$request->request->get('longitude')
            );


            $em->persist($lieu);
            $em->flush();

            $this->addFlash('success','Lieu ajouté');

            return $this->redirectToRoute('admin_carte_medicale');
        }


        return $this->render('admin/aide/carte-medicale.html.twig',[

            'lieux'=>$repo->findBy([],['dateCreation'=>'DESC'])

        ]);

    }


    #[Route('/delete/{id}', name:'admin_lieu_delete')]
    public function delete(
        LieuMedical $lieu,
        EntityManagerInterface $em
    ): Response
    {

        $em->remove($lieu);
        $em->flush();

        return $this->redirectToRoute('admin_carte_medicale');

    }

}
