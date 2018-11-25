<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 25.11.2018
 * Time: 20:57
 */

namespace App\Model;

use App\Interfaces\CalendarEntryInterface;
use App\Interfaces\TimetableEntryInterface;
use DateTime;

/**
 * Class CalendarEntryModel
 * @package App\Model
 */
class CalendarEntryModel implements CalendarEntryInterface
{
    /**
     * @var array
     */
    private $data = [
        'calendarKey' => null,
        'note' => null,
        'timetableEntry' => null,
    ];

    /**
     * CalendarEntryModel constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
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
     * @return TimetableEntryInterface
     */
    public function getTimetableEntry()
    {
        return $this->data['timetableEntry'];
    }
}