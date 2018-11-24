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
     * @return DateTime
     */
    public function getDate();

    /**
     * @return string
     */
    public function getCalendarKey();

    /**
     * @return string
     */
    public function getNote();

    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @return StudentSchoolClassInterface
     */
    public function getStudentSchoolClass();

    /**
     * @return SubjectInterface
     */
    public function getSubject();
}