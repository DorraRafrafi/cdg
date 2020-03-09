<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserPermissionController extends AbstractController
{
    /**
     * @Route("/user/permission", name="user_permission")
     */
    public function index()
    {
        return $this->render('user_permission/index.html.twig', [
            'controller_name' => 'UserPermissionController',
        ]);
    }
}
