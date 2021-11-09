<?php include 'config.php'?>
<?php
if ($con) {
    
    session_start();
    session_unset();
    session_destroy();
    header("Location: login.php");
}
?>