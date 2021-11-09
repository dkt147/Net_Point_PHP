<?php include 'config.php'?>
<?php
  session_start();
  if(!isset($_SESSION['username']))
  { 
    header("Location: login.php");
  }
  
if(isset($_POST['update']))
{
if ($con) {

  
$id = $_POST['id'];
$price          = $_POST['price'];
$package       = $_POST['package'];

	echo $sql = "Update `package` SET package='{$package}',price='{$price}' where Id='{$id}'";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
 header("Location:packages.php");
	
}
else{
	echo "<script>alert('Failed to update!')</script>";	
}

}
}