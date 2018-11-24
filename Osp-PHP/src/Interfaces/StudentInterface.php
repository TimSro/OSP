<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 22:47
 */

namespace App\Interfaces;

/**
 * Interface StudentInterface
 * @package App\Interfaces
 */
interface StudentInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return SchoolClassInterface
     */
    public function getSchoolClass();
}