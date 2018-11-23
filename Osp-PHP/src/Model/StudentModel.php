<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 22:52
 */

namespace App\Model;
use App\Interfaces\SchoolClassInterface;
use App\Interfaces\StudentInterface;

/**
 * Class StudentModel
 * @package App\Model
 */
class StudentModel implements StudentInterface
{
    /**
     * @var array
     */
    private $data = [
        'name' => null,
        'schoolClass' => null,
    ];

    /**
     * StudentModel constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->data['name'];
    }

    /**
     * @return SchoolClassInterface
     */
    public function getSchoolClass()
    {
        return $this->data['schoolClass'];
    }
}