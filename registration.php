<?php

	if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["dob"]) || empty($_POST["gender"]) || empty($_POST["mstatus"]) || empty($_POST["caste"]) || empty($_POST["religion"]) || empty($_POST["occupation"]) || empty($_POST["country"]) || empty($_POST["state"]) || empty($_POST["district"])  || empty($_POST["mothertongue"])){
		header("location:signup.php?empty=1");
		//echo $sn." ".$firstname." ".$lastname." ".$email." ".$pass." ".$dob." ".$gender." ".$caste." ".$religion." ".$occupation." ".$country." ".$state." ".$district." ".$motherton;
			
	}
	else{
		$firstname=$_POST["fname"];
		$lastname=$_POST["lname"];
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$dob=$_POST["dob"];
		$gender=$_POST["gender"];
		$mstatus=$_POST["mstatus"];
		$caste=$_POST["caste"];
		$religion=$_POST["religion"];
		$occupation=$_POST["occupation"];
		$country=$_POST["country"];
		$state=$_POST["state"];
		$district=$_POST["district"];
		$motherton=$_POST["mothertongue"];
		 
		
		
	    include("db.php");
		$sn=0;
		$rs=mysqli_query($conn,"select MAX(sn) from user");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn++;
		$code=""; 
		$a = array();
		for($i=0;$i<=9;$i++){
			array_push($a,$i);
		}
		for($i='A';$i<='Z';$i++){
			array_push($a,$i);
			if($i=='Z'){
				break;
			}
		}
		for($i='a';$i<='z';$i++){
			array_push($a,$i);
			if($i=='z'){
				break;
			}
		}
		//$b=array_rand($a,8);
		//for($i=0;$i<=sizeof($b);$i++){
		//	$code=$code.$a[$b[$i]];
		//}
		shuffle($a);
	    for($i=0;$i<=7;$i++){
		   $code=$code.$a[$i];
	    }
		$code=$code."_".$sn;
		
		$target="profile";
		$target=$target."/".$code.".jpg";
		
		if(move_uploaded_file($_FILES['profileimage']['tmp_name'], $target)){
			 
			if(mysqli_query($conn,"insert into user values($sn,'$code','$firstname','$lastname','$email','$pass','$dob','$gender','$mstatus','$caste','$religion','$occupation','$country','$state','$district','$motherton')")){
				header("location:signup.php?success=1");
				//echo $sn." ".$firstname." ".$lastname." ".$email." ".$pass." ".$dob." ".$gender." ".$caste." ".$religion." ".$occupation." ".$country." ".$state." ".$district." ".$motherton;
			}
			else{
				header("location:signup.php?error=1");
			}
		}
		else{
			//echo $target;
			
			header("location:signup.php?imgerror=1");
		} 
	} 


?>