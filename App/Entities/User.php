<?php


class User
{
    protected $id;
    protected $name;
    protected $firtsname;
    protected $profilePicture;
    protected $phone;
    protected $email;
    protected $password;
    protected $accountVerified;
    protected $paiementOnline;
    protected $paiementDate;
    protected $creationDate;

    /**
     * User constructor.
     * @param $id
     * @param $name
     * @param $firtsname
     * @param $profilePicture
     * @param $phone
     * @param $email
     * @param $password
     * @param $accountVerified
     * @param $paiementOnline
     * @param $paiementDate
     * @param $creationDate
     */
    public function __construct($id, $name, $firtsname, $profilePicture, $phone, $email, $password, $accountVerified, $paiementOnline, $paiementDate, $creationDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->firtsname = $firtsname;
        $this->profilePicture = $profilePicture;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->accountVerified = $accountVerified;
        $this->paiementOnline = $paiementOnline;
        $this->paiementDate = $paiementDate;
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirtsname()
    {
        return $this->firtsname;
    }

    /**
     * @param mixed $firtsname
     */
    public function setFirtsname($firtsname): void
    {
        $this->firtsname = $firtsname;
    }

    /**
     * @return mixed
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param mixed $profilePicture
     */
    public function setProfilePicture($profilePicture): void
    {
        $this->profilePicture = $profilePicture;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAccountVerified()
    {
        return $this->accountVerified;
    }

    /**
     * @param mixed $accountVerified
     */
    public function setAccountVerified($accountVerified): void
    {
        $this->accountVerified = $accountVerified;
    }

    /**
     * @return mixed
     */
    public function getPaiementOnline()
    {
        return $this->paiementOnline;
    }

    /**
     * @param mixed $paiementOnline
     */
    public function setPaiementOnline($paiementOnline): void
    {
        $this->paiementOnline = $paiementOnline;
    }

    /**
     * @return mixed
     */
    public function getPaiementDate()
    {
        return $this->paiementDate;
    }

    /**
     * @param mixed $paiementDate
     */
    public function setPaiementDate($paiementDate): void
    {
        $this->paiementDate = $paiementDate;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate): void
    {
        $this->creationDate = $creationDate;
    }


}