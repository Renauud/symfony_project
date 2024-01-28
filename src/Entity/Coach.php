<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoachRepository::class)]
class Coach{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length:255)]
    private string $nom = "";

    #[ORM\Column(length:255)]
    private string $prenom = "";

    #[ORM\Column(length:255)]
    private string $pseudo = "";


    #[ORM\Column(length:255)]
    private string $appartientA = "";

    #[ORM\Column]
    private int $experience = 0;

    #[ORM\Column]
    private int $age = 0;

    #[ORM\OneToMany(targetEntity: Joueur::class, inversedBy:'joueurs')]
    private $coach;

    #[ORM\OneToMany(targetEntity: AssistantCoach::class, inversedBy:'coach')]
    private $assistantCoach;

    #[ORM\OneToOne(targetEntity: Equipe::class, inversedBy:'coach')]
    private $equipe;

    public function getNom(){
        return $this->nom;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo){
        $this->pseudo = $pseudo;
    }

    public function getAppartientA(){
        return $this->appartientA;
    }
    public function setAppartientA(string $nouvelleEquipe){
        $this->appartientA = $nouvelleEquipe;
    }
    public function getExperience(){
        return $this->experience;
    }
    public function setExeprience(int $experience){
        $this->experience = $experience;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge(int $age){
        $this->age=$age;
    }
}