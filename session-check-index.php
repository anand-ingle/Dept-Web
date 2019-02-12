<?php
    session_start();
    require 'database.php';
    if($_SESSION['username']){
        header("location:home.html");
    }
?>
