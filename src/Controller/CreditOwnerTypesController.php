<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditOwnerTypesController extends AbstractController
{
    /**
     * @Route("/credit/owner/types", name="credit_owner_types")
     */
    public function index()
    {
        return $this->render('credit_owner_types/index.html.twig', [
            'controller_name' => 'CreditOwnerTypesController',
        ]);
    }
}
