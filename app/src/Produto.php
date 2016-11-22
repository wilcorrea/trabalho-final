<?php

namespace Fagoc;

use \PDO;

class Produto
{
    private $table = 'produtos';
    private $fields = ['id', 'nome', 'telefone'];
    private $pdo = null;

    public function connect()
    {
        if ($this->pdo) {
            return $this->pdo;
        }
        $dsn = 'mysql:dbname=php_william;host=192.168.254.178';
        $user = 'aluno';
        $password = 'fagoc';
        try {
            $this->pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $this->pdo;
    }

    public function insert(array $fields, array $values)
    {
        // table // fields // values
        $labels = [];
        foreach ($values as $value) {
            $labels[] = '?';
        }
        $sql = 'INSERT INTO ' . $this->table . ' (' . implode(', ', $fields) . ') VALUES (' . implode(', ', $labels) . ')';
        $statement = $this->connect()->prepare($sql);
        return $statement->execute($values);
    }

    public function select(array $fields, $where = 'TRUE')
    {
        // table // fields // where
        $sql = 'SELECT ' . implode(', ', $fields) . ' FROM ' . $this->table . ' WHERE ' . $where;
        $statement = $this->connect()->prepare($sql);
        if (!$statement->execute($values)) {
            return [];
        }
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(array $fields, array $values, $where = 'FALSE')
    {
        // table // fields // values
        $set = [];
        foreach ($fields as $field) {
            $set[] = "{$field} = ?";
        }
        $sql = 'UPDATE ' . $this->table . ' SET ' . implode(', ', $set) . ' WHERE ' . $where;

        $statement = $this->connect()->prepare($sql);

        return $statement->execute($values);
    }

    public function delete($where)
    {
        // table // where
        $sql = 'DELETE FROM ' . $this->table . ' WHERE ' . $where;

        $statement = $this->connect()->prepare($sql);

        return $statement->execute();
    }
}
