<?php

require_once ("Event.php");

class Party extends Event
{
    private $_id;

    /**
     * Party constructor.
     * @param $_id
     */
    public function __construct($_id)
    {
        $this->_id = $_id;
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

}