<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 25.11.2018
 * Time: 20:59
 */

namespace App\Model;

use App\Interfaces\StudentSchoolClassInterface;
use App\Interfaces\SubjectInterface;
use App\Interfaces\TodoEntryInterface;

/**
 * Class TodoEntryModel
 * @package App\Model
 */
class TodoEntryModel implements TodoEntryInterface
{
    /**
     * @var array
     */
    private $data = [
        'todoString' => null,
        'todoKey' => null,
        'isDone' => null,
        'studentSchoolClass' => null,
        'subject' => null,
    ];

    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return string
     */
    public function getTodoString()
    {
        return $this->data['todoString'];
    }

    /**
     * @return string
     */
    public function getTodoKey()
    {
        return $this->data['todoKey'];
    }

    /**
     * @return boolean
     */
    public function isDone()
    {
        return $this->data['isDone'];
    }

    /**
     * @return StudentSchoolClassInterface
     */
    public function getStudentSchoolClass()
    {
        return $this->data['studentSchoolClass'];
    }

    /**
     * @return SubjectInterface
     */
    public function getSubject()
    {
        return $this->data['subject'];
    }
}