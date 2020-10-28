<?php


class EggsBoxes
{
    private $_id;
    private $_quantity;

    /**
     * EggsBoxes constructor.
     * @param $_id
     * @param $_quantity
     */
    public function __construct($_id, $_quantity)
    {
        $this->_id = $_id;
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