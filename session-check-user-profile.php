<?php
    session_start();
    require 'database.php';
    $user_username = mysqli_real_escape_string($database,$_REQUEST['username']);
    $current_user = $_SESSION['username'];
    if($_SESSION['username']){
        header("location:profile.php?username=$user_username&current_user=$current_user");
    }
?>
