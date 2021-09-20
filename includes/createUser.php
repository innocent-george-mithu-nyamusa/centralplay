<?php

use Classes\SignUpView;
use Classes\UserView;
use Classes\Utilities;

session_start();


include_once "../vendor/autoload.php";

$utilities =  new Utilities();
$signUpObj = new SignUpView();
$userObj = new UserView();

if(isset($_POST["cardRegister"])) {

    $username = explode(" ", $_POST["user_fullname"]);
    if($signUpObj->createUser($username[0],  $_POST["user_fullname"], 'no_phone', $_POST["user_email"], $_POST["user_password"])) {

    }
}

if(isset($_POST["zipitRegister"])) {

}

if(isset($_POST["ecocashRegister"])) {

}

if(isset($_POST["telecashRegister"])) {

}

if(isset($_POST["onemoneyRegister"])){

}