<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RequestStatusController extends AbstractController
{
    /**
     * @Route("/request/status", name="request_status")
     */
    public function index()
    {
        return $this->render('request_status/index.html.twig', [
            'controller_name' => 'RequestStatusController',
        ]);
    }
}
