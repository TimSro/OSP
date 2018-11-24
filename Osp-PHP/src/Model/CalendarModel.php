<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 24.11.2018
 * Time: 23:49
 */

namespace App\Model;

use App\Interfaces\CalendarInterface;
use App\Interfaces\StudentSchoolClassInterface;
use App\Interfaces\SubjectInterface;
use App\Interfaces\UserInterface;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class CalendarModel
 * @package App\Model
 */
class CalendarModel implements CalendarInterface
{
    /**
     * @var array
     */
    private $data = [
        'date' => null,
        'calendarKey' => null,
        'note' => null,
        'user' => null,
        'studentSchoolClass' => null,
        'subject' => null,
    ];

    /**
     * CalendarModel constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->data['date'];
    }

    /**
     * @return string
     */
    public function getCalendarKey()
    {
        return $this->data['calendarKey'];
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->data['note'];
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->data['user'];
    }

    /**
     * @return StudentSchoolClassInterface
     */
    public function getStudentSchoolClass()
    {
        return $this->data['studentSchoolClass'];
    }

    /**
     * @return SubjectInterface
     */
    public function getSubject()
    {
        return $this->data['subject'];
    }
}