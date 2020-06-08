<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SinscrireController extends AbstractController
{
    /**
     * @Route("/sinscrire", name="sinscrire")
     */
    public function index()
    {
        return $this->render('sinscrire/index.html.twig', [
            'controller_name' => 'SinscrireController',
        ]);
    }
}
