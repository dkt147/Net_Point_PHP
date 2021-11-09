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

  
$id = $_POST['pid'];
$name          = $_POST['name'];
$package       = $_POST['package'];
$amount   = $_POST['amount'];
$type   = $_POST['type'];
$month         = $_POST['month'];
$year          = $_POST['year'];
$date        = $_POST['date'];
$balance       = $_POST['balance'];

	echo $sql = "Update `payment` SET package='{$package}',date='{$date}',amount = '{$amount}',type='{$type}',balance='{$balance}',Month='{$month}',Year='{$year}' where pid='{$id}'";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
  header("Location:data.php");
	
}
else{
	echo "<script>alert('Failed to update!')</script>";	
}

}
}