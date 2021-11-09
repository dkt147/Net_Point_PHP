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
$name          = $_POST['name'];
$package       = $_POST['package'];
$phone       = $_POST['phone'];
$address       = $_POST['address'];
$email       = $_POST['email'];
$amount   = $_POST['amount'];
$type   = $_POST['type'];
$advance       = $_POST['advance'];
$amount_type   = $_POST['amount_type'];
$date        = $_POST['date'];
$balance       = $_POST['balance'];

	echo $sql = "Update `users` SET name='{$name}',package='{$package}',phone = '{$phone}',address='{$address}',email='{$email}',amount='{$amount}',type='{$type}',address='{$address}',email='{$email}',amount='{$amount}',type='{$type}' where id='{$id}'";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
  header("Location:user.php");
	
}
else{
	echo "<script>alert('Failed to update!')</script>";	
}

}
}