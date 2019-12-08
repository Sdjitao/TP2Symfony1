<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Universite;
use App\Entity\Projet;
use App\Entity\Formation;

class UniversiteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);


        if (empty($univ)) {

            $univ0= new Universite();
            $univ0 ->setNom('fac de science Montpellier');
            $univ0 ->setLien('https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwij-PbokpjmAhVrx4UKHebCDF4QFjAAegQICRAC&url=https%3A%2F%2Fwww.umontpellier.fr%2F&usg=AOvVaw3opzCzr2kpEMTbVQGZkDDp');
            $manager ->persist($univ0);

            $univ1= new Universite();
            $univ1 ->setNom('université ain temouchent ');
            $univ1->setLien('https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwizmJ3_uKbmAhXvx4UKHUg4DjwQFjAAegQIFBAC&url=http%3A%2F%2Fwww.cuniv-aintemouchent.dz%2Findex.php%2Ffr%2F&usg=AOvVaw1yXU5doOPCL3GJCpsZ3JAs');
            $manager ->persist($univ1);

            $pro0 = new Projet();
            $pro0  ->setTitre('Projet1-Symfony');
            $pro0  ->setDescrip(' mini site de presentation de liste de theses proposé par des ecoles doctorales');
            $pro0  ->setLien('https://github.com/Sdjitao/TP2Symfony1');
            $pro0  ->setuniversite($univ0);
            $manager ->persist($pro0);


            $pro1 = new Projet();
            $pro1   ->setTitre('Projet Java JEE');
            $pro1   ->setDescrip('Presentation des monuments de la france dans differentes villes du pays');
            $pro1  ->setLien('https://github.com/Sdjitao/TP2Symfony1');
            $pro1   ->setuniversite($univ0);
            $manager ->persist($pro1);


            $pro2 = new Projet();
            $pro2  ->setTitre('Installation Electrique');
            $pro2  ->setDescrip('Dimensionement de centre electrique pour une ville');
            $pro2 ->setLien('https://github.com/Sdjitao/TP2Symfony1');
            $pro2  ->setuniversite($univ1);
            $manager ->persist($pro2);


            $forma0 = new Formation();
            $forma0 ->setNom('Informatique pour les sciences');
            $forma0 ->setNiveau('Master2');
            $forma0 ->setAnnee('2019-2020');
            $forma0 ->setUniversite($univ0);
            $manager ->persist($forma0);

            $forma1 = new Formation();
            $forma1 ->setNom('Informatique pour les sciences');
            $forma1 ->setNiveau('Master1');
            $forma1->setAnnee('2018-2019');
            $forma1 ->setUniversite($univ0);
            $manager ->persist($forma1);


            $forma2 = new Formation();
            $forma2 ->setNom('Electronique Electrotechnique Automatique');
            $forma2 ->setNiveau('Master1');
            $forma2 ->setAnnee('2017-2018');
            $forma2->setUniversite($univ0);
            $manager ->persist($forma2);


            $forma3 = new Formation();
            $forma3 ->setNom('Electronique Electrotechnique Automatique');
            $forma3 ->setNiveau('Licence');
            $forma3->setAnnee('2014-2017');
            $forma3 ->setUniversite($univ1);
            $manager ->persist($forma3);

           


            
            

        $manager->flush();
        }
    }
}
