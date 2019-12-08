<?php

namespace App\Controller;


use App\Entity\Universite;
use App\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $entityManager = $this ->getDoctrine() ->getManager();
        $UniversiteRepository = $entityManager ->getRepository(Universite :: class);
        $univ = $UniversiteRepository ->findAll();

        return $this->render('home/index.html.twig', [
            'universite' => $UniversiteRepository->findAll(),
        ]);
    }

}

