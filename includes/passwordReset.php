<?php


if(isset($_POST["email_reset_password"])) {
  $userObj = new \Classes\UserView();
  $emailObj = new \Classes\EmailView();

  if($userObj->checkEmail($_POST["email_reset_password"])){


  }



}else {
    echo 0;
}
