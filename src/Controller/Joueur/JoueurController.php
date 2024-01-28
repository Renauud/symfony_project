<?php

namespace App\Controller\Joueur;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JoueurController extends AbstractController{
    #[Route('/joueur', name:'app_joueur')]

    function base(){
        return $this->render('joueur.html.twig', ['']);
    }
}