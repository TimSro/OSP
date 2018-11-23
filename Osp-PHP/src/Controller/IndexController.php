<?php

namespace App\Controller;

use App\Mocks\UserMock;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $user = new UserMock();
        $errors = [];

        /** @var $user UserMock */
        if ($user != null) {
            $dbPassword = $user->getPassword();

            // is password valid?
            if (password_verify($user->getPlainPassword(), $dbPassword)) {
                return $this->redirectToRoute("timetable");
            } else {
                array_push($errors, "Benutzerdaten sind nicht korrekt. Bitte prüfe deinen Benutzername und Passwort.");
            }
        }

        return $this->render('index/index.html.twig', [
            'errors' => $errors
        ]);
    }
}
