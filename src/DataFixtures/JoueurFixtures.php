<?php

namespace App\DataFixtures;
 
use App\Entity\Joueur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
 
class JoueurFixtures extends Fixture
{
    private const JOUEUR_REFERENCE = 'Joueur';
    
    public function load(ObjectManager $manager)
    {
        $pseudosJoueurs = [
            'Vetheo',
            'Craps',
            'Faker',
            'Czekolad',
            'DoinB',
        ];
 
        foreach ($pseudosJoueurs as $key => $pseudoJoueur) {
            $joueur = new Joueur();
            $joueur->setPseudo($pseudoJoueur);
            $manager->persist($joueur);
            $this->addReference(self::JOUEUR_REFERENCE . '_' . $key, $joueur);
        }
 
        $manager->flush();
    }
}
