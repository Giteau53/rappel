<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CallbackController extends AbstractController
{
    /**
     * @Route("/callback", name="app_callback")
     */
    public function index(): Response
    {
        return $this->render('callback/index.html.twig', [
            'controller_name' => 'CallbackController',
        ]);
    }
}
