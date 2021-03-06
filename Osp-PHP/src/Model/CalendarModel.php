<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 24.11.2018
 * Time: 23:49
 */

namespace App\Model;

use App\Interfaces\CalendarDayInterface;
use App\Interfaces\CalendarEntryInterface;
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
        'user' => null,
        'calendarEntries' => null,
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
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->data['user'];
    }

    /**
     * @return CalendarDayInterface[]
     */
    public function getCalendarDays()
    {
        return $this->data['calendarEntries'];
    }
}