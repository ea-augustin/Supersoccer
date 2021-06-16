<?php


class UserSecurityController
{
    private $userDatabaseManager;


    public function __construct()
    {
        $this ->userDatabaseManager = new UserDatabaseInterface();

    }


    public function login()
    {   $errors = [];
        $lastentered = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (empty($_POST['username'])) {
                $errors[] = 'Please enter a username';
            } else {
                $lastentered['username'] = $_POST['username'];
            }

            if (empty($_POST['password'])) {
                $errors[] = 'Please enter a password';
            }

            if(count($errors)==0) {
                $loggedUser = $this->userDatabaseManager->login($_POST['username'],$_POST['password']);
                if($loggedUser){

                    $_SESSION['user'] = serialize($loggedUser);
                    header('Location: index.php?controller=team&action=list');

                }else {
                    $errors[] = 'This user does not exist';
                }
            }

        }
        require 'View/User/login.php';

    }


    public function log_out()
    {   //Destroy and unset active session
        session_destroy();

        header('Location: index.php?controller=user&action=login');


    }
}