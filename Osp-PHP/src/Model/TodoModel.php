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
use App\Interfaces\TodoEntryInterface;
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
        'user' => null,
        'todoEntries' => null,
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
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->data['user'];
    }

    /**
     * @return TodoEntryInterface[]
     */
    public function getTodoEntries()
    {
        return $this->data['todoEntries'];
    }
}