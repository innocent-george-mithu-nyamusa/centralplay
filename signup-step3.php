<!doctype html>
<html lang="en">

<!-- Mirrored from progression-studios.com/skrn/signup-step3.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 14:39:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">

    <link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
    <link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css">
    <!-- iconsmind.com Icons -->

    <title>Sign Up - Bank Details | Lost And Found </title>
</head>
<body>

<?php include "includes/header.php"; ?>


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
            <li>
                <a href="signup-step2.php">
                    <div class="registration-step-circle-icon">02</div>
                    <div class="registration-step-number">Step 2</div>
                    <h5 class="registration-step-title">Create your account</h5>
                </a>
            </li>
            <li class="current-menu-item">
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
                <div class="registration-billing-form">
                    <div class="row">
                        <div class="col-md">
                            <div id="payment_visa_option"
                                 class="jumbotron jumbotron-fluid jumbotron-pro jumbotron-selected">
                                <div class="container">
                                    <i id="check-icon" class="fas fa-check-circle"></i>
                                    <img src="images/demo/billing-credit-card.png" alt="Credit Card">
                                    <h6 class="light-weight-heading">Pay with Credit Card</h6>
                                </div>
                            </div><!-- close .jumbotron -->

                        </div><!-- close .col-md -->
                        <div class="col-md">
                            <div id="payment_zipit_option" class="jumbotron jumbotron-fluid jumbotron-pro">
                                <div class="container">
                                    <div id='check-icon-repl-1'></div>
                                    <img src="images/demo/local_payments_options.png" alt="Credit Card">
                                    <h6 class="light-weight-heading">Pay with Any local choice</h6>
                                </div>
                            </div><!-- close .jumbotron -->

                        </div><!-- close .col-md -->
                    </div><!-- close .row -->
                    <div class="row">
                        <div class="col-lg">
                            <div id="errorText" class="" role="alert" style="background-size: cover; display: none">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                     aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill"></use>
                                </svg>
                                <div id="errText" style="background-size: cover;">
                                    Incorrect Bank Details
                                </div>
                            </div>
                            <div class="row adjust-margin-top adjust-margin-bottom">
                                <div class="col-sm">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" id="payment_ecocash_option" class="form-check-input"
                                                   name="optradio">
                                            Ecocash
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" id="payment_onemoney_option" class="form-check-input"
                                                   name="optradio">
                                            OneMoney
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" id="payment_telecash_option" class="form-check-input"
                                                   name="optradio"
                                            >Telecash
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="billing-form-pro" style="display: block" id="payment_options_card_online_details">
                            <form id="visa_payment_form" method="post" action="">
                                <div class="form-group">
                                    <label for="cardHolderFullName" class="col-form-label">Cardholder Name:</label>
                                    <input type="text" class="form-control" id="cardHolderFullName"
                                           name="cardHolderFullName" required>
                                </div>
                                <div class="form-group">
                                    <label for="cardNumber" class="col-form-label">Card Number:</label>
                                    <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                                </div>

                                <div class="row adjust-margin-top adjust-margin-bottom">
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="cardExpire" class="col-form-label">Expiration Date:</label>
                                            <input type="text" class="form-control" id="cardExpire" placeholder="MM/YY"
                                                   name="cardExpire" required>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="cardCcv" class="col-form-label">CVV:</label>
                                            <input type="text" class="form-control" id="cardCcv" placeholder="XXX"
                                                   name="cardCvv" required>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="cardZip" class="col-form-label">Zip:</label>
                                            <input type="text" class="form-control" id="cardZip" placeholder="00000"
                                                   name="cardZip" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="billing-plan-container">
                                        <h5>Your Plan: <a href="signup-step1.php">Change plan</a></h5>
                                        <h3>Premium: <span class="total">$14</span><span class="duration">/month</span>
                                        </h3>
                                    </div>

                                    <input type="submit" value="Sign Up" id="visaCardRegister" name="visaCardRegister"
                                           class="btn btn-green-pro">
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <div class="billing-form-pro" style="display: none" id="payment_options_zipit_card_details">
                            <form id="zipit_payment_form" name="zipit_payment_form" action="" method="post">
                                <div class="form-group">
                                    <label for="zipitCardholder" class="col-form-label">Zipit Cardholder Name:</label>
                                    <input type="text" class="form-control" id="zipitCardholder"
                                           name="zipitCardHolderFullName" required>
                                </div>

                                <div class="form-group">
                                    <label for="zipitCardNumber" class="col-form-label">Card Number:</label>
                                    <input type="text" class="form-control" id="zipitCardNumber" name="zipitCardNumber"
                                           required>
                                </div>

                                <div class="row adjust-margin-top adjust-margin-bottom">
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="zipitExpire" class="col-form-label">Expiration Date:</label>
                                            <input type="text" class="form-control" id="zipitExpire"
                                                   placeholder="MM/YY" name="zipitExpire">
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="zipitCvv" class="col-form-label">CVV:</label>
                                            <input type="text" class="form-control" id="zipitCvv" placeholder="XXX"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="zipitZip" class="col-form-label">Zip:</label>
                                            <input type="text" class="form-control" id="zipitZip" placeholder="00000"
                                                   required>
                                        </div>
                                    </div>

                                </div><!-- close .row -->

                                <div class="form-group">

                                    <div class="billing-plan-container">
                                        <h5>Your Plan: <a href="signup-step1.php">Change plan</a></h5>
                                        <h3>Premium: <span class="total">$14</span><span class="duration">/month</span>
                                        </h3>
                                    </div><!-- close .billing-plan-container -->

                                    <input type="submit" id="zipitRegister" name="zipitRegister" value="Sign Up" class="btn btn-green-pro" >
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <div class="billing-form-pro" style="display: none" id="payment_options_ecocash_details">
                            <form id="ecocash_payment_form" name="ecocash_payment_form">
                                <div class="form-group">
                                    <label for="ecocashNumber" class="col-form-label">Ecocash Number</label>
                                    <input type="text" class="form-control" id="ecocashNumber" placeholder="Example: +263778900000">
                                </div>

                                <div class="form-group">
                                    <div class="billing-plan-container">
                                        <h5>Your Plan: <a href="signup-step1.php">Change plan</a></h5>
                                        <h3>Premium: <span class="total">$14</span><span class="duration">/month</span>
                                        </h3>
                                    </div><!-- close .billing-plan-container -->

                                    <input type="submit" id="ecocashRegister" name="ecocashRegister" value="Sign Up" class="btn btn-green-pro" >
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <div class="billing-form-pro" style="display: none" id="payment_options_onemoney_details">
                            <form id="onemoney_payment_form">
                                <div class="form-group">
                                    <label for="oneMoneyNumber" class="col-form-label">One Money Number</label>
                                    <input type="text" class="form-control" id="oneMoneyNumber" name="oneMoneyNumber" placeholder="Example: +263712900000">
                                </div>

                                <div class="form-group">
                                    <div class="billing-plan-container">
                                        <h5>Your Plan: <a href="signup-step1.php">Change plan</a></h5>
                                        <h3>Premium: <span class="total">$14</span><span class="duration">/month</span>
                                        </h3>
                                    </div><!-- close .billing-plan-container -->

                                    <input type="submit" id="onemoneyRegister" name="onemoneyRegister" value="Sign Up" class="btn btn-green-pro" >
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <div class="billing-form-pro" style="display: none" id="payment_options_telecash_details">
                            <form id="telecash_payment_form" name="onemoney_payment_form" action="" method="post">
                                <div class="form-group">
                                    <label for="telecashNumber" class="col-form-label">Telecash Number</label>
                                    <input type="text" class="form-control" id="telecashNumber" name="telecashNumber" placeholder="Example: +263733900000">
                                </div>
                                <div class="form-group">
                                    <div class="billing-plan-container">
                                        <h5>Your Plan: <a href="signup-step1.php">Change plan</a></h5>
                                        <h3>Premium: <span class="total">$14</span><span class="duration">/month</span>
                                        </h3>
                                    </div>

                                    <input type="submit" id="telecashRegister" name="telecashRegister" value="Sign Up" class="btn btn-green-pro" >
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <div class="form-group">
                            <div id='mail_success' class='success'>Your have registered successfully.</div>
                            <div id='mail_fail' class='error'>Sorry, error in registering .</div>
                        </div>
                    </div><!-- close .row -->

                </div><!-- close .registration-billing-form -->

            </div><!-- close .registration-steps-page-container -->

        </div><!-- close .container -->
    </div><!-- close #pricing-plans-background-image -->

</div><!-- close #content-pro -->

<?php include "includes/footer.php"; ?>

<a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>


<!-- Modal -->
<?php include "includes/loginModal.php" ?><!-- close .modal -->


<!-- Required Framework JavaScript -->
<script src="js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
<script src="js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
<script src="js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
<!-- All JavaScript in Footer -->

<!-- Additional Plugins and JavaScript -->
<script src="js/navigation.js" defer></script><!-- Header Navigation JS -->
<script src="js/jquery.flexslider-min.js" defer></script><!-- Custom Document Ready JS -->
<script src="js/script.js" defer></script><!-- Custom Document Ready JS -->
<?php include "includes/userRegistration.php"; ?>

</body>

<!-- Mirrored from progression-studios.com/skrn/signup-step3.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 14:39:45 GMT -->
</html>