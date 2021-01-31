<?php

        $ToEmail = 'wojtanowska.a.93@gmail.com'; 
        $EmailSubject = 'BGM Contact Form'; 
        $mailheader = "From: ".$_POST["Email"]."\r\n"; 
        $mailheader .= "Reply-To: ".$_POST["Email"]."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $MESSAGE_BODY = "First Name: ".$_POST["firstName"].""; 
        $MESSAGE_BODY .= "Last Name: ".$_POST["lastName"].""; 
        $MESSAGE_BODY .= "Email: ".$_POST["Email"].""; 
        $MESSAGE_BODY .= "Comment: ".nl2br($_POST["Message"]).""; 
        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");

  /*  $name = $_POST['first name'];
    $lname = $_POST['last name'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'wojtanowska.a.93@gmail.com';

    $email_subject = 'New form Submission';

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n". 
                        "User Message: $message.\n";
                        
    $to = "wojtanowska.a.93@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html"); */


?>
