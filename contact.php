<?php
   $name=$_POST['name'];
   $visitor_email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   $email_from='asmaasafwat91@gmail.com';
   $email_subject='New Form Submission';
   $email_body="User Name:$name.\n".
   "User Email: $visitor_email.\n."
   "User Message: $message.\n";

   $to="asmaasafwat91@gmail.com";
   $headers="fro:$email_from\r\n";
   mail($to,$email_subject,$email_body,$headers);
   header("Loaction:index.html");

?>