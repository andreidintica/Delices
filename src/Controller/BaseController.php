<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

    #[Route('/ajout-bonbon', name: 'ajout_bonbon')]
    public function ajout(): Response
    {
        return $this->render('bonbon/ajout.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

    #[Route('/liste-typebonbon', name: 'liste_typebonbon')]
    public function liste(): Response
    {

        $typesBonbon = [
            ['id' => 1, 'designation' => 'Doux'],
            ['id' => 2, 'designation' => 'Piquant'],
            ['id' => 3, 'designation' => 'Acidulé'],
        ];

        return $this->render('bonbon/liste.html.twig', [
            'typesBonbon' => $typesBonbon,
        ]);
    }
}