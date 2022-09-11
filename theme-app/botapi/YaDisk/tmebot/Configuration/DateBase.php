<?php

class DateBase
{
    private $host = 'localhost';
    private $dbname = 'u1690254_default';
    private $username = 'u1690254_default';
    private $password = 'bbZDF0JfeZkO55M4';
    public  $connection;

    static private $_ins = NULL;

    static public function get_instance()
    {
        if(self::$_ins instanceof self)
        {
            return self::$_ins;
        }
        return self::$_ins = new self;
    }

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . '', $this->username, $this->password);
        $this->connection->exec("set names utf8");
    }

    private function __clone()
    {

    }

    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }
}