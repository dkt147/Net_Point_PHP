<?php
  session_start();
  if(!isset($_SESSION['username']))
  { 
    header("Location: login.php");
  }
  
include 'config.php';

$password      = $_POST['password'];
$username      = $_POST['username'];


   $checkUserquery="SELECT * FROM admin WHERE user='{$username}' and password='{$password}'";
   $resultant=mysqli_query($con,$checkUserquery);



    if(mysqli_num_rows($resultant)>0){

      Session_start();
      $_SESSION['username'] = $username;
      header("Location:index.php");
    }
    else{
        header("Location:login.php");	
    }
   

    
?>

