<?php


class UserDatabaseInterface extends DatabaseConnection
{

    public function getOneUser($id)
    {
        $user = null;
        $query = $this->database->prepare('SELECT * FROM users WHERE id= :id');
        $query->execute(['id' => $id]);
        $results = $query->fetch();

        if ($results) {
            $user = new User($results['username'], $results['password'], $results['role'], $results['image'],
                $results['id']);
        }
        return $user;
    }



    public function findByUsername($username)
    {
        $user = null;
        $query = $this->database->prepare("SELECT * FROM users WHERE username = :username");
        $query->execute([
            'username' => $username
        ]);
        $userFromDatabase = $query->fetch();

        if ($userFromDatabase) {
            $user = new User($userFromDatabase['username'], $userFromDatabase['password'], $userFromDatabase['role'],
                $userFromDatabase['image'], $userFromDatabase['id']);
        }

        return $user;

    }

    public function testExist($username)
    {
        $user = $this->findByUsername($username);
        if ($user) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username,$password)
    {

        $userClient= null;

        $user= $this->findByUsername($username);

        if ($user) {
            if($password == $user->getPassword()){
                $userClient = $user;
            }
        }

        return $userClient;
    }


}