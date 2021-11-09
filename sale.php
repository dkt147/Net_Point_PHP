<?php include 'head.php'?>
<?php include 'header.php'?>
<?php include 'session.php'?>
<div style="margin:100px;text-align:center">
<br> 


<form action="sale.php" method="POST">
<input type="submit" value="2021" name="2021" class="btn btn-success">
<input type="submit" value="2022" name="2022" class="btn btn-success">
<input type="submit" value="2023" name="2023" class="btn btn-success">
<input type="submit" value="2024" name="2024" class="btn btn-success">
<input type="submit" value="2025" name="2025" class="btn btn-success">
<input type="submit" value="2026" name="2026" class="btn btn-success">
<input type="submit" value="2027" name="2027" class="btn btn-success">
<input type="submit" value="2028" name="2028" class="btn btn-success">
<input type="submit" value="2029" name="2029" class="btn btn-success">
<input type="submit" value="2030" name="2030" class="btn btn-success">
<input type="submit" value="2031" name="2031" class="btn btn-success">
</form>

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<br>      <table id="myTable" class="table table-striped table-bordered" style="width:100%">
        <br>
        <thead>
      
            <tr style="text-align: center;">
                <th style="text-align: center;">Month</th>
                <th style="text-align: center;">Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'config.php';

if(isset($_POST['2021']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2021'
GROUP BY Month";
$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2022']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2022'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2023']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2023'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2024']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2024'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2025']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2025'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2026']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2026'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2027']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2027'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2028']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2028'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2029']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2029'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2030']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2030'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}
		if(isset($_POST['2031']))
		{
			$sql = "SELECT Month,SUM(amount) as amount FROM `payment`where Year='2031'
GROUP BY Month";

$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
  while (	$output = mysqli_fetch_assoc($result)) 
  {

	
//SWITCH CASE
$month =$output['Month'];

switch ($month) {
  case 01:
    $mm="January";
    break;
  case 02:
	$mm="February";
	break;
  case 03:
	$mm="March";
	break;
  case 04:
    $mm="April";
    break;
  case 05:
	$mm="May";
	break;
  case 06:
	$mm="June";
	break;
  case 07:
	$mm="July";
	break;
  case '08':
    $mm="August";
    break;
  case '09':
	$mm="September";
	break;
  case '10':
	$mm="October";
	break;
  case '11':
    $mm="November";
    break;
  case '12':
	$mm="December";
	break;
  default:
    $mm="no month";
}

?>

 <tr>
 <td><?php echo $mm	;?></td>
 <td><?php echo "Rs: ".$output['amount'];?></td>        
 </tr> 



<?php
}
}
else
{
	echo ("No Record Found");
}
		}

?>

        </tbody>
    </table>


</div>
<div class="col-md-1"></div>

</div>
<br><hr><br><br>
<?php
/*<?php

	include 'config.php';
    
		if(isset($_POST['2021']))
		{
			$sql ="SELECT * FROM payment where Year='2021' order by Month asc";
		}
		if(isset($_POST['2022']))
		{
			$sql ="SELECT * FROM payment where Year='2022' order by Month asc";
		}
		if(isset($_POST['2023']))
		{
			$sql ="SELECT * FROM payment where Year='2023' order by Month asc";
		}
		if(isset($_POST['2024']))
		{
			$sql ="SELECT * FROM payment where Year='2024' order by Month asc";
		}
		if(isset($_POST['2025']))
		{
			$sql ="SELECT * FROM payment where Year='2025' order by Month asc";
		}
		if(isset($_POST['2026']))
		{
			$sql ="SELECT * FROM payment where Year='2026' order by Month asc";
		}
		if(isset($_POST['2027']))
		{
			$sql ="SELECT * FROM payment where Year='2027' order by Month asc";
		}
		if(isset($_POST['2028']))
		{
			$sql ="SELECT * FROM payment where Year='2028' order by Month asc";
		}
		if(isset($_POST['2029']))
		{
			$sql ="SELECT * FROM payment where Year='2029' order by Month asc";
		}
		if(isset($_POST['2030']))
		{
			$sql ="SELECT * FROM payment where Year='2030' order by Month asc";
		}
		if(isset($_POST['2031']))
		{
			$sql ="SELECT * FROM payment where Year='2031' order by Month asc";
		}

		$sql ="SELECT Month,SUM(amount) as amount FROM `payment`
   GROUP BY Month";
         $result = mysqli_query($con,$sql);
         
		 while($row = mysqli_fetch_array($result)) { 
    
 $dataPoints = array(
        
 
     array("x"=> 10, "y"=> $row['amount'])
    
 ); 

		 }
     
 ?>
 <script>
 window.onload = function () {
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     exportEnabled: true,
     theme: "light1", // "light1", "light2", "dark1", "dark2"
     title:{
         text: "Simple Column Chart with Index Labels"
     },
     axisY:{
         includeZero: true
     },
     data: [{
         type: "column", //change type to bar, line, area, pie, etc
         //indexLabel: "{y}", //Shows y value on all Data Points
         indexLabelFontColor: "#5A5757",
         indexLabelPlacement: "outside",   
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</div>
*/?>
<?php include 'foot.php'?>
