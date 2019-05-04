
<?php
if (isset($_COOKIE['count']) && $_COOKIE['count']>1 ){
	echo '<script> alert("Sorry ! you have been blocked.")</script>';
       
	die(); //stops form
        
}
require 'e_user.php'; 
$obj=new user;?>
<html>
		<head>
                    
			<title>Eco-Friendly-car</title>
			<link rel="stylesheet" href="style.css" type="text/css">
		</head>
               


<body class="index">
 <?php if (isset($_SESSION['msg'])){
                   if($_SESSION['msg'] == 1){
                      echo '<script> alert("Invalied Username or password")</script>';
                      unset($_SESSION['msg']);
                 }
                 elseif($_SESSION['msg']==2)
                     {
                    echo '<script> alert("You are registered !! Enter username/Password for Login")</script>';
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
			<form action="e_action.php" action="#" method="post" name="f1" onsubmit="return validate()">
			<input type="text" name="user_name" placeholder="Username" required/>
			<input type="password" name="pass_word" placeholder="Password" required/>
			<button type="submit" name="sub_mit">Login </button>
			</form>
			<a href="e_registration.php">Sign up</a>
                        
                </div>
	</nav>
	
</header>

<marquee behavior="scroll" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
    <h1 id="general">This list shows the most eco friendly cars available to buy new in the UK 2018. </h1></marquee>
<section class="section-main">
    
		<div class="bizz">
                    
                <div id="slide">
                    <img src="images/display/lambo1.jpg" title="Images auto running..." alt="Loading .." class="_image"/>
                    <img src="images/display/running.jpg" title="Images auto running..." alt="Loading.." class="_image"/>
                    <img src="images/display/fast.jpg" title="Images auto running..." alt="Loading.." class="_image"/>
                    <img src="images/display/dis3.jpg" title="Images auto running..." alt="Loading.." class="_image"/>
                    <img src="images/display/showroom.jpg" title="Images auto running..." alt="Loading.." class="_image"/>
                    
		
                </div></div>
		
    
	

</section>


<?php 
	include_once 'footer.php';
?>
<div id="visit">
<?PHP
	
include 'counter.php';
$conn = mysqli_connect("localhost","root","","e_cars");

$query = "select * from visit_count";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
				while($table = mysqli_fetch_assoc($result)){
					echo "Total Visite:&nbsp;";
					echo "<tr>
					<td>".$table['views']."</td></tr>";
}
}
?>
</div>
<script>
function validate(){  
var name=document.f1.user_name.value;  
var password=document.f1.pass_word.value;  
var status=false;  
  
if(name.length<1){  
 alert("Please enter Username");  
status=false;  
}else{  
status=true;  
}  
if(password.length<3){  
alert("Password must be at least 3 char long");  
status=false;  
}
return status;  
}  

</script>