<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MotivationController extends AbstractController
{
    #[Route('/api/motivation', name: 'app_motivation')]
    public function index(): Response
    {
        // TODO - integrate ai api call to generate motivation
        return $this->json([
            'motivation' => 'You can do it!',
        ]);
    }
}
