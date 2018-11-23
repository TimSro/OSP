<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 14:50
 */

namespace App\Interfaces;

use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Interface TimetableInterface
 * @package App\Interfaces
 */
interface TimetableInterface
{
    /**
     * @return DateTime
     */
    public function getDate();

    /**
     * @return TimetableEntryInterface[]
     */
    public function getTimetableEntries();
}