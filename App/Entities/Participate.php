<?php


class Participate
{
    private $_reservationCode;
    private $_user;
    private $_event;

    /**
     * Participate constructor.
     * @param $_reservationCode
     * @param $_user
     * @param $_event
     */
    public function __construct($_reservationCode, $_user, $_event)
    {
        $this->_reservationCode = $_reservationCode;
        $this->_user = $_user;
        $this->_event = $_event;
    }

    /**
     * @return mixed
     */
    public function getReservationCode()
    {
        return $this->_reservationCode;
    }

    /**
     * @param mixed $reservationCode
     */
    public function setReservationCode($reservationCode): void
    {
        $this->_reservationCode = $reservationCode;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->_user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->_user = $user;
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


}