<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AvisettemoignagesController extends AbstractController
{
    /**
     * @Route("/avisettemoignages", name="avisettemoignages")
     */
    public function index()
    {
        return $this->render('avisettemoignages/index.html.twig', [
            'controller_name' => 'AvisettemoignagesController',
        ]);
    }
}
