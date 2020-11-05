<?php

require_once("DAO.php");

class UserDAO extends DAO
{

    public function addUser($name, $firstname, $profilePicture, $phone, $email, $password)
    {
        $column = ["name", "firstname", "profile_picture", "phone", "email", "password"];
        $values = ["'$name'", "'$firstname'", "'$profilePicture'", "'$phone'", "'$email'", "'$password'"];
        $this->insertRow("users", $column, $values);
    }

    public function getLastUserById()
    {
        $sql = "SELECT id FROM `users` order by creation_date desc LIMIT 1";
        return $this->queryRow($sql);
    }

    public function getUsersDataByEmail($email)
    {
        $sql = "SELECT * FROM `users` WHERE email = ?";
        $userEmail = $this->queryRow($sql, $email);

        return $userEmail;
    }

    public function getUserStatus($email)
    {
        $sql = "SELECT * FROM `users`, `members` WHERE users.id=members.user and email = ?";
        $userStatus = $this->queryRow($sql, $email);
        if ($userStatus == true) {
            $status = "member";
        } else {
            $status = "admin";
        }
        return $status;
    }

}