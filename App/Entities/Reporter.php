<?php


class Reporter
{
    private $_id;
    private $_agenda;
    private $_comment;

    /**
     * Reporter constructor.
     * @param $_id
     * @param $_agenda
     * @param $_comment
     */
    public function __construct($_id, $_agenda, $_comment)
    {
        $this->_id = $_id;
        $this->_agenda = $_agenda;
        $this->_comment = $_comment;
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
    public function getAgenda()
    {
        return $this->_agenda;
    }

    /**
     * @param mixed $agenda
     */
    public function setAgenda($agenda): void
    {
        $this->_agenda = $agenda;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->_comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->_comment = $comment;
    }

}