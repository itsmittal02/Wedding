<?php 
        if(!isset($_COOKIE["login"])){
		   header("location:login.php");
		   }
		else{
			$email=$_COOKIE["login"];
			include("db.php");
			if(!isset($_GET["id"])){
				header("location:search.php");
			}
			else{
				$to_code=$_REQUEST["id"];
				if(empty($_POST["msg"])){
					header("location:user_profile.php?id=$to_code");
				}
				else{
					$to_email="";
					$rs=mysqli_query($conn,"select email from project where code='$to_code'");
			        if($r=mysqli_fetch_array($rs)){
						$to_email=$r["email"];
					}
					$from_code="";
					$rs=mysqli_query($conn,"select code from project where email='$email'");
			        if($r=mysqli_fetch_array($rs)){
						$from_code=$r["code"];
					}
					$msg=$_POST["msg"];
					$dt=date("d M,Y");
					$sn=0;
					$rs=mysqli_query($conn,"select MAX(sn) from project1");
					if($r=mysqli_fetch_array($rs)){
						$sn=$r[0];
					 }
								$sn++;
								$code="";
								$a=array();
								 for($i='A'; $i<='Z'; $i++ ){
								 array_push($a,$i);
									if($i=='Z')
									   break;
									 }
							
								  for($i='a'; $i<='z'; $i++ ){
								  array_push($a,$i);
								  if($i=='z')
									break;
										  }	
							
								for($i=0; $i<=9; $i++ ){
								array_push($a,$i);	
									  }
							
								 shuffle($a);
								 for($i=0;$i<=5;$i++){
									$code=$code.$a[$i];
								 }								
					   
							   $code=$code."_".$sn;
							   
								if(mysqli_query($conn,"insert into project1 values($sn,'$code','$to_email','$to_code','$email','$from_code','$msg','$dt')")>0){
								   header("location:user_profile.php?id=$to_code&success=1");
								}
								else{
									header("location:user_profile.php?id=$to_code&again=1");
								}
					
			    }
		    }
	    }
    ?>
		
						