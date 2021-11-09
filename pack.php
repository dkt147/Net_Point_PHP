<?php include 'head.php'?>
<?php include 'header.php'?>
<?php include 'session.php'?>

<br><br><br>
      <div class="row">
        <div class="col-md-1"></div>
      <div class="col-md-4">

        <form style="width: 400px;" action="_pack.php" method="POST">
          
        
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example2">Package</label>
            <input type="text" id="form1Example2" class="form-control" name="pack"/>
          </div>
        
        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Price</label>
          <input type="text" id="form1Example2" class="form-control" name="price"/>
        </div>
      
      
          <!-- Submit button -->
          <input type="submit" class="btn btn-success" value="Save" style="width: 100px;" name="save">
        </form>
  
      </div>
      <div class="col-md-6"><div >
<br>      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <br>
        <thead>
            <tr>
                <th>Id</th>
                <th>Package</th>
                <th>Price</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'config.php';
$sql = "SELECT * FROM `package`";
$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	

  while (	$output = mysqli_fetch_assoc($result)) 
  {
?>

 <tr>
   <td><?php echo $output['id'];?></td>
   <td><?php echo $output['package'];?></td>
   <td><?php echo $output['price'];?></td>
   <td><?php echo $output['date'];?></td>
   
   <td><a href="update_package.php?id=<?php echo $output['id'];?>"><i class="fa fa-edit" style="font-size:25px"></i></a></td>
   <td><a href="delete_package.php?id=<?php echo $output['id'];?>"><i class="fa fa-trash" style="font-size:25px"></i></a></td>
              
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
?>

        </tbody>
  
    </table>
</div>
</div>
<div class="col-md-1"></div>
    </div>



    <?php include 'foot.php'?>
