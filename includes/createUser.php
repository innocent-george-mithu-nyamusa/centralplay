<?php

use Classes\CardView;
use Classes\MobileView;
use Classes\SignUpView;
use Classes\UserSubscriptionView;
use Classes\UserView;
use Classes\Utilities;

session_start();


include_once "../vendor/autoload.php";

if (isset($_POST)) {

    $utilities = new Utilities();
    $signUpObj = new SignUpView();
    $userObj = new UserView();
    $subscriptionObj = new UserSubscriptionView();
    $cardObj = new CardView();
    $mobileObj = new MobileView();

    $dateExpired = new DateTime("now");
    $dateExpired = $dateExpired->add(new DateInterval('P30D'));
    $dateExpired = $dateExpired->format("Y-m-d");

    if (isset($_POST["cardHolderFullName"])) {

        $username = explode(" ", $_SESSION["userDetailFullName"]);
        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"])) {
            $userId = $signUpObj->getUserId($_SESSION["userDetailEmail"]);

            if (!$userId) {
                $userId = $_SESSION["userDetailEmail"];
            }

            $_SESSION["user_id"] = $userId;
            if ($cardObj->createCard($_POST["cardNumber"], $_POST["cardCvv"], $userId, $_POST["cardHolderFullName"], $_POST["cardExpire"], $_POST["cardZip"]) && $subscriptionObj->createUserSubscription($_SESSION["paymentPlan"], $_SESSION["paymentPlan"], "no_resource", $userId)) {

                $_SESSION["centralplay"] = true;
                $_SESSION["subscriptionExpirationDate"] = $dateExpired;
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo 0;
        }

    }

    if (isset($_POST["zipitRegister"])) {

        $username = explode(" ", $_SESSION["userDetailFullName"]);

        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"])) {

            $userId = $signUpObj->getUserId($_SESSION["userDetailEmail"]);

            if (!$userId) {
                $userId = $_SESSION["userDetailEmail"];
            }

            $_SESSION["user_id"] = $userId;
            if ($cardObj->createCard($_POST["zipitCardNumber"], $_POST["zipitCvv"], $userId, $_POST["zipitCardHolderFullName"], $_POST["zipitExpire"], $_POST["zipitZip"]) &&
                $subscriptionObj->createUserSubscription($_SESSION["paymentPlan"], $_SESSION["paymentPlan"], "no_resource", $userId)) {

                $_SESSION["centralplay"] = true;
                $_SESSION["subscriptionExpirationDate"] = $dateExpired;

                echo 1;
            } else {
                echo 0;
            }

        } else {
            echo 0;
        }
    }

    if (isset($_POST["ecocashNumber"])) {

        $username = explode(" ", $_SESSION["userDetailFullName"]);

        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"])) {

            $userId = $signUpObj->getUserId($_SESSION["userDetailEmail"]);

            if (!$userId) {
                $userId = $_SESSION["userDetailEmail"];
            }
            $_SESSION["user_id"] = $userId;

            if ($mobileObj->createMobileOption($_POST["ecocashNumber"], $userId, "ecocash", $_SESSION["paymentPlan"]) &&
                $subscriptionObj->createUserSubscription($_SESSION["paymentPlan"], $_SESSION["paymentPlan"], "no_resource", $userId)) {

                $_SESSION["centralplay"] = true;
                $_SESSION["subscriptionExpirationDate"] = $dateExpired;
                echo 1;
            } else {
                echo 0;
            }

        }else {
            echo 0;
        }
    }

    if (isset($_POST["telecashRegister"])) {

        $username = explode(" ", $_SESSION["userDetailFullName"]);

        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"])) {

            $userId = $signUpObj->getUserId($_SESSION["userDetailEmail"]);

            if (!$userId) {
                $userId = $_SESSION["userDetailEmail"];
            }

            $_SESSION["user_id"] = $userId;
            if ($mobileObj->createMobileOption($_POST["telecashNumber"], $userId, "telecash", $_SESSION["paymentPlan"]) &&
                $subscriptionObj->createUserSubscription($_SESSION["paymentPlan"], $_SESSION["paymentPlan"], "no_resource", $userId)) {
                $_SESSION["centralplay"] = true;
                $_SESSION["subscriptionExpirationDate"] = $dateExpired;
                echo 1;
            } else {
                echo 0;
            }

        } else {
            echo 0;
        }
    }

    if (isset($_POST["onemoneyRegister"])) {

        $username = explode(" ", $_SESSION["userDetailFullName"]);

        if ($signUpObj->createUser($username[0], $_SESSION["userDetailFullName"], 'no_phone', $_SESSION["userDetailEmail"], $_SESSION["userDetailPassword"])) {
            $userId = $signUpObj->getUserId($_SESSION["userDetailEmail"]);

            if (!$userId) {
                $userId = $_SESSION["userDetailEmail"];
            }

            $_SESSION["user_id"] = $userId;


            if ($mobileObj->createMobileOption($_POST["oneMoneyNumber"], $userId, "onemoney", $_SESSION["paymentPlan"]) &&
                $subscriptionObj->createUserSubscription($_SESSION["paymentPlan"], $_SESSION["paymentPlan"], "no_resource", $userId)) {

                $_SESSION["centralplay"] = true;
                $_SESSION["subscriptionExpirationDate"] = $dateExpired;

                echo 1;
            } else {
                echo 0;
            }

        } else {
            echo 0;
        }
    }


} else {
    echo "failed to see post";
}