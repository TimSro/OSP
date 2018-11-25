<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 25.11.2018
 * Time: 20:50
 */

namespace App\Interfaces;

use DateTime;

/**
 * Interface CalendarEntryInterface
 * @package App\Interfaces
 */
interface CalendarEntryInterface
{
    /**
     * @return string
     */
    public function getCalendarKey();

    /**
     * @return string
     */
    public function getNote();

    /**
     * @return TimetableEntryInterface
     */
    public function getTimetableEntry();
}