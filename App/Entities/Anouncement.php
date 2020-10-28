<?php

require_once ("Post.php");

class Anouncement extends Post
{
    private $_id;

    /**
     * Anouncement constructor.
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