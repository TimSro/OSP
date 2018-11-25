<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 25.11.2018
 * Time: 22:26
 */

namespace App\Interfaces;

/**
 * Interface CalendarDayInterface
 * @package App\Interfaces
 */
interface CalendarDayInterface
{
    /**
     * @return string
     */
    public function getDate();

    /**
     * @return CalendarEntryInterface[]
     */
    public function getCalendarEntries();
}