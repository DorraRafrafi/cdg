<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaymentInfoController extends AbstractController
{
    /**
     * @Route("/payment/info", name="payment_info")
     */
    public function index()
    {
        return $this->render('payment_info/index.html.twig', [
            'controller_name' => 'PaymentInfoController',
        ]);
    }
}
