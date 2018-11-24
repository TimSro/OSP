<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 22:38
 */

namespace App\Interfaces;

/**
 * Interface StudentListInterface
 * @package App\Interfaces
 */
interface StudentListInterface
{
    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @return StudentSchoolClassInterface
     */
    public function getStudents();
}