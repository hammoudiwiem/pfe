<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConnecterController extends AbstractController
{
    /**
     * @Route("/connecter", name="connecter")
     */
    public function index()
    {
        return $this->render('connecter/index.html.twig', [
            'controller_name' => 'ConnecterController',
        ]);
    }
}
