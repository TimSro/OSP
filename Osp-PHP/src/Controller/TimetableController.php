<?php

namespace App\Controller;

use App\Mocks\FirstTimetableMock;
use App\Model\TimetableEntryModel;
use App\Model\TimetableDayModel;
use App\Model\TimetableModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class TimetableController extends AbstractController
{
    /**
     * @Route("/timetable", name="timetable")
     *
     * @param SessionInterface $session
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(SessionInterface $session)
    {
        if (!$session->get("isActive")) {
            return $this->redirectToRoute("index");
        }

        $data = new FirstTimetableMock();

        return $this->render('timetable/index.html.twig', [
            'timetables' => $data->getTimetableDays(),
        ]);
    }
}
