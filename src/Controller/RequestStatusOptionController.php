<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RequestStatusOptionController extends AbstractController
{
    /**
     * @Route("/request/status/option", name="request_status_option")
     */
    public function index()
    {
        return $this->render('request_status_option/index.html.twig', [
            'controller_name' => 'RequestStatusOptionController',
        ]);
    }
}
