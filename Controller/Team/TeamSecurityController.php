<?php


class TeamSecurityController
{

    private $teamManager;


    public function __construct()
    {
        $this->teamManager = new TeamDatabaseInterface();

    }

    public function viewAllTeams()
    {
        $teams = $this->teamManager->getAllTeams();

        require 'View/Team/allTeams.php';
    }

    private function checkForm()
    {
        $errors = [];

        if (empty($_POST['name'])) {
            $errors[] = 'Please add a name';
        } else {
            $lastentered['name'] = $_POST['name'];
        }

        if (empty($_POST['points'])) {
            $errors[] = 'Please add the current Points';
        } else {
            $lastentered['points'] = $_POST['points'];
        }

        if (empty($_POST['goals'])) {
            $errors[] = 'Please add the number of goals';
        } else {
            $lastentered['goals'] = $_POST['goals'];
        }

        if (empty($_POST['misses'])) {
            $errors[] = 'Please add the missed shots';
        } else {
            $lastentered['misses'] = $_POST['misses'];
        }

        return $errors;
    }


    public function addTeam()
    {

        $errors = [];
        $lastentered = [];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $errors = $this->checkForm();

            if ($_FILES['teamImg']) {

                //image prerequisites
                $extension_upload = $_FILES['teamImg']['type'];
                $authorizedExtentions = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png');
                $filename = '';

                if (($_FILES['teamImg']['size'] > 600000)) {
                    $errors[] = 'The selected image it too large , please choose a smaller image';
                } else {
                    if (in_array($extension_upload, $authorizedExtentions))
                        $filename = uniqid() . '_' . basename($_FILES['teamImg']['name']);
                    $imageUrl = move_uploaded_file($_FILES['teamImg']['tmp_name'], 'images/team/' . $filename);
                }
            }

            if (count($errors) == 0) {

                $team = new Team($_POST['name'], $_POST['points'], $_POST['goals'], $_POST['misses'], $filename);
                $this->teamManager->addTeam($team);
                header('Location: index.php?controller=team&action=list');
                exit();
            }

        }
        require 'View/Team/addTeam.php';
    }


    public function deleteTeam($id)
    {
        $team = $this->teamManager->getOneTeam($id);

        if ($team != null) {
            $this->teamManager->deleteTeam($team);
            header('Location: index.php?controller=team&action=list');
        } else {
            header('Location: index.php?controller=error&action=not-found&message=team_not_found');
        }
    }


    public function editTeam($id)
    {
        $errors = [];
        $team = $this->teamManager->getOneTeam($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = $this->checkForm();

            if (count($errors) == 0) {
                $team = new Team($_POST['name'], $_POST['points'], $_POST['goals'], $_POST['misses'], $_POST['image'],
                    $team->getId());

                $this->teamManager->updateTeam($team);

                header('Location: index.php?controller=team&action=list');
                exit();
            }
        }
        require 'View/Team/editTeam.php';
    }


    public function teamDetail($id)
    {

        $team = $this->teamManager->getOneTeam($id);

        if ($team) {
            require 'View/Team/teamDetail.php';
        } else {
            header('Location: index.php?controller=team&action=list');
            exit();
        }


    }

}