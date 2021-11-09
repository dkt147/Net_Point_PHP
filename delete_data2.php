<?php
include 'session.php';
include 'config.php';
if(isset($_GET['did']))
{
    $did = $_GET['id'];
    $sql = "DELETE from payment where u_id = '{$did}'";
    $query = mysqli_query($con,$sql);

    if($query)
    {
        header("Location: paid.php");
    }


}


?>