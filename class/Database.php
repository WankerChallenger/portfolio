<?php

class Database
{
    protected $dbh;
    public function __construct() {

        $this->dbh = new PDO('mysql:host=localhost;dbname=E6', 'root', '');
    }
    public function connection(){
        return $this->dbh;
    }

}
