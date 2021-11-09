<?php
/*call the FPDF library*/
require('fpdf.php');

	
/*A4 width : 219mm*/

// $pdf = new FPDF('P','mm','A4');
$pdf = new FPDF('P','mm',array(80,120));

if(isset($_GET['pid']))
{
    $pid = $_GET['pid'];
$date = date("d")." ".date("F")." ".date("Y");
//$time=time();
$time = date('h:i:s a', time());
include 'config.php';
$sql = "SELECT * from users where id = '{$pid}'";
$result = mysqli_query($con,$sql) or die("Failed");
$output = mysqli_fetch_assoc($result);
$id = "ID# ".$output['id'];
$name = $output['name'];
$balance = $output['balance'];
$pack = $output['package'];
$month1 = $output['date'];
$type = $output['amount_type'];
$amount = "Rs. ".$output['amount'];

$pdf->AddPage();
/*output the result*/


/*set font to arial, bold, 14pt*/
$pdf->SetFont('Arial','BI',12);

/*Cell(width , height , text , border , end line , [align] )*/

$pdf->Cell(9 ,0,'',5,0);
$pdf->Image('lg.png',60,3,20,0,'PNG');
$pdf->Image('fnp.png',25,30,50,0,'PNG');
$pdf->Image('sign.png',40,105,50,0,'PNG');
$pdf->Image('bg.png',15,30,50,0,'PNG');
$pdf->Image('paid.png',11,105,20,0,'PNG');
$pdf->Cell(80 ,2,'Friend`s Net Point',0,0);
$pdf->Cell(5 ,3,'',0,1);



$pdf->SetFont('Arial','',5);
$pdf->Cell(14 ,0,'',0,0);
$pdf->SetDrawColor(0,100,0);
$pdf->Cell(60 ,2,'Cell: 0345-2788701, 03422402570',0,0);
$pdf->Cell(5 ,10,'',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,$date,0,0);
$pdf->Cell(5 ,3,'',0,1);

$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,$time,0,0);
$pdf->Cell(5 ,3,'',0,1);

$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,$id,0,0);
$pdf->Cell(5 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,'User name: ',0,0);
$pdf->Cell(5 ,4,'',0,1);

$pdf->SetFont('Arial','I',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,$name,0,0);
$pdf->Cell(5 ,6,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,'Package: ',0,0);
$pdf->Cell(5 ,4,'',0,1);

$pdf->SetFont('Arial','I',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,$pack,0,0);
$pdf->Cell(5 ,6,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,'Month: ',0,0);
$pdf->Cell(5 ,4,'',0,1);

$pdf->SetFont('Arial','I',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,date("F"),0,0);
$pdf->Cell(5 ,6,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,'Amount type: ',0,0);
$pdf->Cell(5 ,4,'',0,1);

$pdf->SetFont('Arial','I',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,$type,0,0);
$pdf->Cell(5 ,6,'',0,1);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,'Balance: ',0,0);
$pdf->Cell(5 ,5,'',0,1);

$pdf->SetFont('Arial','I',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,$balance,0,0);
$pdf->Cell(5 ,8,'',0,1);

$pdf -> Line(0,89,338,88);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,'Amount: ',0,0);
$pdf->Cell(5 ,5,'',0,1);

$pdf->SetFont('Arial','I',10);
$pdf->Cell(1 ,0,'',50,0);
$pdf->Cell(80 ,2,$amount,0,0);
$pdf->Cell(5 ,0,'',0,1);



// $pdf->SetFont('Arial','B',10);
// /*Heading Of the table*/
// $pdf->Cell(10 ,6,'Sl',1,0,'C');
// $pdf->Cell(80 ,6,'Description',1,0,'C');
// $pdf->Cell(23 ,6,'Qty',1,0,'C');
// $pdf->Cell(30 ,6,'Unit Price',1,0,'C');
// $pdf->Cell(20 ,6,'Sales Tax',1,0,'C');
// $pdf->Cell(25 ,6,'Total',1,1,'C');/*end of line*/
/*Heading Of the table end*/
// $pdf->SetFont('Arial','',10);
//     for ($i = 0; $i <= 10; $i++) {
// 		$pdf->Cell(10 ,6,$i,1,0);
// 		$pdf->Cell(80 ,6,'HP Laptop',1,0);
// 		$pdf->Cell(23 ,6,'1',1,0,'R');
// 		$pdf->Cell(30 ,6,'15000.00',1,0,'R');
// 		$pdf->Cell(20 ,6,'100.00',1,0,'R');
// 		$pdf->Cell(25 ,6,'15100.00',1,1,'R');
// 	}
		

// $pdf->Cell(118 ,6,'',0,0);
// $pdf->Cell(25 ,6,'Subtotal',0,0);
// $pdf->Cell(45 ,6,'151000.00',1,1,'R');


}
$pdf->Output();

?>