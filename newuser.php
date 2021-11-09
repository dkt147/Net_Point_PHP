
<form style="width: 400px;" action="_newpay.php" method="POST">
<?php
include 'config.php';

		$query = "SELECT * FROM `payment` order by serial desc";
    
		$res = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($res);
        $lastid = $row['serial'];

        if(empty($lastids))
        {
            $number =1001;
        }
        else{
            $number +=1;
        }


     ?>
<div class="form-outline mb-4">
          <label class="form-label" for="form1Example1">Serial No. </label>
          <input type="text" id="form1Example1" class="form-control" value="<?php echo $row['serial']?>" name="id" disabled/>
        </div>  
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Name</label>
          <input type="text" id="form1Example2" class="form-control" name="name" value=""/>
        </div>



      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form1Example2">Package</label>
        <select class="form-control" id="sel1" name="package">
        <option value="">3PLUS</option>
        </select>
      </div>

      
      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form1Example2">Address</label>
        <input type="text" id="form1Example2" class="form-control" name="address" />
      </div>
    
      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form1Example2">Amount type</label>
        <select class="form-control" id="sel1" name="amount_type">
          <option>Monthly</option>
          <option>Advance</option>
        </select></div>
    
        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Amount</label>
          <input type="text" id="form1Example2" class="form-control" name="amount"/>
        </div>
    
        
          <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form1Example2">Balance</label>
        <input type="text" id="form1Example2" class="form-control" value="0" name="balance"/>
      </div>
    
        <!-- Submit button -->
        <input type="submit" class="btn btn-success" value="Save" style="width: 100px;" name="save">
        <input type="submit" class="btn btn-danger" value="Save & Print" style="width: 100px;" name="s_p">
       
      </form>