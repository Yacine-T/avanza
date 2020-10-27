<?php

require_once ("Database.php");

class DAO
{
    public function request($sql, $param = null) {
        if ($param == null) {
            $exec = Database::getInstance()->getDb()->query($sql);
        }

        else {
           $query = Database::getInstance()->getDb()->prepare($sql);
           $exec = $query->execute(array($param));
        }

        return $exec;
    }

    public function queryAll() {

        try {
            $request = $this->request();
            $data = $request->fetchAll(PDO::FETCH_ASSOC);
            $data->closeCursor();
        }

        catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }

        return $data;
    }

    public function queryRow() {

        try {
            $request = $this->request();
            $data = $request->fetch(PDO::FETCH_ASSOC);
            $data->closeCursor();
        }

        catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }

        return $data;
    }


}

