<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 19:42
 */

namespace App\Model;

use App\Interfaces\TimetableDayInterface;
use App\Interfaces\TimetableInterface;
use App\Interfaces\UserInterface;

/**
 * Class TimetableModel
 * @package App\Model
 */
class TimetableModel implements TimetableInterface
{
    private $data = [
        'user' => null,
        'timetableDays' => null,
    ];

    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return TimetableDayInterface[]
     */
    public function getTimetableDays()
    {
        return $this->data['timetableDays'];
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->data['user'];
    }
}