<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 19:42
 */

namespace App\Interfaces;

/**
 * Interface TimetableInterface
 * @package App\Interfaces
 */
interface TimetableInterface
{
    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @return TimetableDayInterface[]
     */
    public function getTimetableDays();
}