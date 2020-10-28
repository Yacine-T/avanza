<?php


class Preparation
{
    private $_id;
    private $_step;

    /**
     * Preparation constructor.
     * @param $_id
     * @param $_step
     */
    public function __construct($_id, $_step)
    {
        $this->_id = $_id;
        $this->_step = $_step;
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
    public function getStep()
    {
        return $this->_step;
    }

    /**
     * @param mixed $step
     */
    public function setStep($step): void
    {
        $this->_step = $step;
    }

}