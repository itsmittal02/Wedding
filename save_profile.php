<?php
      include("db.php");
	  if(isset($_COOKIE["login"])){
	  $email=$_COOKIE["login"];
		   if(isset($_REQUEST["id"])){
		      $id=$_REQUEST["id"];
			  $user_email="";
			  $code="";
			   $rs=mysqli_query($conn,"select email from project where code='$id'");
				if($r=mysqli_fetch_array($rs)){
				      $user_email=$r["email"];
					    
				}
				$rs=mysqli_query($conn,"select code from project where email='$email'");
				if($r=mysqli_fetch_array($rs)){
				          $code=$r["code"];
				}
					
				$rs=mysqli_query($conn,"select *  from interested where (email='$email' AND code='$id') OR (email='$user_email' AND code='$code')");
				if($r=mysqli_fetch_array($rs)){
					  echo "exist";
					  
				}
					
				else{
				 
				     if(mysqli_query($conn,"insert into interested values('$email','$id')")>0){
					    echo "success";
					   }
					  
					  else{
					       echo "again";
						}
				}
		   }
        }
?>
						 