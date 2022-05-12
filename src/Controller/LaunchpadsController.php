<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LaunchpadsController extends AbstractController
{
    #[Route('/launchpads', name: 'app_launchpads')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('launchpads/index.html.twig', [
            'data' => $callApiService->getAllLaunchpads(),
        ]);
    }
    #[Route('/launchpads/{id}', name: 'app_launchpad')]
    public function getOne(string $id, CallApiService $callApiService): Response
    {
        return $this->render('launchpad/index.html.twig', [
            'data' => $callApiService->getOneLaunchpad($id),
        ]);
    }
}
