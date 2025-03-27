<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController
{
    #[Route('/', name: 'app_landing')]
    public function index(): Response
    {
        // Define features array
        $features = [
            [
                'title' => 'Secure Data',
                'description' => 'Your data is always safe and protected with us.',
                'image' => 'img/secure-data.png',
                'delay' => '200'
            ],
            [
                'title' => 'Fast Performance',
                'description' => 'Experience lightning-fast speed for your website.',
                'image' => 'img/fast-performance.png',
                'delay' => '400'
            ],
            [
                'title' => 'Reliable Support',
                'description' => 'Our team is always ready to help you 24/7.',
                'image' => 'img/reliable-support.png',
                'delay' => '600'
            ]
        ];

        return $this->render('landing/index.html.twig', [
            'features' => $features // Pass features array to Twig
        ]);
    }
}
