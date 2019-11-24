<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM category");


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
                <div id="rev_slider_1061_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="creative-freedom" data-source="gallery" style="background-color:#1f1d24;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                    <div id="rev_slider_1061_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-2978" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="2000" data-thumb="images/main-slider/slide1.jpg" data-rotate="0" data-saveperformance="off" data-title="Brands" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/page_heading.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="3" class="rev-slidebg" data-no-retina>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-2978-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontweight="['100','100','400','400']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"to":"opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;text-transform:left;border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                            </li>
                            <!-- SLIDE  -->


                            <!-- SLIDE  -->
                        </ul>
                        <!-- <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>  -->
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
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
                        <div class="item" style="border:2px solid grey">
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