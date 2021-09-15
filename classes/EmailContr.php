<?php

namespace Classes;

class EmailContr extends Emailer
{
    public function __construct($name, $email, $message)
    {
        $utility = new Utilities();
        $messageHtml = Utilities::$ourMailhtml;

        $name = $utility::cleanData($name);
        $email = $utility::cleanData($email);
        $message = $utility::cleanData($message);

        parent::__construct($name, $email, $message, $messageHtml);
    }
}