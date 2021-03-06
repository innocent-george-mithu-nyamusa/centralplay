<?php

namespace Classes;

use Exception;

/**
 *
 */
class SignUp extends Dbh
{
    private string $user_id;
    private string $username;
    private string $user_fullname;
    private string $user_email;
    private string $user_password;
    private string $phone;

    //adds a new user to database

    /**
     * @param string $user_fullname
     */
    public function setUserFullName(string $user_fullName): void
    {
        $this->user_fullname = $user_fullName;
    }
    protected function setUsername($username)
    {
        $this->username = $username;
    }

    protected function setEmail($email)
    {
        $this->user_email = $email;
    }

    protected function setPassword($pass)
    {
        $this->user_password = $pass;
    }

    protected function setId($id)
    {
        $this->user_id = $id;
    }

    protected function createAdminStatus(): bool
    {
        return $this->createAdmin();
    }

    protected function setPhone(string $phone): void {
        $this->phone= $phone;
    }

    private function createAdmin(): bool
    {
        // Try to run the query and if it fails catch the exception
        // call static method which displays an error;

        try {

            $sign_up_query = "INSERT INTO user (user_id, username, user_fullname, user_email, user_password) VALUES (:user_id,:username,:user_fullname,:user_email,:user_password)";

            $signup_stmt = $this->connect()->prepare($sign_up_query);
            $signup_stmt->bindParam(':user_id', $this->user_id);
            $signup_stmt->bindParam(':username', $this->username);
            $signup_stmt->bindParam(':user_fullname', $this->user_fullname);
            $signup_stmt->bindParam(':user_email', $this->user_email);
            $signup_stmt->bindParam(':user_password', $this->user_password);

            return $signup_stmt->execute();
        } catch (Exception $e) {
            // Display an error with file , line and a full stacktrace of the error
            // method is static and implemented in Utilities class
            echo "failed to Sign Up" . $e->getMessage();
            return false;
        }
    }

    protected function createUserStatus(): bool {
        return $this->createUser();
    }

    private function createUser(): bool {
        try {
            $sign_up_query = "INSERT INTO user(user_id, username, user_fullname, user_email, user_phone, user_password) ";
            $sign_up_query .= "VALUES (:user_id,:username,:user_fullname,:user_email, :user_phone, :user_password)";

            $signup_stmt = $this->connect()->prepare($sign_up_query);
            $signup_stmt->bindParam(':user_id', $this->user_id);
            $signup_stmt->bindParam(':username', $this->username);
            $signup_stmt->bindParam(':user_fullname', $this->user_fullname);
            $signup_stmt->bindParam(':user_email', $this->user_email);
            $signup_stmt->bindParam(':user_phone', $this->phone);
            $signup_stmt->bindParam(':user_password', $this->user_password);

            return $signup_stmt->execute();

        }catch (Exception $exception) {

            echo "Failed to create user". $exception->getMessage();
            return false;
        }
    }

}
