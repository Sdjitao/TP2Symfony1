<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Infopersonel;

class InfopersonelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        if (empty($info)) {

            $info0 = new Infopersonel();
            $info0 ->setNom('SALIFOU DJITAO');
            $info0  ->setPrenom('Mohamed');
            $info0 ->setAge('25');
            $info0 ->setEmail('msdjitao23@gmail.com');
            $info0  ->setTel('0760215274');
            $info0 ->setPermis('permis B');
            $info0 ->setAdress('266 Avenu Abbe Paul Parguel');
            $manager ->persist($info0);

        $manager->flush();
        }
    }
}
