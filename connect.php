<?php
include_once("config.php");
$make = filter_input(INPUT_POST, 'make'); 
$model = filter_input(INPUT_POST, 'model'); 
$year = filter_input(INPUT_POST, 'year'); 
$owner = filter_input(INPUT_POST, 'owner'); 
$description = filter_input(INPUT_POST, 'description'); 
$isJuged=filter_input(INPUT_POST, 'isJuged'); 
// $my_file=filter_input(INPUT_POST, 'my_file'); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<style type="text/css">
body{background-color:#f4f9fa}
.centered{text-align:center}
.container{border:1px solid #e2e2e2;width:750px;margin:50px auto}
.header{height:100px;background-color:#fff;padding-top:50px;background:url(/error_page.gif) top repeat-x}
.header h1{font: bold 150% Arial, Helvetica, sans-serif; color:#5278af;margin:0;padding:0}
.header h2{font: bold 80% Tahoma, Verdana, sans-serif; color:#5278af;margin:0;padding:0}
.line{height:15px;background-color:#eef6f7}
.error-container{background-color:#fff;font:normal 80% Tahoma, Verdana, sans-serif;color:#000;text-align:justify;padding:30px}
.error-container li{padding-bottom:10px}
</style><title>404 - Not Found</title>

</head>

<body>
<div class="centered">
<div class="container">
<div class="header">  

<?php
            if (isset($_FILES['my_file'])) {
                $myFile = $_FILES['my_file'];
                $fileCount = count($myFile["name"]);
                $uploads_dir = '/assets/categoryImages';
                for ($i = 0; $i < $fileCount; $i++) {
                    $name=$_FILES["my_file"]["name"][$i];
                    $temporaryName=$_FILES["my_file"]["tmp_name"][$i];
                    ?>
                        <p>File #<?= $i+1 ?>:</p>
                        <p>
                            Name: <?= $_FILES["my_file"]["name"][$i] ?><br>
                            Temporary file: <?= $_FILES["my_file"]["tmp_name"][$i] ?><br>
                            Type: <?= $myFile["type"][$i] ?><br>
                            Size: <?= $myFile["size"][$i] ?><br>
                            Error: <?= $myFile["error"][$i] ?><br>
                        </p>
                        
                    <?php
                     move_uploaded_file($temporaryName, "$uploads_dir/$name");
                }
            }
        ?>


<?php 
 
// Fetch all users data from database
$temp= "INSERT INTO `car`( `Year`, `Make`, `Model`, `Owner`, `Description`, `LocatedSpace`, `Thumbnil`, `IsJuged`) VALUES ('$year','$make','$model','$owner','$description','0','image1','$isJuged');";
echo $temp;
$result = mysqli_query($mysqli,$temp);

if($result){
    
$carId= $mysqli->insert_id; 

if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $categoryId) {
            echo $categoryId; //echoes the value set in the HTML form for each checked checkbox.
            $query="INSERT INTO `carcategory`( `CarId`, `CategoryId`) VALUES ('$carId','$categoryId')";
            $result = mysqli_query($mysqli,$query);
    }
}

    echo '<h1>200 -&nbsp;Successfull Saved</h1>';
    
} else{
    echo 'Something went wrong'.$result;
}


?>



 </div>
</div>
</div>
</body></html>