<?php
// Create database connection using config file
include_once("config.php");

$categoryId = $_GET['id'];
// Fetch all users data from database

$query = "SELECT car.* FROM car INNER JOIN carcategory CC ON CC.CarId = car.Id INNER JOIN category C ON C.Id = CC.CategoryId where C.ID=" . $categoryId . " AND car.Published = 1";
$result = mysqli_query($mysqli, $query);

?>

<?php include("header.php"); ?>



<div class="page-content">
	<!-- inner page banner -->
	<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(assets/images/page_heading.jpg);">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<h1 class="text-white">Car Listing</h1>
			</div>
		</div>
	</div>
	<!-- inner page banner END -->
	<!-- Breadcrumb row -->
	<div class="breadcrumb-row">
		<div class="container">
			<ul class="list-inline">
				<li><a href="#">Home</a></li>
				<li>Car Listing</li>
			</ul>
		</div>
	</div>
	<!-- Breadcrumb row END -->
	<div class="section-full content-inner bg-white">
		<div class="container">
			<div class="row">

<div class="col-sm-2 col-md-2 col-lg-2"></div>

			<div class="col-sm-8 col-md-8 col-lg-9">
                        <div class="row">
							
                            <!-- blog grid  -->
                            <div class="dlab-blog-grid-3">
                                <div class="col-md-12">

								<?php while ($data = mysqli_fetch_array($result)) { ?>

                                    <div class="blog-post blog-md clearfix date-style-2 list-view m-b30" >
										<div class="dlab-post-media dlab-img-effect zoom-slow" style="height:200px"> 
											<a href="#"><img src="<?php echo $data["Thumbnil"] ?>" onerror="this.src='https://via.placeholder.com/400x200'"  alt=""></a> 
										</div>
										<div class="dlab-post-info">
											<div class="dlab-post-title ">
												<h3 class="post-title"><a href="single_car.php?id=<?php echo $data["Id"] ?>"><?php echo $data["Name"] ?></a></h3>
											</div>
											<div class="dlab-post-text">
												<p><?php echo $data["Description"] ?></p>
											</div>
											<div class="dlab-post-readmore"> 
												<h2 class="m-a0 pull-left m-r15 open-sans">Located In Space : <?php echo $data["LocatedSpace"]; ?></h2>
												<a href="#" title="READ MORE" rel="bookmark" class="site-button" data-toggle="modal" data-target="#car-details">DETAILS</a>
												<a href="#" title="READ MORE" rel="bookmark" class="site-button" data-toggle="modal" data-target="#car-details">DETAILS</a> 
											</div>
											<div class="dlab-post-tags">
												<div class="post-tags"> 
												<a href="#">Make <?php echo $data['Make'] ?></a>
														<a href="#">Owner <?php echo $data['Owner'] ?></a>
														<a href="#">Year <?php echo $data['Year'] ?></a>
														<a href="#">Model <?php echo $data['Model'] ?></a>	
												
												</div>
											</div>
										</div>
									</div>

								<?php }?>

									<!--Here-->
                                </div>
								
								
							
								
                            </div>
					 
							
                        </div>
                    </div>

					

			</div>
		</div>
	</div>
</div>







<?php include("footer.php"); ?>






<div class="container" style="margin-bottom:1%">
	<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
		<div class="row">
			<div class="heading-content col-md-12">
				<h2>Cars Listing </h2>
			</div>
		</div>
	</div>

</div>

<div class="on-listing wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
	<div class="container">
		<div class="recent-car-content">
			<div class="row">




				<?php
				while ($data = mysqli_fetch_array($result)) {
					echo "<a href=''>";

					echo '	<div class="col-md-12">
								<div class="car-item">

									<div class="row">
										<div class="col-md-5">
											<div class="thumb-content">
												 
												<div class="thumb-inner">';
					echo	'<a href="single_car.php?id=' . $data['CarId'] . '"><img src="assets/images/' . $data['Thumbnil'] . '" alt=""></a>
												</div>
											</div>
										</div>

										<div class="col-md-7">
											<div class="down-content">';
					echo '<a href="single_car.html"><h4>' . $data['Make'] . '</h4></a>';
					echo '	<span>' . $data['Owner'] . '</span>';
					echo '<div class="line-dec"></div>';
					echo '<p>' . $data['Description'] . '</p>';
					echo '<ul class="car-info">';
					echo '	<li><div class="item">Owner<p>' . $data['Owner'] . '</p></div></li>';
					echo '	<li><div class="item">Year<p>' . $data['Year'] . '</p></div></li>';
					echo '	<li><div class="item"> Model<p>' . $data['Model'] . '</p></div></li>';
					echo '</ul>';
					echo '<br />';
					echo '<div class="alert alert-primary" role="alert">Located In Space : ' . $data['LocatedSpace'] . '</div>';
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