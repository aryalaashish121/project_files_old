<!DOCTYPE html>
<html>
		<head>
			<title>Eco-Friendly-car</title>
			<link rel="stylesheet" href="style.css" type="text/css">
		</head>


<body>

<header>
	<nav>
		<div class="main">
			<ul>
			<li><a href="index.php">Eco-Friendly-car.com </a></li>
			</ul>
			
			<div class="nav-login">
			
			<a href="index.php">Log out</a>
			<img src="images/user.png" style="height:35px; width:35px; padding-top:8px;" >
			</div>
	</nav>
		</div>
</header>
<section>
    
			<?php    
			require("e_user.php");
			if(!isset($_SESSION['id']))
			{
			header ("location:index.php");
                        }
			$obj = new user;
			$id=$_SESSION['id'];
			$obj->setId($id);
			$data=$obj->selectAlluser();
                        $result=$obj->print_cars();
			//echo "welcome ".$data['fname']." ".$data['mname']." ".$data['lname'];
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
        
    </div><div class="display">
        <img src="images/display/car_222.jpg" style="width:960px; height: 550px;" class="images_img">
        <img src="images/display/dis2.jpg" style="width:960px; height: 550px;" class="images_img">
        <img src="images/display/jacqure.jpg" style="width:960px; height: 550px;" class="images_img">
        <img src="images/display/dis1.jpg" style="width:960px; height: 550px;" class="images_img">
        <img src="images/display/car_seven.jpg" style="width:960px; height: 550px;" class="images_img">
        


    </div>
   <h1 id="general">Cars Avaiable With their Ratings.</h1>

    <?php 
		
		while($car=mysqli_fetch_array($result)){?>
		<div class="main">;
            <div class="car_name">
               <?php echo $car['c_name'];?>
                
            </div>
            
            <div class="car_image">
                 <img src="images/cars/<?Php echo $car['image'] ?>" style=" width:500px;
    height: 300px;" />
                
            </div>
            <div class="car_desc">
                <table>
                    <tr>
                        <td id="des">Description:<br><p><?php
                        echo $car['description'];?></p></td>
                    </tr><tr>
                        <td id="no">Fuel type: <?php echo $car['fuel_type'];?></td></tr>
                    <br><tr><td id="no"> Battery life : <?php echo $car['batter_life']." years";?></td><br>
                    </tr>
                </table>
                
            </div>
            <div class="rating">
                <table class="table">
                    <tr><td>Rating:
                        <?php $a=$car['rating'];
                        $aa=1;
                            while($aa<=$a){?>
                            <img src="images/icon/star.png" style="width: 20px;height: 20px;"><?php
                                $aa++;
                            }
                                 ?></td>
                    <td>Price: $ <?php echo $car['price']; ?>.</td></tr>
                </table>
            </div>
	
	</div><?php }?>

	</div>

</div>




</section>
    
</body>
<?php include './footer.php'; ?>

<script>

var img = 0;
slider();

function slider() {
    var i;
    var x = document.getElementsByClassName("images_img");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    img++;
    if (img > x.length) {img = 1}    
    x[img-1].style.display = "block";  
    setTimeout(slider, 4000);
}
</script>