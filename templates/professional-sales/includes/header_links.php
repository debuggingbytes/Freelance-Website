<header>
    <!-- primary header for php --->
	<!----------------- PRIMARY NAVBAR ----------------->
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
	
	<!----------------- MOBILE NAVBAR STUFF ----------------->
	<div class="nav-opener">
		<i class="fa fa-bars" aria-hidden="true"></i>
		<a href="/default.htm">
			<img src="files/logo.png" alt="logo">
		</a>
	</div>
	<div class="nav-closer">
		<i class="fa fa-times" aria-hidden="true"></i>
	</div>
	
	<!----------------- SIDE LINKS --------------->
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