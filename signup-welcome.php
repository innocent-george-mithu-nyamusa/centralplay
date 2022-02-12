<!doctype html>
<html lang="en">
	<?php
    session_start()
    ?>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
		
		<link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css"><!-- iconsmind.com Icons -->
		
		<title> Welcome | Central Play</title>
	</head>
	<body>
		
		<?php include "includes/header.php"; ?>

		<div id="content-pro">

			<div id="pricing-plans-background-image">
				<div class="container">
						<div class="registration-steps-page-container">
							

							<div class="registration-step-final-padding welcome-page-styles">
								
								<div class="centered-headings-pro pricing-plans-headings">
									<h6>Sign up complete!</h6>
									<h1>Welcome to Cetral Play!</h1>
								</div>
								
								<h6 class="welcome-style-summary">You can now start watching TV shows.</h6>
								<h6 class="welcome-style-summary">Your next billing information will be sent on your email on <?php echo $_SESSION["subscriptionExpirationDate"] ?></h6>
								
								<h3 class="welcome-plan-title">Your Plan: <span><?php echo $_SESSION["paymentPlan"]=="us" ? "US Plan": "RTGS Plan"; ?></span></h3>
								
								<ul class="welcome-features">
                                    <li>Ultra HD Available</li>
                                    <li>Watch on any Device</li>
                                    <li>Full Seasons</li>
                                    <li>HD also Available</li>
                                    <li>One Time Payment For Any Season</li>
								</ul>
								<div class="clearfix"></div>
								
								<div class="registration-step-final-footer">
									<button id="btnMakePayment" class="btn btn-green-pro">Make Payment</button>
									<button id="btnVerifyEmail" class="btn">Verify Your Email</button>
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
        <script src="js/payments.js" ></script>
		
	</body>

<!-- Mirrored from progression-studios.com/skrn/signup-welcome.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 14:39:49 GMT -->
</html>