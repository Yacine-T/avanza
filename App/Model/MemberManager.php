<?php

require_once("Model/UserManager.php");

class MemberManager extends UserManager
{
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