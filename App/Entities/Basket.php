<?php


class Basket
{
    private $_id;
    private $_creator;
    private $_description;
    private $_numberAvailable;
    private $_collectDate;
    private $_startHourCollect;
    private $_endHourCollect;
    private $_reservationDate;

    /**
     * Basket constructor.
     * @param $_id
     * @param $_creator
     * @param $_description
     * @param $_numberAvailable
     * @param $_collectDate
     * @param $_startHourCollect
     * @param $_endHourCollect
     * @param $_reservationDate
     */
    public function __construct($_id, $_creator, $_description, $_numberAvailable, $_collectDate, $_startHourCollect, $_endHourCollect, $_reservationDate)
    {
        $this->_id = $_id;
        $this->_creator = $_creator;
        $this->_description = $_description;
        $this->_numberAvailable = $_numberAvailable;
        $this->_collectDate = $_collectDate;
        $this->_startHourCollect = $_startHourCollect;
        $this->_endHourCollect = $_endHourCollect;
        $this->_reservationDate = $_reservationDate;
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
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getNumberAvailable()
    {
        return $this->_numberAvailable;
    }

    /**
     * @param mixed $numberAvailable
     */
    public function setNumberAvailable($numberAvailable): void
    {
        $this->_numberAvailable = $numberAvailable;
    }

    /**
     * @return mixed
     */
    public function getCollectDate()
    {
        return $this->_collectDate;
    }

    /**
     * @param mixed $collectDate
     */
    public function setCollectDate($collectDate): void
    {
        $this->_collectDate = $collectDate;
    }

    /**
     * @return mixed
     */
    public function getStartHourCollect()
    {
        return $this->_startHourCollect;
    }

    /**
     * @param mixed $startHourCollect
     */
    public function setStartHourCollect($startHourCollect): void
    {
        $this->_startHourCollect = $startHourCollect;
    }

    /**
     * @return mixed
     */
    public function getEndHourCollect()
    {
        return $this->_endHourCollect;
    }

    /**
     * @param mixed $endHourCollect
     */
    public function setEndHourCollect($endHourCollect): void
    {
        $this->_endHourCollect = $endHourCollect;
    }

    /**
     * @return mixed
     */
    public function getReservationDate()
    {
        return $this->_reservationDate;
    }

    /**
     * @param mixed $reservationDate
     */
    public function setReservationDate($reservationDate): void
    {
        $this->_reservationDate = $reservationDate;
    }


}