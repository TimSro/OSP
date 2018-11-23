<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 21:22
 */

namespace App\Model;

use App\Interfaces\UserInterface;

/**
 * Class UserModel
 * @package App\Model
 */
class UserModel implements UserInterface
{
    private $data = [
        'username' => null,
        'plainPassword' => null,
        'password' => null,
        'gender' => null,
        'isTimetableAvailable' => null,
    ];

    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->data['username'];
    }

    /**
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->data['plainPassword'];
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->data['password'];
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->data['gender'];
    }

    /**
     * @return boolean
     */
    public function isTimetableAvailable()
    {
        return $this->data['isTimetableAvailable'];
    }
}