<!----------------- EQUIPMENT CATEGORY ROW ----------------->
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
					<!--- ROW 3 --->
                    <!--
                    	Removed Parts from Row Three
                        until "Other Cranes" section is defined
                     
					<div class="col-md-2 category-tile" id="cat__parts">
						<div class="category-tile__link">
							<a href="parts.php">
								Parts<br>
								<span>Inventory <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
                    --->
                    <!--
                    // Keep Crane Request hidden until close link working
                    // December 19-2018
                    
					<div class="col-md-2 category-tile" id="cat__requests">
						<div class="category-tile__link">
							<a>
								Crane Requests<br>
								<span>Make a Request</span>
							</a>
						</div>
					</div>
					-->
					<!----------------- CRANE REQUEST FORM POPUP ----------------->
					<div id="crane-request-popup" class="line-bg">
						<span id="request-closer"><i class="fa fa-close" aria-hidden="false"></i></span>
						<form class="contact-form" method="post" onsubmit="return validation(this)" action="default.htm">
							<input type="hidden" name="form_fieldlist" value="Primary_Name, Email, Phone, Crane_Details, Message">
							<input type="hidden" name="form_subject" value="Contact From ACS Ltd">
							<input type="hidden" name="form_thankyou" value="default.php?msg=24">
							<input type="hidden" name="form_to" value="contact@albertacraneservice.com">
							<h1>Crane Request</h1>
							<input type="text" placeholder="Name" name="Primary_Name">
							<input type="text" placeholder="Email" name="Email">
							<input type="text" placeholder="Phone Number" name="Phone">
							<input type="text" placeholder="Crane Details" name="Crane_Details">
							<textarea placeholder="Message" name="Message"></textarea>
							<br><br>
							<script language="JavaScript">
								function WhatsThisPopUp(url) {
									sealWin=window.open(url,"win",'toolbar=0,location=0,directories=0,status=1,menubar=1,scrollbars=1,resizable=1,width=400,height=200');
									self.name = "mainWin";
								}
								
								</script>
								
								
								<style type="text/css">
									.CaptchaPanel { margin: 10px 0px 10px 0px; text-align: center; padding: 10px; }
									.CaptchaImagePanel { padding: 5px 5px 10px 5px; }
									.CaptchaImage { border: 1px solid #333; }
									.CaptchaMessagePanel { padding: 5px 5px 10px 5px; font-weight: bold; }
									.CaptchaAnswerPanel { padding: 5px 5px 10px 5px; }
									.CaptchaWhatsThisPanel { padding: 5px 5px 10px 5px; }	
								</style>
								
								
								<div class="CaptchaPanel">
									<div class="CaptchaImagePanel"><img class="CaptchaImage" id="CaptchaImage" src="files/ImageSrc.jpg"></div>
									<div class="CaptchaMessagePanel">For security purposes, please enter the characters from the box above:</div>
									<div class="CaptchaAnswerPanel"><input id="CaptchaAnswer" name="CaptchaAnswer" size="20" maxlength="5"></div>
									<div class="CaptchaWhatsThisPanel"><a href="javascript: close();">Close</a></div>
								</div>
									
								<input type="hidden" name="validateCaptcha" value="1">
								
									<input type="hidden" name="Phrase" value="9x-^v">
									<input type="hidden" name="Key" value="mzvt#prjhadkgg iwu7vtti e">
									
									
									<script>
										document.getElementById('CaptchaImage').src="https://www.machinerytrader.com/captcha/ImageSrc.aspx?phrase=9x%2D%5Ev&key=mzvt%23prjhadkgg+iwu7vtti+e";
									</script>
	
							<button type="submit" class="btn btn-primary"><i class="fa fa-3x fa-send" aria-hidden="false" alt="submit form"></i></button>
						</form>
					</div>
					
				</div>
			</div>
		</div>