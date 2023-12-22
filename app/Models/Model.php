<?php
namespace App\Models;

use PDO;
use PDOException;



class Model
{
    protected $db;
    private static ?PDO $db = null;
    private string $table;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function create(array $data)
    {
        try {
            $columns = implode(', ', array_keys($data));
            $values = ':' . implode(', :', array_keys($data));

            $query = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";
            $this->logQuery($query);

            $stmt = self::$db->prepare($query);

            foreach ($data as $key => $value) {
                $stmt->bindValue(":{$key}", $value);
            }

            return $stmt->execute();
        } catch (PDOException $e) {
            $this->logError($e);
            return false;
        }
    }

    public function read(int $id)
    {
        try {
            $query = "SELECT * FROM {$this->table} WHERE id = :id";
            $this->logQuery($query);
            $stmt = self::$db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->logError($e);
            return null;
        }
    }

    public function update(int $id, array $data)
    {
        try {
            $setClause = '';
            foreach ($data as $key => $value) {
                $setClause .= "{$key} = :{$key}, ";
            }
            $setClause = rtrim($setClause, ', ');

            $query = "UPDATE {$this->table} SET {$setClause} WHERE id = :id";
            $this->logQuery($query);

            $stmt = self::$db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            foreach ($data as $key => $value) {
                $stmt->bindValue(":{$key}", $value);
            }

            return $stmt->execute();
        } catch (PDOException $e) {
            $this->logError($e);
            return false;
        }
    }

    public function delete(int $id)
    {
        try {
            $query = "DELETE FROM {$this->table} WHERE id = :id";
            $this->logQuery($query);
            $stmt = self::$db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            $this->logError($e);
            return false;
        }
    }
}
