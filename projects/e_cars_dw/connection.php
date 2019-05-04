<?php
class connection{
private $host="localhost";
private $db = "e_cars";
private $username="root";
private $password="";
protected $conn;

public function __construct(){

$this -> conn = mysqli_connect($this->host,$this->username,$this->password,$this->db);
}
}


 ?>