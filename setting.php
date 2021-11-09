<?php include 'head.php'?>
<?php include 'header.php'?>
<?php include 'session.php'?>
<?php

include 'config.php';
if(isset($_POST['change'])){
  
  //Getting Values.....
  
  $old_pass      = $_POST['old_pass'];
  $new_pass      = $_POST['new_pass'];
  $new2_pass     = $_POST['new2_pass'];

$sql1 = "SELECT * FROM `admin`";
$result1 = mysqli_query($con,$sql1) or die("Failed");

  
if (mysqli_num_rows($result1) > 0) {
  $output1 = mysqli_fetch_assoc($result1);
if($old_pass==$output1['password'])
{
    
if($new_pass==$new2_pass)
{ 
//Inserting new password.........
$checkUserquery="UPDATE admin set password='{$new_pass}'";
$resultant=mysqli_query($con,$checkUserquery);

echo "<script>alert('Password has been changed!')</script>";
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
?>


<br><br><br>
      <div class="row">
        <div class="col-md-4"></div>
      <div class="col-md-4">


        <form style="width: 400px;" action="setting.php" method="POST">
        <?php

include 'config.php';
$sql = "SELECT * FROM `admin` ";
$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
	$output = mysqli_fetch_assoc($result);

?>
   <div class="form-outline mb-4">
            <label class="form-label" for="form1Example2">Change Username:</label>
            <input type="text" id="form1Example2" class="form-control" value="<?php echo $output['user'];?>" name="username"/>
          </div>

          <?php
}

else
{
	echo ("No Record Found");
}
?>
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example2">Current Password:</label>
            <input type="password" id="form1Example2" class="form-control" name="old_pass"/>
          </div>
        
        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">New Password:</label>
          <input type="password" id="form1Example2" class="form-control" name="new_pass"/>
        </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Confirm Password:</label>
          <input type="password" id="form1Example2" class="form-control" name="new2_pass"/>
        </div>
      
      
          <!-- Submit button -->
          <input type="submit" class="btn btn-success" value="Save" style="width: 100px;" name="change">
        </form>
  
      </div>
      <div class="col-md-4"><div >
</div>
</div>
<div class="col-md-1"></div>
    </div>



    <?php include 'foot.php'?>
