<?php
$con=mysqli_connect("localhost","root","","e_cars");
if(isset($_GET['id'])){
$id=$_GET['id'];
$query= "DELETE FROM tbl_cars WHERE c_id = $id";
mysqli_query($con,$query);
    header ("location:admin_drash.php");

}
if(isset($_GET['getid'])){
$id1=$_GET['getid'];
$query="Delete from tbl_register where id=$id1";
if(mysqli_query($con,$query)){
header ("location:edit_dash.php");}
else{
mysql_error();
}}
?>
