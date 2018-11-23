<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 14:50
 */

namespace App\Mocks;

use App\Interfaces\TimetableEntryInterface;
use App\Interfaces\TimetableInterface;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class TimetableInterface
 * @package App\Mocks
 */
class TimetableMock implements TimetableInterface
{
    /**
     * @var array
     */
    private $data = [
        'date' => null,
        'timetableEntries' => null,
    ];

    /**
     * TimetableMock constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->data['date'];
    }

    /**
     * @return TimetableEntryInterface[]
     */
    public function getTimetableEntries()
    {
        return $this->data['timetableEntries'];
    }
}