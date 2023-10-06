<?php
$name = $_POST['name'];

$visitor_email = $_POST['email'];

$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'SISTK.org';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "subject: $subject.\n"
              "User message: $message .\n";


    $to = 'hemanth27062006@gmail.com';
    
    $headers = "From: $email_form \r\n;"

    $headers .= "Reply-To: $visitor_email \r\n;"


    mail($to,$email_subjecct,$email_body,$headers);

    header("Location: contact.html");
?>
