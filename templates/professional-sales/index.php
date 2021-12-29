<!DOCTYPE html>
<html class="fa-events-icons-failed" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="Description" content="">
		<title>ACS Crane &amp; Equipment Sales</title>
		<link rel="stylesheet" href="files/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="files/bootstrap-grid.css" type="text/css">
		<link rel="stylesheet" href="files/bootstrap-reboot.css" type="text/css">
		<link rel="stylesheet" href="files/style.css" type="text/css">
		<link rel="stylesheet" href="files/menu.css" type="text/css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
	</head>
	<body>
		<header>
			<nav class="primary">
				<ul id="navbar">
					<a href="<?php print $default; ?>"><li id="navbar--logo"><img src="files/acs-logo-new.png" alt="Alberta Crane Service logo"></li></a>
					<a href="<?php print $default; ?>"><li class="first home-nav">
						<img src="files/home-mobile-icon.png" alt=" icon" class="mobile--icon"> &nbsp;
							Home &nbsp;
						</li>
					</a>
					<a href="<?php print $about; ?>"><li class="about-nav">
						<img src="files/contact-mobile-icon.png" alt=" icon" class="mobile--icon"> &nbsp;
							About Us &nbsp;
						</li>
					</a>
					<a href="<?php print $inventory; ?>"><li class="inventory-nav">
						<img src="files/locations-mobile-icon.png" alt=" icon" class="mobile--icon"> &nbsp;
							Inventory &nbsp;
						</li>
					</a>
					<a href="<?php print $finance; ?>"><li class="financing-nav">
						<img src="files/financing-mobile-icon.png" alt=" icon" class="mobile--icon"> &nbsp;
							Financing &nbsp;
						</li>
					</a>
					<a href="<?php print $contact; ?>"><li class="contact-nav">
						<img src="files/contact-mobile-icon.png" alt=" icon" class="mobile--icon"> &nbsp;
							Contact Us &nbsp;
						</li>
					</a>
					<?php echo $career_link; ?>
				</ul>
			</nav>
			<div class="nav-opener">
				<i class="fa fa-bars" aria-hidden="true"></i>
				<a href="/default.htm">
					<img src="files/logo.png" alt="logo">
				</a>
			</div>
			<div class="nav-closer">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>
			<div class="header-links">
				<div class="row">
					<div class="col-md-5 social">
						<a href="https://www.facebook.com/AlbertaCraneService/" target="_blank"><img src="files/facebook.png" alt="Go to Alberta Crane Service's Facebook"></a>
						&nbsp;
						<a href="https://twitter.com/AlbertaCraneSrv" target="_blank"><img src="files/twitter.png" alt="Go to Alberta Crane Service's Twitter"></a>
					</div>
					<div class="col-md-7">
						<p>
							<a href="tel:7808032302">
								<i class="fa fa-phone" aria-hidden="true"></i> (780) 803-2302<br>
							</a>
							<a href="mailto:contact@acs-sale.com">
								<i class="fa fa-envelope" aria-hidden="true"></i> Email Us<br>
							</a>
							<a href="https://www.google.com/maps?q=ACS+Crane+%26+Equipment+Sales,+7023+22+Ave+SW,+Edmonton,+Alberta+T6X+0T8+Canada" target="_blank">
								<i class="fa fa-location-arrow" aria-hidden="true"></i> Directions<br>
							</a>
						</p>
					</div>
				</div>
			</div>
		</header>
		<div id="wrapper">
			<div class="container-fluid">		
				<div class="row">
					<div class="col hero">
						<img src="files/logo-simple.png" alt="Alberta Crane Service Simple Logo">
					</div>
				</div>
		
				<div class="row justify-content-center dark-bg">
					<div class="col-md-11">
				<div class="col-12 text-center">
						<h2 class="light white extra-padding">View Equipment By Category</h2>
					</div>
				<div class="row justify-content-around">
										
					<!--- ROW 1 --->
					<div class="col-md-2 category-tile" id="cat__allterrain">
						<div class="category-tile__link">
							<a href="/inventory.php?cat=AT">
								All Terrain Cranes<br>
								<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
					<div class="col-md-2 category-tile" id="cat__boom">
						<div class="category-tile__link">
							<a href="inventory.php?cat=boomtruck">
								Boom Trucks<br>
								<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
					<div class="col-md-2 category-tile" id="cat__carrydeck">
						<div class="category-tile__link">
							<a href="inventory.php?cat=carrydeck">
								Carry Deck Cranes<br>
								<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>					
				</div>
				
				<div class="row justify-content-around">
					<!--- ROW 2 --->
					<div class="col-md-2 category-tile" id="cat__conventional">
						<div class="category-tile__link">
							<a href="inventory.php?cat=truckmount">
								Truck Mounts<br>
								<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
					<div class="col-md-2 category-tile" id="cat__crawler">
						<div class="category-tile__link">
							<a href="inventory.php?cat=crawler">
								Crawler &amp; Dragline Cranes<br>
								<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
					<div class="col-md-2 category-tile" id="cat__roughterrain">
						<div class="category-tile__link">
							<a href="inventory.php?cat=RT">
								Rough Terrain Cranes<br>
								<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
				</div>
				<div class="row justify-content-around">
	               <div class="col-md-2 category-tile" id="cat__tower">
						<div class="category-tile__link">
							<a href="inventory.php?cat=tower">
								Tower Cranes<br>
								<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
	               <div class="col-md-2 category-tile" id="cat__tractor">
						<div class="category-tile__link">
							<a href="inventory.php?cat=equipment">
								Other Equipment<br>
								<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
						<div class="col-md-2 category-tile" id="cat__parts">
							<div class="category-tile__link">
								<a href="inventory.php?cat=parts">
									Parts<br>
									<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
								</a>
							</div>
						</div>				
					</div>					
				</div>
			</div>
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
				<a href="default.php">HOME</a>  
				<a href="aboutus.php">ABOUT US</a>  
				<a href="inventory.php">INVENTORY</a>  
				<a href="financing.php">FINANCING</a>  
				<a href="contact.php">CONTACT US</a>
			</div>
			<div class="col-md-2">
				<a href="https://www.facebook.com/AlbertaCraneService/" target="_blank"><img src="files/facebook.png" alt="Go to Alberta Crane Service's Facebook"></a>
				&nbsp;
				<a href="https://twitter.com/AlbertaCraneSrv" target="_blank"><img src="files/twitter.png" alt="Go to Alberta Crane Service's Twitter"></a>
			</div>
			<div class="col-md-5">				
			<!--  Footer-->
			<div class="divfooter">
			<span class="footertext">Website Created By </span><a href='http://www.albertacraneservice.com/' target="_blank">ACS Ltd.</a><span class="smallfootertext">®<br>
			Crane inventory provided live from <a href="http://www.cranenetwork.com/">Crane Network</a> . Content and Material cannot be reused without written consent. Copyright&copy; 2018
			</span>
			<br>
<!-- End of  Footer-->
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>