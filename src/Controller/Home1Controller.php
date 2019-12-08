<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Infopersonel;

class Home1Controller extends AbstractController
{
    /**
     * @Route("/home1", name="home1")
     */
    public function index()
    {
        $entityManager = $this ->getDoctrine() ->getManager();
        $InfopersonelRepository = $entityManager ->getRepository(Infopersonel :: class);
        $info = $InfopersonelRepository ->findAll();
        
        return $this->render('home1/index.html.twig', [
            'infopersonel' => $InfopersonelRepository->findAll(),
        ]);
    }
}
