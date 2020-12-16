<?php

require_once("Manager.php");

class UserManager extends Manager
{

    public function addUser($name, $firstname, $profilePicture, $phone, $email, $password, $payment)
    {
        $columns = ["name", "firstname", "profile_picture", "phone", "email", "password", "payment_method"];
        $values = ["'$name'", "'$firstname'", "'$profilePicture'", "'$phone'", "'$email'", "'$password'", "'$payment'"];

        $this->insert("users", $columns, $values);
    }

    public function getLastUserId()
    {
        $sql = "SELECT id FROM `users` order by creation_date desc LIMIT 1";
        $lastUser = $this->queryAll($sql);

        return $lastUser;
    }

    public function getUsersDatasByEmail($email)
    {
        $sql = "SELECT * FROM `users` WHERE email = ? ";
        $users = $this->queryRow($sql, $email);

        return $users;
    }

    public function getUserStatus($email)
    {
        $sql = "SELECT * FROM `users`, `members` WHERE users.id=members.user and email = ?";
        $status = $this->queryRow($sql, $email);

        return $status;
    }

    public function updateUser($id, $name, $firstname, $profilePicture, $phone, $email, $password) {
        $data = ["`name` = " . "'$name'", "`firstname` = " . "'$firstname'", "`profile_picture` = " . "'$profilePicture'", "`phone` = " . "'$phone'", "`email` = " . "'$email'", "`password` = " . "'$password'"];
        $conditions = ["`id` = " . "$id"];
        $this->update("`users`", $data, $conditions);
    }

    public function removeUser($id) {
        $conditions = ["`id` = " . $id];
        $this->delete("`users`", $conditions);
    }

    public function email_verify($email) {
        $sql = "SELECT COUNT(*) as nbUsers FROM `users` WHERE email = ?";
        $rows =  $this->queryRow($sql, $email);

        return $rows;
    }

}