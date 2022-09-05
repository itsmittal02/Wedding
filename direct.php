<?php
    if(isset($_REQUEST["rec"])){
	  $v=$_REQUEST["rec"];
	$email = $_COOKIE["login"];
	  $conn = mysqli_connect("localhost", "root", "", "university");
	  $rs = mysqli_query($conn, "select * from project where email='$email'");
	if ($r = mysqli_fetch_array($rs)) {
      if($v=="View Profile"){
	 ?>
	      <h3>View Profile</h3>
		    <form method="post" action="view_profile.php"> 
				<table class="table_working_hours">
		        	<tbody>
		        		        <tr class="opened">
									<td class="day_label">First Name :</td>
									<td class="day_value"><?php echo $r["fname"]?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Last Name :</td>
									<td class="day_value"><?php echo $r["lname"]?></td>
								</tr>
							  <!--
							  <tr class="opened">
									<td class="day_label">email :</td>
									<td class="day_value closed"><span><?php echo $r["email"]?></span></td>
								</tr>
								-->
							    <tr class="opened">
									<td class="day_label">DOB :</td>
									<td class="day_value closed"><span><?php echo $r["dob"]?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Gender :</td>
									<td class="day_value closed"><span><?php echo $r["gender"]?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value closed"><span><?php echo $r["caste"]?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span><?php echo $r["religion"]?></span></td>
								</tr>
								
				    </tbody>
				</table>
				
			</form>
				<ul class="login_details">
			      <li>Already a member? <a href="login.php">Login Now</a></li>
			      <li>If not a member? <a href="register.php">Register Now</a></li>
			    </ul>
		
		<?php  
	  }
	  else if($v=="Edit Profile"){
		  ?>
		   <h3>Edit Profile</h3>
		 <form method="post" action="update.php">
				<table class="table_working_hours">
		        	<tbody>
		        		        <tr class="opened">
									<td class="day_label">First Name :</td>
									<td class="day_value"><input type="text" name="fname" class="form-control" value="<?php echo $r["fname"]?>" required></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Last Name :</td>
									<td class="day_value"><input type="text" name="lname" class="form-control" value="<?php echo $r["lname"]?>" required></td>
								</tr>
								<!--
							    <tr class="opened">
									<td class="day_label">email :</td>
									<td class="day_value closed"><span><input type="text" name="email" class="form-control" value="<?php echo $r["email"]; ?>" required></span></td>
								</tr>
								-->
							   
							  <!-- <tr class="opened">
									<td class="day_label">Date Of Birth :</td>
									<td class="day_value closed"><span><input type="date" name="dob" class="form-control" value="<?php echo $r["Date Of Birth"]?>" required></span></td>
								</tr>
								-->
								
								<tr class="opened">
									<td class="day_label">Gender :</td>
									<td class="day_value closed"><select name="gender" class="form-control">
									<option value="<?php echo $r["gender"]; ?>"><?php echo $r["gender"]; ?></option>
									<option name="gender" value="male">Male</option>
									<option name="gender" value="female">Female</option>
									</select>
									</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value closed"><span></span>
									<select class="form-control" name="caste">
									<option value="<?php echo $r["caste"]; ?>"><?php echo $r["caste"]; ?></option>
				                        <option value="Gupta">Gupta</option>
                                        <option value="sharma">Sharma</option>
				                        <option value="Rajput">Rajput</option>
				                        <option value="Goyal">Goyal</option>
				                        <option value="Sinha">Sinha</option>
				                    	<option value="Singh">Singh</option>
					                    <option value="Khan">Khan</option>
				                    </select>
									</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span></span>
									<select class="form-control" name="religion">
									<option value="<?php echo $r["religion"]; ?>"><?php echo $r["religion"]; ?></option>
				                        <option value="Hindu">Hindu</option>
                                        <option value="Muslim">Muslim</option>
				                        <option value="Sikh">Sikh</option>
				                        <option value="Parsi">Parsi</option>
				                       <option value="Buddhism">Buddhism</option>
					                   <option value="not defien">Other</option>
				                    </select>
									</td>
								</tr>
								
								
								
							<tr class="opened">
								<td colspan="2"><input type="submit" class="btn btn-danger" value="Update"></td>
							</tr>
                         						
				    </tbody>
				</table>
			</form>
		  
		  
		  <?php
	  }

  }
?>
<?php
	}
?>