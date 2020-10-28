<?php

require_once ("Post.php");

class Recipe extends Post
{
    private $_id;
    private $_nbGuest;
    private $_preparationTime;
    private $_origin;
    private $_rate;

    /**
     * Recipe constructor.
     * @param $_id
     * @param $_nbGuest
     * @param $_preparationTime
     * @param $_origin
     * @param $_rate
     */
    public function __construct($_id, $_nbGuest, $_preparationTime, $_origin, $_rate)
    {
        $this->_id = $_id;
        $this->_nbGuest = $_nbGuest;
        $this->_preparationTime = $_preparationTime;
        $this->_origin = $_origin;
        $this->_rate = $_rate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getNbGuest()
    {
        return $this->_nbGuest;
    }

    /**
     * @param mixed $nbGuest
     */
    public function setNbGuest($nbGuest): void
    {
        $this->_nbGuest = $nbGuest;
    }

    /**
     * @return mixed
     */
    public function getPreparationTime()
    {
        return $this->_preparationTime;
    }

    /**
     * @param mixed $preparationTime
     */
    public function setPreparationTime($preparationTime): void
    {
        $this->_preparationTime = $preparationTime;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->_origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin): void
    {
        $this->_origin = $origin;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->_rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate): void
    {
        $this->_rate = $rate;
    }

}