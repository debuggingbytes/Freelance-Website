<style type="text/css">
.carousel {
	background: #2f4357;
}
.carousel h2 {
	display: block;
	text-shadow: 1px 1px 1px #FFF;
	text-align: center;
	margin: 0 auto;
	width: 350px;
	
}
.carousel .item {
min-height: 150px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel ul {
	list-style: none;
}
.item img {
	height: 150px;
	width: 150px;
	margin-left: 180px;
	margin-top: 25px;
	padding-bottom: 10px;
}
.bs-example {
}
</style>

<!-- Start Carousel JS -->
<script type="text/javascript">
		$(document).ready(function(){
			// Activate carousel
			$("#myCarousel").carousel();
			
			// Enable carousel control
			$(".left").click(function(){
				$("#myCarousel").carousel('prev');
			});
			$(".right").click(function(){
				$("#myCarousel").carousel('next');
			});
			
			// Enable carousel indicators
			$(".slide-one").click(function(){
				$("#myCarousel").carousel(0);
			});
			$(".slide-two").click(function(){
				$("#myCarousel").carousel(1);
			});
			$(".slide-three").click(function(){
				$("#myCarousel").carousel(2);
			});
		});
		</script>
<!------- BUILD CAROUSEL ---------->

<div id="myCarousel" class="carousel slide" data-interval="4600" data-ride="carousel">
	<h2>Featured Cranes</h2>
	<div class="carousel-inner">
		
		<?php
				
					// MySQL Connection Information
					$mysqli = new mysqli("mysql.acs-sale.com", "acs_sale", "Iloveyou0710", "acs_sale_data");

					if ($mysqli->connect_errno) {
						printf("Connect failed: %s\n", $mysqli->connect_error);
						exit();
					}
					
					$query = "SELECT * FROM inventory";
					if($result = $mysqli->query($query)){
						while ($row = $result->fetch_assoc()){
							if($row['id'] == "2"){
								$styleclass = "active";
							}else{
								$styleclass = "";
							}
				?>
		<div class="item <?php print $styleclass; ?>"> <a href='<?php echo $row['href'] ?>'><img src="<?php echo $row['img'] ?>" height="150px" width="150px" alt="<?php echo $row['year'] ." ". $row['make'];?>"></a>
			<div class="carousel-caption">
				<?php							
							print "<ul>";
							print "<li><h3>".$row['year']." ".$row['make']." ". $row['model']. "</h3></li>";
							print $row['tonnage'] ."tons, Location: ".$row['location'] ."</li>";
							print "<li>Price: ". $row['price']." &nbsp; <a href='". $row['href'] ."'><i'>Details</i></a></li>";
							print "</ul>";
						
						 ?>
			</div>
		</div>
		<?php
						} //while
					}//if $result
				?>
	</div>
</div>

