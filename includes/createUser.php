<?php

use Classes\CardView;
use Classes\MobileView;
use Classes\SignUpView;
use Classes\UserSubscriptionView;
use Classes\UserView;
use Classes\Utilities;

session_start();


include_once "../vendor/autoload.php";

if(isset($_POST)) {

    $utilities = new Utilities();
    $signUpObj = new SignUpView();
    $userObj = new UserView();
    $subscriptionObj = new UserSubscriptionView();
    $cardObj = new CardView();
    $mobileObj = new MobileView();


    if (isset($_POST["cardRegister"])) {

        $username = explode(" ", $_POST["user_fullname"]);

        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"])) {
            if ($cardObj->createCard($_POST["cardNumber"], $_POST["cardCvv"], $_SESSION["userDetailEmail"], $_POST["cardHolderFullName"], $_POST["cardExpiry"], $_POST["cardZip"]) && $subscriptionObj->createUserSubscription($_SESSION["paymentPlan"], $_SESSION["paymentPlan"], "no_resource", $_SESSION["userDetailEmail"])) {
                echo 1;
            } else {
                echo 0;
            }

        } else {
            echo 0;
        }

    }

    if (isset($_POST["zipitRegister"])) {

        $username = explode(" ", $_POST["user_fullname"]);

        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"])) {
            if ($cardObj->createCard($_POST["zipitCardNumber"], $_POST["zipitCvv"], $_SESSION["userDetailEmail"], $_POST["zipitCardHolderFullName"], $_POST["zipitExpire"], $_POST["zipitZip"]) &&
                $subscriptionObj->createUserSubscription($_SESSION["paymentPlan"], $_SESSION["paymentPlan"], "no_resource", $_SESSION["userDetailEmail"])) {
                echo 1;
            } else {
                echo 0;
            }

        } else {
            echo 0;
        }
    }

    if (isset($_POST["ecocashRegister"])) {
        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"]) &&
            $mobileObj->createMobileOption($_POST["ecocashNumber"], $_SESSION["userDetailEmail"], "ecocash", $_SESSION["paymentPlan"])) {
            echo 1;
        } else {
            echo 0;
        }
    }

    if (isset($_POST["telecashRegister"])) {
        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"]) &&
            $mobileObj->createMobileOption($_POST["telecashNumber"], $_SESSION["userDetailEmail"], "telecash", $_SESSION["paymentPlan"])) {
            echo 1;
        } else {
            echo 0;
        }
    }

    if (isset($_POST["onemoneyRegister"])) {

        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"]) &&
            $mobileObj->createMobileOption($_POST["oneMoneyNumber"], $_SESSION["userDetailEmail"], "onemoney", $_SESSION["paymentPlan"])) {
            echo 1;
        } else {
            echo 0;
        }
    }

}else {
    echo 0;
}