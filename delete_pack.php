<?php
include 'session.php';
include 'config.php';
if(isset($_GET['did']))
{
    $did = $_GET['did'];
    echo $sql = "DELETE from package where Id = '{$did}'";
    $query = mysqli_query($con,$sql);

    if($query)
    {
        header("Location: packages.php");
    }


}


?>