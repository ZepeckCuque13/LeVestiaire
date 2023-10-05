<?php

namespace App\DataFixtures;


use App\Entity\MonVestiaire;
use App\Entity\Maillot;
use App\Entity\Member;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private const LOUIS_VESTI_1 = 'Louis vestiaire 1';
    private const SABRI_VESTI_1 = 'Sabri vestiaire 1';
    
    
    private static function monVestiaireDataGenerator()
    {
        yield ["Maillots à l'ancienne Louis", self::LOUIS_VESTI_1];
        yield ["Maillots Classiques de Sabri", self::SABRI_VESTI_1];
    }
    
    
    
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $member=new Member();
        $member->setDescription('Adam');
        $member->setNom('adam');
        
        $manager->persist($member);
        
        
        
        
        
        foreach (self::monVestiaireDataGenerator() as [$description] ) {
            $monVestiaire = new MonVestiaire();
            $monVestiaire->setDescription($description);
            $monVestiaire->setMember($member);
            
            $manager->persist($monVestiaire);
            
            $Maillot1 = new Maillot();
            $Maillot1->setEquipe('Olympique de Marseille');
            $Maillot1->setAnnée('2015/2016');
            $Maillot1->setVestiaire($monVestiaire);
            
            $Maillot2 = new Maillot();
            $Maillot2->setEquipe('Paris Saint Germain');
            $Maillot2->setAnnée('2014/2015');
            $Maillot2->setVestiaire($monVestiaire);
            
            $manager->persist($Maillot1);
            $manager->persist($Maillot2);
    }
    }
}

    

