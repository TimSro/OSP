<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 14:14
 */

namespace App\Mocks;

use App\Interfaces\CalendarInterface;
use App\Interfaces\StudentSchoolClassInterface;
use App\Interfaces\TodoInterface;
use App\Interfaces\UserInterface;

/**
 * Class FirstUserMock
 * @package App\Mocks
 */
class FirstUserMock implements UserInterface
{
    /**
     * @return string
     */
    public function getUsername()
    {
        return "hs";
    }

    /**
     * @return string
     */
    public function getPlainPassword()
    {
        return "123456";
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return '$2y$10$M1RL87UmvPPwGAONYDrbluT/qQEhd2FVgrU.vh4b8MMw2UzgYEXJq';
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return "w";
    }

    /**
     * @return boolean
     */
    public function isTimetableAvailable()
    {
        return false;
    }

    /**
     * @return StudentSchoolClassInterface[]
     */
    public function getStudentSchoolClasses()
    {
        // TODO: Implement getStudentSchoolClasses() method.
    }

    /**
     * @return CalendarInterface[]
     */
    public function getCalendars()
    {
        // TODO: Implement getCalendars() method.
    }

    /**
     * @return TodoInterface[]
     */
    public function getTodos()
    {
        // TODO: Implement getTodos() method.
    }
}