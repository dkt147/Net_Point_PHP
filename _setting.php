<?php
  session_start();
  if(!isset($_SESSION['username']))
  { 
    header("Location: login.php");
  }
  
if(isset($_POST['change'])){
include 'config.php';

//Getting Values.....

$old_pass      = $_POST['old_pass'];
$new_pass      = $_POST['new_pass'];
$new2_pass     = $_POST['new2_pass'];


$sql1 = "SELECT * FROM `admin`";
$result1 = mysqli_query($con,$sql1) or die("Failed");

if (mysqli_num_rows($result1) > 0) {
	
	$output1 = mysqli_fetch_assoc($result1);

  while (	$output1 = mysqli_fetch_assoc($result1)) 
  {
      
if($old_pass==$output1['password'])
{
    
if($new_pass==$new2_pass)
{
//Inserting new password.........
$checkUserquery="UPDATE admin set password='{$new_pass}'";
$resultant=mysqli_query($con,$checkUserquery);

}
else{
  echo "<script>alert('Password & Confirm Password are not matching')</script>";
}

}
else
{
	echo "<script>alert('Old Password is incorrect')</script>";
}        
}
}
}
    
?>

