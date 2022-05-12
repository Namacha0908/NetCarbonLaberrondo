<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RocketsController extends AbstractController
{
    #[Route('/rockets', name: 'app_rockets')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('rockets/index.html.twig', [
            'data' => $callApiService->getAllRockets(),
        ]);
    }
    #[Route('/rockets/{id}', name: 'app_rocket')]
    public function getOne(string $id, CallApiService $callApiService): Response
    {
        return $this->render('rocket/index.html.twig', [
            'data' => $callApiService->getOneRocket($id),
        ]);
    }
}
