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
                            <form   action="submitForm.php" method="post"  >
                            <div class="row">
                           
                            <div class=" col-md-4 col-sm-4 col-xs-6">
										<label>Juged Car</label>
                           </div>

						  <div class=" col-md-8 col-sm-8 col-xs-6">
                          <fieldset>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                                    <label for="inlineRadio1"> Yes </label>
                                </div>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                    <label for="inlineRadio2"> No </label>
                                </div>
                                </fieldset>
                            </div>
                            
                            </div>

                             <div class="form-group row">
                                <div class=" col-md-4 col-sm-4 col-xs-6">Category</div>
                                <div class=" col-md-8 col-sm-8 col-xs-6">

                              <div class="checkbox checkbox-primary form-check-inline">
                                <input id="checkbox2" class="styled" type="checkbox" checked>
                                <label for="checkbox2"> Primary</label>
                              </div>
                              <div class="checkbox checkbox-primary form-check-inline">
                                <input id="checkbox2" class="styled" type="checkbox" checked>
                                <label for="checkbox2"> Primary</label>
                              </div>
                              <div class="checkbox checkbox-primary form-check-inline">
                                <input id="checkbox2" class="styled" type="checkbox" checked>
                                <label for="checkbox2"> Primary</label>
                              </div>

                            </div>
                            </div>

								<div class=" form-group  row">
									<div class=" col-md-6 col-sm-6 col-xs-6">
                                       <select class="custom-select" id="Make" name="Make">
                                            <option selected>Select Make</option>
                                            <option value="Rolls Royce">Rolls Royce</option>
                                            <option value="Delahaye">Delahaye</option>
                                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                                            <option value="Packard">Packard</option>
                                            <option value="Ferrari">Ferrari</option> 
                                            </select> 
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
                                    <select class="custom-select" id="Model" name="Model">
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
                                <div class="form-group  row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="custom-select" id="Year" name="Year">
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
                                    <select class="custom-select" id="Year" name="Owner">
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
										<textarea id="message" class="input" name="Description" placeholder="Description..."></textarea>
									</div>
								</div>
								<div class="row">
									<div class=" col-md-3">
										 
                                        <input type="submit" value="Submit" class="primary-button" />
										 
									</div>
								</div>
							</form>
						</div>
					</div>
					  
				</div>
			</div>
		</div>
	</section>
<br>
<br>
 
	

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

    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/js/jquery.gmap3.min.js"></script>

	<!-- Google Map Init-->
   <script>
		// Initialize and add the map
		function initMap() {
		  // The location of Uluru
		  var uluru = {lat: 50.688363, lng: 10.436397};
		  // The map, centered at Uluru
		  var map = new google.maps.Map(
		      document.getElementById('map'), {zoom: 4, center: uluru});
		  // The marker, positioned at Uluru
		  var marker = new google.maps.Marker({position: uluru, map: map});
		}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&amp;callback=initMap">
    </script>

</body>

<!-- Mirrored from cocotemplates.com/html/acropos/contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:43:29 GMT -->
</html>