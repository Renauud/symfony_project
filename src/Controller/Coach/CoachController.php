<?php

namespace App\Controller\Coach;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CoachController extends AbstractController{
    #[Route('/coach', name:'app_coach')]

    function base(){
        return $this->render('coach.html.twig', ['']);
    }
}