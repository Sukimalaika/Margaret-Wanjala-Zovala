<?php
require_once "ClassLoader.php";
class Quote extends Database implements Crud{
    public function __construct(){
        parent::__construct();//call my parents constructor (Database)
    }
public function insert (){
    //dob-1999,dod-null or 2022
    $sql="INSERT INTO quote (quote,author,dob,dod,category) 
    VALUES('In God we trust, all the others bring data','W Edwards Deming',1901,1993,'data-science')";
    //execute this query
    $this->connection->query($sql);

}
public function get($id=0){}
public function delete ($id){}
}
$test=new Quote();//create an object
$test->insert();//call the method