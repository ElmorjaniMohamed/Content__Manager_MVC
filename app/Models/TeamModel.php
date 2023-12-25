<?php

namespace App\Models;

use App\Config\Database;

class TeamModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = (new Database())->getInstance();
        $this->setTable('footballteams');
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

    public function getAllTeams()
    {
        $query = "SELECT * FROM " . $this->getTableName();
        $statement = $this->db->prepare($query);
        $statement->execute();

        $teams = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $teams;
    }
    public function getTeamById($teamId)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM footballteams WHERE id = :id");
            $stmt->bindParam(':id', $teamId, \PDO::PARAM_INT);
            $stmt->execute();

            $teamDetails = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $teamDetails ? $teamDetails : null;
        } catch (\PDOException $e) {
            throw new \Exception('Error fetching team details: ' . $e->getMessage());
        }
    }


}
