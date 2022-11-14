<?php

namespace App\Controller;

use App\Entity\Shared;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    // ...
    private $shared;

    public function __construct(Shared $shared)
    {
        $this->shared = $shared;
    } 
    
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', ['text' => $this->shared->getName()]);
    }
}