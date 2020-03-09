<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NotificationObjectController extends AbstractController
{
    /**
     * @Route("/notification/object", name="notification_object")
     */
    public function index()
    {
        return $this->render('notification_object/index.html.twig', [
            'controller_name' => 'NotificationObjectController',
        ]);
    }
}
