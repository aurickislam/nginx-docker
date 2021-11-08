<?php

require_once '/php/composer/vendor/autoload.php';

class DbManager
{

    //Database configuration
    private $dbhost = '192.168.88.18';
    private $dbport = '27017';
    private $conn;

    function __construct()
    {
        //Connecting to MongoDB
        try {
            //Establish database connection
            $this->conn = new MongoDB\Client('mongodb://' . $this->dbhost . ':' . $this->dbport);
        } catch (MongoDBDriverExceptionException $e) {
            echo $e->getMessage();
            echo nl2br("n");
        }
    }

    function getConnection()
    {
        return $this->conn;
    }

}

?>