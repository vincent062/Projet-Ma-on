<?php

namespace App\DataFixtures;

use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i=0; $i < 10; $i++) { 
          $s = new Service();
        $s->setNom('service - '.$i);
        $s->setDescriptions('desc1 - '.$i);
        $s->setImages('img1 - ' .$i);
        $manager->persist($s);  # code...
        }
        

       













        $manager->flush();
    }
}
