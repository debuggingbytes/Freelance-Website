<?php
    include "includes/order-form.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DebuggingBytes | Edmonton Based Web Development, SEO/SEM Friendly websites, Fully responsive and Affordable</title>

	<!-- CSS Information -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="./files/syle.css">
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-JWKX9J2908');
	</script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
			<div class="container">
				<a href="#" class="navbar-brand w-50"><img src="./files/images/db-full-logo.png" class="img-fluid w-50" alt="Debugging Bytes"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navmenu">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a href="index.html" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="index.html#services" class="nav-link">Services</a>
						</li>
						<li class="nav-item">
							<a href="index.html#aboutus" class="nav-link">About Us</a>
						</li>
						<li class="nav-item">
							<a href="index.html#clients" class="nav-link">Clients</a>
						</li>
						<li class="nav-item">
							<a href="index.html#contactus" class="nav-link">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!--HERO IMAGE & CALL OUT-->
	<div class="img-fluid webdev-hero">
        <section class="text-light py-5 p-lg-0 pt-lg-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">  
                    <div>
                        <h1 class="text-shadow-lg"><span class="text-primary">Order::</span>Web Design</h1>                    
                        <p class=" my-4 ptsans text-shadow-sm">Thank you for choosing DebuggingBytes</p>
                    </div>
                    <img class="img-fluid w-50 d-none d-sm-block" src="./files/order-now.png" alt="Web Development made easy for the edmonton area">
                </div>
            </div>
        </section>
    </div>
    <!-- Start Body-->
    <section id="" class="p-5">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Order</li>
				</ol>
			</nav>
            <div class="row d-md-flex align-items-center justify-content-between text-light">
                <div class="col-md">
                    <h3 class="text-shadow-sm mb-5"><span class="text-primary">Order::</span>Your Website</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="p-1">
        <div class="container-fluid">
            <div class="row d-md-flex align-items-center justify-content-between text-dark">

                    <!-- Start Order Form-->
				    <div class="card-group d-md-flex">
					<div class="card m-2 rounded-3 shadow border border-primary">
                        
                        <div class="card-header bg-primary text-center h4 ptsans text-dark">Order Details - <?php echo $template_name; ?></div>
						<div class="card-body">
                            <div class="col-md" id="contact_form">
                            <form class="needs-validation sendme" method="post" action="includes/order-submit.inc.php">
                                    <div class="mb-1 form-floating">
                                        <input required type="text" class="form-control" name="fullname" placeholder="Your Full Name..">
										<label for="fullname">Full Name:</label>
									</div>
                                    <div class="mb-1 form-floating">
                                        <input required type="text" class="form-control" name="email" placeholder="Your Email..">
										<label for="email">Email:</label>
									</div>
                                    <div class="mb-1 form-floating">
                                        <input required type="text" class="form-control" name="phone" placeholder="7801234567">
										<label for="phone">Phone Number:</label>
									</div>
                                    <div class="mb-1 form-floating">
                                        <textarea name="message" rows="3" class="form-control" style="height: 100px;" required placeholder="I was wondering if..."></textarea>
										<label for="message">Revelant Information: </label>
									</div>
                                    <div class="mb-1">
                                        <label for="package" class="form-label">Package: 
                                        <span class="lead"><?php echo $template_name; ?> - $<?php echo $template_price; ?></span>
										<input type="text" name="package" value="<?php echo $template_name; ?>" class="d-none" readonly>
                                        <input required type="text" class="form-control op_package d-none" name="package" disabled value="<?php echo $template_price; ?>">
                                    </div>
									<!-- ADD PHP FOR TEMPLATE IF CUSTOM IS NOT SELECTED -->
									<?php if($templateActive){ ?>
									<div class="mb-1 form-floating">
                                         <select class="form-control text-center op_responsive" name="template_name" id="template_name">
                                            <option selected disabled> ----- Select -----</option>
											<option disabled>The Blogger</option>
											<option disabled>Simplistic</option>
											<option>Professional Sales</option>
                                        </select>
										<label for="responsie" class="form-label">Choose your template</label>
                                    </div>
									<?php } ?>
									<!-- END PHP SECTION -->
                                    <div class="mb-1 form-floating">
                                        
                                        <select class="form-control text-center op_extra" name="extra_pages" id="extra">
                                            <option class="add" value="0"> ----- Select -----</option>
                                            <option class="add" value="10"> One (+$10.00)</option>
                                            <option class="add" value="20"> Two (+$20.00)</option>
                                            <option class="add" value="30"> Three (+$30.00)</option>
                                            <option class="add" value="40"> Four (+$40.00)</option>
                                            <option class="add" value="50"> Five (+$50.00)</option>
                                            <option class="add" value="60"> Six (+$60.00)</option>
                                            <option class="add" value="70"> Seven (+$70.00)</option>
                                            <option class="add" value="80"> Eight (+$80.00)</option>
                                            <option class="add" value="90"> Nine (+$90.00)</option>
                                            <option class="add" value="100"> Ten (+$100.00)</option>

                                        </select>
										<label for="extra_pages" class="form-label">Extra Pages</label>
                                    </div>
                                    <div class="mb-1 form-floating">
                                        
                                        <select class="form-control text-center op_responsive" name="responsive" id="responsive">
                                            <option class="add" value="0"> ----- Select -----</option>
                                            <?php echo $responsive; ?>
                                        </select>
										<label for="responsive" class="form-label">Add Resonsive Deign:</label>
                                    </div>
                                    <div class="mb-1 form-floating">
                                        
                                        <select class="form-control text-center op_seo" name="add_seo">
                                            <option class="add" value="0"> ----- Select -----</option>
                                            <?php echo $seo; ?>
                                        </select>
										<label for="add_seo" class="form-label">Add SEO &amp; SEM</label>
                                    </div>
                                    <div class="mb-1 form-floating">
                                        
                                        <select class="form-control text-center op_mailer" name="mailer">
                                            <option class="add" value="0"> No</option>
                                            <?php echo $contact; ?>
                                            <input type="text" name="url" class="d-none" placeholder="url..">
                                        </select>
										<label for="mailer" class="form-label">Contact Us Function</label>
                                    </div>
                            </div>    
						</div>
						<div class="card-footer bg-primary">
							<div class="text-end text-light">
								<div class="form-floating col-md text-end">
											
									Order Total: <input type="text" readonly name="order_total" class="text-end form-control-plaintext text-light h3" value="" id="theorder">
								</div>
                            </div>
                            <div class="text-center">
								<input type="submit" name="submit" value="Submit Order" class="btn btn-light-orange">
							</div>
						</form>
					  </div>
				 	</div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    <footer class="p-2 bg-dark text-white text-center position-relative">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-between">
                <div class="col-md">
                    <p class="lead">Follow us on Social Media!</p>
                    <i class="bi bi-facebook h5 px-2 text-orange"></i>
                    <i class="bi bi-instagram h5 px-2 text-orange"></i>
                    <i class="bi bi-twitter h5 px-2 text-orange"></i>
                </div>
                <div class="col-md small">
                    <p>Copyright &copy; 2021<br>
                    http://www.debuggingbytes.com<br>
                    Content and Material cannot be reused without written consent from website owner</p>
                    <a href="#" class="position-absolute bottom-0 end-0 p-2">
                        <i class="bi bi-arrow-up-circle h2"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer> 
	
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./files/cart.js"></script>

<script>
    $(function () {
		$('.sendme').on('submit', function (e) {
			e.preventDefault();
			$.ajax({
				url: 'includes/order-submit.inc.php',
				type: 'POST',
				data: $('.sendme').serialize(),
				success: function () {
					
					$('#contact_form').html('<p>Sumitting Order</p><p class="card-text p-2" id="ajax_message"></p>');
					$('#ajax_message').html('<p class="lead">The system is currently processesing your order. During this time do not refresh the page or use your browsers back button. When the order has been submitted propery a success message will show up.</p>')
					.hide()
					.fadeIn(1500, function() {
						$('#ajax_message').append("<p><i class='bi bi-check text-success'></i>Your order has been successfully placed. You will receive a confirmation email from the system shortly. Ensure you check your Spam and Trash folders if you have not got your email within 30 minutes.");
					});    
            	}
      	  });
      });
	});
  </script>
