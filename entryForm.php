
<?php
// Create database connection using config file
include_once("config.php");
  
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM category");

?>


<?php include("header.php")?>

    

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
    
                                    <div class="row">
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
                                    <div class=" col-md-3 col-sm-3 col-xs-6">Thumbnil Photo Upload</div>
                                    <div class=" col-md-9 col-sm-9 col-xs-6"> 
                                    <input type="file" name="thumbnilFile" >
                                    </div>
                                    </div>


                                    <div class="row">
                                    <div class=" col-md-3 col-sm-3 col-xs-6">Upload Photos</div>
                                    <div class=" col-md-9 col-sm-9 col-xs-6"> 
                                    <input type="file" name="my_file[]" multiple>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class=" col-md-3 col-sm-3 col-xs-6">Upload Video</div>
                                    <div class=" col-md-9 col-sm-9 col-xs-6"> 
                                    <input type="file" name="videoFile" >
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
 
	

        <?php include("footer.php"); ?>