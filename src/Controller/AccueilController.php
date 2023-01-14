<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="app_accueil_ctrl")
     * @Route("/")
     */
    public function index(): Response
    {
        return $this->render('pages/accueil.html.twig');
    }
}
