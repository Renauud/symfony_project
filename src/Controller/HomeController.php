<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{
    #[Route('/home', name:'app_home')]

    function base(){
        return $this->render('home.html.twig', ['']);
    }
}