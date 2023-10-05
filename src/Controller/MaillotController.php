<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaillotController extends AbstractController
{
    #[Route('/maillot', name: 'app_maillot')]
    public function index(): Response
    {
        return $this->render('maillot/index.html.twig', [
            'controller_name' => 'MaillotController',
        ]);
    }
}
