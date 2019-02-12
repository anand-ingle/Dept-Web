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
        $sql="SELECT username,password FROM anand WHERE username='$username'AND password='$password'";
        $result=  mysqli_query($database,$sql);
        $trws= mysqli_num_rows($result);
        if($trws==1){
            $rws=  mysqli_fetch_array($result);
            $_SESSION['username']=$rws['username'];
            $_SESSION['password']=$rws['password'];
            header("location:faculty_login.php");
        }
        else {
            $msg= 'user name and password not found';
            $errflag = true;
        }
    }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>
      Department of Information Technology
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href=
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico"
    rel="stylesheet" type="text/css" />
    <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
    <meta name="description" content=
    "Government College of Engineering Aurangabad, Department of Information Technology was started in 2000-01. Provides UG programme in Information Technology with intake capacity of 60." />
    <meta name="keywords" content=
    "IT department ,GECA, Aurangabad, Government College of Engineering Aurangabad ,IT GECA,itsa,Maharashtra Engineering,IT Engineering,BAMU,BATU,IT" />
    <link rel="stylesheet" href="theme.css" type="text/css" />
    <link rel="icon" href="geca.png" />
  </head>
  <body class="">
    <div class="navbar bg-primary navbar-expand-md p-0">
      <a class="navbar-brand" href="#"><img src="geca.png" width=
      "120" height="120" class="d-inline-block align-top" alt=
      "" /></a> <a class="navbar text-primary h"><strong class=
      "text-white"><span style="font-weight:normal;"><strong class=
      "h2 text-uppercase">Department of Information
      Technology</strong></span><br />
      <span class=
      " text-light text-center text-uppercase"><strong class=
      "h">&nbsp;Government college of Engineering,
      Aurangabad</strong></span></strong></a>
    </div>
    <div class="container">
      <div class="text-white d-flex flex-row m-0 p-0">
        <div class="collapse navbar-collapse" id=
        "collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href=
              "about.html">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href=
              "#" id="navbardrop" data-toggle=
              "dropdown">Academics</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href=
                "course.html">Courses</a> <a class="dropdown-item"
                href="curriculam.html">Curriculam</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-white dropdown-toggle" href=
              "#" id="navbardrop" data-toggle="dropdown">People</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href=
                "faculty.html">Faculty</a> <a class="dropdown-item"
                href="student.html">Student</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href=
              "placement.html">Placement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href=
              "research.html">Research</a>
            </li>
          </ul>
        </div>
      </div>
    </div><script src=
    "https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity=
    "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous" type="text/javascript">
</script><script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity=
    "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous" type="text/javascript">
</script><script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity=
    "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous" type="text/javascript">
</script>
    <div class="p-1">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="card text-white bg-primary">
              <div class="card-body">
                <h6 class="mb-1">
                  <strong>Login</strong>
                </h6>
                <form action="" method="post">
                  <div class="form-group">
                    <label style=
                    "color: #3a28a5; text-align: center;"><?php
                                                          echo $msg;
                                                          ?></label>
                    <label>Username</label> <input type="text"
                    class="form-control" required="" autofocus=""
                    name="username" placeholder="Enter Username" />
                  </div>
                  <div class="form-group">
                    <label>Password</label> <input type="password"
                    class="form-control" required="" autofocus=""
                    name="password" placeholder="Password" />
                    <input value="+1" id="country_code" />
                <input placeholder="phone number" id="phone_number"/>
                <button onclick="smsLogin();">Login via SMS</button>
                <div>
                    
                  </div><button type="submit" name="login_button"
                  class="btn btn-secondary">Login</button>
                </form>
              </div>
            </div>
          </div>
          
<script>
  // initialize Account Kit with CSRF protection
  AccountKit_OnInteractive = function(){
    AccountKit.init(
      {
        appId:"{{176398716325060}}", 
        state:"{{}}", 
        version:"{{v1.1}}",
        fbAppEventsEnabled:true,
        redirect:"{{faculty_login.php}}"
      }
    );
  };

  // login callback
  function loginCallback(response) {
    if (response.status === "PARTIALLY_AUTHENTICATED") {
      var code = response.code;
      var csrf = response.state;
      // Send code to server to exchange for access token
    }
    else if (response.status === "NOT_AUTHENTICATED") {
      // handle authentication failure
    }
    else if (response.status === "BAD_PARAMS") {
      // handle bad parameters
    }
  }

  // phone form submission handler
  function smsLogin() {
    var countryCode = document.getElementById("country_code").value;
    var phoneNumber = document.getElementById("phone_number").value;
    AccountKit.login(
      'PHONE', 
      {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
      loginCallback
    );
  }</script>
          
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="text-success">
                  About Department
                </h4>
                <p class="p">
                  Information Technology Discipline was started in
                  2000-01 in the Government Engineering College,
                  Aurangabad.&nbsp;<br />
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Department of
                  Information Technology got established from
                  academic year 2002-03. Starting aim was to
                  implement the UG programme in Information
                  Technology with intake capacity of
                  60.&nbsp;<br />
                  Goals in the nearest future: - Establishing the
                  department as individual independent entity -
                  Setting up of modernized laboratories -
                  Development of departmental library - Enhancing
                  testing facilities - Strengthening industry
                  institute relations through interaction -
                  Motivating the faculty for higher education.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-header text-danger">
                Letest at @ IT
              </div>
              <div class="card-body">
                <h6 class="text-muted">
                  Coming Soon..
                </h6>
                <p class="p-y-5">
                  Under Construction...
                </p>
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
                <a class="nav-link" href="about.html">Vision &amp;
                Mission</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="courses.html">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=
                "curriculam.html">Syllabus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=
                "faculty.html">Faculty<br /></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=
                "placement.html">Placement<br /></a>
              </li>
            </ul>
          </div>
          <div class="col-md-6 Text-success">
            <div class="blockquote,h3">
              <p class="mb-0 h4 Text-success">
                News And Announcement
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-dark text-white m-1">
      <div class="container">
        <div class="row">
          <div class="p-1 col-md conatiner">
            <h2 class="mb-2 text">
              Other Links<br />
            </h2>
            <div style="margin-left: 2em" class="list container">
              <a href="http://www.geca.ac.in" target="_blank"
              class="text-white">GECA Home</a><br />
              <a href="about.php" class=
              "text-white">About</a><br />
              <a href="http://www.nptel.com" class="text-white"
              target="_blank">NPTEL</a><br />
              <a href="http://gate.iitg.ac.in" target="_blank"
              class="text-white">GATE</a>
            </div>
          </div>
          <div class="p-1 col-md-4 container">
            <h2 class="mb-">
              Contact
            </h2>
            <div class="col-md-12 container">
              <a href="https://www.facebook.com/" class=
              "text-white" target="_blank"></a> <a href=
              "https://twitter.com/" class="text-white" target=
              "_blank"></a> <a href="https://www.instagram.com/"
              class="text-white" target="_blank"></a>
            </div><br />
            <p class="">
              <a href="mailto:ingleanand4@gmail.com" class=
              "text-white">itgeca@gmail.com</a>
            </p>
            <p class="">
              <a href="#" class="text-white" target="_blank">Dept
              of IT. GECA.</a>
            </p>&nbsp; <span class=
            "text-info text-center"><em class="fa fa-edit">Site
            Designed By An@nd</em></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="text-center text-white">
              © Copyright 2018 &nbsp;Dept. of IT GECA, Aurangabad
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>