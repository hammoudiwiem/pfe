<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArtsgraphiquesController extends AbstractController
{
    /**
     * @Route("/artsgraphiques", name="artsgraphiques")
     */
    public function index()
    {
        return $this->render('artsgraphiques/index.html.twig', [
            'controller_name' => 'ArtsgraphiquesController',
        ]);
    }
}
