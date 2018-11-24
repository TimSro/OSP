<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 24.11.2018
 * Time: 23:55
 */

namespace App\Model;

use App\Interfaces\StudentSchoolClassInterface;
use App\Interfaces\SubjectInterface;
use App\Interfaces\TodoInterface;
use App\Interfaces\UserInterface;

/**
 * Class TodoModel
 * @package App\Model
 */
class TodoModel implements TodoInterface
{
    /**
     * @var array
     */
    private $data = [
        'todoString' => null,
        'todoKey' => null,
        'isDone' => null,
        'user' => null,
        'studentSchoolClass' => null,
        'subject' => null,
    ];

    /**
     * TodoModel constructor.
     * @param array $data
     */
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
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->data['user'];
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