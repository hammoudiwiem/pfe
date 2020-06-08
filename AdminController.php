<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditRoleUserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/utilisateurs", name="admin/utilisateurs")
     */
    public  function listeutilisateurs(UserRepository $user)
    {
        return $this->render("admin/user.html.twig",[
            'users' => $user->findAll()
        ]);
    }

    /**
     * @Route("/admin/utilisateurs/modifier/{id}", name="modifier/utilisateurs")
     */

    public  function modifier(Request $request, User $user, EntityManagerInterface $em)
    {
        $form = $this->createForm(EditRoleUserType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();

            return $this->redirectToRoute('admin/utilisateurs');
        }
        return $this->render('admin/modifier.html.twig', ['formUser' => $form->createView()]);
    }
}
