<?php


class MailType
{
    private $_id;
    private $_creator;
    private $_object;
    private $_content;

    /**
     * MailType constructor.
     * @param $_id
     * @param $_creator
     * @param $_object
     * @param $_content
     */
    public function __construct($_id, $_creator, $_object, $_content)
    {
        $this->_id = $_id;
        $this->_creator = $_creator;
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
    public function getCreator()
    {
        return $this->_creator;
    }

    /**
     * @param mixed $creator
     */
    public function setCreator($creator): void
    {
        $this->_creator = $creator;
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