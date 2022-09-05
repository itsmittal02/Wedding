 <?php
   if(isset($_COOKIE["login"])){
	     include("db.php");
		  $email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
?>
<div class="col-md-4 profile_right"><br><center><h2>Profile Matches</h2></center><br></div>
  
   <?php 
     
      
      $ur=mysqli_query($conn,"select * from project where email<>'$email' ORDER BY RAND() limit 0,4");
	  while($usr=mysqli_fetch_array($ur)){
		?>
          <div class="view_profile" style="background-image:url(images/wall.jpg);height:auto">
		     <table class="table table-borderless w3-card">
			    <tr><td align="center"><img src="profile/<?php echo $usr["code"];?>.jpg" class="img-fluid"></td></tr>
				<tr><td align="center"><strong class="user" id="<?php echo $usr["code"];?>" style="cursor:pointer"><?php echo $usr["fname"]." ".$usr["lname"];?></strong></td></tr>
			 
			 </table>
		  
		  
		  </div>

        <?php		
	  }
	?>
	
     <div class="view_profile"><br><br></div>
	 
<?php
   }
 ?>
	   