<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NosformateursController extends AbstractController
{
    /**
     * @Route("/nosformateurs", name="nosformateurs")
     */
    public function index()
    {
        return $this->render('nosformateurs/index.html.twig', [
            'controller_name' => 'NosformateursController',
        ]);
    }
}
