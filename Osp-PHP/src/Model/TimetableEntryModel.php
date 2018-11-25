<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 16:18
 */

namespace App\Model;

use App\Interfaces\StudentSchoolClassInterface;
use App\Interfaces\SubjectInterface;
use App\Interfaces\TimetableEntryInterface;

class TimetableEntryModel implements TimetableEntryInterface
{
    private $data = [
        'lesson' => null,
        'subject' => null,
        'schoolClass' => null,
    ];

    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return string
     */
    public function getLesson()
    {
        return $this->data['lesson'];
    }

    /**
     * @return SubjectInterface
     */
    public function getSubject()
    {
        return $this->data['subject'];
    }

    /**
     * @return StudentSchoolClassInterface
     */
    public function getStudentSchoolClass()
    {
        return $this->data['schoolClass'];
    }
}