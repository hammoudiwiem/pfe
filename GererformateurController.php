<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GererformateurController extends AbstractController
{
    /**
     * @Route("/gererformateur", name="gererformateur")
     */
    public function index()
    {
        return $this->render('gererformateur/index.html.twig', [
            'controller_name' => 'GererformateurController',
        ]);
    }
}
