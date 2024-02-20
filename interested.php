<?php

		if(!isset($_COOKIE["login"])){
			header("location:index.php");
		}
		else{
				include("db.php");
			    $email=$_COOKIE["login"]; 
			    $flag=0;
				$code="";
				$rs=mysqli_query($conn,"select code from user where email ='$email'");
				if($r=mysqli_fetch_array($rs)){
					$code=$r[0];
				}
				$rs=mysqli_query($conn,"select * from user where code IN(select code from interested where email='$email') OR email IN (select email from interested where code='$code')");
				 
					?>
					<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
 
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
	 
	 $(".remove").click(function(){
		var user = $(this).attr("id"); 
		alert(user);
		$.post(
			"remove_profile.php",{id:user},function(data){
				if(data=="success"){
					$("#r"+user).fadeOut(1000);
				}
			}
		);
	 });
	 
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
	  <h3>Interested User Profile</h3>
		<?php
			while($r=mysqli_fetch_array($rs)){
				$flag=1;
					?>
   	 	<div class="col_3">
		<div class="profile_top" id="r<?php echo $r["code"]?>">
   	        <div class="col-sm-4 row_2">
				 <img src="profile/<?php echo $r["code"];?>.jpg" width="100%">
			</div>
			
			<div class="col-sm-8 row_1" style="background-color:lightgray">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">First Name :</td>
							<td class="day_value" align="center"><?php echo $r["fname"];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Name :</td>
							<td class="day_value" align="center"><?php echo $r["lname"];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Date of Birth :</td>
							<td class="day_value" align="center"><?php echo $r["dob"];?></td>
						</tr>
						<tr class="opened">
							<td class="day_label">Gender :</td>
							<td class="day_value" align="center"><?php echo $r["gender"];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value" align="center"><?php echo $r["mstatus"];?></td>
						</tr>
						<tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value" align="center"><?php echo $r["religion"];?></td>
						</tr>
						<tr class="opened">
							<td class="day_label">Occupation :</td>
							<td class="day_value" align="center"><?php echo $r["occupation"];?></td>
						</tr>
						 
					      
					     </tr>
				    </tbody>
				</table>
				      <div class="buttons">   
							<a href="full_profile.php?code=<?php echo $r["code"]?>"><div class="vertical">Send Message</div></a> 
						    <span class="remove" style="cursor:pointer" id="<?php echo $r["code"]?>"><div class="vertical">Remove Interest</div></span>
					</div>	    
			</div>
		</div>	
			<div class="clearfix"> </div>
		</div>
		 
   	
	 <?php
			}
			 if($flag==0){
	 ?>
	 <br>
		<div class="profile_top"><h3>Record Not Found</h3></div>
		<?php
			 }
			 ?>
	  </div>
     <div class="col-md-4 profile_right">
 
        <div class="view_profile" id="1">
        	<h3>View Similar Profiles</h3>
			<?php
		
			$rs=mysqli_query($conn,"select * from user order by rand() limit 0,4 ");
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
<?php
		}
			 
	?>
					
					
					
					 