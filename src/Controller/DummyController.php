<?php

namespace App\Controller;

use League\Flysystem\FilesystemOperator;
use League\Flysystem\FilesystemWriter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

class DummyController extends AbstractController
{

    public function __construct(private FilesystemWriter $defaultStorage)
    {
    }

    #[Route('/')]
    public function dummy(): Response
    {
        return $this->render('base.html.twig');
    }

}