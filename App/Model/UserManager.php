<?php

require_once("Manager.php");

class UserManager extends Manager
{

    public function addUser($name, $firstname, $profilePicture, $phone, $email, $password)
    {
        $column = ["name", "firstname", "profile_picture", "phone", "email", "password"];
        $values = ["'$name'", "'$firstname'", "'$profilePicture'", "'$phone'", "'$email'", "'$password'"];
        $this->insert("users", $column, $values);
    }

    public function getLastUserById()
    {
        $sql = "SELECT id FROM `users` order by creation_date desc LIMIT 1";
        return $this->queryRow($sql);
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM `users`";
        $users = $this->queryRow($sql);

        return $users;
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

    public function updateUser($id, $name, $firstname, $profilePicture, $phone, $email) {
        $data = ["`name` = " . "'$name'", "`firstname` = " . "'$firstname'", "`profile_picture` = " . "'$profilePicture'", "`phone` = " . "'$phone'", "`email` = " . "'$email'"];
        $conditions = ["`id` = " . "$id"];
        $this->update("`users`", $data, $conditions);
    }

    public function removeUser($id) {
        $conditions = ["`id` = " . $id];
        $this->delete("`users`", $conditions);
    }

}