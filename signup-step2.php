<!doctype html>
<html lang="en">
<?php
session_start();


if(isset($_SESSION["userDetailEmail"])) {

    unset($_SESSION["userDetailFullName"]);
    unset($_SESSION["userDetailPassword"]);
    unset($_SESSION["userDetailEmail"]);
}

?>

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
		
		<link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css"><!-- iconsmind.com Icons -->
		
		<title> Sign Up - User Details | Central Play</title>
	</head>
	<body>
		
		<?php include "includes/header.php";?>
		

		<div id="content-pro">
			
  	 		<div class="container">
					<div class="centered-headings-pro pricing-plans-headings">
						<h6>For one low monthly price</h6>
						<h1>Instantly watch TV shows &amp; Movies</h1>
					</div>
			</div><!-- close .container -->
			
			<div class="container">
				<ul id="registration-steps-pro">
					<li>
						<a href="signup-step1.php">
							<div class="registration-step-circle-icon">01</div>
							<div class="registration-step-number">Step 1</div>
							<h5 class="registration-step-title">Choose your plan</h5>
						</a>
					</li>
					<li class="current-menu-item">
						<a href="signup-step2.php">
							<div class="registration-step-circle-icon">02</div>
							<div class="registration-step-number">Step 2</div>
							<h5 class="registration-step-title">Create your account</h5>
						</a>
					</li>
					<li>
						<a href="signup-step3.php">
							<div class="registration-step-circle-icon">03</div>
							<div class="registration-step-number">Step 3</div>
							<h5 class="registration-step-title">Billing information</h5>
						</a>
					</li>
					<li>
						<a href="signup-step4.php">
							<div class="registration-step-circle-icon">04</div>
							<div class="registration-step-number">Step 4</div>
							<h5 class="registration-step-title">Welcome to SKRN!</h5>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			
			
			<div id="pricing-plans-background-image">
				<div class="container">
						<div class="registration-steps-page-container">
							
	  					 <form class="registration-steps-form" id="register-form" method="post" action="">
							 
							 <div class="registration-social-login-container">

                                 <div id="errorText" class="" role="alert" style="background-size: cover; display: none">
                                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                         <use xlink:href="#exclamation-triangle-fill"></use>
                                     </svg>
                                     <div id="errText" style="background-size: cover;">
                                         Email Already taken
                                     </div>
                                 </div>

    	  						 <div class="form-group">
    								 <label for="full-name" class="col-form-label">Full Name</label>
    	  							 <input type="text" name="user_fullname" class="form-control" id="full-name" placeholder="John Doe">
    	  						 </div>
    	  						 <div class="form-group">
    								 <label for="email"  class="col-form-label">Email</label>
    	  							 <input type="email" name="user_email" class="form-control" id="email" placeholder="jondoe@gmail.com">
    	  						 </div>

    	  						 <div class="form-group">
    								 <div class="row">
    									<div class="col">
    	  								 <label for="password" class="col-form-label">Password</label>
    	  	  							 <input type="password" name="user_password" class="form-control" id="password" placeholder="&middot;&middot;&middot;&middot;&middot;&middot;">
    									</div>
    									<div class="col">
    	  								 <label for="confirm-password" class="col-form-label">&nbsp;</label>
    	  	  							 <input type="password" name="user_password_confirm" class="form-control" id="confirm-password" placeholder="Confirm Password">
    									</div>
    								 </div>
    	  						 </div>
								 <div class="registration-social-login-or">or</div>
							 </div><!-- close .registration-social-login-container -->
							 
							 <div class="registration-social-login-options">
							 	<h6>Sign up with one of your social accounts</h6>
								<div class="social-icon-login facebook-color"><i class="fab fa-facebook-f"></i> Facebook</div>
								<div class="social-icon-login twitter-color"><i class="fab fa-twitter"></i> Twitter</div>
								<div class="social-icon-login google-color"><i class="fab fa-google-plus-g"></i> Google</div>
							 </div><!-- close .registration-social-login-options -->
							 
							 <div class="clearfix"></div>
	  						 <div class="form-group last-form-group-continue">
                                 <input type='submit' id='register' name ="register_user" value='Continue'
                                        class="btn btn-green-pro">
<!--	  							 <a href="javascript:void(0);" id="register" class="btn btn-green-pro">Continue</a>-->
								 <span class="checkbox-remember-pro"><input type="checkbox" id="checkbox-terms"><label for="checkbox-terms" class="col-form-label">By clicking "Continue", you agree to our <a href="#!">Terms of Use</a> and 
<a href="#!">Privacy Policy</a> including the use of cookies.</label></span>

                                 <div id='mail_success' class='success'>Your have registered successfully.</div>
                                 <div id='mail_fail' class='error'>Sorry, error in registering .</div>

								 <div class="clearfix"></div>
	  						 </div>
	  					 </form>
							
						</div><!-- close .registration-steps-page-container -->
					
				</div><!-- close .container -->
			</div><!-- close #pricing-plans-background-image -->
			
		</div><!-- close #content-pro -->

        <?php include "includes/footer.php";?>
		
		<a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>
		<!-- Modal -->
		<?php include "includes/loginModal.php";?><!-- close .modal -->
		

		<!-- Required Framework JavaScript -->
		<script src="js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
		<script src="js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
		<script src="js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
		<!-- All JavaScript in Footer -->
		
		<!-- Additional Plugins and JavaScript -->
		<script src="js/navigation.js" defer></script><!-- Header Navigation JS -->
		<script src="js/jquery.flexslider-min.js" defer></script><!-- Custom Document Ready JS -->		
		<script src="js/script.js" defer></script><!-- Custom Document Ready JS -->
        <?php  include "includes/userRegistration.php"; ?>
		
	</body>

<!-- Mirrored from progression-studios.com/skrn/signup-step2.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 14:39:42 GMT -->
</html>