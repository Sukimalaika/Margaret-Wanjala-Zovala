<?php
//constants
define ("DB_HOST","localhost");
define ("DB_USER","root");
define ("DB_PASS","");
define ("DB_NAME","class_db");
define ("DB_PORT","3306");

class Database{
    //class property
    public $connection;
    //constructor
public function __construct(){
    $this->connection=
    new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);
//echo "<p>Classes\Database</p>";
//If things go wrong,
if ($this->connection->connect_error){
    echo "Something went wrong"
    .$this->connection->connect_errno;
    die(); //stops execution so you can exit
}
}
}
$test=new Database();//an example of an object