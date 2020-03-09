<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaymentFieldController extends AbstractController
{
    /**
     * @Route("/payment/field", name="payment_field")
     */
    public function index()
    {
        return $this->render('payment_field/index.html.twig', [
            'controller_name' => 'PaymentFieldController',
        ]);
    }
}
