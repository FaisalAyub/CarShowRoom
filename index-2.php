
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM category");
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
                        <li><a href='index-2.html'>Homepage</a></li>
                        <li class='active'>
                            <a href='#'>Car Listing</a>
                            <ul>
                                <li>
                                    <a href='#'>Sidebar</a>
                                    <ul>
                                        <li><a href='car_listing_sidebar.html'>Car Listing</a></li>
                                        <li><a href='car_grid_sidebar.html'>Car Grid</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='#'>No Sidebar</a>
                                    <ul>
                                        <li><a href='car_listing_no_sidebar.html'>Car Listing</a></li>
                                        <li><a href='car_grid_no_sidebar.html'>Car Grid</a></li>
                                    </ul>
                                </li>
                                <li><a href="single_car.html">Single Car</a></li>
                            </ul>
                        </li>
                        <li class='active'>
                            <a href='#'>Blog</a>
                            <ul>
                                <li>
                                    <a href='#'>Sidebar</a>
                                    <ul>
                                        <li><a href='blog_listing_sidebar.html'>Blog Classic</a></li>
                                        <li><a href='blog_grid_sidebar.html'>Blog Grid</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='#'>No Sidebar</a>
                                    <ul>
                                        <li><a href='blog_listing_no_sidebar.html'>Blog Classic</a></li>
                                        <li><a href='blog_grid_no_sidebar.html'>Blog Grid</a></li>
                                    </ul>
                                </li>
                                <li><a href="single_post.html">Single Post</a></li>
                            </ul>
                        </li>
                        <li><a href='about_us.html'>About Us</a></li>
                        <li><a href='contact_us.html'>Contact Us</a></li>
                        <li>
                            <a href="#search"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <div class="page-heading wow fadeIn" data-wow-duration="0.5s" > 
        <div class="container" style="height:400px">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
                        <div class="row">
                            <div class="heading-content col-md-12">
                                <p><a href="index-2.html">Homepage</a> / <em> Cars</em> / <em> Listing</em></p>
                                <h2>Cars <em>Categories</em></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="features-search-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">



                         <?php 

                            while($user_data = mysqli_fetch_array($result)) {    
                            echo '<div class="col-md-4">';
                                echo ' <div class="service-item wow fadeIn" style="width: 18rem;">';
                                    
                                    echo ' <img class="card-img-top" src="assets/images/car_listing_1.jpg" alt="Card image cap">';
                                    echo ' <div class="card-body">';
                                        echo '<a class="btn btn-primary" href="cars.php?id='.$user_data['Id'].'">'.$user_data['Name'] . '</a>';
                                        echo '
                                    </div>';
                                    echo '
                                </div>';
                                echo '
                            </div>';
                            } 
                            ?>
						 
                        </div>
                                </div>

                            </div>
                        </div>
        </div>
    </section>


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