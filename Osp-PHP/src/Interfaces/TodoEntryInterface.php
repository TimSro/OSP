<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 25.11.2018
 * Time: 20:54
 */

namespace App\Interfaces;

/**
 * Interface TodoEntryInterface
 * @package App\Interfaces
 */
interface TodoEntryInterface
{
    /**
     * @return string
     */
    public function getTodoString();

    /**
     * @return string
     */
    public function getTodoKey();

    /**
     * @return boolean
     */
    public function isDone();

    /**
     * @return StudentSchoolClassInterface
     */
    public function getStudentSchoolClass();

    /**
     * @return SubjectInterface
     */
    public function getSubject();
}