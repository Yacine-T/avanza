<?php

require_once ("Database.php");

class Manager
{

    /**
     * Manager constructor.
     */
    public function __construct()
    {
    }

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

    public function insert($table, array $columns, array $values) {
            $sql = "INSERT INTO " . $table .
                    " (" . implode(',' , $columns) . " ) 
                    VALUES (" . implode(',' , $values) . ")";
            $this->request($sql);
    }


    public function update($table, array $data, array $conditions = null) {
        $sql = "UPDATE " . $table .
            " SET " . implode(', ' , $data) .
            " WHERE " . " " . implode(' AND ' , $conditions) ;
        $this->request($sql);

    }

    public function delete($table, array $conditions) {
        $sql = "DELETE FROM" . " " . $table . " " . "WHERE" . " " . implode(' OR ', $conditions);
        $this->request($sql);
    }


}

