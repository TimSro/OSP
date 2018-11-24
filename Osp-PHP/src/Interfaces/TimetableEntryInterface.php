<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 16:02
 */

namespace App\Interfaces;

/**
 * Interface TimetableEntryInterface
 * @package App\Interfaces
 */
interface TimetableEntryInterface
{
    /**
     * @return string
     */
    public function getLesson();

    /**
     * @return string
     */
    public function getSubject();

    /**
     * @return string
     */
    public function getSchoolClass();
}