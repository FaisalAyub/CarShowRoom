<?php

$result = 0;
$message = "";
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {

    if (!array_key_exists('dzEmail', $_POST)) {
        try {
            $message = array();
            $message["Name"] = $_POST["Name"];
            $message["Email"] = $_POST["Email"];
            $message["Phone"] = $_POST["Phone"];
            $message["Subject"] = $_POST["Subject"];
            $message["Message"] = $_POST["Message"];
          
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
          	$to = "info@palmbeachconcours.com";
            $subject = $message["Subject"]. " - pbconcourscars.com";
            $txt =  wordwrap("<strong>Email:</strong> " . $message["Email"] . ".<br /><strong> Phone: <strong>" . $message["Phone"] . "<br><strong>Message:</strong>" . $message["Message"], 70);
			
          	//$txt = "<strong>Email: </strong> " . $message["Email"] . ". <strong>Phone:</strong> " . $message["Phone"] . "<br /><strong>Message</strong><br />" . $message["Message"]
          
          	$r = @mail($to, $subject, $txt, $headers);
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



<?php include("header.php"); ?>


<div class="page-content">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(FrontEnd/images/banner/bnr3.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Contact Us</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <!-- contact area -->
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="row">

            </div>
            <div class="row">
                <!-- Left part start -->
                <div class="col-md-6">
                    <div class="p-a30 bg-gray clearfix m-b30 ">
                        <h2>Send Message Us</h2>

                        <form method="post" action="contact_us.php">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="Name" type="text" required class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="Email" type="email" class="form-control" required placeholder="Your Email Id">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="Phone" type="text" required class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="Subject" type="text" required class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="Message" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">

                        <div class="col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center">
                                <div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">Email</h5>
                                    <p>info@palmbeachconcours.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center">
                                <div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">Phone</h5>
                                    <p>(561) 568-8882</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 m-b30" style="margin-top:-40px">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center">
                                <div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">Address</h5>
                                    <p>2348 N Military Trail West Palm Beach, FL 33409 United States</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- contact area  END -->
    <!-- contact area  END -->
</div>





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




<?php include("footer.php"); ?>