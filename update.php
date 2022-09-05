  <?php
  
      if(isset($_COOKIE["login"])){
         $email=$_COOKIE["login"];
		  include("db.php");
		 if(isset($_REQUEST["fname"]) || isset($_REQUEST["lname"]) ||isset($_REQUEST["dob"]) || isset($_REQUEST["gender"]) || isset($_REQUEST["caste"]) || isset($_REQUEST["religion"])){
		       
			     $fname=$_REQUEST["fname"];
				 $lname=$_REQUEST["lname"];
				  $dob=$_REQUEST["dob"];
				 $gender=$_REQUEST["gender"];
				 $caste=$_REQUEST["caste"];
				 $religion=$_REQUEST["religion"];
				 if(mysqli_query($conn,"update project set fname='$fname',lname='$lname',dob='$dob',gender='$gender',caste='$caste',religion='$religion' where email='$email'")>0){
				       echo "success";
				 }
				 else{
					     echo "again";
					}
					  
             }
	    }
 ?>
	