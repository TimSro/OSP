<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 14:50
 */

namespace App\Model;

use App\Interfaces\TimetableEntryInterface;
use App\Interfaces\TimetableDayInterface;

/**
 * Class TimetableDayInterface
 * @package App\Mocks
 */
class TimetableDayModel implements TimetableDayInterface
{
    /**
     * @var array
     */
    private $data = [
        'day' => null,
        'timetableEntries' => null,
    ];

    /**
     * TimetableDayModel constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return string
     */
    public function getDay()
    {
        return $this->data['day'];
    }

    /**
     * @return TimetableEntryInterface[]
     */
    public function getTimetableEntries()
    {
        return $this->data['timetableEntries'];
    }
}