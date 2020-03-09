<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TgrAgencyController extends AbstractController
{
    /**
     * @Route("/tgr/agency", name="tgr_agency")
     */
    public function index()
    {
        return $this->render('tgr_agency/index.html.twig', [
            'controller_name' => 'TgrAgencyController',
        ]);
    }
}
