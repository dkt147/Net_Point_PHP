<?php include 'config.php'?>
<?php
  session_start();
  if(!isset($_SESSION['username']))
  { 
    header("Location: login.php");
  }
  
if ($con) {
    
echo $name          = $_POST['name'];
echo $phone         = $_POST['phone'];
echo $address       = $_POST['address'];
echo $email         = $_POST['email'];
echo $advance       = $_POST['advance'];
echo $amount        = $_POST['amount'];
echo $amount_type   = $_POST['amount_type'];
echo $type        = $_POST['type'];
echo $balance       = $_POST['balance'];
echo $package          = $_POST['package'];
echo $date          = date("d-m-Y");

	echo $sql = "INSERT INTO `users`(`name`, `phone`, `address`, `email`, `advance`, `amount`, `amount_type`, `type`, `balance`, `package`, `date`) 
    VALUES ('{$name}','{$phone}','{$address}','{$email}','{$advance}','{$amount}','{$amount_type}','{$type}','{$balance}','{$package}','{$date}')";



  $run = mysqli_query($con,$sql);
  if($run)
  {
      
  header("Location:user.php");
	
}
else{
    header("Location:user.php");
	
}

}
?>