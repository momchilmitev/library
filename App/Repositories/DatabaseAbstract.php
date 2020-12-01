<?php


namespace App\Repositories;


use Core\DataBinderInterface;
use Database\DatabaseInterface;

class DatabaseAbstract
{
    private DatabaseInterface $db;

    private DataBinderInterface $dataBinder;

    /**
     * DatabaseAbstract constructor.
     * @param DatabaseInterface $db
     * @param DataBinderInterface $dataBinder
     */
    public function __construct(DatabaseInterface $db, DataBinderInterface $dataBinder)
    {
        $this->db = $db;
        $this->dataBinder = $dataBinder;
    }


}