<?php

namespace App\Controller;

use App\Entity\Shared;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    // ...

    #[Route('/', name: 'index')]
    public function index(Shared $shared): Response
    {
        return $this->render('index.html.twig', ['text' => $shared->getName()]);
    }
}