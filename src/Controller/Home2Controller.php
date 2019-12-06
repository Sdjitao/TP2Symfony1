<?php

namespace App\Controller;

use App\Entity\Ecoles;
use App\Entity\Theses;
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
        $EcolesRepository = $entityManager ->getRepository(Ecoles :: class);
        $ecole = $EcolesRepository ->findAll();


        return $this->render('home2/index.html.twig', [
            'ecole' => $EcolesRepository->findAll(),
        ]);
    }
}
