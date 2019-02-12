<?php
      $msg ="";
    session_start();
    if(isset($_REQUEST['login_button'])){
        require 'database.php';

        $errflag = false;
        $username=  mysqli_real_escape_string($database,$_REQUEST['username']);
        $password=  mysqli_real_escape_string($database,$_REQUEST['password']);
        if($username == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
        $sql="SELECT * FROM user WHERE username='$username'AND password='$password'";
        $result=  mysqli_query($database,$sql) or die(mysqli_errno());
        $trws= mysqli_num_rows($result);
        if($trws==1){
            $rws=  mysqli_fetch_array($result);
           if($rws['role'] == "Teacher"){
            $_SESSION['username']=$rws['username'];
            $_SESSION['password']=$rws['password'];
			$_SESSION['fname']=$rws['fname'];
            header("location:faculty_login.php");
			exit();
			}
			elseif($rws['role'] == "Hod"){
			$_SESSION['username']=$rws['username'];
            $_SESSION['password']=$rws['password'];
			$_SESSION['fname']=$rws['fname'];
            header("location:login_head.php");
			exit();
			
			}
		}
        else {
            $msg= 'user name and password not found';
            $errflag = true;
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
  <title>Department of Information Technology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <meta name="description" content="Government College of Engineering Aurangabad, Department of Information Technology was started in 2000-01.
Provides UG programme in Information Technology with intake capacity of 60.">
  <meta name="keywords" content="IT department ,GECA, Aurangabad, Government College of Engineering Aurangabad ,IT GECA,itsa,Maharashtra Engineering,IT Engineering,BAMU,BATU,IT">
  <link rel="stylesheet" href="theme.css">
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
  <nav class="navbar navbar-expand-md navbar-dark text-center bg-primary sticky-top p-0 my-2 text-uppercase">
    <div class="container">
      <div class="text-white d-flex flex-row m-0 p-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="about.html">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown"> Academics </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="course.html">Courses</a>
                <a class="dropdown-item" href="curriculam.html">Curriculam</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-white dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">People</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="faculty.html">Faculty</a>
                <a class="dropdown-item" href="student.html">Student</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="placement.html">Placement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="research.html">Research</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <div class="p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card text-white  bg-primary">
            <div class="card-body">
              <h6 class="mb-1"><b>Login</b></h6>
              <form action="" method="post">
                <div class="form-group">
                  <label style="color: #3a28a5; text-align: center;">
                  <?php
                  echo $msg;
                  ?>
                          </label>
                  <label>Username</label>
                  <input type="text" class="form-control" required="" autofocus="" name="username" placeholder="Enter Username"> </div>
                <div class="form-group"> <label>Password</label>
                  <input type="password" class="form-control" required="" autofocus="" name="password" placeholder="Password"> </div>
                <button type="submit" name="login_button" class="btn btn-secondary">Login</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="text-success">About Department</h4>
              <p class="p"> Information Technology Discipline was started in 2000-01 in the Government Engineering College, Aurangabad.&nbsp;
                <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Department of Information Technology got established from academic year 2002-03. Starting aim was to implement the UG programme in Information Technology
                with intake capacity of 60.&nbsp;
                <br>Goals in the nearest future: - Establishing the department as individual independent entity - Setting up of modernized laboratories - Development of departmental library - Enhancing testing facilities - Strengthening industry institute
                relations through interaction - Motivating the faculty for higher education.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-header text-danger">Letest at @ IT</div>
            <div class="card-body">
              <h6 class="text-muted">Coming Soon..</h6>
              <p class="p-y-5">Under Construction...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a href="#" class="active nav-link">Quick Links</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Vision &amp; Mission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="courses.html">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="curriculam.html">Syllabus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faculty.html">Faculty
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="placement.html">Placement
                <br> </a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 Text-success">
          <div class="blockquote,h3">
            <p class="mb-0 h4 Text-success">News And Announcement</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="bg-dark text-white p-0">
    <div class="container">
      <div class="row">
        <div class=" col-md p-0 container">
          <h4 class="text p-0">Other Links</h4>
          <a href="http://www.geca.ac.in" target="_blank" class="text-white">GECA Home</a>
          <br>
          <a href="about.php" class="text-white">About</a>
          <br>
          <a href="http://www.nptel.com" class="text-white" target="_blank">NPTEL</a>
          <br>
          <a href="http://gate.iitg.ac.in" target="_blank" class="text-white">GATE</a>
        </div>
        <div class=" col-md-4 container">
          <h4 class="">Contact</h4>
          <ul>
            <a href="mailto:ingleanand4@gmail.com" class="text-white"><i class="fa mr-1 text-secondary fa-envelope-o"></i>itgeca@gmail.com</a>
            <br>
            <a href="#" class="text-white" target="_blank"><i class="fa d-inline mr-1 fa-map-marker text-secondary"></i>Dept of IT. GECA.</a> &nbsp;<span class="text-info text-center"></span> </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-center text-white">© Copyright 2018 &nbsp;Dept. of IT GECA, Aurangabad</p>
        </div>
      </div>
    </div>
  </div>
  
 
</body>

</html>
