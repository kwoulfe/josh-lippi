<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'Overtimers Site';
    $email_subject = 'New Message!';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    $to ="kevinpwoulfe@gmail.com";
    $headers ="From: $email_from \r\n";
    $headers .="Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");
?>