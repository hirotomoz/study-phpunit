<?php
namespace WEBDB;

class CostRepository
{
    /** @var \PDO */
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {
        $stmt = $this->pdo->query('SELECT * from dual');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}