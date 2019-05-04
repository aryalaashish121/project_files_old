<?php
require("e_user.php");
include_once 'connection.php';
$obj = new user;

if(isset($_POST['_submit'])){
$fname=$_POST['_fname'];
$mname=$_POST['_mname'];
$lname=$_POST['_lname'];
$gender=$_POST['r_btn'];
$date=$_POST['_date'];
$country =$_POST['country'];
$ph =$_POST['_ph'];
$address =$_POST['_address'];
$pcode=$_POST['_pcode'];
$email =$_POST['_email'];
$username =$_POST['_username'];
$password =$_POST['_password'];

$obj->setFname($fname);
$obj->setMname($mname);
$obj->setLname($lname);
$obj->setGender($gender);
$obj->setDate($date);
$obj->setCountry($country);
$obj->setPh_no($ph);
$obj->setAddress($address);
$obj->setPostalcode($pcode);
$obj->setEmail($email);
$obj->setUsername($username);
$obj->setPassword($password);

$obj->register();
}


if(isset($_POST['sub_mit']))
{


	$user =$_POST['user_name'];
	$pass =$_POST['pass_word'];
	$obj->setUsername($user);
	$obj->setPassword($pass);
	
	$obj->login();


}

if(isset($_POST['insert']))
    {$con=mysqli_connect("localhost","root","","e_cars");
    $c_name=$_POST['c_name'];
    $c_desc=$_POST['c_desc'];
    $c_rating=$_POST['c_rating'];
    $c_price=$_POST['c_price'];
    $c_fuel_type=$_POST['fuel_type'];
    $c_battery_life=$_POST['battery_life'];
    
    $file = $_FILES['image']['name'];
    echo $loc=pathinfo($file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['image']['tmp_name'], "images/cars/");

     $query="INSERT INTO tbl_cars (c_id,c_name,description,rating,price,fuel_type,batter_life,image) VALUES (null,'$c_name','$c_desc','$c_rating','$c_price','$c_fuel_type','$c_battery_life','$file')";
    if( $data=mysqli_query($con, $query)){
    echo $query;
    echo "Done";}
    else{echo "NOT DONE";}
     
   
   
   /*$obj->setCarName($c_name);
   $obj->setCarDescription($c_desc);
   $obj->setCarRating($c_rating);
   $obj->setCarPrice($c_price);
    $obj->setCarFuel($c_fuel_type);    
    $obj->setCarImage($file);

    $obj->setCarBattery($c_battery_life);
    $obj->setCarImage($file);
    
    
    $obj->InsertCar();*/
    }
    
    
    
    

    if (isset($_POST['revi_submit'])){
        
        $text=$_POST['currenttext'];
        $uid=$_POST['userid'];
        
        $obj->InsertText();
    }
    
    if (isset($_POST['go'])){
        $id=$_SESSION['id'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        
       $obj->setId($id);
       $obj->setUsername($username);
       $obj->setPassword($password);
       
       $obj->Update();
       
        
    }
    
    if(isset($_POST['update'])){
        $id=$_SESSION['getid'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $country =$_POST['country'];
        $ph =$_POST['ph'];
        $address =$_POST['address'];
        $email =$_POST['email'];
        $username =$_POST['username'];
        $password =$_POST['password'];
        
        $obj->setId($id);
        $obj->setFname($fname);
        $obj->setMname($mname);
        $obj->setLname($lname);
        $obj->setCountry($country);
        $obj->setPh_no($ph);
        $obj->setAddress($address);
        $obj->setEmail($email);
        $obj->setUsername($username);
        $obj->setPassword($password);
        
        $obj->UpdateAllUser();
    }
    
   if(isset($_POST['c_update']))
      
    {
      $ids=  $_SESSION['idd'];
      echo $ids;
    $con=mysqli_connect("localhost","root","","e_cars");
    $c_name=$_POST['c_name'];
    $c_desc=$_POST['c_desc'];
    $c_rating=$_POST['c_rating'];
    $c_price=$_POST['c_price'];
    $c_fuel_type=$_POST['fuel_type'];
    $c_battery_life=$_POST['battery_life'];
    
      
    
    $file = $_FILES['image']['name'];
    echo $loc=pathinfo($file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['image']['tmp_name'], "images/cars/".$file);
    
     $query="UPDATE tbl_cars SET c_name=\"$c_name\",description=\"$c_desc\",rating=\"$c_rating\",price=\"$c_price\",fuel_type=\"$c_fuel_type\",batter_life=\"$c_battery_life\",image=\"$file\" WHERE c_id=$ids";

     if( $data=mysqli_query($con, $query)){
   
   echo "Done";}
   else{echo "NOT DONE";}
     
   
   
  // $obj->setCarName($c_name);
   //$obj->setCarDescription($c_desc);
   //$obj->setCarRating($c_rating);
   //$obj->setCarPrice($c_price);
    //$obj->setCarFuel($c_fuel_type);    
    //$obj->setCarImage($file);

    //$obj->setCarBattery($c_battery_life);
  //  $obj->setCarImage($file);
    
    
    //$obj->InsertCar();
    }
    
    if(isset($_POST['_submit1'])){
$fname=$_POST['_fname'];
$mname=$_POST['_mname'];
$lname=$_POST['_lname'];
$gender=$_POST['r_btn'];
$date=$_POST['_date'];
$country =$_POST['country'];
$ph =$_POST['_ph'];
$address =$_POST['_address'];
$pcode=$_POST['_pcode'];
$email =$_POST['_email'];
$username =$_POST['_username'];
$password =$_POST['_password'];
$user=$_POST['usertype'];

$obj->setFname($fname);
$obj->setMname($mname);
$obj->setLname($lname);
$obj->setGender($gender);
$obj->setDate($date);
$obj->setCountry($country);
$obj->setPh_no($ph);
$obj->setAddress($address);
$obj->setPostalcode($pcode);
$obj->setEmail($email);
$obj->setUsername($username);
$obj->setPassword($password);
$obj->setUsertype($user);

$obj->addUser();
}
    
    if (isset($_POST['msg'])){
        $message=$_POST['currenttext'];
        $user_id=$_POST['uid'];
        
        $obj->setText($message);
        $obj->setUid($user_id);
        
        $obj->InsertText();
          
        
        
    }   
    
     if (isset($_POST['reply'])) 
	{
		$reply=$_POST['rply'];
		$uname=$_POST['user'];

		$obj->setReply($reply);
		$obj->setUsername($uname);

		$obj->putReply();
	}
        
        if(isset($_POST['done'])){
            $idd= $_POST['u_id'];
            $cars = $_POST['liked'];
            
         //   $obj->new Liked();
            $obj->setId($idd);
            $obj->setLikes($cars);
            
            $obj->SavedBrowsingcar();
        }
        
        if(isset($_POST['insert_cokiee'])){
            $lkd = new Liked;
            $car=$_POST('car');
          $id = $_POST('id');
          
          $lkd->setId($id);
          $lkd->setLikes($car);
          
          $this->SavedBrowsingcar();
            
        }
        
        if(isset($_POST['delete_cookie'])){
            $obj->DeleteBrowsing();
                   
        }
    
 ?>
