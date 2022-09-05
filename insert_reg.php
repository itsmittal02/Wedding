
<?php
  if(empty($_POST["fname"])||empty($_POST["lname"])||empty($_POST["email"])||empty($_POST["pass"])||empty($_POST["dob"])||empty($_POST["gender"])||empty($_POST["caste"])||empty($_POST["religion"])||empty($_POST["state"])||empty($_POST["country"])||empty($_POST["about"])){
	 header("location:register.php?empty=1");
  }
  else{
	 $sn=0;
	 $code="";
	 $fname=$_POST["fname"];
     $lname=$_POST["lname"];
	 $email=$_POST["email"];
	 $pass=$_POST["pass"];
	 $dob=$_POST["dob"];
	 $gender=$_POST["gender"];
     $caste=$_POST["caste"];
	 $religion=$_POST["religion"];
	 $state=$_POST["state"];
	 $count=$_POST["country"];
	 $abt=$_POST["about"];
	  
		$sn=0;
		$conn=mysqli_connect("localhost","root","","university");
		$rs=mysqli_query($conn,"select MAX(sn) from project");
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
		$b=array_rand($a,6);
		for($i=0; $i<=sizeof($b); $i++ ){
		    $code=$code.$b[$a[$i]];
		        }
			
		
		     //for image upload
	//	$code=$code."_".$sn; use code which generated
		$target = "profile/";  
		$target = $target . $code.".jpg"; 
		//$pic=($_FILES['photo']['name']);
		//$size=(($_FILES['photo']['size'])/1024)/1024;
	
		if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){ 
			
            if(mysqli_query($conn,"insert into project values($sn,'$code','$fname','$lname','$email','$pass','$dob','$gender','$caste','$religion','$state','$count','$abt')")>0){
		 
			header("location: register.php?success=1");	
			}
			else{
				   header("location:register.php?again=1");
			}
		} 
		else{ 
		    // echo "sorry there was a problem uploading your file.";
			header("location:register.php?img_err=1");
		} 
		
   }
  ?>