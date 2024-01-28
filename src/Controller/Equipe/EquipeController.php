<?php

namespace App\Controller\Equipe;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController{
    #[Route('/equipe', name:'app_equipe')]

    function base(){
        return $this->render('equipe.html.twig', ['']);
    }
}