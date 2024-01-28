<?php

namespace App\Controller\AssistantCoach;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AssistantCoachController extends AbstractController{
    #[Route('/assistant', name:'app_assistant')]

    function base(){
        return $this->render('assist_coach.html.twig', ['']);
    }
}