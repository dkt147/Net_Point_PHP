<?php include 'head.php'?>
<?php include 'header.php'?>
<?php include 'session.php'?>
<div style="margin:100px">
<br>      <table id="myTable" class="display table table-striped table-bordered" style="width:100%">
        <br><thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Balance</th>
                <th>Package</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'config.php';
$current = date("m");
$sql = "SELECT * FROM users
WHERE id NOT IN (SELECT u_id FROM payment where  Month='{$current}') and type='Manual';";
$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
	  $s=0;
  while (	$output = mysqli_fetch_assoc($result)) 
  {$s++;
?>

 <tr>
   <td><?php echo $s;?></td>
   <td><?php echo $output['name'];?></td>
   <td><?php echo $output['type'];?></td>
   <td><?php echo $output['amount'];?></td>
   <td><?php echo $output['balance'];?></td>
   <td><?php echo $output['package'];?></td>
   <td><a href="update_data.php?id=<?php echo $output['id'];?>"><i class="fa fa-edit" style="font-size:25px"></i></a></td>
              
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
