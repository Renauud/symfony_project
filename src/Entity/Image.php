<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\Column(length: 255)]
    private ?string $altText = null;

    public function getId(): int{
        return $this->id;
    }
    #[ORM\OneToOne(targetEntity:Equipe::class, mappedBy:'image')]
    private $equipe;
    
    public function getUrl(): string{
        return $this->url;
    }
    public function setUrl(string $url){
        $this->url = $url;
    }
    public function getAltText(): string{
        return $this->altText;
    }
    public function setAltText(string $altText){
        $this->altText = $altText;
    }
    
}