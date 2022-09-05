<?php
      if(isset($_REQUEST["pattern"])){
	  include("db.php");
	     $pattern = $_REQUEST["pattern"];
		 $email=$_COOKIE["login"];
		 $sql="";
		 $code="";
		 $rs=mysqli_query($conn,"select code from project where email='$email' ");
		if($r=mysqli_fetch_array($rs)){
		   $code=$r[0];
		   }
		 
		 if($pattern=="interested"){
		      $sql="select * from project where code IN(select code from interested where email='$email' )";
			  
			  }
		 else{
		      $sql="select * from project where email IN(select email from interested where code='$code')";
			  }
			
		$flag=0;
		$rs=mysqli_query($conn,$sql);
		while($r=mysqli_fetch_array($rs)){
		  $flag=1;
   ?>
   
   <div class="profile_top" style="margin-top:10px"  id="r<?=$r["code"]?>"><a href="user_profile.php?id=<?php echo $r["code"]?>"> 
	    <h2><?=$r["code"]?></h2>
		<div class="col-sm-3 profile_left_top">
		    <img src="profile/<?=$r["code"]?>.jpg" class="img-responsive" alt=""/>
			</div> 
	 
	 
	  
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">First Name :</td>
							<td class="day_value"><?php echo $r["fname"];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Name :</td>
							<td class="day_value"><?php echo $r["lname"];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">DOB :</td>
							<td class="day_value"><?php echo $r["dob"];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Gender :</td>
							<td class="day_value"><?php echo $r["gender"];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Caste :</td>
							<td class="day_value"><?php echo $r["caste"];?></td>
						</tr>
					     
						<tr class="opened">
							<td class="day_label">religion :</td>
							<td class="day_value"><?php echo $r["religion"];?></td>
						</tr>
						
				    </tbody>
				</table>
		    <div class="buttons">
			  <div class="vertical"><a style="color:white" href="user_profile.php?id=<?=$r["code"]?>">View Profile</a></div>
			<div class="vertical"><span class="remove" id="<?=$r["code"]?>">Remove</span></div>
			  </div>
	    </div>
		
		 <div class="clearfix"></div>
		</a> </div>
		
		<?php
	    }
		
		if($flag==0){
             ?>
	         <div class="profile_top"><h3> Record Not Found</h3></div>
		
		<?php
		
		   }
		}
	?>