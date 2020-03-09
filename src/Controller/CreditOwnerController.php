<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditOwnerController extends AbstractController
{
    /**
     * @Route("/credit/owner", name="credit_owner")
     */
    public function index()
    {
        return $this->render('credit_owner/index.html.twig', [
            'controller_name' => 'CreditOwnerController',
        ]);
    }
}
