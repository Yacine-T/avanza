<?php

require_once ("Database.php");

class DAO
{
    public function request($sql, $param = null) {
        if ($param == null) {
            $query = Database::getInstance()->getDb()->query($sql);
        }

        else {
           $query = Database::getInstance()->getDb()->prepare($sql);
           $query->execute(array($param));
        }

        return $query;
    }

    public function queryAll($sql, $param = null) {

        try {
            $request = $this->request($sql, $param);
            $data = $request->fetchAll(PDO::FETCH_ASSOC);
            $request->closeCursor();
        }

        catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }

        return $data;
    }

    public function queryRow($sql, $param = null) {

        try {
            $request = $this->request($sql, $param);
            $data = $request->fetch(PDO::FETCH_ASSOC);
            $request->closeCursor();
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

