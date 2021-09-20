<?php
namespace Classes;

class SignUpView extends SignUpContr
{
    private $status;
    public function __construct(){
    }

    public function createAdmin(string $username,string $firstname, string $lastname, string $email, string $password)
    {


        $username = Utilities::cleanData($username);
        $email = Utilities::cleanData($email);
        $firstname = Utilities::cleanData($firstname);
        $lastname = Utilities::cleanData($lastname);
        $password = Utilities::cleanData($password);

        $this->getId();
        $this->getUsername($username);
        $this->getFirstname($firstname);
        $this->getLastname($lastname);
        $this->getEmail($email);
        $this->getPassword($password);

        $this->status = $this->getSignUpStatus();
    }

    public function createUser(string $username,string $fullname, string $phone, string $email, string $password) :bool {

        $username = Utilities::cleanData($username);
        $email = Utilities::cleanData($email);
        $fullname = Utilities::cleanData($fullname);
        $phone = Utilities::cleanData($phone);
        $password = Utilities::cleanData($password);

        $this->getId();
        $this->getUsername($username);
        $this->getFullname($fullname);
        $this->getPhone($phone);
        $this->getEmail($email);
        $this->getPassword($password);

        return $this->createUserStatus();

    }

    public function showStatus(): bool {
        return $this->status;
    }


}