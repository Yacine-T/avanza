<?php


class Database
{
    private $db = null;
    private static $instance = null;

    /**
     * Database constructor.
     * @param null $db
     */
    public function __construct($db)
    {
        $this->db = new PDO(HOST, DBNAME, ENCODING, ID, PASSWORD);
    }

    /**
     * @return PDO
     */
    public function getDb(): PDO
    {
        return $this->db;
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