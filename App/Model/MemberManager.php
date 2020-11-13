<?php

require_once("Model/UserManager.php");

class MemberManager extends UserManager
{
    public function addMember() {
        $id = $this->getLastUserById();
        $column = ["user"];
        $this->insertRow("members", $column, $id);
    }
}