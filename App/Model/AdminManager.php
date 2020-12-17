<?php

require_once("Model/UserManager.php");

class AdminManager extends UserManager
{

    /**
     * AdminManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addAdmin() {
        $id = $this->getLastUserId();
        $column = ["user"];
        $this->insert("admins", $column, $id);
    }

    public function removeAdmin($id) {
        $conditions = ["`user` = " . $id];
        $this->delete("`admins`", $conditions);
    }
}