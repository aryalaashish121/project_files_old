<?PHP
$conn = mysqli_connect("localhost","root","","e_cars");
$query = "select * from visit_count";
$result = mysqli_query($conn,$query);

if($result->num_rows==0){
	$insertQuery = "insert into visit_count Values('')";
	mysqli_query($conn,$insertQuery);
}
else{
	$row = $result->fetch_assoc();
	$updateQuery = "UPDATE visit_count set views=views+1";
	mysqli_query($conn,$updateQuery);
}
?>