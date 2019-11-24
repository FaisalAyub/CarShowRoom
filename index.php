<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM category order by priority");


?>


<?php include("header.php"); ?>

<style>
    .rent-link {
        opacity: 1;
    }
</style>

<!-- header END -->
<!-- Content -->
<div class="page-content">
    <!-- Slider -->
    <div class="main-slider style-two default-banner">
        <div class="tp-banner-container">
            <div class="tp-banner">
            <img src="assets/images/page_heading.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="3" class="rev-slidebg" data-no-retina>


            </div>
        </div>
        <!-- searching cars form -->
        <!-- <div class="car-searching text-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-head style-1">
                            <div class="title-sm text-uppercase">Cars categories</div>
                            <h3 class="h3 m-t10">Search Your <span class="text-primary font-weight-900">Best Cars</span></h3>
                            <div class="sep-line"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div> -->
        <!-- searching cars form end -->
    </div>
    <!-- Slider END -->
    <!-- advantages -->



    <!-- map end -->
    <!-- featured-offers -->
    <div class="section-full content-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 text-center" data-name="C">
                        <!-- <div class="title-lg text-uppercase">Cars Categories</div> -->
                        <h2 class="h2"><span class="font-weight-800">Car Categories</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="clearfix owl-carousel featured-offer owl-theme owl-nav  owl-dots col-lg-12 p-lr0"> -->

                <?php while ($user_data = mysqli_fetch_array($result)) { ?>

                    <div class="col-md-4" style="margin-bottom:30px;">
                        <div class="item" style="border:2px solid grey;">
                            <a href="cars.php?id=<?php echo $user_data["Id"] ?>">
                                <div class="dlab-space">
                                    <div class="dlab-feed-list style-1 relative">
                                        <div class="dlab-media" style="height:206px">
                                            <img style="img-responsive" src="assets/categoryImages/<?php echo $user_data["Image"] ?>" alt="" />
                                        </div>
                                        <div class="dlab-info">
                                            <h5 class="dlab-title h5"><a href=""> <span class="text-primary"></span> </a></h5>
                                            <h4><?php echo $user_data["Name"]; ?></h4>
                                          
                                        </div>
                                     
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php } ?>



                <!-- </div> -->
            </div>
        </div>
    </div>

</div>









<?php include("footer.php"); ?>