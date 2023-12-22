<?php
// TeamController.php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Entities\FootballTeam;


class TeamController extends Controller
{
    private $footballTeam;

    public function __construct($db)
    {
        parent::__construct();
        $this->footballTeam = new FootballTeam($this->$db);
    }

    public function createTeam($data)
    {
        if ($this->footballTeam->create($data)) {
            echo 'Équipe créée avec succès!';
        } else {
            echo 'Erreur lors de la création de l\'équipe.';
        }
    }

    public function updateTeam($id, $data)
    {
        if ($this->footballTeam->update($id, $data)) {
            echo 'Équipe mise à jour avec succès!';
        } else {
            echo 'Erreur lors de la mise à jour de l\'équipe.';
        }
    }

    public function deleteTeam($id)
    {
        if ($this->footballTeam->delete($id)) {
            echo 'Équipe supprimée avec succès!';
        } else {
            echo 'Erreur lors de la suppression de l\'équipe.';
        }
    }

    public function readTeam($id)
    {
        $teamData = $this->footballTeam->read($id);

        if ($teamData) {
            print_r($teamData);
        } else {
            echo 'Équipe non trouvée.';
        }
    }
}
