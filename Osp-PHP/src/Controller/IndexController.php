<?php

namespace App\Controller;

use App\Mocks\UserMock;
use App\Model\UserModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request, SessionInterface $session)
    {
        $errors = [];

        $username = $request->request->get("username");
        $password = $request->request->get("password");
        $user = null;

        $userMock = new UserMock();

        if (!empty($username) && !(empty($password))) {
            foreach ($userMock->getMocks() as $mock) {
                /** @var UserModel $mock */
                if ($mock->getUsername() == $username) {
                    $user = $mock;
                }
            }

            /** @var UserModel $user */
            if ($user != null) {
                $dbPassword = $user->getPassword();

                // is password valid?
                if (password_verify($password, $dbPassword)) {
                    $session->set("isActive", true);

                    if (!$user->isTimetableAvailable()) {
                        return $this->redirectToRoute("timetable");
                    }

                    return $this->redirectToRoute("appointment");
                } else {
                    array_push($errors, "Benutzerdaten sind nicht korrekt. Bitte prüfe deinen Benutzername und Passwort.");
                }
            } else {
                array_push($errors, "Benutzer nicht gefunden.");
            }
        }

        return $this->render('index/index.html.twig', [
            'errors' => $errors
        ]);
    }
}
