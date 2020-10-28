<?php
require_once ("User.php");

class Member extends User
{
    private $_id;

    /**
     * Member constructor.
     * @param $_id
     * @param $_user
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