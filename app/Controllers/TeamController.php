<?php
use app\Models\Team;

require_once ("../Models/Team.php");

class ControllerTeam {

    private $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    public function createTeam(array $data)
    {
        $team = new Team(null, $data['name'], $data['description'], null, null);
        $result = $this->team->create($data);

        if ($result) {
            echo 'Équipe créée avec succès!';
        } else {
            echo 'Erreur lors de la création de l\'équipe.';
        }
    }

    public function updateTeam(int $id, array $data)
    {
        $result = $this->team->update($id, $data);

        if ($result) {
            echo 'Équipe mise à jour avec succès!';
        } else {
            echo 'Erreur lors de la mise à jour de l\'équipe.';
        }
    }

    public function deleteTeam(int $id)
    {
        $result = $this->team->delete($id);

        if ($result) {
            echo 'Équipe supprimée avec succès!';
        } else {
            echo 'Erreur lors de la suppression de l\'équipe.';
        }
    }

    public function readTeam(int $id)
    {
        $result = $this->team->read($id);

        if ($result) {
            print_r($result);
        } else {
            echo 'Équipe non trouvée.';
        }
    }
}

// Exemple d'utilisation
$controllerTeam = new ControllerTeam(new Team(null, null, null, null, null));
$controllerTeam->createTeam(['name' => 'Nouvelle équipe', 'description' => 'Description de la nouvelle équipe']);
