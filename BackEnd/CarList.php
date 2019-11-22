<?php
session_start();
include_once("../config.php");

if ($_SESSION["Login"] != "True") {
    header("Location: ../login.php");
    die();
}


$Query = "SELECT * FROM car";
$CarList = mysqli_query($mysqli, $Query);

?>


<?php include("backend_header.php") ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cars
            <small>Car List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Cars</a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">

                        <div class="pull-right">
                            <a href="AddCar.php" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Thumbnail</th>
                                    <th>Name</th>
                                    <th>Year</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Owner</th>
                                    <th>Publish</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php while ($data = mysqli_fetch_array($CarList)) { ?>

                                    <tr>
                                        <td> <img src="../<?php echo  $data["Thumbnil"] ?>" style="width:80px" onerror="this.src= 'https://via.placeholder.com/80'" /> </td>
                                        <td><?php echo $data['Name'] ?></td>


                                        <td><?php echo $data['Year'] ?></td>
                                        <td><?php echo $data['Make'] ?></td>
                                        <td><?php echo $data['Model'] ?></td>
                                        <td><?php echo $data['Owner'] ?></td>
                                        <td><?php if ($data["Published"] == 1){ echo "Published";} else {  echo "Not Published";} ?>
                                        <a href="#/" data-id="<?php echo $data["Id"]?>" data-published="<?php echo $data["Published"]?>"  class="publishItem"> <i class="text-info fa fa-gears"></i></a>

                                    </td>
                                        <td>
                                      
                                            <a href="AddCar.php?id=<?php echo $data["Id"] ?>"> <i class="text-success fa fa-pencil"></i></a>

                                            <a href="#/" class="deletebtn" data-id="<?php echo $data['Id'] ?>"> <i class="text-danger fa fa-trash"></i></a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<script>
    $(".publishItem").click(function() {
        var id = $(this).data("id");
        var published = $(this).data("published");

console.log(published);


        if (published == 1) {
            bootbox.confirm("Are you sure you want remove this from published ?", function(resp) {
                if (resp) {
                    $.post("UpdatePublish.php", { carId: id, Publish: false }, function(result) {
                        if (result == true) {
                            bootbox.alert("Successfully removed from Published entries", function(result) {

                                window.location.reload();
                            });
                        }
                    });
                }

            });
        } else {

            bootbox.confirm("Are you sure you want to publish this ?", function(resp) {
                if (resp) {
                    $.post("UpdatePublish.php", { carId: id, Publish: true }, function(result) {
                        if (result == true) {
                            bootbox.alert("Successfully removed from Published entries", function(result) {
                                window.location.reload();
                            });
                        }
                    });
                }
            });
        }
    });


    $(".deletebtn").click(function() {

        var id = $(this).data("id");
        bootbox.confirm("Are you sure you want to delete this category ?", function(result) {
            if (result) {
                $.post("DeleteCategory.php", {
                    car_Id: id
                }, function(resp) {
                    if (resp == true) {
                        bootbox.alert("Successfully deleted", function(result) {
                            window.location.reload();

                        });

                    } else {
                        bootbox.alert("Technical issue while deleting Car");
                    }


                });
            }


        });

    });
</script>


<?php include("backend_footer.php") ?>