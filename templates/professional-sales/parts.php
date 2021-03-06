<?PHP
	include("./includes/acs_config.php");

	if(!defined('ACS_KEY')){
		exit("Invalid Key");
	}
	//Add HTML Code to begin page structure
?>
<!DOCTYPE html>
<html class="fa-events-icons-failed" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Description" content="Founded in 2013, Alberta Crane Service Ltd. has quickly become well-known and respected in the heavy equipment and crane industry in the Alberta, Canada area. Located in Edmonton, Alberta, Canada, Alberta Crane Service Ltd. is a proudly Canadian owned and operated company providing over 30 years of experience in the crane industry.">
	<title>ACS Crane &amp; Equipment Sales</title>
	<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			</script>
	<![endif]-->
    
    <!-- CSS -->
    <link rel="stylesheet" href="files/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="files/bootstrap-grid.css" type="text/css">
    <link rel="stylesheet" href="files/bootstrap-reboot.css" type="text/css">
    <link rel="stylesheet" href="files/style.css" type="text/css">
    <link rel="stylesheet" href="files/menu.css" type="text/css">
    <link rel="stylesheet" href="files/font-awesome.css" type="text/css">
    
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/siteart/logos/favicon.png">
    
	<!-- Google Analytics -->
	<script async src="files/analytics.js"></script><script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-110256925-28', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->
	
	<!-- FORM SCRIPT -->
	<script language="javascript" type="text/javascript">
		function validation(passForm)
		{
			if (passForm.Primary_Name.value == "")
			{
				alert("Please enter your Name.")
				passForm.Primary_Name.focus()
				return false
			}

			if (passForm.Phone.value == "")
			{
				alert("Please enter your phone number.")
				passForm.Phone.focus()
				return false
			}

			if (passForm.Email.value == "")
			{
				alert("Please enter your Email.")
				passForm.Email.focus()
				return false
			}

			if (passForm.Crane_Details.value == "")
			{
				alert("Please enter any details about the crane you are requesting.")
				passForm.Crane_Details.focus()
				return false
			}

			if (passForm.Message.value == "")
			{
				alert("Please enter a message.")
				passForm.Message.focus()
				return false
			}

			var answer = document.getElementById('CaptchaAnswer').value;
			if (answer == "")
			{
				alert("Please enter the characters for the security image.")
				passForm.CaptchaAnswer.focus()
				return false
			}

			return true
		}
	</script>
    
	<!-- FONT AWESOME -->
	<script src="files/6da1c96306.js"></script><link rel="stylesheet" href="files/6da1c96306.css" media="all">
    
<script type="text/javascript" src="files/ylnfnugevlogxjwj834033.js" defer></script><style type="text/css">#d__fFH{position:absolute;top:-5000px;left:-5000px}#d__fF{font-family:serif;font-size:200px;visibility:hidden}#fdwvwcbrvysyxyyvdcccrbvtqtudbtqbe{display:none!important}</style></head>

<body>
<?php
	//Include Dynamic Links
	include("./includes/header_links.php");
?>
<div id="wrapper">
	<div class="container-fluid">
		
		
		
		
		<!----------------- SIMPLE LOGO w/ BACKGROUND 
		<div class="row">
			<div class="col hero">
				<img src="files/logo-simple.png" alt="Alberta Crane Service Simple Logo">
			</div>
		</div>
		----------------->
		
		
		
		
		<!----------------- SCROLLING INVENTORY ----------------->
		<div class="scrolling-wrap blue-bg">
			<iframe src="files/ScrollingInventory.htm" class="scrolling" scrolling="no" frameborder="0"></iframe>
		</div>

		<!----------------- MAIN CONTENT INFORMATION ----------------->
		<div class="row justify-content-center dark-bg">
			<iframe src="https://cranenetwork.com/iframe?u=72559&type=parts" width="100%" frameborder="0" scrolling="auto" height="850px"></iframe>
		</div>
		
		
		
		
		
		
		<!----------------- ABOUT TEXT ROW ----------------->
		<div class="row justify-content-center about-row line-bg">
			<div class="col-sm-6">
				<h1>We're Reaching Higher Standards</h1>
				<p>
					Founded in 2013, Alberta Crane Service Ltd. has quickly become well-known and respected in the heavy equipment industry.
					<br><br>
					Located in Edmonton, Alberta, Canada, Alberta Crane Service Ltd. is
 a proudly Canadian owned and operated company providing you with over 
30 years experience in the crane industry. With our cranes located 
worldwide, we are proud to offer our customers with a service and 
professionalism that cannot be matched. We specialize in buying and 
selling cranes all over the globe.
					<br><br>
					Contact us today to find out more information. You can also connect with us on <a href="https://twitter.com/AlbertaCraneSrv" target="_blank">Twitter</a> or <a href="https://www.facebook.com/AlbertaCraneService/" target="_blank">Facebook</a>.
				</p>
			</div>
			<div class="col-sm-5">
				<img src="files/acs-logo-new.png" alt="Alberta Crane Service logo">
			</div>
		</div>
		
		
		
		
		
		<!----------------- FOOTER ----------------->
				<div class="row tile-bg footer">
			<div class="col-md-5">
				<a href="/default.htm">HOME</a> ???
				<a href="/about.htm">ABOUT US</a> ???
				<a href="#">INVENTORY</a> ???
				<a href="/financing.htm">FINANCING</a> ???
				<a href="/contact.htm">CONTACT US</a>
			</div>
			<div class="col-md-2">
				<a href="https://www.facebook.com/AlbertaCraneService/" target="_blank"><img src="files/facebook.png" alt="Go to Alberta Crane Service's Facebook"></a>
				&nbsp;
				<a href="https://twitter.com/AlbertaCraneSrv" target="_blank"><img src="files/twitter.png" alt="Go to Alberta Crane Service's Twitter"></a>
			</div>
			<div class="col-md-5">
				
<!-- MachineryTrader Footer
<div class="divfooter">
<span class="footertext">Site Hosted By...</span><a target="_blank" href="http://www.machinerytrader.com/" class="footerlink">CraneTrader.com</a><span class="smallfootertext">??<br>
?? Copyright by Sandhills Publishing Company 2018. All rights reserved. 
Reproduction of material appearing on this Web site is strictly 
prohibited 
without written permission. <i>Crane Trader</i> and <i>Crane Trader Marketbook</i> are registered trademarks of Sandhills Publishing Company.
</span>
<br>
<a target="_blank" href="http://www.machinerytrader.com/info/legal.aspx" class="footerlink">Copyright &amp; Legal Notice</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
<a target="_blank" href="http://www.machinerytrader.com/info/privacy.aspx" class="footerlink">Privacy Policy</a></div>
<!-- End of MachineryTrader Footer-->

			</div>
		</div>
	</div>
</div>


<!-- SCRIPTS -->
<script type="text/javascript" src="files/html5shiv.js"></script>
<script type="text/javascript" src="files/jquery-3.js"></script>
<script type="text/javascript" src="files/scripts.js"></script>
<script type="text/javascript" src="files/ResizeSensor.js"></script>
<script type="text/javascript" src="files/ElementQueries.js"></script>
<script type="text/javascript" src="files/bootstrap_002.js"></script>
<script type="text/javascript" src="files/bootstrap.js"></script>


<div id="d__fFH" style="position: absolute; top: -5000px; left: -5000px;"><object id="d_dlg" classid="clsid:3050f819-98b5-11cf-bb82-00aa00bdce0b" width="0px" height="0px"></object><span id="d__fF" style="font-family: &quot;Courier&quot;, serif; font-size: 72px; visibility: hidden;">The quick brown fox jumps over the lazy dog.</span></div></body></html>	