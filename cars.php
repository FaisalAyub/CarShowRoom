

<?php
// Create database connection using config file
include_once("config.php");
 
$categoryId = $_GET['id'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT Car.Year,Car.Make,Car.Model,Car.Owner,Car.Id as CarId,Car.LocatedSpace,Car.Description,Car.Thumbnil FROM Car INNER JOIN carcategory CC ON CC.CarId = Car.Id INNER JOIN category C ON C.Id = CC.CategoryId where C.ID=".$categoryId);

?>


<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">

<!-- Mirrored from cocotemplates.com/html/acropos/car_listing_no_sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:42:04 GMT -->
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
    <div class="container" style="margin-bottom:1%" >
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
                        <div class="row">
                            <div class="heading-content col-md-12"> 
                                <h2>Cars  Listing </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		
	<div class="on-listing wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="recent-car-content">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="row">

 
	<?php 
while($data = mysqli_fetch_array($result)) { 
						echo '	<div class="col-md-12">
								<div class="car-item">
									<div class="row">
										<div class="col-md-5">
											<div class="thumb-content">
												 
												<div class="thumb-inner">';
												echo	'<a href="single_car.php?id='.$data['CarId'].'"><img src="assets/images/car_listing_1.jpg" alt=""></a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="down-content">';
												echo'<a href="single_car.html"><h4>'. $data['Make'] .'</h4></a>';
											    echo '	<span>'.$data['Owner']. '</span>';
												echo '<div class="line-dec"></div>';
												echo '<p>'.$data['Description'].'</p>';
												echo '<ul class="car-info">';
												echo '	<li><div class="item">Owner<p>'.$data['Owner'] .'</p></div></li>';
												echo '	<li><div class="item">Year<p>'.$data['Year'] .'</p></div></li>';
												echo '	<li><div class="item"> Model<p>'.$data['Model'].'</p></div></li>';
												echo '	<li><div class="item">LocatedSpace<p>'.$data['LocatedSpace']. '</p></div></li>';
											 
											echo '	</ul>
											</div>
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

<!-- Mirrored from cocotemplates.com/html/acropos/car_listing_no_sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:42:04 GMT -->
</html>