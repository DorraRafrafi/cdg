<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserVerificationController extends AbstractController
{
    /**
     * @Route("/user/verification", name="user_verification")
     */
    public function index()
    {
        return $this->render('user_verification/index.html.twig', [
            'controller_name' => 'UserVerificationController',
        ]);
    }
}
