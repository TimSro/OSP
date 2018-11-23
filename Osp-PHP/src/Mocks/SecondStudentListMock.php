<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 23:53
 */

namespace App\Mocks;

use App\Interfaces\StudentListInterface;
use App\Interfaces\StudentSchoolClassInterface;
use App\Interfaces\UserInterface;

/**
 * Class SecondStudentListMock
 * @package App\Mocks
 */
class SecondStudentListMock implements StudentListInterface
{

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return new FirstUserMock();
    }

    /**
     * @return StudentSchoolClassInterface
     */
    public function getStudents()
    {
        return new SecondStudentSchoolClassMock();
    }
}