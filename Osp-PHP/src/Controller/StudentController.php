<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     *
     * @param SessionInterface $session
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(SessionInterface $session)
    {
        if (!$session->get("isActive")) {
            return $this->redirectToRoute("index");
        }

        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
}
