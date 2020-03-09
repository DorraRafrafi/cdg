<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaymentTypeController extends AbstractController
{
    /**
     * @Route("/payment/type", name="payment_type")
     */
    public function index()
    {
        return $this->render('payment_type/index.html.twig', [
            'controller_name' => 'PaymentTypeController',
        ]);
    }
}
