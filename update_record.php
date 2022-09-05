<?php
        if(isset($_COOKIE["login"])){
		    $email=$_COOKIE["login"];
			include("db.php");
			$rs=muysqli_query($conn,"select * from project where email='$email'");
			if($r=mysqli_fetch_array($rs)){
			     if(isset($_REQUEST["field"]) && isset($_REQUEST["rec"])){
				    include("db.php");
					$field=$_REQUEST["field"];
					$rec=$_REQUEST["rec"];
					if(mysqli_query($conn,"update project set $field='$rec' where email='$email'")>0){
					   echo "success";
					}
			    }
			}
		}
	?>
					