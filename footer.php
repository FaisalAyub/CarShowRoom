<?php

include_once("config.php");


$Query = "SELECT * FROM car order by timestamp desc Limit 0,3";

$CarList = mysqli_query($mysqli, $Query);

$result = 0;
$message = "";
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {

  if (array_key_exists('dzEmail', $_POST)) {
    try {
      $message = $_POST["dzEmail"];
      echo $message;

      $to = "dlab-subscribe-form";
      $subject = "Subscription - pbconcourscars.com";
      $txt = wordwrap("Email : " . $message, 70);


      $r = mail($to, $subject, $txt);
      if ($r) {
        $result = 1;
        $message = "Successfully sent";
      } else {
        $result = 2;
        $message = "Technical Error while sending the application";
      }
    } catch (Exception $ex) {
      $result = 2;
      $message = "Technical Error while sending the application";
    }
  }
}
?>





<script>
  <?php if ($result != 0) { ?>

    <?php if ($result == 1) { ?>
      $.toast({
        heading: 'Success',
        text: '<?php echo $message ?>',
        showHideTransition: 'slide',
        icon: 'success'
      });



    <?php } else { ?>
      $.toast({
        heading: 'Error',
        text: '<?php echo $message ?>',
        showHideTransition: 'fade',
        icon: 'error'
      })

    <?php } ?>

  <?php } ?>
</script>



<footer class="site-footer" style="display: block; height: 602px;">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
          <div class="widget widget_about">
            <h4 class="m-b15 text-uppercase">About Us</h4>
            <div class="dlab-separator bg-primary"></div>
            <p class="m-tb20"><strong>The Town of Palm Beach and the Worth Avenue Association</strong> presents the newest, premier automobile event in the country, the Palm Beach Concours.</p>

            <ul class="full-social-icon clearfix">
              <li class="fb col-md-12 col-sm-12 col-xs-12 m-b30">
                <a href="https://www.facebook.com/PalmBeachConcours/"><i class="fa fa-facebook"></i> Share On Facebook </a>
              </li>

            </ul>

          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
          <div class="widget widget_services">
            <h4 class="m-b15 text-uppercase">Useful Links</h4>
            <div class="dlab-separator bg-primary"></div>
            <ul>
              <li><a href="contact_us.php">Contact Us</a></li>
              <li><a href="cars.php">Car Listing</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="map.php">Map</a></li>
              <li><a href="sponsors.pgp">Sponsors</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
          <div class="widget recent-posts-entry">
            <h4 class="m-b15 text-uppercase">recent posts </h4>
            <div class="dlab-separator bg-primary"></div>
            <div class="widget-post-bx">

              <?php while ($data = mysqli_fetch_array($CarList)) { ?>



                <div class="widget-post clearfix">
                  <div class="dlab-post-media"> <img src="<?php echo $data["Thumbnil"] ?>" onerror="this.src='https://via.placeholder.com/200x143'" alt="" width="200" height="143"> </div>
                  <div class="dlab-post-info">
                    <div class="dlab-post-header">
                      <h5><a href="single_car.php?id=<?php echo $data["Id"]?>"><?php echo $data["Name"] ?></a></h5>
                    </div>
                    <div class="dlab-post-meta">
                      <ul>
                        <li class="post-author">by <?php echo $data["Owner"] ?></li>
                      </ul>
                    </div>
                  </div>
                </div>

              <?php } ?>


            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
          <div class="widget ">
            <h4 class="m-b15 text-uppercase">Newsletter </h4>
            <div class="dlab-separator bg-primary"></div>
            <p class="m-tb20">Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
            <form action="" method="post" class="dlab-subscribe-form">
              <div class="dzSubscribeMsg"></div>
              <div class="input-group m-b15">
                <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Enter Your Email">
              </div>
              <div class="input-group">
                <button name="submit" value="Submit" type="submit" class="site-button btn-block">
                  SUBSCRIBE <i class="fa fa-angle-right font-18 m-l10"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- <div class="clearfix">
        <ul class="full-social-icon clearfix">
          <li class="fb col-md-3 col-sm-6 col-xs-6 m-b30">
            <a href="#"><i class="fa fa-facebook"></i> Share On Facebook </a>
          </li>
          <li class="tw col-md-3 col-sm-6 col-xs-6 m-b30">
            <a href="#"><i class="fa fa-twitter"></i> Tweet About it </a>
          </li>
          <li class="gplus col-md-3 col-sm-6 col-xs-6 m-b30">
            <a href="#"><i class="fa fa-google-plus"></i> Google Plus | 78+ </a>
          </li>
          <li class="linkd col-md-3 col-sm-6 col-xs-6 m-b30">
            <a href="#"><i class="fa fa-linkedin"></i> Linkedin | 21k </a>
          </li>
        </ul>
      </div> -->
    </div>
  </div>
  <!-- footer bottom part -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 text-left"> © Copyright 2019 Cars of the Palm Beach, Concours Developed By <span class="text-primary"> Easisol</span> </div>
        <div class="col-md-6 col-sm-6 text-right ">
          <a href="about.php"> About Us</a> |
          <a href="map.php"> Map</a> |
          <a href="contact_us.php"> Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Footer END-->
<!-- scroll top button -->
<button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JavaScript  files ========================================= -->

<!-- jquery.min js -->
<script href="FrontEnd/js/wow.js"></script>
<!-- wow.min js -->
<script src="FrontEnd/js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script src="FrontEnd/js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script src="FrontEnd/js/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script src="FrontEnd/js/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script src="FrontEnd/js/waypoints-min.js"></script>
<!-- waypoints js -->
<script src="FrontEnd/js/counterup.min.js"></script>
<!-- counterup js -->
<script src="FrontEnd/js/imagesloaded.js"></script>
<!-- masonry  -->
<script src="FrontEnd/js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script src="FrontEnd/js/masonry.filter.js"></script>
<!-- masonry  -->
<script src="FrontEnd/js/owl.carousel.js"></script>

<!-- OWL  Slider  -->
<script src="FrontEnd/js/owl.linked.js"></script>
<!-- OWL  Slider  -->
<script src="FrontEnd/js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<script src="FrontEnd/js/dz.ajax.js"></script>

<script src="FrontEnd/js/owl.carousel.js"></script>


<!-- contact-us js -->
<!-- revolution JS FILES -->
<script src="FrontEnd/plugins/revolution/v5.4.3/js/jquery.themepunch.tools.min.js"></script>
<script src="FrontEnd/plugins/revolution/v5.4.3/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="FrontEnd/plugins/revolution/v5.4.3/js/extensions/revolution.extension.actions.min.js"></script>
<script src="FrontEnd/plugins/revolution/v5.4.3/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="FrontEnd/plugins/revolution/v5.4.3/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="FrontEnd/plugins/revolution/v5.4.3/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="FrontEnd/plugins/revolution/v5.4.3/js/extensions/revolution.extension.migration.min.js"></script>
<script src="FrontEnd/plugins/revolution/v5.4.3/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="FrontEnd/plugins/revolution/v5.4.3/js/extensions/revolution.extension.video.min.js"></script>
<script src="FrontEnd/plugins/revolution/v5.4.3/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="FrontEnd/js/rev.slider.js"></script>
<script src="FrontEnd/js/modernizr.custom.js"></script>
<script src="FrontEnd/js/jquery.hoverdir.js"></script>
<script src="FrontEnd/js/custom.min.js"></script>
<!-- custom fuctions  -->

<script>
  /**
   * Returns the Popup class.
   *
   * Unfortunately, the Popup class can only be defined after
   * google.maps.OverlayView is defined, when the Maps API is loaded.
   * This function should be called by initMap.
   */
  function createPopupClass() {
    /**
     * A customized popup on the map.
     * @param {!google.maps.LatLng} position
     * @param {!Element} content The bubble div.
     * @constructor
     * @extends {google.maps.OverlayView}
     */
    function Popup(position, content) {
      this.position = position;

      content.classList.add('popup-bubble');

      // This zero-height div is positioned at the bottom of the bubble.
      var bubbleAnchor = document.createElement('div');
      bubbleAnchor.classList.add('popup-bubble-anchor');
      bubbleAnchor.appendChild(content);

      // This zero-height div is positioned at the bottom of the tip.
      this.containerDiv = document.createElement('div');
      this.containerDiv.classList.add('popup-container');
      this.containerDiv.appendChild(bubbleAnchor);

      // Optionally stop clicks, etc., from bubbling up to the map.
      google.maps.OverlayView.preventMapHitsAndGesturesFrom(this.containerDiv);
    }
    // ES5 magic to extend google.maps.OverlayView.
    Popup.prototype = Object.create(google.maps.OverlayView.prototype);

    /** Called when the popup is added to the map. */
    Popup.prototype.onAdd = function() {
      this.getPanes().floatPane.appendChild(this.containerDiv);
    };

    /** Called when the popup is removed from the map. */
    Popup.prototype.onRemove = function() {
      if (this.containerDiv.parentElement) {
        this.containerDiv.parentElement.removeChild(this.containerDiv);
      }
    };

    /** Called each frame when the popup needs to draw itself. */
    Popup.prototype.draw = function() {
      var divPosition = this.getProjection().fromLatLngToDivPixel(this.position);

      // Hide the popup when it is far out of view.
      var display =
        Math.abs(divPosition.x) < 4000 && Math.abs(divPosition.y) < 4000 ?
        'block' :
        'none';

      if (display === 'block') {
        this.containerDiv.style.left = divPosition.x + 'px';
        this.containerDiv.style.top = divPosition.y + 'px';
      }
      if (this.containerDiv.style.display !== display) {
        this.containerDiv.style.display = display;
      }
    };

    return Popup;
  }
</script>
<script>
  jQuery(document).ready(function() {
    'use strict';
    dz_rev_slider_4();
  }); /*ready*/
</script>
</body>

<!-- Mirrored from carzone.dexignlab.com/xhtml/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 11:42:57 GMT -->

</html>