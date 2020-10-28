<?php

class Fruit
{
    private $_id;
    private $_name;
    private $_quantity;

    /**
     * Fruit constructor.
     * @param $_id
     * @param $_name
     * @param $_quantity
     */
    public function __construct($_id, $_name, $_quantity)
    {
        $this->_id = $_id;
        $this->_name = $_name;
        $this->_quantity = $_quantity;
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
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->_quantity = $quantity;
    }


}