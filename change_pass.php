<?php

	if(!isset($_COOKIE["login"])){
		header("location:index.php");
	}
	else{
		$email=$_COOKIE["login"];
		
		include("db.php");
		
		if(empty($_POST["cp"]) ||  empty($_POST["np"])  ||   empty($_POST["rp"])){
			header("location:pass_form.php?empty=1");
		}
		else{
				$cp=$_POST["cp"];
				$np=$_POST["np"];
				$rp=$_POST["rp"];
				$rs=mysqli_query($conn,"select pass from user where email='$email'");
				if($r=mysqli_fetch_array($rs)){
					$pass=$r["pass"];
				}
				if($pass==$cp){
					if($np==$rp){
						if(mysqli_query($conn,"update user set pass='$np' where email='$email'")>0){
							header("location:pass_form.php?success=1");
						}
						else{
							header("location:pass_form.php?error=1");
						}
					}
					else{
						//echo $np." ".$rp;
						header("location:pass_form.php?notmatch=1");
					}
				}
				else{
					header("location:pass_form.php?invalidpass=1");
				}
		}
	}
	?>
					
		
