<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'eduford@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subjject.\n".
              "User Message: $message.\n".


$to = 'muzammilqurban367@gmail.com';

$headers = "From: $email_from \r\n ";

$headers = "Reply_To: $visitor_emnail \r\n ";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>