<?php


class User
{
    protected $_id;
    protected  $_name;
    protected $_firtsname;
    protected $_profilePicture;
    protected $_phone;
    protected $_email;
    protected $_password;
    protected $_accountVerified;
    protected $_creationDate;

    /**
     * User constructor.
     * @param $_id
     * @param $_name
     * @param $_firtsname
     * @param $_profilePicture
     * @param $_phone
     * @param $_email
     * @param $_password
     * @param $_accountVerified
     * @param $_creationDate
     */
    public function __construct($_id, $_name, $_firtsname, $_profilePicture, $_phone, $_email, $_password, $_accountVerified, $_creationDate)
    {
        $this->_id = $_id;
        $this->_name = $_name;
        $this->_firtsname = $_firtsname;
        $this->_profilePicture = $_profilePicture;
        $this->_phone = $_phone;
        $this->_email = $_email;
        $this->_password = $_password;
        $this->_accountVerified = $_accountVerified;
        $this->_creationDate = $_creationDate;
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
    public function getFirtsname()
    {
        return $this->_firtsname;
    }

    /**
     * @param mixed $firtsname
     */
    public function setFirtsname($firtsname): void
    {
        $this->_firtsname = $firtsname;
    }

    /**
     * @return mixed
     */
    public function getProfilePicture()
    {
        return $this->_profilePicture;
    }

    /**
     * @param mixed $profilePicture
     */
    public function setProfilePicture($profilePicture): void
    {
        $this->_profilePicture = $profilePicture;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->_phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->_password = $password;
    }

    /**
     * @return mixed
     */
    public function getAccountVerified()
    {
        return $this->_accountVerified;
    }

    /**
     * @param mixed $accountVerified
     */
    public function setAccountVerified($accountVerified): void
    {
        $this->_accountVerified = $accountVerified;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->_creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate): void
    {
        $this->_creationDate = $creationDate;
    }
}