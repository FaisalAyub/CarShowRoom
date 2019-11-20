<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM category");


?>


<?php include("header.php");?>


<div class="page-heading wow fadeIn" data-wow-duration="0.5s" > 

<div class="container"  style="height:600px"></div>
</div>

    <section style="padding:0px 0px 0px 0px">
    <div class="container" style="margin-bottom:1%" >
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
                        <div class="row">
                            <div class="heading-content col-md-12"> 
                                <h2>Cars  Categories </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features-search-section">
            <div class="container">
            <div class="row">



<?php 

   while($user_data = mysqli_fetch_array($result)) {    
    echo '<div class="col-md-4" style="margin-bottom:25px">';
          
    echo '<a href="cars.php?id='.$user_data['Id'].'">';
       
       echo ' <div  class="service-item wow" style="height:100%">';
           
           echo ' <img class="card-img-top" src="assets/categoryImages/'.$user_data['Image']. '" alt="Card image cap">';
           echo ' <div class="card-body">';

           
               echo '<button class="btn btn-primary" style="width:100%" href="cars.php?id='.$user_data['Id'].'">'.$user_data['Name'] . '</button>';
               echo ' </div>';

               
           echo ' </div>';
           echo ' </a>';
       
           echo ' </div>';
       
   } 

   ?>

</div>

            </div>
        </div>
    </section>

<?php include("footer.php"); ?>