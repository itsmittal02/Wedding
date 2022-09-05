<?php  
	if(!isset($_COOKIE["login"])){
	    header("location:login.php");
    }
    else{
		
		 if( empty($_REQUEST["gender"]) || empty($_REQUEST["caste"]) || empty($_REQUEST["religion"])){
	            header("location:search.php");
	             }
	     else{
			      include("db.php"); 
			     $email = $_COOKIE["login"];
	            $gender=$_REQUEST["gender"]; 
                $caste=$_REQUEST["caste"];				
				$religion=$_REQUEST["religion"];
				$id=0;
				 if(isset($_GET["id"])){
				       $id=intval($_GET["id"]);
				    }
				$start=$id*1;
				$rec=mysqli_query($conn,"select count(*) from project where gender='$gender' AND  caste='$caste' AND religion='$religion' AND email<>'$email'");
				$count=0;
				if($num=mysqli_fetch_array($rec)){
					 $count=$num[0];
				}
				 
				 //echo $count."<br>";
				$page=ceil($count/1);
				if($id<0 || $id>=$page){
					 header("location:search.php");
				}
	   
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
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Profile :: w3layouts</title>
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
<script src="jquery-3.6.0.min.js"></script>
<style>
      .interest{
		     cursor:pointer;
	  }
	 </style>
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
	
	$(".interest").click(function(){
		var user=$(this).attr("id");
		
		$.post(
		    "save_profile.php",{id:user},function(data){
				//alert(data+" "+data.length);
				if(data=="success"){
					$("#r"+user).fadeOut(1000);
				}
			}
		);
	});
	setInterval(function(){
			   $("#record").load("load_profile.php");
		   },5000);
	
});
</script>
</head>
 
	   
<body>
<!-- ============================  Navigation Start =========================== -->
  <?php
       include("navbars.php");
	   ?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
      <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Profile</li>
      </ul>
   </div>
   
  <div class="col-md-8 profile_left1">
  	<h1>Recently Viewed Profile</h1>
	<div class="profile_top">
	<?php 
	    
	    
         $flag=0;		
	    $rs = mysqli_query($conn,"select * from project where gender='$gender' AND  caste='$caste' AND religion='$religion' AND email<>'$email' limit $start,1");
		while($r = mysqli_fetch_array($rs)){
			$flag=1;
			
	 ?>
      <div class="profile_top" id="r<?=$r["code"]?>"><a href="user_profile.php?id=<?php echo $r["code"]?>"> 
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
					     
						<tr class="closed">
							<td class="day_label">religion :</td>
							<td class="day_value closed"><span><?php echo $r["religion"];?></span></td>
						</tr>
						
				    </tbody>
				</table>
		    <div class="buttons">
			  <div class="vertical"><a style="color:white" href="user_profile.php?id=<?=$r["code"]?>">View Profile</a></div>
			  <div class="vertical">Shortlisted</div>
			  <div class="vertical"><a  style="color:white" href="save_profile.php?id=<?=$r["code"]?>">Send Interest</a></div>
			  </div>
	    </div>
		 <div class="clearfix"></div>
		 </div>
		
<?php
	    }
		
	if($flag==0){
 ?>
	         <div class="profile_top"><h3> Record Not Found</h3></div>
		
<?php
		
		}
	else{
		  
		if($id>0 ){
?>
	
	  <a href="search_record.php?id=<?=$id-1?>&gender=<?=$gender?>&caste=<?=$caste?>&religion=<?=$religion?>"><button class="btn btn-primary" style="flaot:left">Previous</button></a>
<?Php
	    }
	    if($id!=$page-1){
		  
?>
      <a href="search_record.php?id=<?=$id+1?>&gender=<?=$gender?>&caste=<?=$caste?>&religion=<?=$religion?>"><button class="btn btn-primary" style="flaot:left" >Next</button></a>
<?php
	    }
	}
?>
		  
		  
	
      <div class="clearfix"></div> </div>
      
	 </div>
	 
 
		<!-- Random Profile-->
		 
		<div class="col-md-4 profile_right" id="record">
     	 
		<br><center><h2>Profile Matches</h2></center><br>
		
		<?php 
      $ur=mysqli_query($conn,"select * from project where email<>'$email' ORDER BY RAND() limit 0,4");
	  while($usr=mysqli_fetch_array($ur)){
		?>
        
	<div class="view_profile" style="background-image:url(images/wall.jpg);height:auto">
		     <table class="table table-borderless w3-card">
			    <tr><td align="center"><a href="user_profile.php?id=<?php echo $usr["code"];?>" style="cursor:pointer"><img src="profile/<?php echo $usr["code"];?>.jpg" class="img-fluid"></a></td></tr>
				<tr><td align="center"><a href="user_profile.php?id=<?php echo $usr["code"];?>" style="cursor:pointer"><?php echo $usr["fname"]." ".$usr["lname"];?></strong></td>
			      
			 </table>
		  
		  
		  </div>
        	<?php		
	  }
	?>
	<div class="view_profile"><br><br></div>
	</div>
       
        
		
	<!-- End Random Profile-->	
		
 
   
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
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</body>
</html>	
<?php
		}
	    }
	?>