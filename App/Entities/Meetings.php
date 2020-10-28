<?php

require_once ("Post.php");

class Meetings extends Post
{
    private $_id;
    private $_reporter;

    /**
     * Meetings constructor.
     * @param $_id
     * @param $_reporter
     */
    public function __construct($_id, $_reporter)
    {
        $this->_id = $_id;
        $this->_reporter = $_reporter;
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
    public function getReporter()
    {
        return $this->_reporter;
    }

    /**
     * @param mixed $reporter
     */
    public function setReporter($reporter): void
    {
        $this->_reporter = $reporter;
    }

}