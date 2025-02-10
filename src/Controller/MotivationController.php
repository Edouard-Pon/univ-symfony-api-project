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
        $motivationalQuotes = [
            'You can do it!',
            'Believe in yourself and all that you are.',
            'The harder you work for something, the greater you’ll feel when you achieve it.',
            'Don’t watch the clock; do what it does. Keep going.',
            'Success is the sum of small efforts, repeated day in and day out.',
            'It always seems impossible until it’s done.',
            'The only limit to our realization of tomorrow is our doubts of today.',
            'The future belongs to those who believe in the beauty of their dreams.',
            'Act as if what you do makes a difference. It does.',
            'Push yourself, because no one else is going to do it for you.'
        ];

        // Выбираем случайную мотивационную фразу
        $randomQuote = $motivationalQuotes[array_rand($motivationalQuotes)];

        return $this->json([
            'motivation' => $randomQuote,
        ]);
    }
}
