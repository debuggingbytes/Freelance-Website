<?php
    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    include 'autoloader.inc.php';

    if(!isset($_POST['first_name'])){
		die("Fatal Error");
    }else{


        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $message = $_POST['message'];
        $bot_check = $_POST['url'];
		$bot_check2 = $_POST['robot2'];
		if($bot_check2 != 7){
			die("Fatal Error");
		}

	
        $contactObj = new Contact($first_name, $last_name, $email, $service, $message, $bot_check);
        $result = $contactObj->ValidateEmail($email);
        
        if(!isset($result)){
            echo "Validate Email - Failed";
            exit();
        }else{
            
            $dataValid = $contactObj->ValidateData();

            if(!isset($dataValid)){
                echo "ValidateData - Failed";
                exit();
            }else{
                $bot = $contactObj->BotCheck();
                if(isset($bot)){
                    echo "BotCheck - Failed";
                    exit();
                }else{
                    
                    $headers  = "From: DB Robot <noreply@debuggingbytes.com>\n";
					$headers .= "X-Sender: DebuggingBytes <noreply@debuggingbytes.com>\n";
					$headers .= 'X-Mailer: PHP/' . phpversion();
					$headers .= "X-Priority: 1\n"; // Urgent message!
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
					
					$message = '
					<html>
					<head>
						<title>Contact</title>
						<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />
					</head>
					<body><img alt="" src="http://www.debuggingbytes.com/files/images/db-full-logo.png" /><br />
					<br />
					Full name : '. $first_name .'<br />
					Last name : '. $last_name .'<br />
					Email :'. $email .'<br />
					Service : '. $service .'<br />
					<br />
					Would like to find out more information sent from our contact page, they left the following message<br />
					'. $message .'
					&nbsp;</body>
					</html>
					';


					mail("kris@debuggingbytes.com", "DB Contact Form", $message, $headers);
					
					#$contactObj->SendMail();
                }
                
            }
        }    
    }