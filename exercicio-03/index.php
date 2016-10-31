<?php

class MyUserClass
{
    private $dbconn;
    
    public function __construct()
    {
        $this->dbconn = DatabaseConnection::getInstance();
    }

    public function getUserList()
    {
        $results = $this->dbconn->query('select name from user');

        sort($results);

        return $results;
    }

}