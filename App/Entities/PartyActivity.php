<?php


class PartyActivity
{
    private $_id;
    private $_user;
    private $_event;
    private $_party;
    private $_activity;

    /**
     * PartyActivity constructor.
     * @param $_id
     * @param $_user
     * @param $_event
     * @param $_party
     * @param $_activity
     */
    public function __construct($_id, $_user, $_event, $_party, $_activity)
    {
        $this->_id = $_id;
        $this->_user = $_user;
        $this->_event = $_event;
        $this->_party = $_party;
        $this->_activity = $_activity;
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
    public function getEvent()
    {
        return $this->_event;
    }

    /**
     * @param mixed $event
     */
    public function setEvent($event): void
    {
        $this->_event = $event;
    }

    /**
     * @return mixed
     */
    public function getParty()
    {
        return $this->_party;
    }

    /**
     * @param mixed $party
     */
    public function setParty($party): void
    {
        $this->_party = $party;
    }

    /**
     * @return mixed
     */
    public function getActivity()
    {
        return $this->_activity;
    }

    /**
     * @param mixed $activity
     */
    public function setActivity($activity): void
    {
        $this->_activity = $activity;
    }


}