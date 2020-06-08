<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommetmarktngController extends AbstractController
{
    /**
     * @Route("/commetmarktng", name="commetmarktng")
     */
    public function index()
    {
        return $this->render('commetmarktng/index.html.twig', [
            'controller_name' => 'CommetmarktngController',
        ]);
    }
}
