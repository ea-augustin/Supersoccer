<?php


class User
{
    private $id;
    private $username;
    private $password;
    private $role;
    private $image;

    /**
     * User constructor.
     * @param $username
     * @param $password
     * @param $role
     * @param $image
     * @param null $id
     */
    public function __construct($username, $password, $role, $image, $id = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->image = $image;
        $this->id = $id;
    }

    public function isAdmin()
    {
        if ($this->role == "administrator") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return mixed|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed|null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }





}