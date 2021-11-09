<?php include 'head.php'?>
<?php include 'header.php'?>
<?php include 'session.php'?>
<?php

include 'config.php';
$sql = "SELECT * FROM `payment`";
$result = mysqli_query($con,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {
	
	$output = mysqli_fetch_assoc($result);
$s=0;
  while (	$output = mysqli_fetch_assoc($result)) 
  { 
?>

 <tr>
   <td><?php echo $s+=$output['pack_fk'];?></td>


<?php
}
}
else
{
	echo ("No Record Found");
}
?>
<?php

$dataPoints = array(
	
	array("x"=> 10, "y"=> $s),
	array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
	array("x"=> 30, "y"=> 50),
	array("x"=> 40, "y"=> 45),
	array("x"=> 50, "y"=> 52),
	array("x"=> 60, "y"=> 68),
	array("x"=> 70, "y"=> 38),
	array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
	array("x"=> 90, "y"=> 52),
	array("x"=> 100, "y"=> 60),
	array("x"=> 110, "y"=> 36),
	array("x"=> 120, "y"=> 49),
	array("x"=> 130, "y"=> 41)
);
	
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
<div class="container" style="margin-top:50px">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10"><div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>
<div class="col-md-1"></div>
</div>

</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php include 'foot.php'?>
