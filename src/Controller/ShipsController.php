<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShipsController extends AbstractController
{
    #[Route('/ships', name: 'app_ships')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('ships/index.html.twig', [
            'data' => $callApiService->getAllShips(),
        ]);
    }
    #[Route('/ships/{id}', name: 'app_ships_ship')]
    public function getOne(string $id, CallApiService $callApiService): Response
    {
        return $this->render('ship/index.html.twig', [
            'data' => $callApiService->getOneShip($id),
        ]);
    }
}
