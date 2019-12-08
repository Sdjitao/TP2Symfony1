<?php

namespace App\Controller;

use App\Entity\Universite;
use App\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Home2Controller extends AbstractController
{
    /**
     * @Route("/home2", name="home2")
     */
    public function index()
    {
        $entityManager = $this ->getDoctrine() ->getManager();
        $UniversiteRepository = $entityManager ->getRepository(Universite :: class);
        $univ = $UniversiteRepository ->findAll();
    
        return $this->render('home2/index.html.twig', [
            'universite' => $UniversiteRepository->findAll(),
        ]);
    }
}
