<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Entities\FootballTeam;
use App\Models\TeamModel;

class TeamController extends Controller
{
    private $footballTeam;

    public function __construct()
    {
        parent::__construct();
        $this->footballTeam = new FootballTeam($this->db);
    }

    public function add()
    {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $teamModel = new TeamModel();

            $name = htmlspecialchars(trim($_POST['name']));
            $country = htmlspecialchars(trim($_POST['country']));
            $city = htmlspecialchars(trim($_POST['city']));
            $coachName = htmlspecialchars(trim($_POST['coach_name']));
            $foundationYear = intval($_POST['foundation_year']);
            $totalPlayers = intval($_POST['total_players']);

            try {
                $data = [
                    'name' => $name,
                    'country' => $country,
                    'city' => $city,
                    'coach_name' => $coachName,
                    'foundation_year' => $foundationYear,
                    'total_players' => $totalPlayers,
                ];

                $result = $teamModel->createTeam($data);
                var_dump($result);

                if ($result) {
                    $_SESSION['message'] = 'Équipe créée avec succès !';
                } else {
                    $_SESSION['message'] = 'Erreur lors de l\'insertion de l\'équipe.';
                }
            } catch (\PDOException $e) {
                $_SESSION['message'] = 'Erreur PDO : ' . $e->getMessage();
            } catch (\Exception $e) {
                $_SESSION['message'] = 'Erreur générale : ' . $e->getMessage();
            }
        }
    }
}
