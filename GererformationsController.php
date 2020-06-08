<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GererformationsController extends AbstractController
{
    /**
     * @Route("/gererformations", name="gererformations")
     */
    public function index()
    {
        return $this->render('gererformations/index.html.twig', [
            'controller_name' => 'GererformationsController',
        ]);
    }
}
