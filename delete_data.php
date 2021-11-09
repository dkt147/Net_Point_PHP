<?php

include 'session.php';
include 'config.php';
if(isset($_GET['uid']))
{
   $did = $_GET['uid'];
    $sql = "DELETE from payment where pid = '{$did}'";

    echo '<script>alert("Enter pin")</script>';

    //$query = mysqli_query($con,$sql);

    if($query)
    {
       header("Location: data.php");
    }


}


?>