<?php
$con=mysqli_connect("localhost","root","","e_cars");
 class Liked extends connection{
     public $id;
     public $car;
     
     public function setId($u_id){
         $this->id=$u_id;
     }
     
     public function setLikes($car_id){
         $this->car=$car_id;
     }
     
     public function SavedBrowsingcar(){
         $bhistory="car_id";
         setcookie($history,$bhistory);
         
         $query = "insert into tbl_browsing values(null,'$this->id','$this->car')";
         $result=mysqli_query($con,$query);
     }
 }


?>