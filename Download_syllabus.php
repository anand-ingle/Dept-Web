<?php

include 'session-check-profile.php';
$msg="";
require 'database.php';

$useris=$_SESSION['username'];
$query=mysqli_query($database,"select * from itcourse where username='$useris'") ;


?>

<!DOCTYPE html>
<html>

<head>
  <title>Department of Information Technology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link rel="stylesheet" href="theme.css" type="text/css">
  <meta name="description" content="Government College of Engineering Aurangabad, Department of Information Technology was started in 2000-01.
Provides UG programme in Information Technology with intake capacity of 60.">
  <meta name="keywords" content="IT department ,GECA, Aurangabad, Government College of Engineering Aurangabad ,IT GECA,itsa,Maharashtra Engineering,IT Engineering,BAMU,BATU,IT">
  <link rel="icon" href="geca.png"> </head>

<body class="">
  <nav>
    <div class="navbar bg-primary navbar-expand-md p-0">
      <a class="navbar-brand" href="#">
        <img src="geca.png" width="120" height="120" class="d-inline-block align-top" alt=""> </a>
      <a class="navbar text-primary h"><b class="text-white"><b class="w-30"><span style="font-weight:normal;"><b class="h2 text-uppercase"><b class="">Department of Information Technology</b></b>
        </span>
        <br><span class=" text-light text-center text-uppercase"><b class="h">&nbsp;Government college of Engineering, Aurangabad</b></span></b>
        </b>
      </a><b class="text-white"><b class="w-30">
    </b></b>
    </div><b class="text-white"><b class="w-30">
  </b></b>
  </nav>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="active nav-link" href="faculty_login.php"><i class="fa fa-home fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fd_resume.php"><i class="fa fa-user fa-fw"></i>Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faculty_resume.php"><i class="fa fa-user fa-fw"></i>Resume</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aicte_form.php"><i class="fa fa-file-pdf-o fa-fw"></i>AICTE FORM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="faculty_syllabus.php"><i class="fa fa-edit fa-fw"></i>Syllabus Design</a>
        </li>
            <li class="nav-item">
              <a class="nav-link " href="Download_syllabus.php"><i class="fa fa-file-pdf-o fa-fw"></i>Download Syllabus</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link"><i class=" 	fa fa-window-close"></i>Logout</a>
            </li>
          </ul>        </div>


        <div class="col-md-9">
          <h1 class="">Download Syllabus Report</h1>
          <div class="py-5">

              <div class="row">
                <div class="col-md-12">
                 
                      <p class="font-weight-bold text-center">
                      
                         <table class="table border">
                         <div class="text-center h5"> List Of Subject</div>
                         
                         <?php if(mysqli_num_rows($query)>0){
                         while($row=mysqli_fetch_assoc($query)){
                                    
                          echo "<tr><td>". $row['courseid']. "</td><td>". $row['coursename']. "</td><td><a class='btn-secondary btn-sm' id='print' href='gen.php?id=". rawurlencode($row['id']). "'' target=_blank>Download</a> ";
                                 
                           }
                           }
        
                      ?>
                          </table>
                      </p>
             
                      </div>
                      </div>
                      </div>
                      
                     
                          

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
       
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         
  


</body>

</html>
