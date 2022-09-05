<?php
       if(!isset($_COOKIE["login"])){
	        header("location:login.php");
			}
			
		else{
               
		     $email=$_COOKIE["login"];
			 $conn=mysqli_connect("localhost","root","","university");
			 $rs=mysqli_query($conn,"select * from project where email='$email'");
			if($r=mysqli_fetch_array($rs)){
			    $target = "profile/";  
				$target = $target . $code.".jpg"; 
				//$pic=($_FILES['photo']['name']);
				//$size=(($_FILES['photo']['size'])/1024)/1024;
				
				
				if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){ 
				  header("location: profile.php?img_success=1");
                      }
                 else{
				        header("location: profile.php?img_err=1");
						} 
			}
			else{
			      header("location:logout.php");
				  }
		}
			
                     				 
?>