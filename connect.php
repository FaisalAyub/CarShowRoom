<?php
include_once("config.php");
$make = filter_input(INPUT_POST, 'make'); 
$model = filter_input(INPUT_POST, 'model'); 
$year = filter_input(INPUT_POST, 'year'); 
$owner = filter_input(INPUT_POST, 'owner'); 
$description = filter_input(INPUT_POST, 'description'); 
$isJuged=filter_input(INPUT_POST, 'isJuged'); 
$thumbnilFile= $_FILES["thumbnilFile"]["name"]; 
$LocatedSpace=filter_input(INPUT_POST, 'LocatedSpace'); 
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
 
// Fetch all users data from database
$temp= "INSERT INTO `car`( `Year`, `Make`, `Model`, `Owner`, `Description`, `LocatedSpace`, `Thumbnil`, `IsJuged`) VALUES ('$year','$make','$model','$owner','$description','$LocatedSpace','$thumbnilFile','$isJuged');";

$result = mysqli_query($mysqli,$temp);

if($result){
    
$carId= $mysqli->insert_id; 

// insert multiples file against one CarID
if (isset($_FILES['my_file'])) {
    $myFile = $_FILES['my_file'];
    $fileCount = count($myFile["name"]);
    $uploads_dir = 'assets/images/';
    for ($i = 0; $i < $fileCount; $i++) {
        $name=$_FILES["my_file"]["name"][$i];
        $temporaryName=$_FILES["my_file"]["tmp_name"][$i];        
        
        $fileUploadQuery= "INSERT INTO `images`( `Name`, `CarId`) VALUES ('$name','$carId');";
        
        $response = mysqli_query($mysqli,$fileUploadQuery);


         move_uploaded_file($temporaryName, "$uploads_dir$name");
    }
}

if(isset($_FILES["thumbnilFile"]["name"])){
    $uploadsThumb_dir = 'assets/images/';
    $target_dir = "assets/images/"; 
    $target_file = $target_dir . basename($_FILES["thumbnilFile"]["name"]); 
    move_uploaded_file($_FILES["thumbnilFile"]["tmp_name"],  $target_file);
}




if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $categoryId) {
           
            $query="INSERT INTO `carcategory`( `CarId`, `CategoryId`) VALUES ('$carId','$categoryId')";
            $result = mysqli_query($mysqli,$query);
    }
}

    echo '<h1>200 -&nbsp;Successfull Saved</h1>';
    
} else{
    echo '<h1>500 -&nbsp;Something went wring</h1>'.$result;
}


?>

<a href="index.php">Back to home</a>

 </div>
</div>
</div>
</body></html>