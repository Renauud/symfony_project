<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipeRepository::class)]
class Equipe{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length:255)]
    private string $nom;

    #[ORM\OneToOne(targetEntity: Coach::class, inversedBy:'equipe')]
    private $coach;

    #[ORM\OneToMany(targetEntity: Joueur::class, inversedBy:'equipe')]
    private $joueur;

    #[ORM\OneToOne(targetEntity:Image::class, inversedBy:'equipe')]
    private $image;
    
    public function getNom(){
        return $this->nom;
    }
    public function setNom(string $nom){
        $this->nom = $nom;
    }


}