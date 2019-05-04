<?php
include_once './header.php';
$idd=$_GET['id'];

?>
<section>
			<?php    
			require("e_user.php");
			if(!isset($_SESSION['id'])|| !isset($_SESSION['usertype']))
			{
                            if ($_SESSION['usertype'] != "admin") {
                         header("location:index.php");
                         }
}
			?>
			
			<?php 
			
			$obj = new user;
			$id=$_SESSION['id'];
			$obj->setId($id);
			$data=$obj->selectAlluser();
                        $result=$obj->print_cars();
                        
                        $car=$obj->InsertCar();
                        
			//echo "welcome".$data['fname']." ".$data['mname']." ".$data['lname'];
			?>
    <?php
    $con = mysqli_connect("localhost","root","","e_cars");
    $query = "select * from tbl_cars where c_id=$idd";
    $res=mysqli_query($con,$query);
    $datas=  mysqli_fetch_array($res);
    $_SESSION['idd']=$datas['c_id'];
    ?>

<div class="photo">

<?php
echo "<h1>welcome</h1><br><h2>".$data['fname']." ".$data['mname']." ".$data['lname']."</h2>"; ?>
  

</div>

    <div class="main_box">
        <div class="indexes">
            <ul>
                <li><a href="admin_drash.php">HOME</a></li>
                <li>|<a href="general_drash.php">General View</a></li>
                <li>|<a href="edit_dash.php">User Data</a></li>
                

            </ul>
        </div>
        <p><h1 id="admin_board">Admin Drash-borad</h1></p>
        
        
        <div class="car_insert">
            <h1 class="cars_">Update Cars</h1>
            <form method="post" action="e_action.php" enctype="multipart/form-data">
                <p><label>Car Name</label><br>
                    <input type="text" name="c_name" value="<?php echo $datas['c_name']; ?>"/></p>
                
                <p> <label>Description</label><br>
                    <input type="text" name="c_desc" value="<?php echo $datas['description']; ?>"/></p>
                
                <p><label>Rating</label><br>
                    <input type="number" name="c_rating" value="<?php echo $datas['rating']; ?>"/></p>
                
                <p><label>price</label></br>
                    Rs.<input type="number" name="c_price" value="<?php echo $datas['price']; ?>"/></p>
                
                <p><label>Fuel type</label><br>
                    <input type="text" name="fuel_type" value="<?php echo $datas['fuel_type']; ?>"/></p>
                
                <p><label>Battery Life</label><br>
                    <input type="number" name="battery_life" value="<?php echo $datas['batter_life']; ?>"/> Years</p>
                <p><label>Car Image</label><br>
                    <input type="file" name="image" id="image" required "/>
                    
                </p>
                <p><input type="submit" name="c_update" id="update" class="sub" value="Update"/>
                          
                <input type="reset" name="reset" class="sub" value="RESET"/></p>
            </form>
            
            <div > <img src="images/cars/<?php echo $datas['image']; ?>" style="height:100px; width:100px; margin-left: 200px; margin-top:-200px; "></div>
        </div>
    
    
   