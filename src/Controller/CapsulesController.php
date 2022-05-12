<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CapsulesController extends AbstractController
{
    #[Route('/capsules', name: 'app_capsules')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('capsules/index.html.twig', [
            'data' => $callApiService->getAllCapsules(),
        ]);
    }
    #[Route('/capsules/{id}', name: 'app_capsule')]
    public function getOne(string $id, CallApiService $callApiService): Response
    {
        return $this->render('capsule/index.html.twig', [
            'data' => $callApiService->getCapsuleData($id),
        ]);
    }
}
