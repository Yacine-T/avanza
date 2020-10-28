<?php


class BasketReservation
{
    private $_reservationCode;
    private $_owner;
    private $_basket;
    private $_numberBasketReserved;
    private $_dateReservation;

    /**
     * BasketReservation constructor.
     * @param $_reservationCode
     * @param $_owner
     * @param $_basket
     * @param $_numberBasketReserved
     * @param $_dateReservation
     */
    public function __construct($_reservationCode, $_owner, $_basket, $_numberBasketReserved, $_dateReservation)
    {
        $this->_reservationCode = $_reservationCode;
        $this->_owner = $_owner;
        $this->_basket = $_basket;
        $this->_numberBasketReserved = $_numberBasketReserved;
        $this->_dateReservation = $_dateReservation;
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
    public function getOwner()
    {
        return $this->_owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner): void
    {
        $this->_owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getBasket()
    {
        return $this->_basket;
    }

    /**
     * @param mixed $basket
     */
    public function setBasket($basket): void
    {
        $this->_basket = $basket;
    }

    /**
     * @return mixed
     */
    public function getNumberBasketReserved()
    {
        return $this->_numberBasketReserved;
    }

    /**
     * @param mixed $numberBasketReserved
     */
    public function setNumberBasketReserved($numberBasketReserved): void
    {
        $this->_numberBasketReserved = $numberBasketReserved;
    }

    /**
     * @return mixed
     */
    public function getDateReservation()
    {
        return $this->_dateReservation;
    }

    /**
     * @param mixed $dateReservation
     */
    public function setDateReservation($dateReservation): void
    {
        $this->_dateReservation = $dateReservation;
    }


}