<?php

namespace Classes;

use Classes\Utilities;

class SignUpContr extends SignUp
{

    private $cUsename;
    private $cEmail;
    private $cFirstname;
    private $cLastname;
    private $cId;
    private $password;

    private  function  createPassword(): void {
       $this->password = password_hash($this->password, PASSWORD_BCRYPT, array("cost"=> 12));
    }

    private function createId() {
        $this->cId = Utilities::genUniqueId('user');

    }

    private function checkUsername() : void{
        $this->setUsername($this->cUsename);
    }

    private function checkEmail(): void {
        $this->setEmail($this->cEmail);
    }

    private function checkFirstname(): void {
        $this->setFirstname($this->cFirstname);
    }

    private function checkLastname(): void {
        $this->setLastname($this->cLastname);
    }

    private function checkId(): void {
        $this->createId();
        $this->setId($this->cId);
    }

    private function checkPassword(): void{
        $this->createPassword();
        $this->setPassword($this->password);
    }

    protected function getUsername(string $username): void{
        $this->cUsename = $username;
        $this->checkUsername();
    }

    protected function getPhone(string $phone): void {

        $this->setPhone($phone);
    }


    protected function getEmail(string $email) : void {
        $this->cEmail = $email;
        $this->checkEmail();
    }

    protected function getFirstname(string $firstname) : void  {
        $this->cFirstname = $firstname;
        $this->checkFirstname();
    }

    protected function getLastname(string $lastname) : void  {
        $this->cLastname = $lastname;
        $this->checkLastname();
    }

    protected function getPassword(string $password) : void{
        $this->password = $password;
        $this->checkPassword();
    }

    protected function getId() : void{
        $this->checkId();
    }

    protected function getSignUpStatus(): bool {

        return $this->createAdminStatus();
    }

}