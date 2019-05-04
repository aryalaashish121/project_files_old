<?php 
session_start();
require ("connection.php");
class user extends connection
	{
		public $id,$fname,$mname,$lname,$gender,$date,$country,$ph,$address,$pcode,$utype;
		public $email,$username,$password;
                public $c_id,$c_name,$des,$rating,$price,$fuel_type,$battery_life,$image;
		public $text,$uid;
		
		
		public function setId($id){
		$this->id=$id;}
		
		public function setFname($f_name){
		$this->fname=$f_name;
		}
		public function setMname($mname){
		$this->mname=$mname;
		}
		public function setLname($lname){
		$this->lname=$lname;
		}
		public function setGender($gdr){
		$this->gender=$gdr;
		}
		
		public function setDate($date){
		$this->dates=$date;
		}
		
		public function setCountry($cnt){
		$this->country=$cnt;
		}
		public function setPh_no($ph){
		$this->ph=$ph;
		}
		public function setAddress($add){
		$this->address=$add;
		}
		public function setPostalcode($p){
		$this->pcode=$p;
		}
		public function setEmail($email){
		$this->email=$email;
		}
		public function setUsername($un){
		$this->username=$un;
		}
		public function setPassword($pwd){
		$this->password=$pwd;
		}
                public function setUsertype($u){
                    $this->utype=$u;
                    
                }

                public function setc_Id($id){
		$this->c_id=$id;}
                
                public function setCarName($name){
                    $this->c_name=$name;
                }
                public function setCarDescription($d){
                    $this->c_desc=$d;   
                }
                public function setCarPrice($price) {
                    $this->price=$price;   
                }
                public function setCarRating($rating) {
                    $this->rating=$rating;
                }
                public function setCarFuel($fuel) {
                    $this->fuel_type=$fuel;
                }
                public function setCarBattery($battery) {
                    $this->battery_life= $battery;
                }
                public function setCarImage($im) {
                    $this->image=$im;
                }
                
                public function setText($txt){
                    $this->text=$txt;
                }
                public function setUid($uid){
                    $this->uid=$uid;
                }
                public function setReply($reply)
                {
                    $this->reply=$reply;
                }


                
                public function register()
	{	$user="general";
		$query="INSERT INTO tbl_register(id,fname,mname,lname,gender,dob,country,ph,address,post_code,email,username,password,usertype) "
                 ."values ( null,'$this->fname','$this->mname','$this->lname','$this->gender','$this->dates','$this->country','$this->ph',"
                 . "'$this->address','$this->pcode','$this->email','$this->username','$this->password','$user')";
		if($d=mysqli_query($this->conn,$query)){
                $_SESSION['msg']=2;
                header("location:index.php");}
                else{
                    $_SESSION['msg']=1;
                    header("location:e_registration.php");
                }
	}
	
	public function login()
	{	
		
		$query="SELECT * FROM tbl_register where username='$this->username' && password='$this->password'";
		$data= mysqli_query($this->conn,$query);
		$count= mysqli_num_rows($data);
		
		if($count>0)
		{
			$datas= mysqli_fetch_array($data);
			$user=$datas['usertype'];
			$idds=$datas['id'];
			$_SESSION['id'] = $idds;
                        
			if($user=="admin")
			{
			$_SESSION['usertype']="admin";
			header ("location:admin_drash.php");
			
			}
                else{
                $_SESSION['count'] = 1;
             $_SESSION['usertype']="general";
                        header ("location:general_drash.php");
                }}
			
			
		
		else
                    
		{if (isset($_COOKIE['count'])) 
		{
		if ($_COOKIE['count']<=3) 
			{
					$new_counter=$_COOKIE['count']+1;
					setcookie('count',$new_counter,time()+300);
                                        
			}}
		else{
				$counter=1;
				setcookie('count',$counter);
			}
                    
                    $_SESSION['msg']=1;
                     header("location:index.php");
		}
        }   

	public function selectAlluser(){
	
		$query="select * from tbl_register where id='$this->id'";
		$res= mysqli_query ($this->conn,$query);
		$data=mysqli_fetch_array($res);
		return $data;
	}
        
        function InsertCar(){
            
           
            $query="INSERT INTO tbl_cars (c_id,c_name,description,rating,price,fuel_type,battery_life,image) values (null,'$this->c_name','$this->des','$this->rating','$this->price','$this->fuel_type','$this->battery_life','$this->image')";
            $data= mysqli_query($this->conn, $query);
            //echo "$query";
            //echo "$this->c_name";
            //echo "$this->image";
           // echo "sucessful";
        }
	
	function print_cars(){
		$query="select * from tbl_cars";
		$result=mysqli_query($this->conn,$query);

		return $result;
	}
	
        
        
        function seletAllForum(){
            $query ="select * from tbl_forum";
           $result= mysqli_query($this->conn, $query);
            
            return $result;
        }

        function InsertText(){
            $query="insert into tbl_forum(u_id,message) values ('$this->uid','$this->text')";
            
            if($result = mysqli_query($this->conn, $query)){
                $_SESSION['msg']=1;
               header("location:e_forum.php");
            }else{
            $_SESSION['msg']=2;
           header("location:e_forum.php");
        }
        
            }
        
        
        function Update(){
            $q=" update tbl_register set username=\"$this->username\", password=\"$this->password\" where id=$this->id";
       if(mysqli_query($this->conn, $q)){  
            echo '<script> alert("Record updated successfully")</script>';
            
        }else{  
            echo "Could not update record: ". mysqli_error($this->conn);  
         } 
        }
        
        
        
        
          function UpdateAllUser(){
           $q=" update tbl_register set fname=\"$this->fname\",mname=\"$this->mname\",lname=\"$this->lname\",ph=\"$this->ph\",country=\"$this->country\",address=\"$this->address\",username=\"$this->username\",password=\"$this->password\" where id=$this->id"
                   ;
            if(mysqli_query($this->conn, $q)){  
            header ("location:edit_dash.php");  
        }else{  
            echo "Could not update record: ". mysqli_error($this->conn);  
         } 
        }
        
    function addUser(){
        {	
		$query="INSERT INTO tbl_register(id,fname,mname,lname,gender,dob,country,ph,address,post_code,email,username,password,usertype) values ( null,'$this->fname','$this->mname','$this->lname','$this->gender','$this->dates','$this->country','$this->ph','$this->address','$this->pcode','$this->email','$this->username','$this->password','$this->utype')";
		$d=mysqli_query($this->conn,$query);
		echo "Data inserted sucessfully";
                header ("location:edit_dash.php");
	}
    }
    function Visits(){

        $update = "UPDATE tbl_visits set views=views+1";
        mysqli_query($this->conn,$update);
}
        
        function totalVisits(){
                
            $select = "select * from tbl_visits";
            $result=mysqli_query($this->conn,$select);
            $data = mysqli_fetch_array($result);
            return $data;
            }
            
         function ageCalculation(){
            $query = "select dob from tbl_register";
            $result = mysqli_query($this->conn,$query);

            if($result->num_rows==0){
                while($table = mysqli_fetch_assoc($result)){
		$table['dob']=$table['dob'];
            }
            
            }
            
                }
                
               public function putReply()
{
	$query="INSERT INTO `tbl_reply`(username, reply) VALUES ('$this->username','$this->reply')";
	mysqli_query($this->conn,$query);
	header("location:e_forum.php");
}
	
public function DeleteBrowsing(){
    $q=" Delete * from tbl_browsing";
    mysqli_query($this->conn, $q);
    echo "Deleted sucessfully";
}
        
}        