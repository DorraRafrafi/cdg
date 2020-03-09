<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConfigGroupController extends AbstractController
{
    /**
     * @Route("/config/group", name="config_group")
     */
    public function index()
    {
        return $this->render('config_group/index.html.twig', [
            'controller_name' => 'ConfigGroupController',
        ]);
    }
}
