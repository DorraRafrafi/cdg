<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RequestProcessingController extends AbstractController
{
    /**
     * @Route("/request/processing", name="request_processing")
     */
    public function index()
    {
        return $this->render('request_processing/index.html.twig', [
            'controller_name' => 'RequestProcessingController',
        ]);
    }
}
