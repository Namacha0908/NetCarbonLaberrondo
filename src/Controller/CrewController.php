<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CrewController extends AbstractController
{
    #[Route('/crew', name: 'app_crew')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('crew/index.html.twig', [
            'data' => $callApiService->getAllCrew(),
        ]);
    }
    #[Route('/crew/member/{id}', name: 'app_crew_member')]
    public function getOne(string $id, CallApiService $callApiService): Response
    {
        return $this->render('crew_member/index.html.twig', [
            'data' => $callApiService->getCrewMember($id),
        ]);
    }
}
