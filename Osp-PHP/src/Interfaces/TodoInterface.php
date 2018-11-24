<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 24.11.2018
 * Time: 23:25
 */

namespace App\Interfaces;

/**
 * Interface TodoInterface
 * @package App\Interfaces
 */
interface TodoInterface
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