<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
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
         include("navbar.php");
		 ?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form method="post" enctype="multipart/form-data"  action="insert_reg.php">
	  	    <div class="form-group">
		      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname"  size="60" maxlength="60" class="form-text required">
		    </div>
			<div class="form-group">
		     <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="lname"  size="60" maxlength="60" class="form-text required">
		    </div>
		   
		    <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name"  name="email"  size="60" maxlength="60" class="form-text required">
		    </div>
			 <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
		    </div>
		    <div class="age_select">
		      <label for="edit-pass">Date Of Birth<span class="form-required" title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-12 form_box">
                  <div class="select-block1">
					<input type="date" name="dob" class="form-control" required>
                   </div>
                  </div>
                  <div class="clearfix"> </div>
                 </div>
              </div> 
			 
              <div class="form-group form-group1">
                <label class="col-sm-2 control-lable" for="sex"> Gender : </label>
                <div class="col-sm-10">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="gender" value="male"> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="gender" value="female"> Female
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
			 
			  
		       <div class="caste_select">
		      <label for="edit-pass"> Caste <span class="form-required" title="This field is required.">*</span></label>
		        <div class="caste_grid">
		         <div class="col-sm-12 form_box">
                  <div class="select-block1">
	          <select name="caste">
			     <option value="Gupta">Gupta</option>
                 <option value="sharma">Sharma</option>
				  <option value="Rajput">Rajput</option>
				   <option value="Goyal">Goyal</option>
				    <option value="Sinha">Sinha</option>
				   	<option value="Singh">Singh</option>
					 <option value="Khan">Khan</option>
               </select>
			  </div>
			   </div>
			   </div>
			   </div><br><br>
			   
			     
		       <div class="religon_select">
		      <label for="edit-pass">Religion <span class="form-required" title="This field is required.">*</span></label>
		        <div class="religion_grid">
		         <div class="col-sm-12 form_box">
                  <div class="select-block1">
	           <select name="religion">
			     <option value="Hindu">Hindu</option>
                 <option value="Muslim">Muslim</option>
				  <option value="Sikh">Sikh</option>
				   <option value="Parsi">Parsi</option>
				    <option value="Buddhism">Buddhism</option>
					<option value="not defien">Other</option>
               </select> 
			  </div>
			   </div>
			   </div>
			   </div><br><br>
			  
			     
		       <div class="state_select">
		      <label for="edit-pass">State <span class="form-required" title="This field is required.">*</span></label>
		        <div class="state_grid">
		         <div class="col-sm-12 form_box">
                  <div class="select-block1">
	           <select name="state">
			    <option value="Asam">Asam</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
         		<option value="Bihar">Bihar</option>
			    <option value="Goa">Goa</option>
			    <option value="Gujrat">Gujrat</option>
				<option value="Odisha">Odisha</option>
				<option value="Rajsthan">Rajsthan</option>
				<option value="not define">Other</option>
               </select> 
			    </div>
			   </div>
			   </div>
			   </div><br><br>
			   
			   <div class="country_select">
		      <label for="edit-pass">Country <span class="form-required" title="This field is required.">*</span></label>
		        <div class="country_grid">
		         <div class="col-sm-12 form_box">
                  <div class="select-block1">
	           <select name="country"> 
			    <option value="India">India</option>
                <option value="United States">United States</option>
         		<option value="Australia">Australia</option>
			    <option value="China">China</option>
			    <option value="Bangladesh">Bangladesh</option>
				<option value="Russia">Russia</option>
				<option value="not define">Other</option>
               </select> 
			   </div>
			   </div>
			   </div>
			   </div><br><br>
			   
			   
			  <label for="edit-name"> About <span class="form-required" title="This field is required.">*</span></label>
			   <textarea class="form-control bio" name="about" placeholder="enter about yourself" rows="3"></textarea><br>
			     
				 <div class="form-group">
			     <label for="edit-name">Image <span class="form-required" >*</span></label>
		       <input type="file" name="photo" class="form-control"><br> <br>
			  </div>
			 <div class="form-actions">
			 <input type="submit" id="edit-submit" name="" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
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
</body>
</html>	