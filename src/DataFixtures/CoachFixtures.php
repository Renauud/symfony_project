<?php

namespace App\DataFixtures;

use App\Entity\Coach;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
 
class CoachFixtures extends Fixture
{
    private const COACH_REFERENCE = 'Coach';
    
    public function load(ObjectManager $manager)
    {
        $pseudoCoachs = [
            'Coach1',
            'Coach2',
            'Coach3',
            'Coach4',
            'Coach5',
        ];
 
        foreach ($pseudoCoachs as $key => $pseudoCoach) {
            $coach = new Coach();
            $coach->setNom($pseudoCoach);
            $manager->persist($coach);
            $this->addReference(self::COACH_REFERENCE . '_' . $key, $coach);
        }
 
        $manager->flush();
    }
}
