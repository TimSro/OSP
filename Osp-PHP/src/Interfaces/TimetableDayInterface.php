<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 14:50
 */

namespace App\Interfaces;

/**
 * Interface TimetableDayInterface
 * @package App\Interfaces
 */
interface TimetableDayInterface
{
    /**
     * @return string
     */
    public function getDay();

    /**
     * @return TimetableEntryInterface[]
     */
    public function getTimetableEntries();
}