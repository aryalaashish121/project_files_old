<!DOCTYPE html>
<html>
		<head>
			<title>Eco-Friendly-car</title>
			<link rel="stylesheet" href="style.css" type="text/css">
		</head>


<body>
    <?php
    if(isset($_SESSION['msg'])){
        if($_SESSION['msg']==1){
            echo '<script> alert("Sorry!! Registration Unsucessful. Try Again! ")</script>';
                      unset($_SESSION['msg']);
        }
    }
    ?>

<header>
	<nav>
		<div class="main">
			<ul>
			<li><a href="index.php">Eco-Friendly-car.com </a></li>
			</ul>
			
			<div class="nav-login">
			<form action="e_action.php" method="post">
			<input type="text" name="user_name" placeholder="Username" required/>
			<input type="password" name="pass_word" placeholder="Password" required/>
			<button type="submit" name="sub_mit">Login </button>
			</form>
			<a href="e_registration.php">Sign up</a>
			</div>
	</nav>
		</div>
</header>
<section>
			
			<div class="nav-register">
			<h2>Sign-up</h2><br>
			
			<form action="e_action.php" method="post" name="f1" action="#" onsubmit="return validate()">

                            <p>First Name <input type="text" name="_fname" required="required"/></p>
				<p>Middle Name <input type="text" name="_mname"/></p>
                                <p>Last Name <input type="text" name="_lname"required="required"/></p><br>
				
				<p class="make_zero_radio"><label>Gender</label>
								<input type="radio" value="male" name="r_btn">Male</label>
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
					
				<p>	<br>
				<button type="submit" name="_submit">REGISTER </button></p>
				
			</form>
		</div>

</secton>
<script>
function validate(){  
var postal=document.f1._pcode.value;  
var password=document.f1._password.value;  
var phone=document.f1._ph.value;
var user = document.f1._username.value;
var status=false;  
  
if(password.length<3){  
alert("Password must be at least 3 char long");  
status=false;  
}
if(phone.length !==10){
    alert("Invailed Phone Number");
    status=false;
    }
id(postal.length!==6){
    alert("Postal code Invailed !! Must be 6 digit.");
    status=false;
}
  
if(user.length<6){
    alert("Invailed Username !! Too short Username!!");
    status=false;
}
return status;  
}
</script> 

<?php 
include_once 'footer.php';
?>