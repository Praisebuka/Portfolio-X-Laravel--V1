<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactIncController extends Controller
{
    public function index()
    {
             //creating the variables for the email-sending
        if (isset($_POST['submit'])){
            $name = trim($_POST['name' ." - ". 'second']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $message = trim($_POST['message']);


            //needed details (For the location of my prey's details), also making it more readable for me
            $myMail = "praisepraise359@gmail.com";
            $subject = "From: " . $name. " which is using ". $email;
            $message2 = "You have a new message from " . $name . "<br> whose phone number
            is ". $phone ."\n\n" . $message;

            
            //Writing the functions for where the above details should go
            //such as.....The email am sending to
            //............The subject
            //............The message
            mail($myMail, $subject, $message2);
            
            # Just trying some stuffs to myself from the user using email.
            return view('sorry');
        } else {
            return view('sorry');
        }
        
    }


}
