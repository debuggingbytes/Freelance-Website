<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    include 'autoloader.inc.php';
	
    // Validate form
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $extra_pages = $_POST['extra_pages'];
    $responsive = $_POST['responsive'];
    $add_seo = $_POST['add_seo'];
    $mailer = $_POST['mailer'];
	$order_total = $_POST['order_total'];
	$url = $_POST['url'];
	$package_name = $_POST['package'];
	$total_cost = $_POST['order_total'];
	
	if(isset($_POST['template_name'])){
		$template_name = $_POST['template_name'];
	}else{
		$template_name = "";
	}


	
    //Create Class Object
	$orderObj = new Order($fullname,$email, $phone, $message, $package_name, $extra_pages, $responsive, $add_seo, $mailer, $total_cost, $template_name);

    // Validate Data
    // was the form submitted correctly
	$result = null;
	if(!isset($fullname)){
		//Name was not sent correctly
		exit();
	}else{
		$result = $orderObj->validateName();
		if(empty($result)){
			echo "Invalid name";
		}else{
			//Name was valid, validate email
			$result = null;
			$result = $orderObj->validateEmail();
			if(empty($result)){
				echo "Email Validation failed";
			}else{
				//Email was valid, validate phone number
				$result = null;
				$result = $orderObj->validatePhone();
				if(empty($result)){
					echo "Phone number invalid";
					exit();
				}else{
					// Where they a bot?
					if(!empty($url)){
						echo "Sorry, No bots allowed :)";
						exit();
					}else{
						//Validate Message
						$result = null;
						$result = $orderObj->validateMessage();
						if(empty($result)){
							echo "that message was not valid.";
						}else{
							// All validations where successful
							// Start order submission
							$orderSubmit = $orderObj->submitOrder();
							if(empty($orderSubmit)){
								// There was a database error....
								echo "database failure";
								exit();
							}else{
								// Send Email to Client of success
								echo 'Victory';
								$orderObj->SendClient();
								$orderObj->SendMail();

							}
						}
					}
				}
			}
		}
	}
