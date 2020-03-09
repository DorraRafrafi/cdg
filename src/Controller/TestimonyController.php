<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestimonyController extends AbstractController
{
    /**
     * @Route("/testimony", name="testimony")
     */
    public function index()
    {
        return $this->render('testimony/index.html.twig', [
            'controller_name' => 'TestimonyController',
        ]);
    }
}
