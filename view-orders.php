<?php
	include "includes/view-orders.inc.php";  
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);             
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
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-light navbar-dark py-3 fixed-top">
			<div class="container">
				<a href="index.html" class="navbar-brand w-50"><img src="./files/images/db-full-logo.png" class="img-fluid w-50" alt="Debugging Bytes"></a>
				<button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="text-dark navbar-toggler-icon"><i class="bi bi-list"></i></span></button>
				<div class="collapse navbar-collapse" id="navmenu">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a href="index.html" class="nav-link text-dark">Main</a>
						</li>
						<li class="nav-item">
							<a href="#services" class="nav-link text-dark">Orders</a>
						</li>
						<li class="nav-item">
							<a href="#aboutus" class="nav-link text-dark">Something</a>
						</li>
							<li class="nav-item">
							<a href="#clients" class="nav-link text-dark">Time Management</a>
						</li>
						<li class="nav-item">
							<a href="#contactus" class="nav-link text-dark">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <!-- Start Body-->
    <section id="" class="p-5 mt-5">
        <div class="container-fluid">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Admin</a></li>
					<li class="breadcrumb-item active" aria-current="page">View Orders</li>
				</ol>
			</nav>
		</div>
	</section>
	<section id="" class="p-5">
		<div class="container-fluid"></div>
			<?php
				if(isset($_GET['uid'])){
					$uid = $_GET['uid'];
					$row = $orderObj->ViewOrder($uid);

					// Order Status Information
					if(empty($row['8'])){
						$status = "<span class='text-danger'><b>Incomplete</b></span>";
						$borderColor = "border-dark";
						$bgColor = "bg-warning";
					}else{
						$status = "<span class='text-success'><b>Complete</b></span>";
						$borderColor = "border-dark";
						$bgColor = "bg-success";
					}
					if(empty($row['12'])) { 
						// Array 12 = Deposit Information
						$deposit = "<span class='text-danger'><b>Not Received</b></span>";
					}else{
						$deposit = "<span class='text-success'><b>Received</b></span>";
					}
					if(empty($row['11'])) { 
						// Array 11 = Invoice Information
						$invoiceStatus = "<b>Invoice Due: </b><span class='text-success'>No Invoice &#128526;</span>";
						$invoice = "<span class='text-danger'><b>Invoice Not Created</b></span>";
					}else{
						$due_date = $row['11'];
						$sent_date = $row['10'];
						$invoiceStatus = $orderObj->invoiceStatus($sent_date, $due_date);
						$invoice = "<span class='text-success'><b>Invoice Sent</b></span>";
					}
					if(empty($row['13'])) { 
						// Array 12 = Invoice Information
						$payment = "<span class='text-danger'><b>Not Received</b></span>";
					}else{
						$payment = "<span class='text-success'><b>Received</b></span>";
					}
					
					$notes = $orderObj->viewNotes($uid);

			?>
	
			<div class="row d-md-flex align-items-center justify-content-between text-light">
                <div class="col-md shadow-lg text-dark">
                    <h3 class="text-shadow-sm mb-5"><span class="text-primary">Customer: </span><? echo $row[1]; ?></h3>
					<div class="row d-flex mb-1">
						<div class="row">
							<div class="col-md">
								<ul class="list-group p-3">
									<li class="list-group-item">Order #: <?php echo $row['0']; ?></li>
									<li class="list-group-item">Full Name: <?php echo $row['1']; ?></li>
									<li class="list-group-item">Email: <?php echo $row['2']; ?></li>
									<li class="list-group-item">Phone #: <?php echo $row['3']; ?></li>
									<li class="list-group-item">Total Cost: <?php echo $row['7']; ?></li>
									<li class="list-group-item text-center"><a href="#">Create Invoice</a></li>
									<li class="list-group-item">???</li>
								</ul>
							</div>
							<div class="col-md">
								<ul class="list-group p-3">
									<li class="list-group-item">Website Type : <?php echo $row['4']; ?></li>
									<li class="list-group-item">Template Name : <?php echo $row['5']; ?></li>
									<li class="list-group-item">Order Received : <?php echo $row['9']; ?></li>
									<li class="list-group-item">Order Status: <?php echo $status; ?></li>
									<li class="list-group-item">Deposit Received: <?php echo $deposit; ?> <b>($<?php echo $row['7'] / 2; ?>)</b></li>
									<li class="list-group-item">Invoice Information : <?php echo $invoice; ?></li>
									<li class="list-group-item">Invoice Paid : <?php echo $payment ?></li>
									<li class="list-group-item"><?php echo $invoiceStatus; ?> </li>
								</ul>
								
							</div>
						</div>
					</div>
					<div class="row p-4 my-2 ">
						<div class="card-header">Additional Information <a href="#info" data-bs-toggle="collapse"><i class="bi bi-arrow-down-circle"></i></a></div>
							<div class="shadow border border-2 rounded-3">
								<div class="col-md collapse" id="info">
									<?php echo nl2br($row['6']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row d-md-flex align-items-center justify-content-between text-light mt-3">
                <div class="col-md shadow-lg text-dark">
					<h3 class="text-shadow-sm my-5">Development Notes</h3>
					<div class="row p-4 my-2 ">
						<div class="card-header">Website Notes <a href="#notes" data-bs-toggle="collapse"><i class="bi bi-arrow-down-circle"></i></a></div>
							<div class="shadow border border-2 rounded-3">
								<div class="col-md collapse" id="notes">
									<div class="row text-center g-4">
									<?php
									foreach ($notes AS $note){
									?>
									
										<div class="col-md my-5">
											<div class="card w-100 shadow">
												<div class="card-header bg-primary"><? echo $note['1']; ?></div>
												<div class="card-body p-1 shadow-sm">
													<p class="card-text"><? echo nl2br($note['2']); ?></p>
												</div>
												<div class="card-footer bg-primary align-items-center">
													<small class="text-muted"><? echo $note['3']; ?> </small>
												</div>
											</div>
										</div>
									<?php
									}
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
				}else{

			?>
            <div class="row d-md-flex align-items-center justify-content-between text-light">
                <div class="col-md shadow-lg text-dark">
                    <h3 class="text-shadow-sm mb-5"><span class="text-primary">Current Active Orders</span></h3>
					<div class="row d-flex border border-2 border-dark mb-1">
						<div class="flex-shrink-1">OrderID</div>
						<div class="flex-grow-1 text-start col-md">Full Name</div>
						<div class="text-start col-md">Email</div>
						<div class="text-start col-md">Phone</div>
						<div class="text-center col-md">Website Type</div>
						<div class="text-center col-md ">Order Status</div>
						<div class="flex-grow-1 text-center col-md">Order Received</div>
						<div class="col-md-1 text-end"><i class="bi bi-folder2-open text-success"></i></a></div>
					</div>
					<?php
						// Load All Active orders (complete = null)
						$rows = $orderObj->ViewAll();
						foreach($rows AS $row){
							if(empty($row['8'])){
								$status = "<span class='text-danger'><b>Incomplete</b></span>";
								$borderColor = "border-dark";
								$bgColor = "bg-warning";
							}else{
								$status = "<span class='text-success'><b>Complete</b></span>";
								$borderColor = "border-dark";
								$bgColor = "bg-success";
							}
						?>
					<div class="row d-flex border border-2 mb-1 <?php echo $borderColor; ?>">
						<div class="flex-shrink-1 <?php echo $bgColor; ?>"><? echo $row['0']; ?></div>
						<div class="flex-grow-1 text-start col-md"><? echo substr($row['1'], 0, 20); ?></div>
						<div class="text-start col-md"><? echo $row['2']; ?></div>
						<div class="text-start col-md"><? echo $row['3']; ?></div>
						<div class="text-center col-md"><? echo $row['4']; ?></div>
						<div class="text-center col-md "><? echo $status ?></div>
						<div class="flex-grow-1 text-center col-md"><? echo $row['9']; ?></div>
						<div class="col-md-1 text-end"><a href="view-orders.php?uid=<?php echo $row['0']; ?>"><i class="bi bi-folder2-open text-success"></i></a></div>
					</div>
						<?php
						}
					?>
                </div>
            </div>
			<?php
				}
			?>
        </div>
    </section>
    <!--Footer-->
    <footer class="p-2 bg-dark text-white text-center position-relative">
        <div class="container">
            <p>END OF PAGE</p>
        </div>
    </footer> 
	
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>