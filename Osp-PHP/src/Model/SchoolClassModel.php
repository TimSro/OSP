<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 22:50
 */

namespace App\Model;

use App\Interfaces\SchoolClassInterface;
use App\Interfaces\UserInterface;

/**
 * Class SchoolClassModel
 * @package App\Model
 */
class SchoolClassModel implements SchoolClassInterface
{
    /**
     * @var array
     */
    private $data = [
        'name' => null,
    ];

    /**
     * SchoolClassModel constructor.
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
}