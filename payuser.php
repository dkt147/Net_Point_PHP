 <form style="width: 400px;" action="index.php" method="POST">
          
          <div class="form-outline mb-4 row">
            <div class="col">
            <label class="form-label" for="form1Example1">User</label>
            <input type="text" id="form1Example1" class="form-control" placeholder="Id or Username" name="serial" />
</div>
<div class="col">
  <br><input type="submit" class="btn btn-success" style="margin-top:5px" value="Auto" name="fill"></div>
  </div>
</form>


<?php
//Data Retrieve In Form...
?>
<form target="_blank" style="width: 400px;" action="_pay.php" method="POST">
<?php

//Stablishing Connection..
	include 'config.php';

	if (isset($_POST['fill'])) {
		$serial = $_POST['serial'];
		$_SESSION['wp'] = $serial; 

		$query = "SELECT * FROM `users` where id ='$serial' or name='$serial'";
    
		$res = mysqli_query($con, $query);

	
							  if (mysqli_num_rows($res) > 0) {
                  $n = 0;
								  while ($row = mysqli_fetch_assoc($res)) {
                    //session_start();
                    $_SESSION['pid'] = $row['id'];
                    $n = $n +1;
                    if($n==2)
                    {
                      break;
                    }

     ?>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example1">ID# </label>
            <input type="text" id="form1Example1" class="form-control" value="<?php echo $row['id'] ?>" name="id" disabled/>
          </div>  
        
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="text" id="form1Example2" class="form-control" name="name" value="<?php echo $row['id'] ?>" hidden/>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example2">Name</label>
            <input type="text" id="form1Example2" class="form-control" name="u_id" value="<?php echo $row['name'] ?>"/>
          </div>


        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Package</label>
          <input type="text" id="form1Example2" class="form-control" name="package" value="<?php echo $row['package'] ?>"/>
        
        </div>

        
        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Type</label>
          <input type="text" id="form1Example2" class="form-control" name="type" value="<?php echo $row['type'] ?>"/>
        </div>
      
        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Amount type</label>
          <input type="text" id="form1Example2" class="form-control" name="amount_type" value="Monthly"/>
        </div>
      
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example2">Amount</label>
            <input type="text" id="form1Example2" class="form-control" name="amount" value="<?php echo $row['amount'] ?>"/>
          </div>
      
          
            <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Balance</label>
          <input type="text" id="form1Example2" class="form-control" name="balance" value="<?php echo $row['balance'] ?>"/>
        </div>

          <?php /*   
                <!-- Password input -->
                <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Month</label>
          <select class="form-control" id="sel1" name="month">
            <option selected disabled>Select Month</option>
         

          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
          </select>
        </div>
      
                      <!-- Password input -->
                      <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Year</label>
          <select class="form-control" id="sel1" name="month">
            <option selected disabled>Select Year</option>
         

          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
          </select>
        </div>
        */
        ?>
      
          <!-- Submit button -->
          <input type="submit" class="btn btn-success" value="Save" style="width: 100px;" name="save">
          <input type="submit" class="btn btn-danger" value="Save & Print" style="width: 100px;" name="s_p" target="_blank">
          

          <?php }
          }
          else
          {
              echo "<script>alert('Not found')</script>";
          }
         } ?>
        </form>
        <br><br>