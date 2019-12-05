<?php

namespace App\Controller;
use App\Entity\Ecoles;
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
        $EcolesRepository = $entityManager ->getRepository(Ecoles :: class);
        $ecole = $EcolesRepository ->findAll();

        if (empty($ecole)) {

            $ecole0= new Ecoles();
            $ecole0 ->setNom('université de Montpellier');
            $ecole0 ->setLien('https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwij-PbokpjmAhVrx4UKHebCDF4QFjAAegQICRAC&url=https%3A%2F%2Fwww.umontpellier.fr%2F&usg=AOvVaw3opzCzr2kpEMTbVQGZkDDp');
            $entityManager ->persist($ecole0);

            $ecole1= new Ecoles();
            $ecole1 ->setNom('université de Montpellier1');
            $ecole1 ->setLien('https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwij-PbokpjmAhVrx4UKHebCDF4QFjAAegQICRAC&url=https%3A%2F%2Fwww.umontpellier.fr%2F&usg=AOvVaw3opzCzr2kpEMTbVQGZkDDp');
            $entityManager ->persist($ecole1);


            $ecole2= new Ecoles();
            $ecole2 ->setNom('université de Montpellier2');
            $ecole2 ->setLien('https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwij-PbokpjmAhVrx4UKHebCDF4QFjAAegQICRAC&url=https%3A%2F%2Fwww.umontpellier.fr%2F&usg=AOvVaw3opzCzr2kpEMTbVQGZkDDp');
            $entityManager ->persist($ecole2);

            $these0 = new Theses();
            $these0 ->setTitle('rotage mobile');
            $these0 ->setPhrase('Méthodes approximative au problème de routage de véhicule pour une gestion de flotte de drones');
            $these0 ->setContact('univ1@gmail.com');
            $these0 ->setEcoles($ecole0);
            
            $entityManager ->persist($these0);

            $these1 = new Theses();
            $these1 ->setTitle('systeme embarqué');
            $these1 ->setPhrase('Système embarqué de fusion multi-capteurs pour la détection et le suivi obstacles statiques et dynamiques');
            $these1 ->setContact('univ2@gmail.com');
            $these1 ->setEcoles($ecole0);
            $entityManager ->persist($these1);

            $these2 = new Theses();
            $these2 ->setTitle('chaine logistique');
            $these2 ->setPhrase('Modèles mathématiques et heuristiques pour l’optimisation des chaînes logistiques portuaire du vrac');
            $these2 ->setContact('ecolepolytechnique@gmail.com');
            $these2 ->setEcoles($ecole0);
            $entityManager ->persist($these2);


            $these4 = new Theses();
            $these4 ->setTitle('rotage mobile');
            $these4 ->setPhrase('Méthodes approximative au problème de routage de véhicule pour une gestion de flotte de drones');
            $these4 ->setContact('univ1@gmail.com');
            $these4 ->setEcoles($ecole2);
            $entityManager ->persist($these4);


            $entityManager ->flush();
        }
        return $this->render('home/index.html.twig', [
            'ecole' => $EcolesRepository->findAll(),
        ]);
    }
}
