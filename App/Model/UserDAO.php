<?php

require_once("Database.php");
require_once("DAO.php");

class UserDAO extends DAO
{

    public function addUser($name, $firstname, $profilePicture, $phone, $email, $password) {
        $column = ["name", "firstname", "profile_picture", "phone", "email", "password" ];
        $values = [ "'$name'", "'$firstname'", "'$profilePicture'", "'$phone'", "'$email'", "'$password'"];

        $this->insertRow("users", $column, $values);
    }

    public function selectAllUser() {
        $sql = "SELECT * FROM users";
        return $this->queryAll();
    }

}