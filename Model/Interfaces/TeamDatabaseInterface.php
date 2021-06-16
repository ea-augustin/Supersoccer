<?php


class TeamDatabaseInterface extends DatabaseConnection
{
    public function __construct()
    {
        parent::__construct();
    }

   public function getAllTeams() {

       $teams = [];
       $query = $this-> database->prepare('SELECT * FROM team ORDER BY points desc ,goals desc ');
//       $query = $this-> database->prepare('SELECT * FROM team ORDER BY points desc ');
       $query->execute();
       $results=$query->fetchAll();

       foreach ($results as $result){

           $teams []= new Team($result['name'],$result['points'],$result['goals'],$result['misses'],$result['image'],
               $result['id']);
       }

       return $teams;

   }


   public function getOneTeam($id)
   {
        $team = null;
        $query = $this->database->prepare("SELECT * FROM team WHERE id = :id");
        $query->execute(['id'=> $id]);
        $results = $query->fetch();
        if($results){
            $team = new Team($results['name'],$results['points'],$results['goals'],
                              $results['misses'],$results['image'],$results['id']);
        }

        return $team;

   }


   public function addTeam(Team $team)
   {
       $query = $this ->database->prepare("INSERT INTO team (name, points, goals, misses, image) 
                                                  VALUES (:name, :points, :goals, :misses, :image)" );

       $query->execute([
           'name'=>$team->getName(),
           'points'=>$team->getPoints(),
           'goals'=>$team->getGoals(),
           'misses'=>$team->getMisses(),
           'image'=>$team->getImage()

       ]);

   }


   public function deleteTeam(Team $team){

        $query = $this->database->prepare("DELETE FROM team WHERE id= :id");
        $query->execute([

            "id"=> $team->getId()

        ]);
   }


   public function updateTeam(Team $team)
   {
       $query = $this->database->prepare("UPDATE team SET name= :name,points= :points,goals= :goals,
                                                 misses= :misses, image= :image WHERE id= :id");
       $query->execute([
           'name'=>$team->getName(),
           'points'=>$team->getPoints(),
           'goals'=>$team->getGoals(),
           'misses'=>$team->getMisses(),
           'image'=>$team->getImage(),
           'id'=>$team->getId()

       ]);
   }
}