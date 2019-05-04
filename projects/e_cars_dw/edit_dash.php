<?php
include_once './header.php';
?>
<section>
			<?php    
			require("e_user.php");
			if(!isset($_SESSION['id'])|| !isset($_SESSION['usertype']))
			{
                             if (!$_SESSION['usertype'] == "admin") {
			header ("location:index.php");
                        }}
			?>
			
			<?php 
			
			$obj = new user;
			$id=$_SESSION['id'];
			$obj->setId($id);
			$data=$obj->selectAlluser();
			//echo "welcome".$data['fname']." ".$data['mname']." ".$data['lname'];
			?>

<div class="photo">

<?php
echo "<h1>welcome</h1><br><h2>".$data['fname']." ".$data['mname']." ".$data['lname']."</h2>"; ?>
<a href="change_password_admin.php">change password </a>
</div>

    <div class="main_box">
        <div class="indexes">
            <ul>
               <li><a href="admin_drash.php">HOME</a></li>
                <li>|<a href="admin_general_view.php">General View</a></li>
                <li>|<a href="edit_dash.php">User Data</a></li>
                <li>|<a href="change_password_admin.php">Profile</a></li>
                

            </ul>
        </div>
        
        <div class="user_edi" style="overflow-y: auto;" >
            <?php $con=mysqli_connect("localhost","root","","e_cars"); ?>
            <hr>
            <p id="userdata">User Data</p>
            <hr>
     <table>
     <thead><tr>
		<th>ID</th>
		<th>Name</th>

                <th>Contact</th>
                <th>Address</th>
                <th>Email</th>
              
		<th>username</th>
                 
                
                <th colspan="2">Action</th>
		
         </tr></thead><tbody>
	<?php 

	$query="select * from tbl_register";
	$result=mysqli_query($con,$query);

	while ($data=mysqli_fetch_array($result)) 
        {
	echo "<tr><td>".$data['id']."</td><td>"
            .$data['fname']." ".$data['lname']."</td><td>".$data['ph']."</td><td>".$data['address'].
            "</td><td>".$data['email']."</td><td>".$data['username']."</td>";?>
           
            <td><a href="delete_car.php?getid=<?php echo $data['id']; ?>" id="Delete">Remove</a></td>
        <?php }	?>
            </tbody>
 </table>
        <div class="nav-register">
			<h2>ADD user</h2><br>
			
			<form action="e_action.php" method="post">

                                        <p><label>First Name</label> <input type="text" name="_fname" required/></p>
                                        <p><label>Middle Name</label> <input type="text" name="_mname"/></p>
                                        <p><label>Last Name</label> <input type="text" name="_lname" required/></p><br>
				
				<p class="make_zero_radio"><label>Gender</label>
								<label><input type="radio" value="male" name="r_btn">Male</label>
								<label><input type="radio" value="female" name="r_btn"/>Female</label>
								<label><input type="radio" value="others" name="r_btn"/>Others</label>
								</p><br>
				<p>
				<label>Date of Birth</label>
                                <input type="date" name="_date">
				</p>
				
				<p>
					<label>Country</label></br>
						<select name="country" id="register_country" >
							<option value="Nepal">Nepal</option>  
							<option value="pakistan">pakistan</option>  
							<option value="India">India</option>  
							<option value="china">china</option>  
							<option value="other">other</option></select>
					
				</p>
				
				<p><label>Phone no. </label>
					<input type="text" name="_ph" required></p>
					
				<p> <label>Email </label><input type="email" name="_email" required/></p>
				<p><label>Address</label><input type="text" name="_address"/></p>
                                <p><label>Postal Code</label><input type="number" name="_pcode" required/></p>
				<p><label>Username</label>
					<input type="text" name="_username" required/></P>
					
				<p>
				<label>Password</label>
					<input type="password" name="_password" required/></p>	
                                <p><label>Usertype</label>
                                    <select name="usertype" id="user">
                                        <option value="admin">Admin</option>
                                        <option value="general">General user</option>
                                    </select>
                                </p>	
				<p>	<br>
				<button type="submit" name="_submit1">ADD </button></p>
				
			</form>
		</div>
        </div>
</div>

</section>
<?php
include_once 'footer.php';
?>