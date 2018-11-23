<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 20:27
 */

namespace App\Mocks;

use App\Interfaces\MockInterface;

/**
 * Class UserMock
 * @package App\Mocks
 */
class UserMock implements MockInterface
{
    /**
     * @return array
     */
    public function getMocks()
    {
        return [
            new FirstUserMock(),
            new SecondUserMock(),
        ];
    }
}