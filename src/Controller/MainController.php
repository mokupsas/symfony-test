<?php
namespace App\Controller;

use App\Entity\BlogPost;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    // ...

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', []);
    }
}