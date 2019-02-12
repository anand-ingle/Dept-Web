<?php
    session_start();
    require 'database.php';

    if(!$_SESSION['username']){
        header("location:$username");
    }
	if(!isset($_SESSION['username']))
	{
	header("location:home.php");
	}
	
?>
