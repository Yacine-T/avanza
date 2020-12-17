<?php

require_once("Model/UserManager.php");

class MemberManager extends UserManager
{

    /**
     * MemberManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addMember() {
        $id = $this->getLastUserId();
        $column = ["user"];
        $this->insert("members", $column, $id);
    }

    public function removeMember($id) {
        $conditions = ["`user` = " . $id];
        $this->delete("`members`", $conditions);
    }
}