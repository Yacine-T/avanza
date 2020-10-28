<?php


class CompositionBasket
{
    private $_user;
    private $_admin;
    private $_basket;
    private $_fruit;
    private $_vegetable;
    private $_eggsBox;

    /**
     * CompositionBasket constructor.
     * @param $_user
     * @param $_admin
     * @param $_basket
     * @param $_fruit
     * @param $_vegetable
     * @param $_eggsBox
     */
    public function __construct($_user, $_admin, $_basket, $_fruit, $_vegetable, $_eggsBox)
    {
        $this->_user = $_user;
        $this->_admin = $_admin;
        $this->_basket = $_basket;
        $this->_fruit = $_fruit;
        $this->_vegetable = $_vegetable;
        $this->_eggsBox = $_eggsBox;
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
    public function getAdmin()
    {
        return $this->_admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin): void
    {
        $this->_admin = $admin;
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
    public function getFruit()
    {
        return $this->_fruit;
    }

    /**
     * @param mixed $fruit
     */
    public function setFruit($fruit): void
    {
        $this->_fruit = $fruit;
    }

    /**
     * @return mixed
     */
    public function getVegetable()
    {
        return $this->_vegetable;
    }

    /**
     * @param mixed $vegetable
     */
    public function setVegetable($vegetable): void
    {
        $this->_vegetable = $vegetable;
    }

    /**
     * @return mixed
     */
    public function getEggsBox()
    {
        return $this->_eggsBox;
    }

    /**
     * @param mixed $eggsBox
     */
    public function setEggsBox($eggsBox): void
    {
        $this->_eggsBox = $eggsBox;
    }


}