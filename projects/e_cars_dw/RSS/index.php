<?php
echo header("content-type:text/xml");
echo "<?xml version='1.0' ?>";
echo "<cars>";
$conn=mysqli_connect("localhost","root","","e_cars");
$query ="select * from tbl_cars";

$r=mysqli_query($conn,$query);

while($data=mysqli_fetch_array($r))
{
$desc = mysqli_real_escape_string($conn,$data['description']);
echo "<car>";
echo "<car_name>".$data['c_name']."</car_name>";
echo "<rating>".$data['rating']."</rating>";
echo "<description>".$desc."</description>";
echo "<price>".$data['price']."</price>";
echo "<battery_life>".$data['batter_life']."</battery_life>";
echo "<fuel_type>".$data['fuel_type']."</fuel_type>";
echo "</car>";
}

echo "</cars>";
 ?>