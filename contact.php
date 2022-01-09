<?php

  $name= $_POST['email'];
  $visitor_email = $POST['email'];
  $messsage = $_POST['message'];


  $email_from = 'thami-cell.github.io';
  
  $email_subject = 'New From Submission.';

  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

  $to = 'thami.18@outlook.com';

  $headers = 'From: $email_from \r\n';

  $headers = 'Reply-to: $visitor_email \r\n';

  mail($to,$email_subject,$email_body,$headers);

  header('Location: index.html');
                
?>
