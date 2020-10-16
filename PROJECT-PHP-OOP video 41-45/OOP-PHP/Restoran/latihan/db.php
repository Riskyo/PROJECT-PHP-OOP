<?php

class DB
{

    // Properti
    public $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $database = "dbrestoran";

    public function __construct()
    {
        echo "function construct";
    }

    // Method
    public function selectdata()
    {
        echo 'select data';
    }

    public function getdatabase()
    {
        return $this->database;
    }

    public function tampil()
    {
        $this->selectdata();
    }

    public static function insertdata()
    {
        echo "static function";
    }
}

DB::insertdata();

// $db = new DB;
// echo '<br>';

// $db->selectdata();
// echo '<br>';

// echo $db->host;
// echo '<br>';

// echo $db->getdatabase() . '<br>';

// $db->tampil();
