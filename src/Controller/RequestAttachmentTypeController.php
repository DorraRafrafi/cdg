<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RequestAttachmentTypeController extends AbstractController
{
    /**
     * @Route("/request/attachment/type", name="request_attachment_type")
     */
    public function index()
    {
        return $this->render('request_attachment_type/index.html.twig', [
            'controller_name' => 'RequestAttachmentTypeController',
        ]);
    }
}
