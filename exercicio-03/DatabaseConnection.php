<?php

class DatabaseConnection
{
    private static $instance = null;
    private $dbconn;

    private function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pswd = "root";
        $db = "banco";

        try {
            $this->dbconn = mysqli_connect($host, $user, $pswd, $db);
            $this->dbconn->set_charset('utf8');
        } catch ( Exception $e ) {
            die("Erro na conexão com MySQL! " . $e->getMessage());
        }
    }

    static function getInstance()
    {
        if ( self::$instance == NULL ) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }
}