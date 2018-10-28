<?php

class Conect{

    public $host;
    public $user;
    public $pass;
    public $database;
    
    function __construct($host,$user,$pass,$database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->database = $database;
    }
     /*
     This function is used to create a connection with a MySQL database.
     It returns an open connection
     */
    function get_connection(){
        $con = new mysqli($this->host, $this->user, $this->pass ,$this->database);
        return $con;
    }

}