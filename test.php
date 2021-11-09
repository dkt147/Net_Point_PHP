<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 100%;
	margin: 0 auto;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 0;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
<?php

//Checking if button is clicked or not...
	if (isset($_POST['save'])) {

//Getting Image Path...
		$target_dir = "uploads/";
	$temp = $_FILES['file']['tmp_name'];
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
   
//Moving into a folder...
	move_uploaded_file($temp, "" . $target_file);
//Getting values from a form...
	$pers = $_POST['perss'];
	$name = $_POST['name'];
	$depart = $_POST['depart'];
	$desig = $_POST['desig'];
	$type = $_POST['type'];
	$cnic = $_POST['cnic'];
	$date_vaccine = $_POST['date_vaccine'];
	$centre = $_POST['centre'];
	$vaccine = $_POST['vaccine'];
	$due = $_POST['due_date'];
	

	 
	include 'config.php';




//Insert Query for Mysql...
	$sql = "UPDATE `student` SET `Enroll`='$pers',`Depart_Name`='$depart',`Type`='$type',`CNIC`='$cnic',`Date_Of_Vaccination`='$date_vaccine',`Centre_Name`='$centre',`Vaccine_Name`='$vaccine',`Due_Date`='$due',`Picture`='$target_file',`Name`='$name' where Enroll='$pers'";
	

	$res = mysqli_query($conn, $sql);

//Resdirection To Another Page...
	if ($res == TRUE) {
		session_start();
		$_SESSION['msg'] = "Added Successfully";
	} else {
	}
}

if(!isset($_SESSION['msg']))
{


?>

<div class="signup-form">
    <form action="vaccinated_data.php" method="POST" enctype="multipart/form-data">
    	<div class="form-group">
			<img src="logo1.png" width="60px" height="60px" style="margin-left:20px">&nbsp;&nbsp;
			<label style="margin-left:20px"><h4><b>NED UNIVERSITY</b></h4></label>
					<img src="download.jpg" width="70px" height="60px" style="margin-left:27px">
					
		</div>
    	<label style="margin-left:78px"> OF ENGINEERING & TECHNOLOGY</label>
		<h2>Covid-19 Vaccination Data Collection</h2>
		<h6 class="hint-text" style="color: limegreen"><img src="covid.jpg" width="80px" height="50px">&nbsp;&nbsp;&nbsp;Let us know that you are safe.</h6>
        <div class="form-group row">
  
            
      
        <div class="col">
        	<label style="color: black"><b>Enroll:</b></label>
            <input type="text" class="form-control" name="pers_no" placeholder="Enrollement" value="" required="required" style="margin-top: -9px;">
        </div>
	
        <div class="col">
        	<label style="color: black"><b> </b></label>
            <input type="submit" class="form-control btn btn-success" name="fill" value="Auto Fill">
        </div>
	</div>
</form>



 <form action="vaccinated_data.php" method="POST" enctype="multipart/form-data">
     <?php

//Stablishing Connection..
	include 'config.php';

	if (isset($_POST['fill'])) {
        
		$pers = $_POST['pers_no'];
		$_SESSION['wp'] = $pers; 

		$query = "SELECT * FROM `student` where Enroll ='$pers'";
		$res = mysqli_query($conn, $query);

	
							  if (mysqli_num_rows($res) > 0) {
								  while ($row = mysqli_fetch_assoc($res)) {

     ?>
     <div class="form-group">
            <input type="hidden" class="form-control" name="perss" placeholder="Name" required="required" value="<?php echo $row['Enroll']?>" > 
        </div>
        <div class="form-group">
        	<label style="color: black"><b>Name:</b></label>
            <input type="text" class="form-control" name="name" placeholder="Name" required="required" value="<?php echo $row['Name']?>"> 
        </div>
        <div class="form-group">
        	<label style="color: black"><b>Department Name:</b></label>
            <input type="text" class="form-control" name="depart" placeholder="Department name" required="required" value="<?php echo $row['Depart_Name']?>">
        </div>
        <div class="form-group">
        	<label style="color: black"><b>Type:</b></label>
  <select class="form-control" id="sel10" name="type">
  	<option>UnderGraduate</option>
        		<option> PostGraduate</option>
                		<option>Master</option>
                       		<option>PHD</option> 	
                       		                       		<option>CC</option> 	<option>EE</option> 			

        	</select>
        </div>

         <div class="form-group">
        	<label style="color: black"><b>CNIC:</b></label>
            <input type="text" class="form-control" name="cnic" placeholder="CNIC" required="required" value="<?php echo $row['CNIC']?>">
        </div>

         <div class="form-group">
         	        	<label style="color: black"><b>Date of Vaccination:</b></label>
         	<input id="datepicker" width="390" name="date_vaccine" placeholder="Date of Vaccination" required="required" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
        </div>
        <div class="form-group">
         	        	<label for="sel1" style="color: black"><b>Name of Vaccination Centre:</b></label>
  <select class="form-control" id="sel1" name="centre">
        		<option>NED University</option>
                		<option>Expo Centre</option>
                       		<option>Dow University</option> 
                       		                       		<option>Agha Khan</option> 				
                       		                       		<option>Modern Sindh Goverment Hospital</option>	<option>Other</option> 				
				

        	</select>
        </div>
        <div class="form-group">
        	          	        	<label for="sel2" style="color: black"><b>Name of Vaccine:</b></label>
  <select class="form-control" id="sel1" name="vaccine">
  	<option>AstraZeneca</option>
        		<option> Sinopharm</option>
                		<option>Sinovac</option>
                       		<option>CanSino</option> 	
                       		                       		<option>Moderna</option>
    <option>Pfizer</option>
<option>PakVac</option>
    <option>Sputnik</option>
    <option>Other</option>
        	</select>
        </div>
		
        <div class="form-group">
        	         	          	        	<label for="sel2" style="color: black"><b>Due Date of 2nd Dose If Any:</b></label>
           <input id="datepicker2" width="390" name="due_date" placeholder="Due Date of 2nd Dose If any" required="required"/>
    <script>
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
        </div>
           <div class="form-group">
        		<label style="color: black"><b>Upload Attachments:</b></label>
					  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file" required="required">
					</div>
     
       <div class="form-group">
            <input type="submit" class="btn btn-success btn-lg btn-block" name="save" value="Submit">
        </div><br>
         <div class="form-group">
            <label style="height: "><b>Developed at <br>Centre for Software Research & Development</b></label>
            <img src="bottom_logo.jpeg" width="50px" height="50px" >
        </div>
        <?php

	}
}
else

{
    ?>
 <div class="form-group">
            <input type="hidden" class="form-control" name="perss" placeholder="Name" required="required" value="<?php echo $row['Enroll']?>" > 
        </div>
        <div class="form-group">
        	<label style="color: black"><b>Name:</b></label>
            <input type="text" class="form-control" name="name" placeholder="Name" required="required" value="<?php echo $row['Name']?>"> 
        </div>
        <div class="form-group">
        	<label style="color: black"><b>Department Name:</b></label>
            <input type="text" class="form-control" name="depart" placeholder="Department name" required="required" value="<?php echo $row['Depart_Name']?>">
        </div>
        <div class="form-group">
        	<label style="color: black"><b>Type:</b></label>
  <select class="form-control" id="sel10" name="type">
  	<option>UnderGraduate</option>
        		<option> PostGraduate</option>
                		<option>Master</option>
                       		<option>PHD</option> 	
                       		                       		<option>CC</option> 	<option>EE</option> 			

        	</select>
        </div>

         <div class="form-group">
        	<label style="color: black"><b>CNIC:</b></label>
            <input type="text" class="form-control" name="cnic" placeholder="CNIC" required="required" value="<?php echo $row['CNIC']?>">
        </div>

         <div class="form-group">
         	        	<label style="color: black"><b>Date of Vaccination:</b></label>
         	<input id="datepicker" width="390" name="date_vaccine" placeholder="Date of Vaccination" required="required" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
        </div>
        <div class="form-group">
         	        	<label for="sel1" style="color: black"><b>Name of Vaccination Centre:</b></label>
  <select class="form-control" id="sel1" name="centre">
        		<option>NED University</option>
                		<option>Expo Centre</option>
                       		<option>Dow University</option> 
                       		                       		<option>Agha Khan</option> 				
                       		                       		<option>Modern Sindh Goverment Hospital</option>	<option>Other</option> 				
				

        	</select>
        </div>
        <div class="form-group">
        	          	        	<label for="sel2" style="color: black"><b>Name of Vaccine:</b></label>
  <select class="form-control" id="sel1" name="vaccine">
  	<option>AstraZeneca</option>
        		<option> Sinopharm</option>
                		<option>Sinovac</option>
                       		<option>CanSino</option> 	
                       		                       		<option>Moderna</option>
    <option>Pfizer</option>
<option>PakVac</option>
    <?php
}
	}



        ?>
    </form>
	
</div>

<?php 
}
else{
	?>
  <div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm" style="color:green;margin: auto;
  width: 50%;
  padding: 10px;">
	<h6>Thankyou! For Telling Us</h6>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
		
	<?php
}

?>
</body>
</html>