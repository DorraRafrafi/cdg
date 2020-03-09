<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EntityInfoController extends AbstractController
{
    /**
     * @Route("/entity/info", name="entity_info")
     */
    public function index()
    {
        return $this->render('entity_info/index.html.twig', [
            'controller_name' => 'EntityInfoController',
        ]);
    }
}
