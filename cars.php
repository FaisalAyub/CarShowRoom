<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database

function left($str, $length) {
	return substr($str, 0, $length);
}


$result;
if (!empty($_GET['id'])) {

	$categoryId = $_GET['id'];
	
	$query = "SELECT car.* FROM car INNER JOIN carcategory CC ON CC.CarId = car.Id  where CC.categoryId=1 AND car.Published = 1 order by car.timestamp desc";
	
	
	$result = mysqli_query($mysqli, $query);
} else {
	$query = "SELECT car.* FROM car  where car.Published = 1  order by car.timestamp desc";
	
	
	$result = mysqli_query($mysqli, $query);
}




?>

<?php include("header.php"); ?>



<style>

.truncate-overflow {
  --max-lines: 3;
  position: relative;
  max-height: calc(var(--lh) * var(--max-lines));
  overflow: hidden;
  padding-right: 1rem; /* space for ellipsis */
}
.truncate-overflow::before {
  position: absolute;
  content: "...";
  /* tempting... but shows when lines == content */
  /* top: calc(var(--lh) * (var(--max-lines) - 1)); */
  
  /*
  inset-block-end: 0;
  inset-inline-end: 0;
  */
  bottom: 0;
  right: 0;
}
.truncate-overflow::after {
  content: "";
  position: absolute;
  /*
  inset-inline-end: 0;
  */
  right: 0;
  /* missing bottom on purpose*/
  width: 1rem;
  height: 1rem;
  background: white;
}

</style>


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

									<div class="blog-post blog-md clearfix date-style-2 list-view m-b30">
										<div class="row">
											<div class="col-md-4">
												<div class="dlab-post-media dlab-img-effect zoom-slow" style="width:280px">
													<a href="#"><img src="<?php echo $data["Thumbnil"] ?>" old-url="<?php echo $data["Thumbnil"] ?>" onerror="this.src='https://via.placeholder.com/400x280'" alt=""></a>
												</div>
											</div>
											<div class="col-md-8">
												<div class="dlab-post-info">
													<div class="dlab-post-title ">
														<h3 class="post-title"><a href="single_car.php?id=<?php echo $data["Id"] ?>"><?php echo $data["Name"] ?></a></h3>
													</div>
													<div class="dlab-post-text">
														<p class="truncate-overflow">
														<?php 
											
											if(isset($data["Description"]))
											{
												if(strlen($data["Description"]) > 100) {
													echo left($data["Description"], 100);
												}else{
													echo $data["Description"];
												}
											}
											
											?>		
													</p>
													</div>
													<div class="dlab-post-readmore">
														<h2 class="m-a0 pull-left m-r15 open-sans">Located In Space : <?php echo $data["LocatedSpace"]; ?></h2>
														<a href="single_car.php?id=<?php echo $data["Id"] ?>" title="READ MORE" class="site-button" style="padding:10px 20px !important;font-size:14px !important;font-weight:400 !important;">DETAILS</a>
													</div>
													<div class="dlab-post-tags">
														<div class="post-tags">
															<a href="#/">Make <?php echo $data['Make'] ?></a>
															<a href="#/">Owner <?php echo $data['Owner'] ?></a>
															<a href="#/">Year <?php echo $data['Year'] ?></a>
															<a href="#/">Model <?php echo $data['Model'] ?></a>

														</div>
													</div>
												</div>

											</div>

										</div>


									</div>

								<?php } ?>

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