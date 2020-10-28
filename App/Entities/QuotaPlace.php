<?php


class QuotaPlace
{
    private $_id;
    private $_event;
    private $_creator;
    private $_nbPlace;

    /**
     * QuotaPlace constructor.
     * @param $_id
     * @param $_event
     * @param $_creator
     * @param $_nbPlace
     */
    public function __construct($_id, $_event, $_creator, $_nbPlace)
    {
        $this->_id = $_id;
        $this->_event = $_event;
        $this->_creator = $_creator;
        $this->_nbPlace = $_nbPlace;
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
    public function getEvent()
    {
        return $this->_event;
    }

    /**
     * @param mixed $event
     */
    public function setEvent($event): void
    {
        $this->_event = $event;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->_creator;
    }

    /**
     * @param mixed $creator
     */
    public function setCreator($creator): void
    {
        $this->_creator = $creator;
    }

    /**
     * @return mixed
     */
    public function getNbPlace()
    {
        return $this->_nbPlace;
    }

    /**
     * @param mixed $nbPlace
     */
    public function setNbPlace($nbPlace): void
    {
        $this->_nbPlace = $nbPlace;
    }


}