<?php

require_once("Model/UserManager.php");

class AdminManager extends UserManager
{
    public function addAdmin() {
        $id = $this->getLastUserById();
        $column = ["user"];
        $this->insertRow("admins", $column, $id);
    }
}