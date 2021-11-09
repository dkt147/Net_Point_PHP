<?php include 'config.php'?>
<?php
  session_start();
  if(!isset($_SESSION['username']))
  { 
    header("Location: login.php");
  }
  
if ($con) {
    
echo $name          = $_POST['package'];
echo $price         = $_POST['price'];

	echo $sql = "INSERT INTO `package`(`package`, `price`) 
    VALUES ('{$name}','{$price}')";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
  header("Location:packages.php");
	
}
else{
    header("Location:packages.php");
	
}

}
?>