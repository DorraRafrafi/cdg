<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NotificationActorController extends AbstractController
{
    /**
     * @Route("/notification/actor", name="notification_actor")
     */
    public function index()
    {
        return $this->render('notification_actor/index.html.twig', [
            'controller_name' => 'NotificationActorController',
        ]);
    }
}
