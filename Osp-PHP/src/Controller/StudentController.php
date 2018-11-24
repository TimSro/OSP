<?php

namespace App\Controller;

use App\Mocks\FirstStudentSchoolClassMock;
use App\Mocks\SecondStudentSchoolClassMock;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student/{schoolClass}", defaults={"schoolClass"="FIA6A"}, name="student")
     *
     * @param SessionInterface $session
     * @param $schoolClass
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(SessionInterface $session, $schoolClass)
    {
        $data = [];

        if (!$session->get("isActive")) {
            return $this->redirectToRoute("index");
        }

        switch ($schoolClass) {
            case "FIA6A":
                $data = new FirstStudentSchoolClassMock();
                break;
            case "FIA6B":
                $data = new SecondStudentSchoolClassMock();
                break;
        }

        return $this->render('student/index.html.twig', [
            'students' => $data,
        ]);
    }
}
