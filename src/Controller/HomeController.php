<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    // curl.cainfo = "C:\laragon\etc\ssl\cacert.pem"
    #[Route('/', name: 'app_home')]
    //     public function index(): Response
    //     {
    //         return $this->render('home/index.html.twig', [
    //             'controller_name' => 'HomeController',
    //         ]);
    //     }
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('home/index.html.twig', [
            'latest' => $callApiService->getLatestLaunch(),
            'launches' => $callApiService->getAllLaunches(),
            'infoCompany' => $callApiService->getInfoCompany(),
        ]);
    }
}
