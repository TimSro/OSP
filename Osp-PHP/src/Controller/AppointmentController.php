<?php

namespace App\Controller;

use App\Interfaces\CalendarDayInterface;
use App\Mocks\FirstUserMock;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    /**
     * @Route("/appointment/{date}", defaults={"date"="null"}, name="appointment")
     *
     * @param SessionInterface $session
     * @param $date
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SessionInterface $session, $date)
    {
        if (!$session->get("isActive")) {
            return $this->redirectToRoute("index");
        }

        $calendars = new FirstUserMock();
        $result = null;

        if ($date != null) {
            /** @var CalendarDayInterface $calendar */
            foreach ($calendars->getCalendar()->getCalendarDays() as $calendar) {
                if (strpos($calendar->getDate(), $date) !== false) {
                    $result = $calendar;
                }
            }
        }

        return $this->render('appointment/index.html.twig', [
            'calendar' => $result,
        ]);
    }
}
