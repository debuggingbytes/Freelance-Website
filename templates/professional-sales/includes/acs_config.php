<?php
	define('ACS_KEY', true);
	
	// Links
	$default = "/default.php";
	$about = "/aboutus.php";
	$inventory = "/inventory.php";
	$finance = "/financing.php";
	$contact = "/contact.php";
	
	$career = false;
	if($career){
		$careers = "<span style='color: green'>hiring</span>. Please check the Careers page.";
		$career_link = '<li><a href="careers.php"><li class="contact-nav">
				<img src="files/contact-mobile-icon.png" alt=" icon" class="mobile--icon"> &nbsp;
					Careers&nbsp;
				</li>
			</a>';
	}else{
		$careers = "<span style='color: red'>Not-Hiring</span>. a careers page will appear on the menu when we are!";

	}
	
	// MySQL Connection Information
	$db_server = "http://mysql.acs-sale.com";
	$db_user = "acs_sale";
	$db_pass = "Iloveyou0710";
	$db_dir = "acs_sale_data";
	
?>