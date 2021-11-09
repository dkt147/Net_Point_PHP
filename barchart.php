<?php
  session_start();
  if(!isset($_SESSION['username']))
  { 
    header("Location: login.php");
  }
  
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body>

	
<form action="barchart.php" method="POST">
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

<?php

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
		
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $month[]  = $row['Month']  ;
            $amount[] = $row['amount'];
        }
 
 
 
 
?>
        <div style="width:60%;height:20%;text-align:center;margin-left:200px;margin-bottom:200px">
            <h2 class="page-header" >Sales Reports </h2>
            <div>Product </div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($month); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($amount); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>