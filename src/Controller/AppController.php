<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AppController extends AbstractController
{
    #[Route('/launches', name: 'app_launches')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('app/index.html.twig', [
            'launches' => $callApiService->getAllLaunches(),
            'landpads' => $callApiService->getAllLandpads(),
            'launchpads' => $callApiService->getAllLaunchpads(),
        ]);
    }
    #[Route('/launches/{id}', name: 'app_launch')]
    public function getOne(string $id, CallApiService $callApiService): Response
    {
        return $this->render('launch/index.html.twig', [
            'data' => $callApiService->getLaunchData($id),
        ]);
    }
}
