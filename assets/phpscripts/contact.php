<?php
    //this is your Email address
    //kinldy update your email here
    $to = "impresds@gmail.com";
    $from = $_POST['email']; 
    //this is the sender's Email address
    //this is firt name
    $first_name = $_POST['name'];
    //this is last name
    $last_name = $_POST['name'];
    //this is subject
    $subject = "Form Subject Here: ";
    //this is message body
    $message = "Message " . $first_name . " " . $last_name . " написал следующее:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message,$headers2); 
?>