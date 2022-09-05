
<?php
      if(empty($_POST["email"])||empty($_POST["password"])){
	      header("location:login.php?empty=1");
		  }
		
		else{
		      $email=$_POST["email"];
			  $password=$_POST["password"];
			  
			  include("db.php");
			  $conn=mysqli_connect("localhost","root","","university");
			  $rs=mysqli_query($conn,"select * from project where email='$email'");
			     
				   if($r=mysqli_fetch_array($rs)){
				      if($r["password"] == $password){
					     setcookie("login",$email,time()+3600);
						 header("location:profile.php?profile=1");
						 }
						 
					    else{
					         header("location:login.php?check_password=1");
							}
							
							
				       }
				  else{
				        header("location:login.php?invalid=1");
						}
			}
			
	?>