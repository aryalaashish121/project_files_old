<?php

include_once './header.php';
?>
 
<section>
			<?php    
			require("e_user.php");
			if(!isset($_SESSION['id'])|| !isset($_SESSION['usertype']))
			{
                            if(!$_SESSION['usertype'] === "admin")
			header ("location:index.php");
			}
			?>
			
			<?php 
			
			$obj = new user;
			$id=$_SESSION['id'];
			$obj->setId($id);
			$data=$obj->selectAlluser();
                        $result=$obj->print_cars();
                        $car=$obj->InsertCar();
                        $visit = $obj->totalVisits();
                        
			//echo "welcome".$data['fname']." ".$data['mname']." ".$data['lname'];
			?>

<div class="photo">
<div id="txt"></div>
<?php
echo "<h1><br>Hello</h1><br><h2>".$data['fname']." ".$data['mname']." ".$data['lname']."</h2>"; ?>
<br><a href="change_password_admin.php">change password </a>
       
</div>
    <div class="visits">
<h1><br>Total Visitors</h1><br>
<?php echo $visit['views']; ?>
       
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
        <p><h1 id="admin_board">Admin Drash-borad</h1></p>
        
        
        <div class="car_insert">
            <h1 class="cars_">Add Cars</h1>
            <form method="post" action="e_action.php" enctype="multipart/form-data">
                <p><label>Car Name</label><br>
                    <input type="text" name="c_name"/></p>
                
                <p> <label>Description</label><br>
                    <input type="text" name="c_desc"/></p>
                
                <p><label>Rating</label><br>
                    <input type="number" name="c_rating"/></p>
                
                <p><label>price</label></br>
                    Rs.<input type="number" name="c_price"/></p>
                
                <p><label>Fuel type</label><br>
                    <input type="text" name="fuel_type"/></p>
                
                <p><label>Battery Life</label><br>
                    <input type="number" name="battery_life"/> Years</p>
                <p><label>Car Image</label><br>
                    <input type="file" name="image" id="image"/>
                </p>
                <p><input type="submit" name="insert" id="insert" class="sub"  value="SAVE"/>
                <input type="reset" name="reset" class="sub" value="RESET"/></p>
            </form>
            
            
        </div>
    
    <div class="tab">
       
    <table border="2">  
    <tr>
     <th width="5%">ID</th>
     <th width="10%">Name</th>
     <th width="20%">Image</th>
     <th width="40%">Description</th>
     <th width="7.5%">Rating</th>
     <th width="7.5%">Price</th>
     <th width="7.5%">fuel type </th>
     <th width="7.5%">Battery life</th>
     <th width="5%">Change</th>
     <th width="5%">Remove</th>
    </tr>
  <?php while($cars=mysqli_fetch_array($result)){?>
   
    <tr>
        <td><?php echo $cars['c_id'];?></td>
     <td><?php echo $cars['c_name'];?></td>
     <td>
         <img src="images/cars/<?php echo $cars['image'];?>" style="height:100px; width: 100px;"/>
     </td>
     <td><?php echo $cars['description'];?></td>
     <td><?php echo $cars['rating'];?></td>
     <td><?php echo $cars['price'];?></td>
     <td><?php echo $cars['fuel_type'];?></td>
     <td><?php echo $cars['batter_life'];?></td>
     
     <td><a href="update_car.php?id=<?php echo $cars['c_id'] ?>">update</a></td>
     <td><a href="delete_car.php?id=<?php echo $cars['c_id'] ?>">Delete</a></td>
    </tr>
 <?php } ?>
  </table>

       </div>
    
    
  
    </div>
    
        </section>

