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


					<div class="col-md-12">
						<div class="m-b30">
							<h3 class="h3 m-t0"> <?php echo $data["Name"] ?> </h3>
							<ul class="used-car-dl-info">

							</ul>
						</div>

						<div class="owl-fade-one owl-carousel owl-btn-center-lr">

							<?php while ($car = mysqli_fetch_array($carImages)) { ?>

								<div class="item">
									<div class="dlab-thum-bx"> <img style="width:100%;height:600px" src="<?php echo $car["Name"] ?>" alt=""> </div>
								</div>

							<?php } ?>


						</div>

						<div class="owl-thumbs" data-slider-id="1">

							<?php while ($car = mysqli_fetch_array($carImages)) { ?>
								<button class="owl-thumb-item">slide 1</button>

							<?php } ?>
						</div>



						<div class="clearfix m-t30">

							<div class="dlab-tabs">
								<div id="economy" class="tab-pane active clearfix city-list">
									<div class="icon-bx-wraper bx-style-1 p-a30">

										<div class="row" style="margin-bottom:20px">
											<h3>Vehicle Description</h3>
											<p><?php echo $data["Description"] ?></p>
										</div>
										<div class="row" style="margin-top:60px">
											<h3>Vehicle Information</h3>
										
										</div>
										<ul class="table-dl clearfix">
											<li>
												<div class="leftview">Year</div>
												<div class="rightview"><?php echo $data["Year"] ?></div>
											</li>
											<li>
												<div class="leftview">Make</div>
												<div class="rightview"><?php echo $data["Make"] ?></div>
											</li>
											<li>
												<div class="leftview">Model</div>
												<div class="rightview"><?php echo $data["Model"] ?></div>
											</li>
											<li>
												<div class="leftview">Owner</div>
												<div class="rightview"><?php echo $data["Owner"] ?></div>
											</li>


										</ul>

										<div class="row" style="margin-top:20px">
											<div class="col-md-12">
												<video style="width:100%" controls>
													<source src="<?php echo $data["Video"] ?>" id="video_here">
													Your browser does not support HTML5 video.
												</video>

											</div>


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