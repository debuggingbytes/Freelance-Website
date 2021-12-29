<?php
    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    //pages to includes
   # include 'autoloader.inc.php';
	include '/classes/contact.class.php';
    //code
    if(!isset($_POST['submit'])){
        die("Fatal Error");
    }else{


        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $message = $_POST['message'];
        $bot_check = $_POST['url'];

	
        $contactObj = new Contact($first_name, $last_name, $email, $service, $message, $bot_check);
        $result = $contactObj->ValidateEmail($email);
           
        $contactObj->SendMail();
		#header("location: /thank-you.html");
     
    }