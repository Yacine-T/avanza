<?php


class WorkshopActivities
{
    private $_id;
    private $_creator;
    private $_event;
    private $_workshop;
    private $_activity;

    /**
     * WorkshopActivities constructor.
     * @param $_id
     * @param $_creator
     * @param $_event
     * @param $_workshop
     * @param $_activity
     */
    public function __construct($_id, $_creator, $_event, $_workshop, $_activity)
    {
        $this->_id = $_id;
        $this->_creator = $_creator;
        $this->_event = $_event;
        $this->_workshop = $_workshop;
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
    public function getWorkshop()
    {
        return $this->_workshop;
    }

    /**
     * @param mixed $workshop
     */
    public function setWorkshop($workshop): void
    {
        $this->_workshop = $workshop;
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