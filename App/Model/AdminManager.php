<?php

require_once("Model/UserManager.php");

class AdminManager extends UserManager
{
    public function addAdmin() {
        $id = $this->getLastUserById();
        $column = ["user"];
        $this->insert("admins", $column, $id);
    }

    public function removeAdmin($id) {
        $conditions = ["`user` = " . $id];
        $this->delete("`admins`", $conditions);
    }
}