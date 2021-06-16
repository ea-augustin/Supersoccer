<?php


class PublicController
{
    private $publicManager;

    public function __construct()
    {
        $this->publicManager= new TeamDatabaseInterface();

    }

    public function viewAllTeams()
    {
        $teams = $this->publicManager->getAllTeams();

        require 'View/Public/allTeamsPublic.php';
    }

}