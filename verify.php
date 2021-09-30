<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(require 'connection.php')
    {
        $data= "update users set is_active = 1 where user_id = ". $_GET["id"];
        if(isset($_COOKIE["UNVERIFIED_EMAIL"])){
            setcookie("UNVERIFIED_EMAIL", "", time() - 3600);
        }
        header("location: signin.php");
    }
}
?>