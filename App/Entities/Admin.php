<?php
require_once ("User.php");

class Admin extends User
{
    private $_id;

    /**
     * Admin constructor.
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