<?php
$nume = $-POST['name'];
$visitor_email = $-POST['email'];
$subiect = $-POST['subiect'];
$mesaj = $-POST['mesaj'];

$email_from = 'makoveivalentin26@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $nume.\n".
               "User Email: $visitor_email.\n".
               "Subiect: $subiect.\n".
               "User Message: $mesaj.\n";

            $to = 'makoveivalentin26@gmail.com';

            $headers = "From: $email_form \r\n";

            $headers .= "Reply-To: visitor_email \r\n";

            mail($to,$email_subject,$email_body,$headers);

            header("Location: contact.html")
          
?>