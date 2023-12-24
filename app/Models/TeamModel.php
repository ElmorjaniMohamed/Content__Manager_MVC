<?php

namespace App\Models;

use App\Config\Database;

class TeamModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = (new Database())->getInstance();
        $this->setTable('FootballTeams');
    }

    public function createTeam(array $data)
    {
        return $this->create($data);
    }

    public function readTeam(int $id)
    {
        return $this->read($id);
    }

    public function updateTeam(int $id, array $data)
    {
        return $this->update($id, $data);
    }

    public function deleteTeam(int $id)
    {
        return $this->delete($id);
    }

    public function getTeamByName($name)
    {
        try {
            $query = "SELECT * FROM FootballTeams WHERE name = :name";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':name', $name, \PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            // Vous pouvez gérer les erreurs de base de données ici
            return null;
        }
    }
}
