
<?php
// Create database connection using config file
include_once("config.php");
 
$carId = $_GET['id'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM category");

?>


<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">

<!-- Mirrored from cocotemplates.com/html/acropos/contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:43:27 GMT -->
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


    <div class="page-heading wow fadeIn" data-wow-duration="0.5s" > 
        <div class="container" style="height:400px">
       
        </div>
    </div>

    <section style="padding:0px 0px 0px 0px">
    <div class="container" style="margin-bottom:1%" >
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
                        <div class="row">
                            <div class="heading-content col-md-12"> 
                                <h2>Car Information Upload Form </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="contact-content wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="send-message">
                                <div class="sep-section-heading">
                                    <h2>Send Us <em>Message</em></h2>
                                </div>
                                <form   action="connect.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                               
                                <div class=" col-md-3 col-sm-3 col-xs-6">
                                            <label>Juged Car</label>
                               </div>
    
                              <div class=" col-md-9 col-sm-9 col-xs-6">
                              <fieldset>
                                    <div class="radio radio-info form-check-inline">
                                        <input type="radio" id="inlineRadio1" value="1" name="isJuged" checked>
                                        <label for="inlineRadio1"> Yes </label>
                                    </div>
                                    <div class="radio radio-info form-check-inline">
                                        <input type="radio" id="inlineRadio2" value="0" name="isJuged">
                                        <label for="inlineRadio2"> No </label>
                                    </div>
                                    </fieldset>
                                </div>
                                
                                </div>
    
                                 <div class="  row">
                                    <div class=" col-md-3 col-sm-3 col-xs-6">Category</div>
                                    <div class=" col-md-9 col-sm-9 col-xs-6">
    <?php
    while($data = mysqli_fetch_array($result)) {  
                     echo ' <div class="checkbox checkbox-primary form-check-inline">';
                     echo '  <input id="checkbox'.$data['Id'].'" style="width:50px" class="styled" type="checkbox" name="check_list[]" value="'.$data['Id'].'" checked>';
                     echo '  <label for="checkbox'.$data['Id'].'" style="width:150px">'.$data['Name'].'</label>
                      </div>';
                        
    }
    ?>
                                
    
                                </div>
                                </div>
    
                                    <div class="   row">
                                        <div class=" col-md-6 col-sm-6 col-xs-6">
                                           <select class="custom-select" id="Make" name="make">
                                                <option selected>Select Make</option>
                                                <option value="Rolls Royce">Rolls Royce</option>
                                                <option value="Delahaye">Delahaye</option>
                                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                <option value="Packard">Packard</option>
                                                <option value="Ferrari">Ferrari</option> 
                                                </select> 
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                        <select class="custom-select" id="Model" name="model">
                                                <option selected>Select Model</option>
                                                <option value="Silver Ghost">Silver Ghost</option>
                                                <option value="135M">135M</option>
                                                <option value="300SC">300SC</option>
                                                <option value="904">904</option>
                                                <option value="196S Dino">196S Dino</option>
                                                <option value="Silver Cloud">Silver Cloud</option>
                                                </select> 
                                        </div>
    
                                    </div>
                                    <div class="   row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="custom-select" id="Year" name="year">
                                                <option selected>Select Year</option>
                                                <option value="1927">1927</option>
                                                <option value="1948">1948</option>
                                                <option value="1956">1956</option>
                                                <option value="1932">1932</option>
                                                <option value="1959">1959</option>
                                                <option value="19597">19597</option>
                                                </select> 
                                        </div>
    
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="custom-select" id="Year" name="owner">
                                                <option selected>Owner</option>
                                                <option value="Brad Smith">Brad Smith</option>
                                                <option value="Conrad Jones">Conrad Jones</option>
                                                <option value="Classic Cars of Palm Beach">Classic Cars of Palm Beach</option>
                                                <option value="Nancy Lynn">Nancy Lynn</option>
                                                <option value="William Dupont">William Dupont</option>
                                                <option value="Arthur Biltmore">Arthur Biltmore</option>
                                                </select> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <textarea id="message" class="input" name="description" placeholder="Description..."></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class=" col-md-3 col-sm-3 col-xs-6">LocatedSpace</div>
                                    <div class=" col-md-9 col-sm-9 col-xs-6"> 
                                    <input type="number" name="LocatedSpace" >
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class=" col-md-3 col-sm-3 col-xs-6">Upload Photos</div>
                                    <div class=" col-md-9 col-sm-9 col-xs-6"> 
                                    <input type="file" name="my_file[]" multiple>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class=" col-md-3 col-sm-3 col-xs-6">Thumbnil Photo Upload</div>
                                    <div class=" col-md-9 col-sm-9 col-xs-6"> 
                                    <input type="file" name="thumbnilFile" >
                                    </div>
                                    </div>

                                    <div class="row">
                                        <div class=" col-md-3">
                                             
                                            <input type="submit" value="Submit" name="submit" class="primary-button" />
                                             
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                          
                    </div>
                </div>
            </div>
        </section>
 
	

	<script src="assets/js/jquery-1.11.0.min.js"></script>

	 

	<!-- Boostrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Boostrap Js -->
    <script src="assets/js/wow.animation.js"></script>

	<!-- Custom Js -->
    <script src="assets/js/custom.js"></script>
 
    <script src="assets/js/jquery.gmap3.min.js"></script>

  
</body>

<!-- Mirrored from cocotemplates.com/html/acropos/contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:43:29 GMT -->
</html>