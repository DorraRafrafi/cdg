<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmailVerificationController extends AbstractController
{
    /**
     * @Route("/email/verification", name="email_verification")
     */
    public function index()
    {
        return $this->render('email_verification/index.html.twig', [
            'controller_name' => 'EmailVerificationController',
        ]);
    }
}
