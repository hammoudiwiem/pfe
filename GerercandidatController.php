<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GerercandidatController extends AbstractController
{
    /**
     * @Route("/gerercandidat", name="gerercandidat")
     */
    public function index()
    {
        return $this->render('gerercandidat/index.html.twig', [
            'controller_name' => 'GerercandidatController',
        ]);
    }
}
