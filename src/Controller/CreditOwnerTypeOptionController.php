<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditOwnerTypeOptionController extends AbstractController
{
    /**
     * @Route("/credit/owner/type/option", name="credit_owner_type_option")
     */
    public function index()
    {
        return $this->render('credit_owner_type_option/index.html.twig', [
            'controller_name' => 'CreditOwnerTypeOptionController',
        ]);
    }
}
