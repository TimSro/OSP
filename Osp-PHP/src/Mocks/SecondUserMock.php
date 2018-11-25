<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 20:09
 */

namespace App\Mocks;

use App\Interfaces\CalendarInterface;
use App\Interfaces\StudentSchoolClassInterface;
use App\Interfaces\TodoInterface;
use App\Interfaces\UserInterface;

/**
 * Class SecondUserMock
 * @package App\Mocks
 */
class SecondUserMock implements UserInterface
{

    /**
     * @return string
     */
    public function getUsername()
    {
        return "kh";
    }

    /**
     * @return string
     */
    public function getPlainPassword()
    {
        return "foobar";
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return '$2y$10$uzDmGzcqcp51Ba3qRnrHOOwigNaTuFZyMP42JNTQm0/c62fdu4yeK';
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return "m";
    }

    /**
     * @return boolean
     */
    public function isTimetableAvailable()
    {
        return true;
    }

    /**
     * @return StudentSchoolClassInterface[]
     */
    public function getStudentSchoolClasses()
    {
        // TODO: Implement getStudentSchoolClasses() method.
    }

    /**
     * @return CalendarInterface
     */
    public function getCalendar()
    {
        // TODO: Implement getCalendars() method.
    }

    /**
     * @return TodoInterface
     */
    public function getTodoList()
    {
        // TODO: Implement getTodos() method.
    }
}