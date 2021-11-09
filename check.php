<?php

include 'config.php';
$date = date("d-m-Y");
$sql = "SELECT * FROM `payment` where date='$date'";
$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_assoc($result);
    // echo $date. " = ".$output['date'];
    echo "success";
}
else{
    echo "error";
}
	
?>