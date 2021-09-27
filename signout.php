<?php 
    session_start();
    session_destroy();
    unset($_SESSION["isAuthenticated"]);
    header("location:signin.php");
    exit();
?>