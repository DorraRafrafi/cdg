<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditOwnerSearchController extends AbstractController
{
    /**
     * @Route("/credit/owner/search", name="credit_owner_search")
     */
    public function index()
    {
        return $this->render('credit_owner_search/index.html.twig', [
            'controller_name' => 'CreditOwnerSearchController',
        ]);
    }
}
