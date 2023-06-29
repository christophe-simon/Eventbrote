<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventsController extends AbstractController
{
    #[Route('/events', name: 'app_events')]
    public function index(): Response
    {
        $events = [
            'Symfony conference',
            'Laravel conference',
            'PHP conference',
            'Rails conference'
        ];
        
        return $this->render('events/index.html.twig', compact('events'));
    }
}
