<?php
include_once("../config.php");

$query = "UPDATE car SET published = ".$_POST["Publish"]." where Id =".$_POST["carId"];

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