<?php
$name=$_Post['name'];
$visitor_email=$_Post['_replyto'];
$message=$_Post['message'];
$email_from= 'info@alfaiomegakursy.pl';
$email_subject="New Form Submission";
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "User Message: $message.\n";
$to='cyprian.galicki@gmail.com';
$headers="From: $email_from \r\n";
$headers.= "Reply-To: $visitor_email \r\n";
mail($to,$email_body,$headers);
header("Location: contact.html");
  }
?>


