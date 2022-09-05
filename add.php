<?php
      $code="first";// use code which generated
	  $target = "upload/";
	  $target = $target.$code.".jpg"; 
	  //$pic=($_FILES['photo']['name']);
	  //$size=(($_FILES['photo']['size'])/1024)/1024;
	  
	 if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
	       
		   header("location:index.php?success=1");
		 
		 }
	else{
	      echo"sorry,there was a problem uploading your file.";
		    header("location:index.php?err=1);
			
	      }
	?>