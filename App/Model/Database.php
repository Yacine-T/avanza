<?php


class Database
{
    private $db;
    private static $instance = null;

    /**
     * Database constructor.
     */
    public function __construct()
    {;
    }

    /**
     * @return PDO
     */
    public function getDb(): PDO
    {
        return $this->db = new PDO("mysql:host=".HOST."; dbname=".DBNAME.";charset=".ENCODING , USER, PASSWORD);
    }

    /**
     * @return null
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function  __clone()
    {

    }

    public function __wakeup() {

    }

}