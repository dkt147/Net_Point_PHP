<?php include 'head.php'?>
<?php include 'header.php'?>
<?php include 'session.php'?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


<br><br><br>
      <div class="row">
        <div class="col-md-4"></div>
      <div class="col-md-4">

        <form style="width: 400px;" action="_package.php" method="POST">
          
        <?php
        include 'config.php';
$sql = "SELECT * FROM `package` order by Id desc";
$result = mysqli_query($con,$sql) or die("Failed");
$output = mysqli_fetch_assoc($result);


?>
 <!-- Password input -->
 <div class="form-outline mb-4">
            <label class="form-label" for="form1Example2">ID</label>
            <input type="text" id="form1Example2" class="form-control" name="id" value="<?php echo $output['Id']+1;?>" disabled/>
          </div>
          
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example2">Package Name</label>
            <input type="text" id="form1Example2" class="form-control" name="package"/>
          </div>
        
        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Price</label>
          <input type="text" id="form1Example2" class="form-control" name="price"/>
        </div>
      
                <!-- Password input -->
              
      
          <!-- Submit button -->
          <input type="submit" class="btn btn-success" value="Save" style="width: 100px;">
        </form>
  
      </div>
      <div class="col-md-4">
      </div>
</div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<br>      <table id="myTable" class="table table-striped table-bordered" style="width:100%">
        <br>
        <thead>
      
            <tr>
                <th>#</th>
                <th>Package</th>
                <th>Price</th>
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
 <td><?php echo $output['Id'];?></td>
 <td><?php echo $output['package'];?></td>
   <td><?php echo $output['price'];?></td>
   <td><a href="update_package.php?pkid=<?php echo $output['Id'];?>"><i class="fa fa-edit" style="font-size:25px"></i></a></td>
   <td><a href="delete_pack.php?did=<?php echo $output['Id'];?>"><i class="fa fa-trash" style="font-size:25px"></i></a></td>
              
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
<div class="col-md-1"></div>

</div>
    </div>
    
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    <?php include 'foot.php'?>
