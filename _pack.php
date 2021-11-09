<?php include 'config.php'?>
<?php
  session_start();
  if(!isset($_SESSION['username']))
  { 
    header("Location: login.php");
  }
  
if ($con) {

$pack        = $_POST['pack'];
$price          = $_POST['price'];
$date = date("Y-m-d");
	echo $sql = "INSERT INTO `package`(`package`, `price`, `date`) VALUES ('{$pack}','{$price}','{$date}')";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
  header("Location:pack.php");
	
}
else{
	echo "<script>alert('Failed to upload!')</script>";	
}

}
?>