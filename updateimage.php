<?php
	
		if(!isset($_COOKIE["login"])){
			header("location:index.php");
		}
		else{
			$email=$_COOKIE["login"];
			 
				include("db.php");
				$rs=mysqli_query($conn,"select code from user where email='$email'");
				if($r=mysqli_fetch_array($rs)){ 
					$target="profile/";
					$target=$target.$r["code"].".jpg";
					 
					if(move_uploaded_file($_FILES['pic']['tmp_name'], $target)){
						header("location:profile.php?img_success=1");
					}
					else{
						//echo $target ;
						header("location:profile.php?img_error=1");
					}
				}
		 
		}
		?>
					
				