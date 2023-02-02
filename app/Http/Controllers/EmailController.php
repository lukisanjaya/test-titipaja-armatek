<?php

namespace App\Http\Controllers;

use App\Helpers\EmailHelper;
use Exception;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $email = new EmailHelper();
        $email->setSender("lukiforwork@gmail.com");
        $email->setSenderName("Luki Sanjaya");
        $email->setRecipient("webplw@gmail.com");
        $email->setRecipientName("Sanjaya");
        $email->setSubject("Task Send Email");
        $email->setMessageBody("Hi!, This email From me");

        try {
            $email->send();
            echo "successfully";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
