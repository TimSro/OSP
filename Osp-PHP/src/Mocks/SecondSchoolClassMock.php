<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 23:02
 */

namespace App\Mocks;

use App\Interfaces\SchoolClassInterface;

/**
 * Class SecondSchoolClassMock
 * @package App\Mocks
 */
class SecondSchoolClassMock implements SchoolClassInterface
{

    /**
     * @return string
     */
    public function getName()
    {
        return "FIA6B";
    }
}