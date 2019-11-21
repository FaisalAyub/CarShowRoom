<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM category");


?>


<?php include("header.php");?>

<style>
.rent-link{
    opacity: 1;
}
</style>

    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="rev_slider_1061_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="creative-freedom" data-source="gallery" style="background-color:#1f1d24;padding:0px;">
						<!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
						<div id="rev_slider_1061_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
							<ul>    <!-- SLIDE  -->
								<li data-index="rs-2978" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="2000"  data-thumb="images/main-slider/slide1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Brands" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
									<!-- MAIN IMAGE -->
									<img src="assets/images/page_heading.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="3" class="rev-slidebg" data-no-retina>
									
									<!-- LAYER NR. 1 -->
									<div class="tp-caption tp-shape tp-shapewrapper " 
										 id="slide-2978-layer-1" 
                                         data-x="['center','center','center','center']" 
                                         data-hoffset="['0','0','0','0']" 
                                         data-y="['middle','middle','middle','middle']" 
                                         data-voffset="['0','0','0','0']" 
                                         data-fontweight="['100','100','400','400']"
										data-width="full"
										data-height="full"
										data-whitespace="nowrap"
										data-type="shape" 
										data-basealign="slide" 
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 5;text-transform:left;border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
									</div>

									<!-- LAYER NR. 4 -->
									<!-- <div class="tp-caption Creative-Title   tp-resizeme" 
										 id="slide-2978-layer-2" 
										 data-x="['right','right','right','center']" data-hoffset="['50','100','15','0']" 
										 data-y="['middle','middle','middle','middle']" data-voffset="['-91','-91','-120','-120']" 
										data-fontsize="['120','100','90','60']"
										data-lineheight="['120','100','90','60']"
										data-width="['none','none','none','320']"
										data-height="none"
										data-whitespace="nowrap"
							 
										data-type="text" 
										data-responsive_offset="on" 

										data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2550,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
										data-textAlign="['right','right','right','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

                                        style="z-index: 8; white-space: nowrap;text-transform:left;font-family:'Poppins', sans-serif; font-weight: 800"> -->
                                        
                                        <!-- Kia Rio <span class="text-primary">z</span> -->
									<!-- </div> -->
										
									<!-- LAYER NR. 3 -->
									<!-- <div class="tp-caption Creative-SubTitle   tp-resizeme" 
										 id="slide-2978-layer-3" 
										 data-x="['right','right','right','center']" data-hoffset="['100','100','15','0']" 
										 data-y="['middle','middle','middle','center']" data-voffset="['-10','-10','-60','-60']" 
													data-fontsize="['23','23','23','23']"
										data-lineheight="['23','23','23','23']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
							 
										data-type="text" 
										data-responsive_offset="on" 

										data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 7; white-space: nowrap;text-transform:left;color: #fff;font-weight: 700;">FOR RENT $50 PER DAY
									</div>

                                    
									<div class="tp-caption" 
										 id="slide-2978-layer-6" 
										 data-x="['right','right','right','center']" data-hoffset="['150','0','15','0']" 
										 data-y="['middle','middle','middle','middle']" data-voffset="['70','70','0','0']" 
													data-fontweight="['400','500','500','500']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
							 
										data-type="button" 
										
										data-responsive_offset="on" 
										data-responsive="off"
										data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3850,"ease":"Power2.easeOut"},{"delay":"wait","speed":500,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(205, 176, 131, 1.00);bc:rgba(205, 176, 131, 1.00);bw:1px 1px 1px 1px;"}]'
										data-textAlign="['right','right','right','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 10; white-space: nowrap;cursor:pointer;">
										<a href="#" class="site-button button-md outline outline-2 white text-uppercase">reserve Now</a>
									</div> -->
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
			<div class="car-searching text-white">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="section-head style-1">
								<div class="title-sm text-uppercase">120+ cars categories and brands</div>
								<h3 class="h3 m-t10">Search Your <span class="text-primary font-weight-900">Best Cars</span></h3>
								<div class="sep-line"></div>
							</div>
						</div>
					</div>
				</div>
            
                
			</div>
			<!-- searching cars form end -->
		</div>
        <!-- Slider END -->
		<!-- advantages -->
		
	
	
		<!-- map end -->
		<!-- featured-offers -->
		<div class ="section-full content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-head style-1 text-center" data-name="C">
							<div class="title-sm text-uppercase">120+ cars Categories</div>
							<h2 class="h2">Our <span class="font-weight-800">Best Offers</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- <div class="clearfix owl-carousel featured-offer owl-theme owl-nav  owl-dots col-lg-12 p-lr0"> -->

                    <?php while($user_data = mysqli_fetch_array($result)) { ?>

                        <div class="col-md-4" style="margin-bottom:30px">
                        <div class="item" style="border:5px solid #d81517">
                        <a href="cars.php?id=<?php echo $user_data["Id"]?>">
							<div class="dlab-space">
								<div class="dlab-feed-list style-1 relative">
									<div class="dlab-media" style="height:250px"> 
										<img src="assets/categoryImages/<?php echo $user_data["Image"]?>" alt="">
									</div>
									<!-- <div class="dlab-info"> -->
										<!-- <h5 class="dlab-title h5"><a href=""> <span class="text-primary"></span> </a></h5> -->
										<!-- <p class="dlab-price">Start at <span>45.00 USD</span> per day</p> -->
										<!-- <div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li><a href="javascript:;"><i class="flaticon-calendar"></i> 2019</a></li>
												<li><a href="javascript:"><i class="flaticon-settings"></i> Manual</a></li>
												<li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
												<li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3k cc</a></li>
											</ul>
										</div> -->
									<!-- </div> -->
									<div class="rent-link">
										<a href="cars.php?id=<?php echo $user_data["Id"]?>" class="site-button"><?php echo $user_data["Name"];?></a>
									</div>
								</div>
                            </div>
                    </a>
                        </div>
                    </div>

                    <?php }?>


						
					<!-- </div> -->
				</div>
			</div>
		</div>

    </div>









<?php include("footer.php"); ?>