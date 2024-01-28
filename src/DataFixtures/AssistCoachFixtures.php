<?php

namespace App\DataFixtures;

use App\Entity\AssistantCoach;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
 
class AssistCoachFixtures extends Fixture
{
    private const ASSISTCOACH_REFERENCE = 'AssistCoach';
    
    public function load(ObjectManager $manager)
    {
        $pseudoAssistCoachs = [
            'AssistCoach1',
            'AssistCoach2',
            'AssistCoach3',
            'AssistCoach4',
            'AssistCoach5',
        ];
 
        foreach ($pseudoAssistCoachs as $key => $pseudoAssistCoach) {
            $assistCoach = new AssistantCoach();
            $assistCoach->setNom($pseudoAssistCoach);
            $manager->persist($assistCoach);
            $this->addReference(self::ASSISTCOACH_REFERENCE . '_' . $key, $assistCoach);
        }
 
        $manager->flush();
    }
}
