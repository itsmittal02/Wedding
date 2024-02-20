<?php
	if(empty($_POST["email"]) || empty($_POST["pass"])){
		header("location:login.php?empty=1");
	}
	else{
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		
		include("db.php");
		
		$rs=mysqli_query($conn,"select * from user where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			if($pass==$r["pass"]){
				setcookie("login",$email,time()+3600);
				header("location:profile.php");
			}
			else{
				header("location:login.php?invalid_pass=1");
			}
		}
		else{
			header("location:login.php?invalid_email=1");
		}
	}
?>
			
		