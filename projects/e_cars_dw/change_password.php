
<?php 
        session_start();
	require ("connection.php");
	
	include_once 'header.php';
?>
<section>
<div class="main_box">
    <div class="indexes">
            <ul>
                
                <li>|<a href="general_drash.php">HOME</a></li>
                <li>|<a href="e_forum.php">Community Forum</a></li>
                <li>|<a href="change_password.php">Update my info</a></li>
                

            </ul>
         </div>
            <p><h1 id="display_text">Change Password</h1></p>
        	<?php
        $con=  mysqli_connect("localhost", "root", "", "e_cars");
        
	$a=$_SESSION['id'];
	$query="select * from tbl_register where id=$a";
        $result= mysqli_query($con,$query);
	$data=mysqli_fetch_array($result);

        
	?>
    <div class="c_form">
        <h3>Dear. <b style="color: olive; font-size: 18px; text-emphasis: #EEEB66;"><i> <?php echo $data['fname'] ?></b></i>, You can change Username and password</h3>
        <form action="e_action.php" method="post">
            <label> Username </label><br>
            <input type="text" name="username" value="<?php echo $data['username']; ?>"/><br><br>
            <label> Password </label><br>
            <input type="password" name="password"/><br><br>
            <button type="submit" name="go">Go </button> 
            
        </form></div>
    
    <div class="c_form_down">
        <h3 style="font-family: fantasy;text-align: center; color: chocolate;font-size: 30px;">Update your additional Details</h3>
        <form action="e_action.php" method="post"><br><br>
            <label>Name </label><br>
            <input type="text" name="fname" value="<?php echo $data['fname']; ?>"/>
            <input type="text" name="mname" value="<?php echo $data['mname']; ?>"/>
            <input type="text" name="lname" value="<?php echo $data['lname']; ?>"/>
            <br>
            <label>Contact no.</label>
            <br><input type="text" name="ph" value="<?php echo $data['ph']; ?>"/>
            <br>
            <label>Country</label>
            <br><input type="text" name="country" value="<?php echo $data['country']; ?>"/>
            <br>
            <label>Address</label>
            <br><input type="text" name="address" value="<?php echo $data['address']; ?>"/>
            <br>
            <label>Email</label>
            <br><input type="email" name="email" value="<?php echo $data['email']; ?>"/>
            <br><br> <label> Username </label><br>
            <input type="text" name="username" value="<?php echo $data['username']; ?>"/><br><br>
            <label> Password </label><br>
            <input type="password" name="password"/><br><br>
            
            <p><h1>Current Age:</h1> <?php $past=new DateTime($data['dob']);
                            $now= new DateTime('today');
                            echo $past->diff($now)->y;
                            ?></p>
            
            <button type="submit" name="update">UPDATE </button> 
            <button type="reset" name="update">RESET </button> 
        </form></div>
    </div>

</section>

<?php        include 'footer.php'; ?>