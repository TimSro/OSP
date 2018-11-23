<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 23:14
 */

namespace App\Interfaces;

/**
 * Interface StudentSchoolClassInterface
 * @package App\Interfaces
 */
interface StudentSchoolClassInterface
{
    /**
     * @return SchoolClassInterface
     */
    public function getSchoolClass();

    /**
     * @return StudentInterface[]
     */
    public function getStudents();
}