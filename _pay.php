<?php include 'config.php'?>
<?php
  session_start();
  if(!isset($_SESSION['username']))
  { 
    header("Location: login.php");
  }
  
if(isset($_POST['save']))
{
if ($con) {

  
$serial        = 1004;
$name          = $_POST['name'];
$package       = $_POST['package'];
$amount_type   = $_POST['amount_type'];
$type   = $_POST['type'];
$month         = date('m');
$year          = date('Y');
$amount        = $_POST['amount'];
$balance       = $_POST['balance'];
$date = date("d-m-Y");

	$sql = "INSERT INTO `payment`(`serial`, `u_id`, `package`, `date`, `amount_type`, `amount`, `balance`, `type`, `month`, `year`)
   VALUES ('{$serial}','{$name}','{$package}','{$date}','{$amount_type}','{$amount}','{$balance}','{$type}','{$month}','{$year}')";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
  header("Location:data.php");
	
}
else{
	echo "<script>alert('Failed to upload!')</script>";	
}

}
}

if(isset($_POST['s_p']))
{

  
  
$serial        = 1004;
$name          = $_POST['name'];
$package       = $_POST['package'];
$amount_type   = $_POST['amount_type'];
$type   = $_POST['type'];
$month         = date('m');
$year          = date('Y');
$amount        = $_POST['amount'];
$balance       = $_POST['balance'];
$date = date("d-m-Y");


$sql5 = "SELECT * FROM `payment` where u_id='$name' and date='$date'";
$result5 = mysqli_query($con,$sql5) or die("Failed");


  

if (mysqli_num_rows($result5) > 0) {
  session_start();
  $pid = $_SESSION['pid'];
  header("location: invoice.php?pid=".$pid);
}
else{
  session_start();
  $pid = $_SESSION['pid'];
	
  
$sql = "INSERT INTO `payment`(`serial`, `u_id`, `package`, `date`, `amount_type`, `amount`, `balance`, `type`, `month`, `year`)
VALUES ('{$serial}','{$name}','{$package}','{$date}','{$amount_type}','{$amount}','{$balance}','{$type}','{$month}','{$year}')";
$run = mysqli_query($con,$sql);

  if($run)
  {
      
  header("Location:data.php");
	
}
else{
	echo "<script>alert('Failed to upload!')</script>";	
}
 
  header("location: invoice.php?pid=".$pid);

}

}
?>