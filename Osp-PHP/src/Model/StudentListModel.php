<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 22:53
 */

namespace App\Model;

use App\Interfaces\SchoolClassInterface;
use App\Interfaces\StudentInterface;
use App\Interfaces\StudentListInterface;
use App\Interfaces\UserInterface;

/**
 * Class StudentListModel
 * @package App\Model
 */
class StudentListModel implements StudentListInterface
{
    /**
     * @var array
     */
    private $data = [
        'user' => null,
        'schoolClass' => null,
        'students' => null,
    ];

    /**
     * StudentListModel constructor.
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
     * @return SchoolClassInterface
     */
    public function getSchoolClass()
    {
        return $this->data['schoolClass'];
    }

    /**
     * @return StudentInterface[]
     */
    public function getStudents()
    {
        return $this->data['students'];
    }
}