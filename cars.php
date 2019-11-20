

<?php
// Create database connection using config file
include_once("config.php");
 
$categoryId = $_GET['id'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT Car.Year,Car.Make,Car.Model,Car.Owner,Car.Id as CarId,Car.LocatedSpace,Car.Description,Car.Thumbnil FROM Car INNER JOIN carcategory CC ON CC.CarId = Car.Id INNER JOIN category C ON C.Id = CC.CategoryId where C.ID=".$categoryId);

?>

<?php include("header.php");?>


    <div class="container" style="margin-bottom:1%" >
	<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
                        <div class="row">
                            <div class="heading-content col-md-12"> 
                                <h2>Cars  Listing </h2>
                            </div>
                        </div>
                    </div>
         
		</div>
		
	<div class="on-listing wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="recent-car-content">
				<div class="row">
				
					

 
	<?php 
while($data = mysqli_fetch_array($result)) { 
echo "<a href=''>";

						echo '	<div class="col-md-12">
								<div class="car-item">

									<div class="row">
										<div class="col-md-5">
											<div class="thumb-content">
												 
												<div class="thumb-inner">';
												echo	'<a href="single_car.php?id='.$data['CarId'].'"><img src="assets/images/'.$data['Thumbnil'].'" alt=""></a>
												</div>
											</div>
										</div>

										<div class="col-md-7">
											<div class="down-content">';
												echo'<a href="single_car.html"><h4>'. $data['Make'] .'</h4></a>';
											    echo '	<span>'.$data['Owner']. '</span>';
												echo '<div class="line-dec"></div>';
												echo '<p>'.$data['Description'].'</p>';
												echo '<ul class="car-info">';
												echo '	<li><div class="item">Owner<p>'.$data['Owner'] .'</p></div></li>';
												echo '	<li><div class="item">Year<p>'.$data['Year'] .'</p></div></li>';
												echo '	<li><div class="item"> Model<p>'.$data['Model'].'</p></div></li>';
												echo '</ul>';
												echo '<br />';
												echo '<div class="alert alert-primary" role="alert">Located In Space : '.$data['LocatedSpace']. '</div>';
												echo '<div class="item"></div>';
											echo '</div>
										</div>


									</div>


								</div>
							</div>';
							echo "</a>";

}
?>
		 
				
				</div>
			</div>
		</div>
	</div>

 
<?php include("footer.php");?>
