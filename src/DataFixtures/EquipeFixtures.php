<?php

namespace App\DataFixtures;

use App\Entity\Equipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
 
class EquipeFixtures extends Fixture
{
    private const EQUIPE_REFERENCE = 'Equipe';
    
    public function load(ObjectManager $manager)
    {
        $nomEquipes = [
            'Fnatic',
            'T1',
            'G2',
            'JDG',
            'FPX',
        ];
 
        foreach ($nomEquipes as $key => $nomsEquipes) {
            $equipe = new Equipe();
            $equipe->setNom($nomsEquipes);
            $manager->persist($equipe);
            $this->addReference(self::EQUIPE_REFERENCE . '_' . $key, $equipe);
        }
 
        $manager->flush();
    }
}
