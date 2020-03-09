<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SmsVerificationController extends AbstractController
{
    /**
     * @Route("/sms/verification", name="sms_verification")
     */
    public function index()
    {
        return $this->render('sms_verification/index.html.twig', [
            'controller_name' => 'SmsVerificationController',
        ]);
    }
}
