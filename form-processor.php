<?php

	//isset determines if variable is not null
	//$_POST gets data from the form
if(!isset($_POST['submit']))
	{
		echo "Please submit the form!";
	}
	
//data collection
$name = $_POST['name'];
$senders_email = $_POST['email'];
$message = $_POST['message'];

//data validation
if (empty($name))
	{
		echo "Please enter your name!";
		exit;
	}
if (empty($senders_email))
	{
		echo "Please enter an email!";
		exit;
	}
if (empty($message))
	{
		echo "Please enter a message!";
		exit;
	}
	
$email_from = 'michellenicole17@hotmail.com';
$email_subject = "Website Form Submission";
$email_body = "<strong>$name</strong> sent you a message. \n".
	"email address: $senders_email \n".
	"Here is the message: \n \n $message".

$to = "michellenicole17@hotmail.com";
$headers = "From: $email_from \r \n";

//send email
mail($to,$email_subject,$email_body,$headers);

//redirect?

?>