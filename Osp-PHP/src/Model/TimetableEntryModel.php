<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 16:18
 */

namespace App\Model;

use App\Interfaces\TimetableEntryInterface;

class TimetableEntryModel implements TimetableEntryInterface
{
    private $data = [
        'lesson' => null,
        'subject' => null,
        'schoolClass' => null,
    ];

    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return string
     */
    public function getLesson()
    {
        return $this->data['lesson'];
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->data['subject'];
    }

    /**
     * @return string
     */
    public function getSchoolClass()
    {
        return $this->data['schoolClass'];
    }
}