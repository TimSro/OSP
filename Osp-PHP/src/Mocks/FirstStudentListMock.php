<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 22:57
 */

namespace App\Mocks;

use App\Interfaces\SchoolClassInterface;
use App\Interfaces\StudentInterface;
use App\Interfaces\StudentListInterface;
use App\Interfaces\StudentSchoolClassInterface;
use App\Interfaces\UserInterface;
use App\Model\StudentModel;

/**
 * Class FirstStudentListMock
 * @package App\Mocks
 */
class FirstStudentListMock implements StudentListInterface
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
        return new FirstStudentSchoolClassMock();
    }
}