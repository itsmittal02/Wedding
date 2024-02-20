<?php
	if(!isset($_COOKIE["login"])){
		header("location:login.php"); 
	}
	else{
		$email=$_COOKIE["login"];
		if(!isset($_GET["code"])){
			header("location:search.php");
		}
		else{
			
			$tocode=$_REQUEST["code"];
			
			if(empty($_POST["msg"])){
				header("location:full_profile.php?code=$tocode");
			}
			else{
				include("db.php");
				
				$toemail="";
				
				$rs=mysqli_query($conn,"select email from user where code='$tocode'");
				if($r=mysqli_fetch_array($rs)){
					$toemail=$r[0];
				}
				
				$fromcode="";
				
				$rs=mysqli_query($conn,"select code from user where email='$email'");
				if($r=mysqli_fetch_array($rs)){
					$fromcode=$r[0];
				}
				
				$sn=0;
				$rs=mysqli_query($conn,"select MAX(sn) from inbox");
				if($r=mysqli_fetch_array($rs)){
					$sn=$r[0];
				}
				$sn++;
				
				$code="";
				$a=array();
				for($i=0;$i<=9; $i++){
					array_push($a,$i);
				}
				for($i='A';$i<='Z';$i++){
					array_push($a,$i);
					if($i=='Z')
						break;
				}
				for($i='a';$i<='z';$i++){
					array_push($a,$i);
					if($i=='z')
						break;
				}
				shuffle($a);
				for($i=0;$i<=7;$i++){
					$code=$code.$a[$i];;
				}
				$code=$code."_".$sn;
				$msg=$_POST["msg"];
				$dt=date("d M,Y");
				//mysqli_query($conn,"insert into inbox values($sn,'$code','$toemail','$tocode','$email','$fromcode','$msg','$dt')")or die(mysqli_error($conn));
				if(mysqli_query($conn,"insert into inbox values($sn,'$code','$toemail','$tocode','$email','$fromcode','$msg','$dt')")>0){
					header("location:full_profile.php?code=$tocode&sent_success=1");
				}
				else{
					//echo $sn." ".$code." ".$toemail." ".$tocode." ".$email." ".$fromcode." ".$msg." ".$dt;
					header("location:full_profile.php?code=$tocode&sent_error=1");
				}
			}
		}
	}
	?>			
			
			
			
			
			


 