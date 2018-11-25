<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 25.11.2018
 * Time: 22:28
 */

namespace App\Model;

use App\Interfaces\CalendarDayInterface;
use App\Interfaces\CalendarEntryInterface;

/**
 * Class CalendarDayModel
 * @package App\Model
 */
class CalendarDayModel implements CalendarDayInterface
{
    /**
     * @var array
     */
    private $data = [
        'date' => null,
        'calendarEntries' => null,
    ];

    /**
     * CalendarDayModel constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->data['date'];
    }

    /**
     * @return CalendarEntryInterface[]
     */
    public function getCalendarEntries()
    {
        return $this->data['calendarEntries'];
    }
}