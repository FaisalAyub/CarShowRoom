

<?php
include_once("../config.php");
$locateSpace = $_POST["LocatedSpace"];
$query = 'SELECT COUNT(*) as total FROM car where locatedSpace = '.$locateSpace;
$result=mysqli_query($mysqli,$query);
$data=mysqli_fetch_assoc($result);
 if($data['total'] == '0')
 {
     echo 'true';
 }else{
     echo 'false';
 }
?>