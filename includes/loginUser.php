<?php

use Classes\LoginView;

include "../vendor/autoload.php";

if(isset($_POST["sign_in"])){

    $loginObj = new LoginView($_POST["modal_email_login"], $_POST["modal_password_login"]);
    if($loginObj->loginStatus()){
       echo 1;
    }else {
        echo 0;
    }
}
