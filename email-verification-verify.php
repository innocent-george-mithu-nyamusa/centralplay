<!doctype html>
<html lang="en">
<?php

use Classes\UserView;

session_start();

include "vendor/autoload.php";

$verified = false;

if (
    isset($_GET["channel"]) && ($_GET["channel"] == "email") && isset($_GET["purpose"]) && $_GET["purpose"] == "verification" && isset($_GET["verificationToken"]) && isset($_GET["email"])
) {
    $userObj = new UserView();
    if ($userObj->verifyAccount($_GET["email"], $_GET["verificationToken"])) {
        $verified = true;
    }

} else {
    header("Location: index.php");
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">

    <link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
    <link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css">

    <title> Account Verification | Central Play </title>
</head>
<body>

<?php include "includes/header.php"; ?>

<div id="content-pro">

    <div id="pricing-plans-background-image">
        <div class="container">
            <div class="registration-steps-page-container">

                <div class="registration-step-final-padding welcome-page-styles">
                    <?php if ($verified == true && isset($_GET["verificationToken"])) {
                        $_SESSION["accountVerified"] = true;
                        ?>
                        <div class="centered-headings-pro pricing-plans-headings">
                            <h6>Account verification Successful!</h6>
                            <h1>Thank yor for taking the time to verify your Account!</h1>
                        </div>

                        <h6 class="welcome-style-summary">Proceed to Enjoy the best of entertainment Central play has to offer.</h6>

                        <h3 class="welcome-plan-title"><span>Account Verification Complete </span></h3>

                        <div class="clearfix"></div>
                        <a href="signup-welcome.php" class="btn btn-green-pro">Go To Central Play</a>
                    <?php } else { ?>
                        <div class="centered-headings-pro pricing-plans-headings">
                            <h6>Account verification failed !</h6>
                            <h1>Please Retry to Verify Your Account!</h1>
                        </div>

                        <h3 class="welcome-plan-title" style="color: red"><span>Verification Email token may have Expired</span>
                        </h3>

                        <div class="clearfix"></div>

                        <div class="registration-step-final-footer">
                            <button id="btnMakePayment" class="btn">Retry To Verify Account</button>
                        </div>
                    <?php } ?>


                </div><!-- close .registration-step-final-padding -->


            </div><!-- close .registration-steps-page-container -->

        </div><!-- close .container -->
    </div><!-- close #pricing-plans-background-image -->

</div><!-- close #content-pro -->

<?php include "includes/footer.php"; ?>

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
<script src="js/payments.js"></script>

</body>

<!-- Mirrored from progression-studios.com/skrn/signup-welcome.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 14:39:49 GMT -->
</html>