<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 24.11.2018
 * Time: 22:54
 */

namespace App\Interfaces;

use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Interface CalendarInterface
 * @package App\Interfaces
 */
interface CalendarInterface
{

    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @return CalendarDayInterface[]
     */
    public function getCalendarDays();
}