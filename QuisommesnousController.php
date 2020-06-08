<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuisommesnousController extends AbstractController
{
    /**
     * @Route("/quisommesnous", name="quisommesnous")
     */
    public function index()
    {
        return $this->render('quisommesnous/index.html.twig', [
            'controller_name' => 'QuisommesnousController',
        ]);
    }
}
