<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LandpadsController extends AbstractController
{
    #[Route('/landpads', name: 'app_landpads')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('landpads/index.html.twig', [
            'data' => $callApiService->getAllLandpads(),
        ]);
    }
    #[Route('/landpads/{id}', name: 'app_landpad')]
    public function getOne(string $id, CallApiService $callApiService): Response
    {
        return $this->render('landpad/index.html.twig', [
            'data' => $callApiService->getOneLandpad($id),
        ]);
    }
}
