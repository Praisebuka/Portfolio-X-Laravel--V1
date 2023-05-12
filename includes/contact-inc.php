<?Php 

        //creating the variables for the contact submission
if (isset($_POST['submit'])) {
    $name = trim($_POST['name' ." - ". 'second']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);


    //needed details (For the location of where the captured details is heading to), also making it more readable for me
    $myMail = "praisebuka@proton.me";
    $header = "From: " . $email;
    $message2 = "You have a new message from " . $name . "<br> whose phone number
    is ". $phone ."\n\n" . $message;

    
    //Writing the functions for where the above details should go
    //such as.....The email am sending to
    //............The subject
    //............The message
    mail($myMail, $subject, $message2);
    return ('../sorry.html');
    
} else {
    return ('../sorry.html');
}


?>