<?php
include_once("../config.php");

$query = "DELETE FROM carcategory where carId=".$_POST["car_Id"].";";
$query .= "DELETE FROM images where carId = ".$_POST["car_Id"].";";
$query .= "DELETE FROM car where Id = ".$_POST["car_Id"].";";



$result = mysqli_multi_query($mysqli, $query);

if($result)
{
    echo true;
}else
{
    
    echo $query;
    echo false;
}


?>