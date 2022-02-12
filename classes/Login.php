<?php

namespace Classes;

use Exception;
use PDO;

class Login extends Dbh
{

    private $userEmail;
    private $password;

    public function __construct(){

    }

    protected function setPassword(string $password): void
    {
        $this->password = $password;
    }

    protected function setEmail(string $email): void
    {
        $this->userEmail = $email;
    }

    protected function isUserValid(): bool
    {
        return $this->validateUser();
    }



    private function validateUser(): bool
    {
        $utilities = new Utilities();

        try {
            $loginQuery = "SELECT user_id, username, user_password, user_image, user_role, user_status, subscription_expiration FROM user INNER JOIN subscription WHERE user.user_id= subscriber_id AND user.user_email = ?";
            $login_stmt = $this->connect()->prepare($loginQuery);
            $login_stmt->execute([$this->userEmail]);
            $countUsers = $login_stmt->rowCount();
            $hash = $login_stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($countUsers > 0) {

                if (password_verify($this->password, $hash[0]['user_password'])) {
                    $login_stmt->closeCursor();
                    session_start();
                    $_SESSION["role"] = $hash[0]["user_role"];
                    $_SESSION["user_id"] = $hash[0]["user_id"];
                    $_SESSION["username"] = $hash[0]["username"];
                    $_SESSION["image"] = $hash[0]["user_image"];
                    $_SESSION["centralplay"] = true;
                    if($utilities->isSubscriptionValid($hash[0]["subscription_expiration"])){
                        $_SESSION["validSubscription"] = true;
                    }else {
                        $_SESSION["validSubscription"] = false;
                    }

                    return true;
                }
                return false;
            } else {
//                echo "failed to login";
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

}
