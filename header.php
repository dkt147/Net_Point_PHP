
<div class="container">
  <div class="row">
  <div class="col-md-4">
    </div>
  <div class="col-md-6"><h1><b>Friend's Net Point 
    </b></h1>
  <img src="logo.png" width="100px" height="100px" style="margin-left:90px"></div>
  <div class="col-md-2">
  <?php
  //session_start();
  if(!isset($_SESSION['username']))
  { 
    header("Location: login.php");
  }
  
?>
</div>
</div>
  <br>
  <ul class="nav nav-pills">
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==1)
    {?>
    class="active"
    <?php
    }
  }
    ?>
    ><a href="index.php?id=1">Bill</a></li>
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==2)
    {?>class="active"
    <?php
    }
  }
    ?>
    >
    <a href="paid.php?id=2">Paid</a></li>
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==3)
    {?>class="active"
    <?php
    }
  }
    ?>
    >
    <a href="pending.php?id=3">Pending</a></li>
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==4)
    {?>class="active"
    <?php
    }
  }
    ?>
    ><a href="advance.php?id=4">Advance</a></li>
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==5)
    {?>class="active"
    <?php
    }
  }
    ?>
    >
    <a href="balance.php?id=5">Balance</a></li>
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==6)
    {?>class="active"
    <?php
    }
  }
    ?>
    ><a href="data.php?id=6">Payment</a></li>
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==7)
    {?>class="active"
    <?php
    }
  }
    ?>
    ><a  href="sale.php?id=7">Sales</a></li>
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==8)
    {?>class="active"
    <?php
    }
  }
  else{
    
  }
    ?>
    >
    <a  href="packages.php?id=8">Packages</a></li>
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==9)
    {?>class="active"
    <?php
    }
  }
  else{
    
  }
    ?>
    >
     <a  href="user.php?id=9">Users</a></li>
    <li <?php 
    if(isset($_GET['id']))
    {
    if($_GET['id']==10)
    {?>class="active"
    <?php
    }
  }
    ?>><a  href="setting.php?id=10">Setting</a></li>
    <li>
    <form action="logout.php" method="POST">
    <input type="submit" value="Logout" class="btn btn-danger" name="logout">
    </form>
    </li>
  </ul>
  
</div>