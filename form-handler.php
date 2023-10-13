<?php /*from contact form*/
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@nusossolution.com';

$email_subject = 'Enquiry';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User Message: $message.\n";
 
$to ='contact@nusossolution.com'; /*where you want to see the message sent from your site i.e contact page it can be your gmail or yahoo account*/

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>