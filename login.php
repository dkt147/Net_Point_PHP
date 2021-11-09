
<?php
  session_start();
  if(isset($_SESSION['username']))
  { 
    header("Location: index.php");
  }
  
include 'config.php';

if(isset($_POST['submit'])){
$password      = $_POST['password'];
$username      = $_POST['username'];


   $checkUserquery="SELECT * FROM admin WHERE user='{$username}' and password='{$password}'";
   $resultant=mysqli_query($con,$checkUserquery);



    if(mysqli_num_rows($resultant)>0){

      Session_start();
      $_SESSION['username'] = $username;
      header("Location:index.php");
    }
    else{
        echo "<script>alert('Invalid Username/Password')</script>";	

    }
}

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FNP</title>
    <link rel = "icon" href = 
"logo.png" 
        type = "image/x-icon">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  margin-left:60px;
  max-width: 400px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}

</style>
</head>
<body>
    <div id="login"><br><br>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="POST">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>