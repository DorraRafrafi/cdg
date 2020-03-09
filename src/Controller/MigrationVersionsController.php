<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MigrationVersionsController extends AbstractController
{
    /**
     * @Route("/migration/versions", name="migration_versions")
     */
    public function index()
    {
        return $this->render('migration_versions/index.html.twig', [
            'controller_name' => 'MigrationVersionsController',
        ]);
    }
}
