<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilecandidatController extends AbstractController
{
    /**
     * @Route("/profileCandidat", name="profileCandidat")
     */
    public function index()
    {
        return $this->render('profileCandidat/index.html.twig', [
            'controller_name' => 'ProfilecandidatController',
        ]);
    }
}
