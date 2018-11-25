<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 24.11.2018
 * Time: 23:25
 */

namespace App\Interfaces;

/**
 * Interface TodoInterface
 * @package App\Interfaces
 */
interface TodoInterface
{
    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @return TodoEntryInterface[]
     */
    public function getTodoEntries();
}