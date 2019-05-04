<?php include_once './header.php'; ?>
 
<section>
    <div class="main_box">
    <div class="indexes">
            <ul>
                
                <li>|<a href="general_drash.php">HOME</a></li>
                <li>|<a href="e_forum.php">Community Forum</a></li>
                <li>|<a href="change_password.php">Update my info</a></li>
                

            </ul>
        </div>
       
    
        <?php
                        $con=mysqli_connect("localhost","root","","e_cars");
			require("e_user.php");
			if(!isset($_SESSION['id']) || !$_SESSION['usertype'])
			{
                            
                            header ("location:index.php");
                        }
			$obj = new user;
			$id=$_SESSION['id'];
			$obj->setId($id);
			$data=$obj->selectAlluser();
                        $result=$obj->print_cars();
                        $fourm=$obj->seletAllForum();
                        $f=mysqli_fetch_array($fourm);
                        $ids=$f['u_id'];
                        
 
            ?>
        <h1>Community Forum</h1>
        <div class="forum_form">
            <form method="post" action="e_action.php">
                <input type="hidden" name="uid" value="<?php echo $id; ?>"/>
                <textarea name="currenttext" row="600" column="600" id="txtarea"></textarea> <br>
                <input type="submit" name="msg" value="comment"/>
            </form>
        </div>
        <div class="forum">
            <?php while($fourms=mysqli_fetch_array($fourm)){
                $fm=$fourms['u_id'];
                $u_result = "select * from tbl_register where id=$fm";
                        $u_dat=mysqli_query($con,$u_result);
                        $u_datass=  mysqli_fetch_array($u_dat);?>
            
            <div class="userinfo">
                <?php 
                        echo $u_datass['fname'];?>
                        
                
            </div>
            <div class="message">
                
                    <p> <?php echo $fourms['message']; ?></p>
                <h6 style="font-size: 10px; color: #46a049;"><br><?php echo $fourms['msg_date']; ?></h6>
                 <h6 style="font-size: 8px; color: #4CAF50;"><?php echo $u_datass['email'];?></h6>
                 
                  <form method="post" action="e_action.php">
                       
                         <input type="hidden" name="user" value="<?php echo $u_datass['username'];?>"> 
                         <textarea name="rply"></textarea>
                         <input type="submit" name="reply" value="Reply">
                     </form>
            </div><hr>
                 <div class="forum">   
                    
                   <?php }
                   $query2="select * from tbl_reply";
                   $result2=mysqli_query($con,$query2);
                   while($data2=  mysqli_fetch_array($result2))
                   {   
                       ?>
                     <div>
                         <div>
                             <h2>Username: <?php echo $data2['username'];?></h2>
                         </div>
                         <label>
                             <?php echo "Reply: ".$data2['reply']; ?>
                         </label>
                     </div>
                   <?php }; ?>
                 </div>
                
            </div>
        
    </div>

    </div>    
 
</section>


<?php include 'footer.php'; ?>