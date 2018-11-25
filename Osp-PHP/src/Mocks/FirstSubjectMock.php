<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 25.11.2018
 * Time: 22:11
 */

namespace App\Mocks;

use App\Interfaces\SubjectInterface;

/**
 * Class FirstSubjectMock
 * @package App\Mocks
 */
class FirstSubjectMock implements SubjectInterface
{

    /**
     * @return string
     */
    public function getName()
    {
        return "WUG";
    }
}