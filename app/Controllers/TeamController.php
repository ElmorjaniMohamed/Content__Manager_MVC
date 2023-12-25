<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Entities\FootballTeam;
use App\Models\TeamModel;

class TeamController extends Controller
{
    private $footballTeam;
    private $teamModel;

    public function __construct()
    {
        parent::__construct();
        $this->footballTeam = new FootballTeam($this->db);
        $this->teamModel = new TeamModel();
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
            header('Location: ../');
            exit;

        }
    }


    public function delete($id)
    {
        session_start();

        try {
            $result = $this->teamModel->deleteTeam($id);

            if ($result) {
                $_SESSION['message'] = 'Équipe supprimée avec succès !';
            } else {
                $_SESSION['message'] = 'Erreur lors de la suppression de l\'équipe.';
            }
        } catch (\PDOException $e) {
            $_SESSION['message'] = 'Erreur PDO : ' . $e->getMessage();
        } catch (\Exception $e) {
            $_SESSION['message'] = 'Erreur générale : ' . $e->getMessage();
        }
        header('Location: ../../');
        exit;
    }

    public function edit($id)
    {
        session_start();

        try {
            $existingTeam = $this->teamModel->getTeamById($id);

            if (!$existingTeam) {
                $_SESSION['message'] = 'Équipe non trouvée.';
                header('Location: ../../');
                exit;
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = htmlspecialchars(trim($_POST['name']));
                $country = htmlspecialchars(trim($_POST['country']));
                $city = htmlspecialchars(trim($_POST['city']));
                $coachName = htmlspecialchars(trim($_POST['coach_name']));
                $foundationYear = intval($_POST['foundation_year']);
                $totalPlayers = intval($_POST['total_players']);

                $data = [
                    'name' => $name,
                    'country' => $country,
                    'city' => $city,
                    'coach_name' => $coachName,
                    'foundation_year' => $foundationYear,
                    'total_players' => $totalPlayers,
                ];

                $result = $this->teamModel->updateTeam($id, $data);

                if ($result) {
                    $_SESSION['message'] = 'Équipe modifiée avec succès !';
                } else {
                    $_SESSION['message'] = 'Erreur lors de la modification de l\'équipe.';
                }

                header('Location: ../../');
                exit;
            }
            include('../app/Views/team/edit.php');
            

        } catch (\PDOException $e) {
            $_SESSION['message'] = 'Erreur PDO : ' . $e->getMessage();
            header('Location: ../../');
            exit;
        } catch (\Exception $e) {
            $_SESSION['message'] = 'Erreur générale : ' . $e->getMessage();
            header('Location: ../../');
            exit;
        }
    }


}
