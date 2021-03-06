<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
	#[Route('/', name: 'main')]
    public function index(): Response
    {
        return new Response(content: '<h1>Welcome to page</h1>');
    }
}
