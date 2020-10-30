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
           $exec = $query->execute($param);
        }

        return $exec;
    }

    public function queryAll($sql) {

        try {
            $request = $this->request($sql);
            $data = $request->fetchAll(PDO::FETCH_ASSOC);
            $data->closeCursor();
        }

        catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }

        return $data;
    }

    public function queryRow($sql, $param) {

        try {
            $request = $this->request($sql, $param);
            $data = $request->fetch(PDO::FETCH_ASSOC);
            $data->closeCursor();
        }

        catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }

        return $data;
    }

    public function insertRow($table, array $columns, array $values) {
            $sql = "INSERT INTO " . $table .
                    " (" . implode(',' , $columns) . " ) 
                    VALUES " . "(" . implode(',' , $values) . ")";
            $this->request($sql);
    }

}

