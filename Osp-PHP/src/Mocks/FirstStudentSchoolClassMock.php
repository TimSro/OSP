<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 23:16
 */

namespace App\Mocks;

use App\Interfaces\SchoolClassInterface;
use App\Interfaces\StudentInterface;
use App\Interfaces\StudentSchoolClassInterface;
use App\Model\StudentModel;

/**
 * Class FirstStudentSchoolClassMock
 * @package App\Mocks
 */
class FirstStudentSchoolClassMock implements StudentSchoolClassInterface
{

    /**
     * @return SchoolClassInterface
     */
    public function getSchoolClass()
    {
        return new FirstSchoolClassMock();
    }

    /**
     * @return StudentInterface[]
     */
    public function getStudents()
    {
        return [
            new StudentModel([
                'name' => 'Til Anheier',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Rico Offerzier',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Alexander Düster',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Jonas Wall',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Tim Zapka',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Deniz Inam',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Marco Brüning',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Mike Bernhardt',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Sercan Kücücöse',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Sven Ahrens',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Toni Vierkötter',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Enrique Zarzuela',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Philippe Raviolo',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Vincent Falk',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
            new StudentModel([
                'name' => 'Jan Zimprich',
                'schoolClass' => new FirstSchoolClassMock()
            ]),
        ];
    }
}