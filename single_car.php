<?php
// Create database connection using config file
include_once("config.php");

$carId = $_GET['id'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM car WHERE Id=" . $carId);

$carImages = mysqli_query($mysqli, "SELECT * FROM images WHERE CarId=" . $carId);
$thumbImages = mysqli_query($mysqli, "SELECT * FROM images WHERE CarId=" . $carId);
?>


<?php include("header.php"); ?>


<div class="page-content">
	<!-- inner page banner -->
	<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(assets/images/page_heading.jpg);">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<h1 class="text-white">Car Details</h1>
			</div>
		</div>
	</div>
	<!-- inner page banner END -->
	<!-- Breadcrumb row -->
	<div class="breadcrumb-row">
		<div class="container">
			<ul class="list-inline">
				<li><a href="#">Home</a></li>
				<li>Car Details</li>
			</ul>
		</div>
	</div>
	<!-- Breadcrumb row END -->

	<?php while ($data = mysqli_fetch_array($result)) { ?>
		<div class="section-full p-t50 bg-white content-inner-2">
			<div class="container">
				<div class="row">
					<!-- Side bar start -->
					<div class="col-md-12">
						<div class="m-b30">
							<h3 class="h3 m-t0"> <?php echo $data["Name"] ?> </h3>
							<ul class="used-car-dl-info">

							</ul>
						</div>
						<div class="owl-fade-one owl-carousel owl-btn-center-lr owl-loaded owl-drag">

							<div class="owl-stage-outer">
								<div class="owl-stage" style="transform: translate3d(-3200px, 0px, 0px); transition: all 0s ease 0s; width: 6400px;">
									<?php while ($car = mysqli_fetch_array($carImages)) { ?>
									
										<div class="owl-item cloned" style="width: 770px; margin-right: 30px;">

											<div class="item">
												<div class="dlab-thum-bx"> <img src="<?php echo $car['Name'] ?>" alt=""> </div>
											</div>
										</div>
									<?php } ?>


								</div>
							</div>
							<div class="owl-nav">
								<div class="owl-prev"><i class="fa fa-angle-left"></i></div>
								<div class="owl-next"><i class="fa fa-angle-right"></i></div>
							</div>
							<div class="owl-dots disabled"></div>
						</div>

						<div class="clearfix m-t30">

							<div class="dlab-tabs">
								<div id="economy" class="tab-pane active clearfix city-list">
									<div class="icon-bx-wraper bx-style-1 p-a30">
										<ul class="table-dl clearfix">
											<li>
												<div class="leftview">Mileage</div>
												<div class="rightview">17.20 kmpl</div>
											</li>
											<li>
												<div class="leftview">Service Cost</div>
												<div class="rightview">-</div>
											</li>
											<li>
												<div class="leftview">Fuel Type</div>
												<div class="rightview">Diesel</div>
											</li>
											<li>
												<div class="leftview">Fuel Tank</div>
												<div class="rightview">58 Litres</div>
											</li>

											<li>
												<div class="leftview">Mileage</div>
												<div class="rightview">17.20 kmpl</div>
											</li>
											<li>
												<div class="leftview">Over Drive</div>
												<div class="rightview">4 Motion</div>
											</li>
											<li>
												<div class="leftview">Steering Type</div>
												<div class="rightview">Electric</div>
											</li>
											<li>
												<div class="leftview">Turning Radius</div>
												<div class="rightview">5.75meters</div>
											</li>
											<li>
												<div class="leftview">Alloy Wheel Size</div>
												<div class="rightview">18 Inch</div>
											</li>
											<li>
												<div class="leftview">No Of Doors</div>
												<div class="rightview">5</div>
											</li>
										</ul>
									</div>
								</div>


							</div>

						</div>

						<div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<div class="modal-body clearfix">
										<div class="pull-letf max-width-300"></div>
										<div class="lead-form">
											<form>
												<h3 class="m-t0">Personal Details</h3>
												<div class="form-group">
													<input value="" class="form-control" placeholder="Name">
												</div>
												<div class="form-group">
													<input value="" class="form-control" placeholder="Mobile Number">
												</div>
												<div class="clearfix">
													<button type="button" class="btn-primary site-button btn-block">Submit </button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Side bar END -->

				</div>
			</div>
		</div>
	<?php } ?>

</div>




<!-- 	
	
	<div class="recent-car single-car wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="recent-car-content">
				<div class="row">
 
					<div class="col-md-12">
						<div id="single-car" class="slider-pro">
							<div class="sp-slides">
							<?php

							while ($car = mysqli_fetch_array($carImages)) {
								echo '	<div class="sp-slide">';
								echo	'	<img class="sp-image" src="assets/images/' . $car['Name'] . '" style="width:1000px" alt="" />
								</div>';
							}
							?>
						     

							</div>

							<div class="sp-thumbnails">
							<?php

							while ($car1 = mysqli_fetch_array($thumbImages)) {
								echo	'<img class="sp-thumbnail" src="assets/images/' . $car1['Name'] . '" alt="" />';
							}
							?> 
							</div>
					    </div>
					</div>

					<div class="col-md-12">
						<div class="car-details">
						<?php

						while ($data = mysqli_fetch_array($result)) {
							echo '<h4>' . $data['Make'] . '</h4>';


							echo '	<span>Vehicle Description</span>';
							echo '	<p>' . $data['Description'] . ' </p>';
							echo '	<div class="container">
								<div class="row">
								<span>Vehicle Information</span>
									<ul class="car-info col-md-12">';
							echo '		<li><i class="flaticon " style="color:white">Year </i> : &nbsp &nbsp <p>' . $data['Year'] . '</p></li>';
							echo '	<li><i class="flaticon" style="color:white">Make</i> : &nbsp &nbsp<p>' . $data['Make'] . '</p></li>';
							echo '	<li><i class="flaticon " style="color:white">Model</i> : &nbsp &nbsp<p>' . $data['Model'] . '</p></li>';
							echo '	<li><i class="flaticon" style="color:white">Owner</i> : &nbsp &nbsp<p>' . $data['Owner'] . '</p></li>';
							echo '	</ul>
								 
								</div>
							</div>
							 
						</div>
					</div>';
						}
						?>

				</div>
			</div>
		</div>
	</div>
     
     
	
	 -->


<?php include("footer.php"); ?>



<div class="recent-car single-car wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
	<div class="container">
		<div class="recent-car-content">
			<div class="row">

				<div class="col-md-12">
					<div id="single-car" class="slider-pro">
						<div class="sp-slides">



						</div>

						<div class="sp-thumbnails">
							<?php

							while ($car1 = mysqli_fetch_array($thumbImages)) {
								echo	'<img class="sp-thumbnail" src="assets/images/' . $car1['Name'] . '" alt="" />';
							}
							?>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="car-details">
						<?php

						while ($data = mysqli_fetch_array($result)) {
							echo '<h4>' . $data['Make'] . '</h4>';


							echo '	<span>Vehicle Description</span>';
							echo '	<p>' . $data['Description'] . ' </p>';
							echo '	<div class="container">
								<div class="row">
								<span>Vehicle Information</span>
									<ul class="car-info col-md-12">';
							echo '		<li><i class="flaticon " style="color:white">Year </i> : &nbsp &nbsp <p>' . $data['Year'] . '</p></li>';
							echo '	<li><i class="flaticon" style="color:white">Make</i> : &nbsp &nbsp<p>' . $data['Make'] . '</p></li>';
							echo '	<li><i class="flaticon " style="color:white">Model</i> : &nbsp &nbsp<p>' . $data['Model'] . '</p></li>';
							echo '	<li><i class="flaticon" style="color:white">Owner</i> : &nbsp &nbsp<p>' . $data['Owner'] . '</p></li>';
							echo '	</ul>
								 
								</div>
							</div>
							 
						</div>
					</div>';
						}
						?>

					</div>
				</div>
			</div>
		</div>