<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
		if(!isset($_COOKIE["login"])){
			header("location:login.php");
		}
		else{
			$email=$_COOKIE["login"];
			include("db.php");
			
			$rs=mysqli_query($conn,"select * from user where email='$email'");
			if($r=mysqli_fetch_array($rs)){
				


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Inbox :: w3layouts</title>
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
    
    
   <div class="col-md-12 members_box2">
   	   <h3>Inbox</h3>
   	    
       <div class="col_4">
		     
			   <div id="myTabContent" class="tab-content py-3">
				   
					<?php
					$flag=0;
					$ks=mysqli_query($conn,"select * from inbox where toemail='$email'");
					while($sk=mysqli_fetch_array($ks)){
						$pk=mysqli_query($conn,"select * from user where email='".$sk["fromemail"]."'");
					        if($user=mysqli_fetch_array($pk)){
										$flag=1;
					 
					?> 
					
					
	                <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="full_profile.php?code=<?php echo $user["code"];?>"><img src="profile/<?php echo $user["code"];?>.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="full_profile.php?code=<?php echo $user["code"];?>"><?php echo $user["fname"]." ".$user["lname"];?></a></h6>
							 
							<ul class="login_details1">
							  <li><?php echo $sk["dt"];?></li>
							</ul>
							<p class="description"><?php echo $sk["msg"];?><br><a href="full_profile.php?code=<?php echo $user["code"];?>" class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  
					   	   <div class="thumb_but"><a href="full_profile.php?code=<?php echo $user["code"];?>" class="photo_view">Send Message</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>  
					  <?php
							}
					}
						if($flag==0){
							 ?>
							 <div class="alert alert-danger"><h1>Record Not Found</h1></div>
							 <?php
						 }
					?>
					  
					  
					  
				   
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
							<ul class="top-btns">
							  <li><a href="#" class="fa fa-facebook"></a></li>
							  <li><a href="#" class="fa fa-twitter"></a></li>
							  <li><a href="#" class="fa fa-google-plus"></a></li>
							</ul>
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
					   	   <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					</div>
					<div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
							<ul class="top-btns">
							  <li><a href="#" class="fa fa-facebook"></a></li>
							  <li><a href="#" class="fa fa-twitter"></a></li>
							  <li><a href="#" class="fa fa-google-plus"></a></li>
							</ul>
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
					   	   <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
					  <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
							<ul class="top-btns">
							  <li><a href="#" class="fa fa-facebook"></a></li>
							  <li><a href="#" class="fa fa-twitter"></a></li>
							  <li><a href="#" class="fa fa-google-plus"></a></li>
							</ul>
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
					   	   <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
				 </div>
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab">
				    <div class="terms">
            		  <h2>Your Privacy Settings</h2>
					   <div class="terms_top">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						<ol class="terms_list">
							<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</li>
							<li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
							<li>Praesentium voluptatum deleniti atque corrupti quos</li>
							<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
							<li>Mentum eleifend enim a feugiat distinctio lor</li>
						</ol>
						<h4>There are many variations of passages</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non <a href="#">libero consectetur adipiscing</a> elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
						<p><strong>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque lorem ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</strong></p>
					  </div> 	
		           </div>
				 </div>
				 <div role="tabpanel" class="tab-pane fade" id="profile2" aria-labelledby="profile-tab">
				    <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
							<ul class="top-btns">
							  <li><a href="#" class="fa fa-facebook"></a></li>
							  <li><a href="#" class="fa fa-twitter"></a></li>
							  <li><a href="#" class="fa fa-google-plus"></a></li>
							</ul>
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
					   	   <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
					  <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
							<ul class="top-btns">
							  <li><a href="#" class="fa fa-facebook"></a></li>
							  <li><a href="#" class="fa fa-twitter"></a></li>
							  <li><a href="#" class="fa fa-google-plus"></a></li>
							</ul>
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
					   	   <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
					  <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
							<ul class="top-btns">
							  <li><a href="#" class="fa fa-facebook"></a></li>
							  <li><a href="#" class="fa fa-twitter"></a></li>
							  <li><a href="#" class="fa fa-google-plus"></a></li>
							</ul>
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
					   	   <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
					  <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
							<ul class="top-btns">
							  <li><a href="#" class="fa fa-facebook"></a></li>
							  <li><a href="#" class="fa fa-twitter"></a></li>
							  <li><a href="#" class="fa fa-google-plus"></a></li>
							</ul>
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
					   	   <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
				 </div>
				 <div role="tabpanel" class="tab-pane fade" id="profile3" aria-labelledby="profile-tab">
				    <div class="terms">
            		  <h2>Your Privacy Settings</h2>
					   <div class="terms_top">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						<ol class="terms_list">
							<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</li>
							<li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
							<li>Praesentium voluptatum deleniti atque corrupti quos</li>
							<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
							<li>Mentum eleifend enim a feugiat distinctio lor</li>
						</ol>
						<h4>There are many variations of passages</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non <a href="#">libero consectetur adipiscing</a> elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
						<p><strong>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque lorem ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</strong></p>
					  </div> 	
		           </div>
				 </div>
			 </div> 
		  </div>
	   </div>
    </div>
   <div class="clearfix"> </div>
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
</body>
</html>	
<?php

			}
		}
		?>