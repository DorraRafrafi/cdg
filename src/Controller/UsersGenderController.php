<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UsersGenderController extends AbstractController
{
    /**
     * @Route("/users/gender", name="users_gender")
     */
    public function index()
    {
        return $this->render('users_gender/index.html.twig', [
            'controller_name' => 'UsersGenderController',
        ]);
    }
}
