<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RequestStatusHistoryController extends AbstractController
{
    /**
     * @Route("/request/status/history", name="request_status_history")
     */
    public function index()
    {
        return $this->render('request_status_history/index.html.twig', [
            'controller_name' => 'RequestStatusHistoryController',
        ]);
    }
}
