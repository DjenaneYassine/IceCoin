<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ComingSoonController extends AbstractController
{
    #[Route('/coming/soon', name: 'app_coming_soon')]
    public function index(): Response
    {
        return $this->render('coming_soon/index.html.twig', [
            'controller_name' => 'ComingSoonController',
        ]);
    }
}
