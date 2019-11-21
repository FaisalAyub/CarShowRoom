<?php
session_start();
include_once("../config.php");

if ($_SESSION["Login"] != "True") {
    header("Location: ../login.php");
    die();
}


$result = mysqli_query($mysqli, "SELECT * FROM category");
?>


<?php

$Car = array(
    "Id" => 0,
    "Name" => "",
    "Make" => "",
    "Year" => "",
    "Model" => "",
    "Owner" => "",
    "Description" => "",
    "LocatedSpace" => "",
    "Thumbnil" => "",
    "IsJudged" => "",
    "AlbumPhotos" => array(),
    "CarCategories" => array()
);


if (!empty($_GET["id"])) {
    $data = mysqli_query($mysqli, "SELECT * FROM Car where Id =" . $_GET["id"]);

    while ($r = mysqli_fetch_array($data)) {
        $Car = array(
            "Id" => $r["Id"],
            "Name" =>  $r["Name"],
            "Make" =>  $r["Make"],
            "Year" =>  $r["Year"],
            "Model" =>  $r["Model"],
            "Owner" =>  $r["Owner"],
            "Description" =>  $r["Description"],
            "LocatedSpace" =>  $r["LocatedSpace"],
            "Thumbnil" =>  $r["Thumbnil"],
            "Video" => $r["Video"],
            "IsJudged" =>  $r["IsJudged"]
        );
    }

    $categories_data =  mysqli_query($mysqli, "SELECT categoryid FROM carcategory where carId = " . $_GET["id"]);
    $CarCategories = array();

    while ($r = mysqli_fetch_array($categories_data)) {
        array_push($CarCategories, $r["categoryid"]);
    }
    $Car["CarCategories"] = $CarCategories;

    $CarImages_data = mysqli_query($mysqli, "SELECT * FROM Images where CarId = " . $_GET["id"]);
    $CarImages = array();
    while ($image = mysqli_fetch_array($CarImages_data)) {
        array_push($CarImages, $image["Name"]);
    }
    $Car["AlbumPhotos"] =  $CarImages;
}




?>



<?php

$message = "";
$Status = false;
// INSERT CODE
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {


    $SubmittedCar = array();
    $SubmittedCar["Id"] = filter_input(INPUT_POST, "Id");
    $SubmittedCar["Name"] = filter_input(INPUT_POST, "Name");
    $SubmittedCar["Make"] = filter_input(INPUT_POST, 'Make');
    $SubmittedCar["Model"] = filter_input(INPUT_POST, 'Model');
    $SubmittedCar["Year"] = filter_input(INPUT_POST, 'Year');
    $SubmittedCar["Owner"] = filter_input(INPUT_POST, 'Owner');
    $SubmittedCar["Description"] = filter_input(INPUT_POST, 'description');
    $SubmittedCar["IsJudged"] = filter_input(INPUT_POST, 'isJuged');
    $SubmittedCar["Thumbnail"] = $_FILES["thumbnilFile"]["name"];
    $SubmittedCar["Video"] = $_FILES["Video"]["name"];
    $SubmittedCar["LocatedSpace"] = filter_input(INPUT_POST, 'LocatedSpace');
    $result;

    $thumbnailUpload = false;
    $VideoUpload = false;



    if (isset($_FILES["thumbnilFile"]["name"])) {
        if (!empty($_FILES["thumbnilFile"]["name"])) {

            // $uploadsThumb_dir = 'assets/images/';
            $target_dir = "../assets/images/";
            $target_file = $target_dir . basename($_FILES["thumbnilFile"]["name"]);
            move_uploaded_file($_FILES["thumbnilFile"]["tmp_name"],  $target_file);
            $thumbnailUpload = true;
        }
    }


    if (isset($_FILES["Video"]["name"])) {
        if (!empty($_FILES["Video"]["name"])) {

            $target_dir = "../assets/images/";
            $target_file = $target_dir . basename($_FILES["Video"]["name"]);
            move_uploaded_file($_FILES["Video"]["tmp_name"],  $target_file);
            $VideoUpload = true;
        }
        // $uploadsThumb_dir = 'assets/images/';


    }



    if (empty($SubmittedCar["Id"])) {
        $query = "INSERT INTO Car ( Name, Year, Make, Model, Owner, Description, LocatedSpace,";
        if ($thumbnailUpload) {
            $query .= " Thumbnil, ";
        }
        if ($VideoUpload) {
            $query .= " Video, ";
        }

        $query .= " IsJudged)  VALUES ('" . $SubmittedCar["Name"] . "','" . $SubmittedCar["Year"] . "','" . $SubmittedCar["Model"] . "','" . $SubmittedCar["Owner"] . "','" . $SubmittedCar["Owner"] . "','" . $SubmittedCar["Description"] . "','" . $SubmittedCar["LocatedSpace"] . "',";
        if ($thumbnailUpload) {
            $query .= "'assets/images/" . $SubmittedCar["Thumbnail"] . "',";
        }
        if ($VideoUpload) {
            $query .= "'assets/vids/" . $SubmittedCar["Video"] . "',";
        }
        $query .= "'" . $SubmittedCar["IsJudged"] . "');";


        $result = mysqli_query($mysqli, $query);
        $carId = $mysqli->insert_id;
    } else {


        $query = "UPDATE Car SET Name = '" . $SubmittedCar["Name"] . "', Year = '" . $SubmittedCar["Year"] . "', Make= '" . $SubmittedCar["Make"] . "', Model = '" . $SubmittedCar["Model"] . "', Description = '" . $SubmittedCar["Description"] . "',";
        if ($thumbnailUpload) {
            $query .= "Thumbnil = 'assets/images/" . $SubmittedCar["Thumbnail"] . "'";
        }
        if ($VideoUpload) {
            $query .= "Video = 'assets/images/" . $SubmittedCar["Video"] . "'";
        }
        $query .= ", IsJudged = '" . $SubmittedCar["IsJudged"] . "' Where ID = " . $SubmittedCar["Id"];

        echo $query;
        $result = mysqli_query($mysqli, $query);
        $carId = $SubmittedCar["Id"];
    }



    if (isset($_FILES['my_file'])) {

        $myFile = $_FILES['my_file'];

        $fileCount = count($myFile["name"]);

        $uploads_dir = '../assets/images/';

        if (!empty($myFile['name'][0])) {

            $fileUploadQuery = "DELETE FROM Images Where CarId =" . $carId . ";";
            $response = mysqli_query($mysqli, $fileUploadQuery);
        }


        for ($i = 0; $i < $fileCount; $i++) {

            $name = $_FILES["my_file"]["name"][$i];

            if (!empty($name)) {
                $temporaryName = $_FILES["my_file"]["tmp_name"][$i];
                $fileUploadQuery = "INSERT INTO images (Name, CarId) VALUES ('assets/images/" . $name . "','" . $carId . "');";
                move_uploaded_file($temporaryName, "$uploads_dir$name");
                $response = mysqli_query($mysqli, $fileUploadQuery);
            }
        }
    }


    if (!empty($_POST['check_list'])) {
        $qry = "DELETE FROM carcategory Where CarId = " . $carId . ";";
        $result = mysqli_multi_query($mysqli, $qry);

        foreach ($_POST['check_list'] as $categoryId) {
            $qry = " INSERT INTO carcategory( CarId, CategoryId) VALUES ('$carId','$categoryId'); ";
            $result = mysqli_multi_query($mysqli, $qry);
        }
    }


   // header("Location: AddCar.php?id=" . $carId);
    if ($result) {
        $message = "Successfully saved";
        $Status = true;
    } else {
        $Status = false;
        $message = '<h1>500 -&nbsp;Something went wring</h1>' . mysqli_error($mysqli);
    }
}
?>

<?php include("backend_header.php") ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Advanced Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Add Car</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="AddCar.php" method="post" id="CarForm" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="Id" value="<?php echo $Car["Id"] ?>" />
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Name</label>
                                <input type="text" value="<?php echo $Car["Name"] ?>" name="Name" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label>Categories</label>
                                <select class="form-control select2" multiple name="check_list[]">
                                    <?php while ($data = mysqli_fetch_array($result)) { ?>


                                        <option value="<?php echo $data['Id'] ?>" <?php if (in_array($data["Id"], $Car["CarCategories"])) {
                                                                                            echo "selected";
                                                                                        } ?>> <?php echo $data['Name'] ?></option>

                                    <?php } ?>
                                </select>
                            </div>

                            <div class="row">
                                <div class=" col-md-4">
                                    <div class="form-group">
                                        <label>Make</label>
                                        <input type="text" class="form-control" name="Make" value="<?php echo $Car["Make"]; ?>" id="Make" />
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Model</label>
                                        <input type="text" class="form-control" value="<?php echo $Car["Model"] ?>" name="Model" id="Model" />
                                    </div>


                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Juged Car</label>
                                        <br />
                                        <input type="radio" id="inlineRadio1" value="1"  name="isJuged" <?php if ($Car["IsJudged"] == true) { echo "checked"; }?>> Yes
                                        <input type="radio" id="inlineRadio2" value="0" name="isJuged"  <?php if ($Car["IsJudged"] == false) { echo "checked"; }?>> No
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="number" class="form-control" value="<?php echo $Car["Year"] ?>" name="Year" id="Year" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Owner</label>
                                        <input type="text" class="form-control" value="<?php echo $Car["Owner"] ?>" name="Owner" id="Owner" />
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Located Space</label>
                                        <input type="number" class="form-control" name="LocatedSpace" value="<?php echo $Car["LocatedSpace"] ?>" id="LocatedSpace" />
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="message" class="form-control" name="description" placeholder="Description..."><?php echo $Car["Description"] ?> </textarea>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Thumbnail</label>
                                    <input type="file" name="thumbnilFile" id="ThumbnailFile" data-src="#ThumbnailImage">
                                </div>
                                <div class="col-md-6">

                                    <!-- onerror="this.src='https://via.placeholder.com/150'"
                                 -->
                                    <img src="<?php echo '../' . $Car["Thumbnil"]; ?>" id="ThumbnailImage" style="width:150px" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Album Photos</label>
                                    <input type="file" multiple name="my_file[]" id="AlbumPhotos" data-src="#ImagesDiv">
                                </div>
                                <div class="col-md-12" id="ImagesDiv" style="min-height:150px">
                                    <?php foreach ($Car["AlbumPhotos"] as $item) { ?>
                                        <img src="../<?php echo $item ?>" style="width:150px" />
                                    <?php } ?>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Video</label>
                                    <input type="file" name="Video" id="VideoFile">
                                </div>
                                <div class="col-md-12">
                                    <video width="400" controls>
                                        <source src="../<?php echo $Car["Video"] ?>" id="video_here">
                                        Your browser does not support HTML5 video.
                                    </video>

                                </div>
                            </div>
                        </div>

                    </div>









                    <div class="row">
                        <div class=" col-md-3">
                            <input type="submit" value="Submit" name="submit" class="btn btn-primary" />
                        </div>
                    </div>
                </form>


            </div>



        </div>



    </section>
    <!-- /.content -->
</div>





<script>
    $(function() {
        $("#ThumbnailFile").change(function() { //set up a common class
            readURL(this);
        });
        $("#AlbumPhotos").change(function() { //set up a common class
            readURL(this);
        });


        $(document).on("change", "#VideoFile", function(evt) {
            var $source = $('#video_here');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
        });



        $("#CarForm").validate({
            rules: {
                "Name": {
                    required: true,
                },
                "Make": {
                    required: true,
                },
                "Model": {
                    required: true,
                },
                "Year": {
                    required: true,
                },
                "Owner": {
                    required: true,
                },
                "LocatedSpace": {
                    required: true,
                },
                "check_list[]": {

                    required: true
                }




            }


        });




        // var message ='<?php echo $message; ?>';

        // var status = '<?php echo $Status; ?>';


        // if (status == true) {
        //     $.toast({
        //         heading: 'Success',
        //         text: message,
        //         showHideTransition: 'slide',
        //         icon: 'success'
        //     })


        // } else  if (status == false){

        //     $.toast({
        //         heading: 'Error',
        //         text: message,
        //         showHideTransition: 'fade',
        //         icon: 'error'
        //     })
        // }





    });
</script>


<?php include("backend_footer.php") ?>