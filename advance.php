<?php include 'head.php'?>
<?php include 'header.php'?>
<?php include 'session.php'?>
<div style="margin:100px">
<br>      <table id="myTable" class="display table table-striped table-bordered" style="width:100%">
        <br><thead>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Date</th>
                <th>Advance</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'config.php';
$current = date("m");
$sql = "SELECT * FROM users
WHERE advance >0 Order by date desc ";
$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
	  $s=0;
      $total = 0;
  while (	$output = mysqli_fetch_assoc($result)) 
  {$s++;
   $total = $total + $output['advance'];
?>

 <tr>
   <td><?php echo $s;?></td>
   <td><?php echo $output['name'];?></td>
   <td><?php echo $output['date'];?></td>
   <td><?php echo $output['advance'];?></td>
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
        <tfoot>
        <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr>
<td></td>
<td></td>
<td><b>Total:</b> </td>
<td style="color:green"><b><?php echo $total;?> pkr</b></td>
<td></td>
<td></td>
</tr>
</tfoot>
    </table>
</div>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php include 'foot.php'?>
