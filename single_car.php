
<?php
// Create database connection using config file
include_once("config.php");
 
$carId = $_GET['id'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM car WHERE Id=".$carId);

?>



<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">

<!-- Mirrored from cocotemplates.com/html/acropos/single_car.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:42:04 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Car Dealer Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acropos - Car Dealer HTML5 Template</title>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- Slider Pro Css -->
	<link rel="stylesheet" href="assets/css/sliderPro.css">
	<!-- Owl Carousel Css -->
	<link rel="stylesheet" href="assets/css/owl-carousel.css">
	<!-- Flat Icons Css -->
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<!-- Animated Css -->
	<link rel="stylesheet" href="assets/css/animated.css">


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	
	<div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
	
	<div id="search">
	    <button type="button" class="close">×</button>
	    <form>
	        <input type="search" value="" placeholder="type keyword(s) here" />
	        <button type="submit" class="primary-button"><a href="#">Search <i class="fa fa-search"></i></a></button>
	    </form>
	</div>
	
    <header class="site-header wow fadeIn" data-wow-duration="1s">
        <div id="main-header" class="main-header" style="background-color:#c51313ba">
            <div class="container clearfix">

                <div id='cssmenu'>
                    <ul>
                        <li><a href='index-2.php'>Home</a></li>
                        <li class='active'><a href='#'>About</a></li>
                        <li><a href='#'>Map</a></li>
                        <li><a href='#'>Sponsores</a></li> 
                        <li><a href='#'>Contact </a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>


	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
		<div class="container" style="height:400px">
		 
		</div>
	</div>
	<div class="recent-car single-car wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12"> 
								<h2>Car Details</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<br>
	<div class="recent-car single-car wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="recent-car-content">
				<div class="row">

				 
				
					<div class="col-md-12">
						<div id="single-car" class="slider-pro">
							<div class="sp-slides">

								<div class="sp-slide">
									<img class="sp-image" src="assets/images/car_slide_1.jpg" style="width:1000px" alt="" />
								</div>

						        <div class="sp-slide">
						        	<img class="sp-image" src="assets/images/car_slide_2.jpg" alt="" />
								</div>

								<div class="sp-slide">
									<img class="sp-image" src="assets/images/car_slide_3.jpg" alt="" />
								</div>

								<div class="sp-slide">
									<img class="sp-image" src="assets/images/car_slide_4.jpg" alt="" />
								</div>

								<div class="sp-slide">
									<img class="sp-image" src="assets/images/car_slide_5.jpg" alt="" />
								</div>

							</div>

							<div class="sp-thumbnails">
								<img class="sp-thumbnail" src="assets/images/car_thumb_1.jpg" alt="" />
								<img class="sp-thumbnail" src="assets/images/car_thumb_2.jpg" alt="" />
								<img class="sp-thumbnail" src="assets/images/car_thumb_3.jpg" alt="" />
								<img class="sp-thumbnail" src="assets/images/car_thumb_4.jpg" alt="" />
								<img class="sp-thumbnail" src="assets/images/car_thumb_5.jpg" alt="" />
							</div>
					    </div>
					</div>

					<div class="col-md-12">
						<div class="car-details">
						<?php

while($data = mysqli_fetch_array($result)) { 
						echo '<h4>'.$data['Make'].'</h4>';


						echo '	<span>Vehicle Description</span>';
						echo '	<p>'.$data['Description'].' </p>';
						echo '	<div class="container">
								<div class="row">
								<span>Vehicle Information</span>
									<ul class="car-info col-md-12">';
									echo '		<li><i class="flaticon " style="color:white">Year </i> : &nbsp &nbsp <p>' .$data['Year']. '</p></li>';
									echo '	<li><i class="flaticon" style="color:white">Make</i> : &nbsp &nbsp<p>' .$data['Make']. '</p></li>';
									echo '	<li><i class="flaticon " style="color:white">Model</i> : &nbsp &nbsp<p>' .$data['Model']. '</p></li>';
									echo '	<li><i class="flaticon" style="color:white">Owner</i> : &nbsp &nbsp<p>' .$data['Owner']. '</p></li>';
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
     
     
	

	<script src="assets/js/jquery-1.11.0.min.js"></script>

	<!-- Slider Pro Js -->
	<script src="assets/js/sliderpro.min.js"></script>

	<!-- Slick Slider Js -->
	<script src="assets/js/slick.js"></script>

	<!-- Owl Carousel Js -->
    <script src="assets/js/owl.carousel.min.js"></script>

	<!-- Boostrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Boostrap Js -->
    <script src="assets/js/wow.animation.js"></script>

	<!-- Custom Js -->
    <script src="assets/js/custom.js"></script>

</body>

<!-- Mirrored from cocotemplates.com/html/acropos/single_car.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:42:47 GMT -->
</html>