<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditOwnerFieldController extends AbstractController
{
    /**
     * @Route("/credit/owner/field", name="credit_owner_field")
     */
    public function index()
    {
        return $this->render('credit_owner_field/index.html.twig', [
            'controller_name' => 'CreditOwnerFieldController',
        ]);
    }
}
