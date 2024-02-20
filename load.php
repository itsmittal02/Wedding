<h3>View Similar Profiles</h3>
			<?php
		 $email=$_COOKIE["login"];
		include("db.php");
			$rs=mysqli_query($conn,"select * from user where email<>'$email' ORDER BY RAND() limit 0,4");
		while($r=mysqli_fetch_array($rs)){
	 ?>
        	<ul class="profile_item">
        	  <a href="full_profile.php?code=<?php echo $r["code"];?>">
        	   <li class="profile_item-img">
        	   	  <img src="profile/<?php echo $r["code"];?>.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4><?php echo $r["fname"];?>&nbsp;<?php echo $r["lname"];?></h4>
        	   	 <p><?php echo $r["dob"];?></p>
        	   	  <h5><?php echo $r["district"];?>&nbsp; ,<?php echo $r["state"];?></h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
<?php
		}

?>		   