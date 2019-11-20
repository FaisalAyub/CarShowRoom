
<?php
// Create database connection using config file
include_once("config.php");
  
$make = filter_input(INPUT_POST, 'Make');
$model = filter_input(INPUT_POST, 'Model');

 
// Fetch all users data from database
// $result = mysqli_query($mysqli, "SELECT * FROM car WHERE Id=".$carId);

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

 echo ' <h2>'.$make.'</h2>'; 
 echo ' <h2>'.$model.'</h2>'; 
?>
<h1>200 -&nbsp;Successfull Saved</h1>
 
 </div>
</div>
</div>
</body></html>