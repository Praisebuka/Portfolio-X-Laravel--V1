<?Php 
include '../includes/head.php';

        //creating the variables for the contact
if (isset($_POST['submit'])) {
    $name = trim($_POST['name' ." - ". 'second']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);


    //needed details (For the location of my prey's details), also making it more readable for me
    $myMail = "praisep359@gmail.com";
    $header = "From: " . $email;
    $message2 = "You have a new message from " . $name . "<br> whose phone number
    is ". $phone ."\n\n" . $message;

    
    //Writing the functions for where the above details should go
    //such as.....The email am sending to
    //............The subject
    //............The message
    mail($myMail, $subject, $message2);
    return view('sorry');
    
} else {
    echo  trying($views);
}


?>