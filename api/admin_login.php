<?php

include 'config.php';

//$password      = md5($_POST['password']);
//$username      = $_POST['username'];

$username = "husnain";
$password = "123";



   $sql="SELECT * FROM admin WHERE user='{$username}' and password='{$password}'";
   $res=mysqli_query($con,$sql);



    if(mysqli_num_rows($res)>0){

      $response['error']="200";
      $response['message']="success";
    }
    else{
      $response['error']="400";
      $response['message']="failed";

    }
   

  echo json_encode($response);
    
?>

