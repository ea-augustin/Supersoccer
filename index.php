<?php
session_start();

require 'include.php';


if (!isset($_GET['controller']) || !isset($_GET['action'])) {
    header("Location: index.php?controller=public&action=list");
}

//*************************************************************************
//Security User Controller
//*************************************************************************

if ($_GET['controller'] == 'user') {

    if ($_GET['action'] == 'login') {
        $controller = new UserSecurityController();
        $controller->login();


    }

    if ($_GET['action'] == 'logout') {
        $controller = new UserSecurityController();
        $controller->log_out();

    }


}

//*************************************************************************
//Security Team Controller
//*************************************************************************


if ($_GET['controller'] == 'team') {

    if (empty($_SESSION) || !$_SESSION['user']) {
        header("Location: index.php?controller=user&action=login");
    }

    if ($_GET['action'] == 'list') {
        $controller = new TeamSecurityController();
        $controller->viewAllTeams();

    }
    if ($_GET['action'] == 'add') {
        $controller = new TeamSecurityController();
        $controller->addTeam();

    }

    if ($_GET['action'] == 'delete' && isset($_GET['id'])) {
        $controller = new TeamSecurityController();
        $controller->deleteTeam($_GET['id']);

    }

    if ($_GET['action'] == 'edit' && isset($_GET['id'])) {
        $controller = new TeamSecurityController();
        $controller->editTeam($_GET['id']);

    }

    if ($_GET['action'] == 'details') {
        $controller = new TeamSecurityController();
        $controller->teamDetail($_GET['id']);

    }


}

if ($_GET['controller'] == 'public') {

    if ($_GET['action'] == 'list') {
        $controller = new PublicController();
        $controller->viewAllTeams();

    }
}