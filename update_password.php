<?php  
     if(!isset($_COOKIE["login"])){
		 header("location:login.php");
		 
	 }
	 else{
		 $email=$_COOKIE["login"];
		 $conn=mysqli_connect("localhost","root","","university");
		$rs=mysqli_query($conn,"select * from project where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			if(empty($_POST["cp"]) || empty($_POST["np"]) || empty($_POST["rp"]) ){
				header("location:change_password.php?empty=1");
			}
			else{
					$cp=$_POST["cp"];
					$np=$_POST["np"];
					$rp=$_POST["rp"];
					if($r["password"] == $cp){
						if($np==$rp){
							if(mysqli_query($conn,"update project set password ='$np' where email='$email'")>0){
								header("location:change_password.php?success=1");
							}
							else{
								header("location:change_password.php?again=1");
							}				
						}
						else{
								header("location:change_password.php?missmatch=1");
						}
						
					}
					else{
							header("location:change_password.php?invalid=1");
					}
				
				
			}
			
			
		}
		else{
			header("location:logout.php");
		}
	 }
?>
			