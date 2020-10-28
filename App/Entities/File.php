<?php


class File
{
    private $_id;
    private $_mail;
    private $_user;
    private $_name;
    private $_fileName;
    private $_File;

    /**
     * File constructor.
     * @param $_id
     * @param $_mail
     * @param $_user
     * @param $_name
     * @param $_fileName
     * @param $_File
     */
    public function __construct($_id, $_mail, $_user, $_name, $_fileName, $_File)
    {
        $this->_id = $_id;
        $this->_mail = $_mail;
        $this->_user = $_user;
        $this->_name = $_name;
        $this->_fileName = $_fileName;
        $this->_File = $_File;
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
    public function getMail()
    {
        return $this->_mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->_mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->_user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->_user = $user;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->_fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName): void
    {
        $this->_fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->_File;
    }

    /**
     * @param mixed $File
     */
    public function setFile($File): void
    {
        $this->_File = $File;
    }


}