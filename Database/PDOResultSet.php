<?php

namespace Database;

class PDOResultSet implements ResultSetInterface
{

    private \PDOStatement $pdoStatement;

    /**
     * PDOResultSet constructor.
     * @param \PDOStatement $PDOStatement
     */
    public function __construct(\PDOStatement $PDOStatement)
    {
        $this->pdoStatement = $PDOStatement;
    }

    /**
     * @param $className
     * @return \Generator
     */
    public function fetch($className): \Generator
    {
        while ($row = $this->pdoStatement->fetchObject($className)) {
            yield $row;
        }
    }

    public function fetchAssoc(): \Generator
    {
        while($row = $this->pdoStatement->fetch(\PDO::FETCH_ASSOC)) {
            yield $row;
        }
    }
}