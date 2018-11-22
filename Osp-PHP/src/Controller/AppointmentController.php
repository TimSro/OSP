<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    /**
     * @Route("/appointment", name="appointment")
     */
    public function index()
    {
        return $this->render('appointment/index.html.twig', [
            'controller_name' => 'AppointmentController',
        ]);
    }
}
