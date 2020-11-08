<?php

require_once("Model/UserDAO.php");
require_once("Entities/Member.php");

class AdminDAO extends UserDAO
{
    public function addAdmin() {
        $id = $this->getLastUserById();
        $column = ["user"];
        $this->insertRow("admins", $column, $id);
    }
}