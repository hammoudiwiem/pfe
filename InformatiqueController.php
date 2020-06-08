<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InformatiqueController extends AbstractController
{
    /**
     * @Route("/informatique", name="informatique")
     */
    public function index()
    {
        return $this->render('informatique/index.html.twig', [
            'controller_name' => 'InformatiqueController',
        ]);
    }
}
