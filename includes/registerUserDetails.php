<?php

session_start();
use Classes\UserView;

include "../vendor/autoload.php";


if(isset($_POST["user_email"])) {

    $_SESSION["userDetailEmail"] = $_POST["user_email"];
    $_SESSION["userDetailFullName"]= $_POST["user_fullname"];
    $_SESSION["userDetailPassword"] = $_POST["user_password"];
    echo 1;
}else {
    echo 0;
}