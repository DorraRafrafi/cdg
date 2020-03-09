<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserAuthenticationHistoryController extends AbstractController
{
    /**
     * @Route("/user/authentication/history", name="user_authentication_history")
     */
    public function index()
    {
        return $this->render('user_authentication_history/index.html.twig', [
            'controller_name' => 'UserAuthenticationHistoryController',
        ]);
    }
}
