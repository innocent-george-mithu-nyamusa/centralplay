<!doctype html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
		
		<link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css"><!-- iconsmind.com Icons -->
		
		<title> Password Reset | Central Play</title>
	</head>
	<body>
		
		<?php include "includes/header.php"; ?>

		<div id="content-pro">

			<div id="pricing-plans-background-image">
				<div class="container">
						<div class="registration-steps-page-container">
							

							<div class="registration-step-final-padding welcome-page-styles">
								
								<div class="centered-headings-pro pricing-plans-headings">
									<h6>Password Reset!</h6>
									<h1>Reset password to access your Account!</h1>
								</div>
								
								<h6 class="welcome-style-summary">Enter your existing email to reset your password
                                </h6>
                                <div class="form-group align-items-center">
                                    <div id='mail_success' class='success text-center'>Email Successfully sent.</div>
                                    <div id='mail_fail' class='error text-center' >Password Reset Failed!.</div>
                                </div>
                                <form id="password_reset_form">
                                    <div class="form-group">
                                        <input type="email" name="email_reset_password" class="form-control" id="email_reset_password" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" name="password_reset" id="password_reset_button" class="btn btn-green-pro btn-display-block">Reset Password</button>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row no-gutters">
                                            <div class="col forgot-your-password"><a href="index.php">Login In Instead</a></div>
                                        </div>
                                    </div><!-- close .container-fluid -->
                                </form>
								<div class="clearfix"></div>
								
								<div class="registration-step-final-footer">
									<a href="signup-step1.php" class="btn">Create Account</a>
									<a href="index.php" class="btn">Login In Into account</a>
								</div>
								
							</div><!-- close .registration-step-final-padding -->
	  					 
							
						</div><!-- close .registration-steps-page-container -->
					
				</div><!-- close .container -->
			</div><!-- close #pricing-plans-background-image -->
			
		</div><!-- close #content-pro -->
		
		<?php include "includes/footer.php";?>
		
		<a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>

		<!-- Modal -->
		<?php
            include "includes/loginModal.php";
        ?><!-- close .modal -->
		

		<!-- Required Framework JavaScript -->
		<script src="js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
		<script src="js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
		<script src="js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
		<!-- All JavaScript in Footer -->
		
		<!-- Additional Plugins and JavaScript -->
		<script src="js/navigation.js" defer></script><!-- Header Navigation JS -->
		<script src="js/jquery.flexslider-min.js" defer></script><!-- Custom Document Ready JS -->		
		<script src="js/script.js" defer></script><!-- Custom Document Ready JS -->
        <script src="js/authentication.js" ></script>
		
	</body>

<!-- Mirrored from progression-studios.com/skrn/signup-welcome.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 14:39:49 GMT -->
</html>