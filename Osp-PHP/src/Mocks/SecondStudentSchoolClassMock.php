<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 23:51
 */

namespace App\Mocks;

use App\Interfaces\SchoolClassInterface;
use App\Interfaces\StudentInterface;
use App\Interfaces\StudentSchoolClassInterface;
use App\Model\StudentModel;

/**
 * Class SecondStudentSchoolClassMock
 * @package App\Mocks
 */
class SecondStudentSchoolClassMock implements StudentSchoolClassInterface
{

    /**
     * @return SchoolClassInterface
     */
    public function getSchoolClass()
    {
        return new SecondSchoolClassMock();
    }

    /**
     * @return StudentInterface[]
     */
    public function getStudents()
    {
        return [
            new StudentModel([
                'name' => 'Markus Meier',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Hans Müller',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Jürgen Arnold',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Dieter Dietrich',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Jonas Jülchen',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Dennis Gerdes',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Kevin Eilers',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Anna Behrens',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Marc Becker',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Tilmann Lange',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Thomas Meiners',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Thorsten Macke',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Simon Harms',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Carsten Kruse',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Joshua Bruns',
                'schoolClass' => new SecondSchoolClassMock()
            ]),
        ];
    }
}