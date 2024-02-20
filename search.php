<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
	if(!isset($_COOKIE["login"])){
		header("location:index.php"); 
	} 
	else{
		$email = $_COOKIE["login"];
		include("db.php");
?>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | View_profile :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
  
setInterval(function(){ 
	$(".view_profile").load("load.php"); 
},5000);
	
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php
	include("nav1.php");
	
 ?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="profile.php"><i class="fa fa-home home_1"></i></a>
        
        
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	 
   	 	<div class="col_3">
   	         
			<div class="col-sm-12 row_1">
			<form method="post" action="search_profile.php"
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Gender :</td>
							<td class="day_value">
								<select name="gender" class="form-control">
									<option value="">Choose</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
						 
								</select>
							</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Caste :</td>
							<td class="day_value">
								<select name="caste" class="form-control">
									<option value="">Select Caste</option>
									<option value="sc">SC</option>
									<option value="st">ST</option>
									<option value="obc">OBC</option>
									<option value="gen">General</option>
									<option value="sbc">SBC</option>
									<option value="other">Others</option>
								</select>
							</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Occupation :</td>
							<td class="day_value">
							<select name="occupation" class="form-control">
								<option value="">Select Occupation</option>
								<option value="doctor">Doctor</option>
								<option value="software engineer">Software Engineer</option>
								<option value="Nurse">Nurse</option>
								<option value="Pharmacist">Pharmacist</option>
								<option value="Physician">Physician</option>
								<option value="Therapist">Therapist</option>
								<option value="Business Owner">Business Owner</option>
								<option value="Construction Manager">Construction Manager</option>
								<option value="Accountant">Accountant</option>
								<option value="Auditor">Auditor</option>
								<option value="Computer Specialist">Computer Specialist</option>
								<option value="Sales Representative">Sales Representative</option>
								<option value="Lawyer">Lawyer</option>
								<option value="Judge">Judge</option> 
								<option value="Military">Military</option>
								<option value="Farming">Farming</option>
								<option value="Teacher">Teacher</option>
								<option value="Actor">Actor</option>
							</select></td>
						</tr>
						 
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value">
								<select name="mstatus" class="form-control">
									<option value="" >Choose</option>
									<option value="Single">Single</option>
									<option value="Married">Married</option>
									<option value="Divorced">Divorced</option>
								</select>
									</td>
						</tr> 
					      
					     </tr>
				    </tbody>
				</table>
				          <br>

						 <input type="submit" value="Search" class="btn btn-danger">
						</form>    
			</div>
			<div class="clearfix"> </div>
		</div>
		 
   	 </div>
     
     <div class="col-md-4 profile_right">
 
        <div class="view_profile" id="1">
        	<h3>View Similar Profiles</h3>
			<?php
		
			$rs=mysqli_query($conn,"select * from user order by rand() limit 0,4 ");
		while($r=mysqli_fetch_array($rs)){
	 ?>
        	<ul class="profile_item">
        	  <a href="#">
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
	}
?>		   
       </div>
        </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.html">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
    	</div>
</div>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
</html>	
 
