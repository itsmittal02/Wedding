<?php
	if(!isset($_COOKIE["login"])){
		header("location:index.php");
	}
	else{
		$email = $_COOKIE["login"];
		include("db.php");
		
		if(empty($_POST["fname"]) ||  empty($_POST["lname"]) || empty($_POST["dob"]) || empty($_POST["mstatus"]) || empty($_POST["occupation"]) || empty($_POST["gender"])){
			header("location:edit_profile.php?empty=1");
		}
		else{
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$dob=$_POST["dob"];
			$mstatus=$_POST["mstatus"];
			$occupation=$_POST["occupation"];
			$gender=$_POST["gender"];
			
			if(mysqli_query($conn,"update user set fname='$fname',lname='$lname',dob='$dob',mstatus='$mstatus',gender='$gender' ,occupation='$occupation' where email='$email'")>0){
				header("location:edit_profile.php?success=1");
				 
			}
			else{
				header("location:edit_profile.php?error=1");
			}
		}
	}
	?>
		