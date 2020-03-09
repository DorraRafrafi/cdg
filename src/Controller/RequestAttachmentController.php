<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RequestAttachmentController extends AbstractController
{
    /**
     * @Route("/request/attachment", name="request_attachment")
     */
    public function index()
    {
        return $this->render('request_attachment/index.html.twig', [
            'controller_name' => 'RequestAttachmentController',
        ]);
    }
}
