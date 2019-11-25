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
	<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(FrontEnd/images/banner/bnr3.jpg);">
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
					<div class="col-md-8">
						<div class="m-b30">
							<h3 class="h3 m-t0"><?php echo $data["Name"] ?> </h3>
							<ul class="used-car-dl-info">

								<li><i class="fa fa-map-marker"></i> Parking Space <?php echo $data["LocatedSpace"] ?></li>
								<li><i class="fa fa-calendar"></i> Updated on <?php  
								$date=date_create($data["TimeStamp"]);
								echo date_format($date,"M d");
								?></li>
							</ul>
						</div>




						<div class="owl-fade-one owl-carousel owl-btn-center-lr">

							<?php while ($car = mysqli_fetch_array($carImages)) { ?>

								<div class="item">
									<div class="dlab-thum-bx"> <img style="width:100%" src="<?php echo $car["Name"] ?>" alt=""> </div>
								</div>

							<?php } ?>


						</div>

						<div class="owl-thumbs" data-slider-id="1">

							<?php while ($car = mysqli_fetch_array($carImages)) { ?>
								<button class="owl-thumb-item">slide 1</button>

							<?php } ?>
						</div>

						

						<div class="clearfix m-t30">
							<ul class="nav theme-tabs m-b10">
								<li class="active">
									<a data-toggle="tab" aria-controls="economy" href="#economy">
									<i class="fa fa-automobile"></i>
										Vehicle Description
									</a>
								</li>
				
								<li>
									<a data-toggle="tab" aria-controls="features" href="#features">
										<i class="fa fa-star"></i>
										Features
									</a>
								</li>
							
								
							</ul>
							<div class="dlab-tabs">
								<div class="tab-content">
									<div id="economy" class="tab-pane active clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<?php echo  $data["Description"]?>
										</div>
									</div>
							
									<div id="features" class="tab-pane clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<ul class="table-dl clearfix">
												<li>
													<div class="leftview">Model</div>
													<div class="rightview"><?php echo $data["Model"]?></div>
												</li>
												<li>
													<div class="leftview">Make</div>
													<div class="rightview"><?php echo $data["Make"]?> </div>
												</li>
												<li>
													<div class="leftview">Year</div>
													<div class="rightview"><?php echo $data["Year"]?></div>
												</li>
												<li>
													<div class="leftview">Owner</div>
													<div class="rightview"><?php echo $data["Owner"]?></div>
												</li>
											</ul>
										</div>
									</div>
									<div id="safety" class="tab-pane clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<ul class="table-dl clearfix">
												<li>
													<div class="leftview">Parking Sensor</div>
													<div class="rightview">Yes </div>
												</li>
												<li>
													<div class="leftview">Airbags</div>
													<div class="rightview">Yes</div>
												</li>
											</ul>
										</div>
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
					<div class="col-md-4">

						<div class="used-car-features clearfix m-b30">
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5><?php echo $data["Model"]?></h5>
								<span>Model</span>
							</div>
							<div class="car-features">
								<i class="flaticon-dashboard"></i>
								<h5><?php echo $data["Year"]?></h5>
								<span>Year</span>
							</div>
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5><?php echo $data["Make"]?></h5>
								<span>Make</span>
							</div>
							<div class="car-features">
								<i class="flaticon-car-key"></i>
								<h5><?php echo $data["Owner"]?></h5>
								<span>Owner</span>
							</div>
						</div>

						<div class="widget client-logo-wg">
							<h4 class="widget-title">Video</h4>
							<video style="width:100%" controls>
								<source src="<?php echo $data["Video"] ?>" id="video_here">
								Your browser does not support HTML5 video.
							</video>


						</div>
					</div>
				</div>
			</div>
		</div>


	<?php } ?>


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





<?php include("footer.php"); ?>