<?php

namespace Template\Models;

/**
 * Class Database
 * @author Alain Cao Van Truong <cvt.alain@gmail.com>
 */
class Database
{
    private $pdo;
    private $prepare;

    public function __construct($pdo, $ip)
    {
        $this->pdo = $pdo;
        $this->ip  = $ip;
    }

    /**
     * @param string $sql
     */
    public function setQuery($sql)
    {
        $this->prepare = $this->pdo->prepare($sql);
        $this->prepare->execute();
    }

    /**
     * @return PDOStatement $this->prepare
     */
    public function getPrepare()
    {
        return $this->prepare;
    }

    /**
     * @return object $this->prepare->fetch()
     */
    public function getPrepareFetch()
    {
        return $this->prepare->fetch();
    }

    /**
     * @return array $this->prepare->fetchAll()
     */
    public function getPrepareFetchAll()
    {
        return $this->prepare->fetchAll();
    }
}