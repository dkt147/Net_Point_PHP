<?php include 'head.php'?>
<?php include 'header.php'?>
<?php include 'session.php'?>
<div style="margin:100px">
<br>      <table id="myTable" class="display table table-striped table-bordered" style="width:100%">
        <br><thead>
            <tr>
                <th>Id</th>
                <th>Serial No.</th>
                <th>User No.</th>
                <th>User</th>
                <th>Date</th>
                <th>Amount type</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Balance</th>
                <th>Package</th>
                <th>Month</th>
                <th>Year</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'config.php';
$current = date("m");
$sql = "SELECT users.id,users.name,payment.serial,payment.date,payment.amount_type,payment.type,payment.amount,payment.balance,payment.package,payment.Month,payment.Year FROM `payment`  INNER JOIN users ON users.id=payment.u_id  where Month='{$current}' Order by date desc ";
$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
	  $s=0;
  while (	$output = mysqli_fetch_assoc($result)) 
  {$s++;
?>

 <tr>
   <td><?php echo $s;?></td>
   <td><?php echo $output['serial'];?></td>
   <td><?php echo $output['id'];?></td>
   <td><?php echo $output['name'];?></td>
   <td><?php echo $output['date'];?></td>
   <td><?php echo $output['amount_type'];?></td>
   <td><?php echo $output['type'];?></td>
   <td><?php echo $output['amount'];?></td>
   <td><?php echo $output['balance'];?></td>
   <td><?php echo $output['package'];?></td>
   <td><?php echo $output['Month'];?></td>
   <td><?php echo $output['Year'];?></td>
   <td><a href="update_data.php?id=<?php echo $output['id'];?>"><i class="fa fa-edit" style="font-size:25px"></i></a></td>
   <td><a href="delete_data.php?did=<?php echo $output['id'];?>"><i class="fa fa-trash" style="font-size:25px"></i></a></td>
              
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
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php include 'foot.php'?>
