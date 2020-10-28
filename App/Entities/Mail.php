<?php


class Mail
{
    private $_id;
    private $_sender;
    private $_recipîent;
    private $_object;
    private $_content;

    /**
     * Mail constructor.
     * @param $_id
     * @param $_sender
     * @param $_recipîent
     * @param $_object
     * @param $_content
     */
    public function __construct($_id, $_sender, $_recipîent, $_object, $_content)
    {
        $this->_id = $_id;
        $this->_sender = $_sender;
        $this->_recipîent = $_recipîent;
        $this->_object = $_object;
        $this->_content = $_content;
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
    public function getSender()
    {
        return $this->_sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender): void
    {
        $this->_sender = $sender;
    }

    /**
     * @return mixed
     */
    public function getRecipîent()
    {
        return $this->_recipîent;
    }

    /**
     * @param mixed $recipîent
     */
    public function setRecipîent($recipîent): void
    {
        $this->_recipîent = $recipîent;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->_object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object): void
    {
        $this->_object = $object;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->_content = $content;
    }

}