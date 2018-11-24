<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 24.11.2018
 * Time: 23:53
 */

namespace App\Model;

use App\Interfaces\SubjectInterface;

/**
 * Class SubjectModel
 * @package App\Model
 */
class SubjectModel implements SubjectInterface
{
    /**
     * @var array
     */
    private $data = [
        'name' => null,
    ];

    /**
     * SubjectModel constructor.
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