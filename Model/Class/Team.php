<?php


class Team
{
    private $id;
    private $name;
    private $points;
    private $goals;
    private $misses;
    private $image;

    /**
     * Team constructor.
     * @param $name
     * @param $points
     * @param $goals
     * @param $misses
     * @param $image
     * @param null $id
     */

    public function __construct($name, $points, $goals, $misses, $image,$id=null)
    {
        $this->id =$id;
        $this->name = $name;
        $this->points = $points;
        $this->goals = $goals;
        $this->misses = $misses;
        $this->image = $image;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @param mixed $goals
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;
    }

    /**
     * @return mixed
     */
    public function getMisses()
    {
        return $this->misses;
    }

    /**
     * @param mixed $misses
     */
    public function setMisses($misses)
    {
        $this->misses = $misses;
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