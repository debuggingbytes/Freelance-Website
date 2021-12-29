<?php
	$name = htmlspecialchars(stripslashes($_POST['name']));
	$surname = htmlspecialchars(stripslashes($_POST['surname']));
	$email = htmlspecialchars(stripslashes($_POST['email']));
	$need = htmlspecialchars(stripslashes($_POST['need']));
	$message = htmlspecialchars(stripslashes($_POST['message']));
	
	
	//SET UP MAIL FUNCTION
	$headers = "From: " . $email . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$to = "kris@debuggingbytes.com";
	$subject = "Request for Information";
	$message = 
"
******************************************
Automated Message from: debuggingbytes.com
******************************************

Hello!
". $name ." ". $surname." (". $email .")
has requested the following information

They are looking for information regarding: ". $need ."

with the following information: ".
$message."
";

	mail($to, $subject, $message, "from: contact@debuggingbytes.com");
	header("location: http://www.debuggingbytes.com");
?>