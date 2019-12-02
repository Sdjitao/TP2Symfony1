<?php

namespace App\Controller;
use App\Entity\Theses;
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
        $ThesesRepository = $entityManager ->getRepository(Theses :: class);
        $these = $ThesesRepository ->findAll();

        if (empty($these)) {
            $these0 = new Theses();
            $these0 ->setTitle('rotage mobile');
            $these0 ->setPhrase('Méthodes approximative au problème de routage de véhicule pour une gestion de flotte de drones');
            $these0 ->setContact('univ1@gmail.com');
            $entityManager ->persist($these0);

            $these1 = new Theses();
            $these1 ->setTitle('systeme embarqué');
            $these1 ->setPhrase('Système embarqué de fusion multi-capteurs pour la détection et le suivi obstacles statiques et dynamiques');
            $these1 ->setContact('univ2@gmail.com');
            $entityManager ->persist($these1);

            $these2 = new Theses();
            $these2 ->setTitle('chaine logistique');
            $these2 ->setPhrase('Modèles mathématiques et heuristiques pour l’optimisation des chaînes logistiques portuaire du vrac');
            $these2 ->setContact('ecolepolytechnique@gmail.com');
            $entityManager ->persist($these2);
            $entityManager ->flush();
        }
        return $this->render('home/index.html.twig', [
            'these' => $ThesesRepository->findAll(),
        ]);
    }
}
