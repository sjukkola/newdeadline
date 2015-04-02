<?php
// Check for empty fields
if(empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$email_address = $_POST['email'];
	
// Create the email and send the message
$to = 'newdeadline@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New subscriber! Jes!";
$email_body = "You have received a new subscriber from your website contact form.\n\n"."Here are the details: Email: $email_address\n\n";
$headers = "From: noreply@newdeadline.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>