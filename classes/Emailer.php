<?php

namespace Classes;

class Emailer
{
    public function __construct($name, $email, $messagePlain, $messageHtml){

        $mail = new \SendGrid\Mail\Mail();

        $mail->setFrom("lostandfound@lostandfound.com", "Lost and Found");
        $mail->setSubject("Thanks for Signing Up with Lost and Found. Please Verify your Account");
        $mail->addTo("$email", "$name");
        $mail->addContent("text/plain", $messagePlain);
        $mail->addContent("text/html", $messageHtml);

        $sendgrid = new \SendGrid("key here");

        try {
            $response = $sendgrid->send($email);
            // print $response->statusCode() . "\n";
            // print_r($response->headers());
            // print $response->body() . "\n";
//            $request = new UserRequest($name, $email, $messagePlain);
        } catch (\Exception $e) {
            echo "Caught exception ". $e->getMessage(). "\n";
        }


    }

}