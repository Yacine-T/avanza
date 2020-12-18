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
        parent::insert("members", $column, $id);
    }

    public function removeMember($id) {
        $conditions = ["`user` = " . $id];
        parent::delete("`members`", $conditions);
    }
}