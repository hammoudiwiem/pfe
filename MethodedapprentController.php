<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MethodedapprentController extends AbstractController
{
    /**
     * @Route("/methodedapprent", name="methodedapprent")
     */
    public function index()
    {
        return $this->render('methodedapprent/index.html.twig', [
            'controller_name' => 'MethodedapprentController',
        ]);
    }
}
