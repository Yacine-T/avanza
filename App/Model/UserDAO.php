<?php

require_once("DAO.php");
require_once ("Entities/User.php");

class UserDAO extends DAO
{

    public function addUser($name, $firstname, $profilePicture, $phone, $email, $password) {
        $column = ["name", "firstname", "profile_picture", "phone", "email", "password" ];
        $values = [ "'$name'", "'$firstname'", "'$profilePicture'", "'$phone'", "'$email'", "'$password'"];
        $this->insertRow("users", $column, $values);
    }

    public function getLastUserById() {
        $sql = "SELECT id FROM `users` order by creation_date desc LIMIT 1";
        return $this->queryRow($sql);
    }

    public function getUsersByEmail($email) {
        $sql = "SELECT * FROM `users` WHERE email = ?";
        $users = $this->queryAll($sql, $email);

        return $users;
    }

}