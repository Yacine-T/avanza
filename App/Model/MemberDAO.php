<?php

require_once("Model/UserDAO.php");
require_once ("Entities/Member.php");

class MemberDAO extends UserDAO
{
    public function addMember() {
        $id = $this->getLastUserById();
        $column = ["user"];
        $this->insertRow("members", $column, $id);
    }
}