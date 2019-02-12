<?php include 'session-check-profile.php';

require 'database.php';

$username=$_SESSION['username'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" /> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
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
          </ul>
        </div>
        <div class="col-md-9 card-body card">
          <h3 contenteditable="true" class="text-primary">Profile</h3>
          <div class="row container">
          <div class="col-md-8">
          <div class="row">
            <br>
            <?php
             $query= "select * from user WHERE username='$username'";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
           <div class="col-md-3">
              <label>Name :</label></div><div class="col-md-4"> <?php echo $row['fname'] . " " . $row['mname'] . " " . $row['lname'] ?></div>
            
            <div class="col-md-7"></div>
          </div>
          <div class="row">
            <br>
            <div class="col-md-3">
              <label>Email :</label>
            </div>
            <div class="col-md-7"><?php echo $row['email']?> </div>
          </div>
          <div class="row">
            <br>
            <div class="col-md-3">
              <label>Mobile Number :</label>
            </div>
            <div class="col-md-7"><?php echo $row['mobileno1']?></div>
          </div>
          <div class="row">
            <br>
            <div class="col-md-3">
              <label>Birthdate :</label>
            </div>
            <div class="col-md-7"><?php echo $row['bday']?></div>
          </div>
          <div class="row">
            <br>
            <div class="col-md-3">
              <label>Gender :</label>
            </div>
            <div class="col-md-7"><?php echo $row['gender']?></div>
          </div>
        </div>
        <div class="col-md-3 card">
          <?php
         echo '<img  class="card-img-top" height="180px" alt="Profile Pic" width="120px" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';?>
          Profile Picture :
          </div> 
          <div class="col-md-8">
           <div class="row">
            <br>
            <div class="col-md-3">
              <label>Address :</label>
            </div>
            <div class="col-md-6"><?php echo $row['address']?></div>
        </div>
      
          <div class="row">
            <br>
            <div class="col-md-3">
              <label>Summary :</label>
            </div>
          
            <div class="col-md-6"><?php echo $row['summery']?></div></div>
          </div>
            <div class="container">
              <div class="">
                <h3 class="m-1 py-3"> Educational Qualification: </h3>
              </div>
              <div class="row container">
                <div id="education_table">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th>Sr.No</th>
                        <th width="10%">Year</th>
                        <th width="20%">Course</th>
                        <th width="20%">Board</th>
                        <th width="10%">Mark</th>
                        <th width="10%">Division</th>
                      </tr>
                      <?php
			$sno = 1;
    $query= "select * from education WHERE username='$username' ORDER BY edu_id DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
                      <tr>
                        <td>
                          <?php echo $sno++; ?>
                        </td>
                        <td>
                          <?php echo $row['year']?>
                        </td>
                        <td>
                          <?php echo $row['course']?>
                        </td>
                        <td>
                          <?php echo $row['board']?>
                        </td>
                        <td>
                          <?php echo $row['mark']?>
                        </td>
                        <td>
                          <?php echo $row['division']?>
                        </td>
                      </tr>
                      <?php
      }
}
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <h3> Publications And Conference :</h3>
          </div>
            <div id="intjppr_table">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th>Sr.No</th>
                    <th width="20%">Type</th>
                    <th width="20%">Title</th>
                    <th width="20%">Publisher</th>
                    <th width="20%">Date</th>
                     <!--<th width="40%">Details</th> -->
                  </tr>
                </tbody>
                  <?php
			$sno = 1;
    $query= "select * from publications WHERE username='$username' ORDER BY p_id DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
                  <tr>
                    <td>
                      <?php echo $sno++; ?>
                    </td>
                    <td>
                      <?php echo $row['p_type']?>
                    </td>
                    <td>
                      <?php echo $row['p_title']?>
                    </td>
                    <td>
                      <?php echo $row['pub_name']?>
                    </td>
                    <td>
                      <?php echo $row['p_date']?>
                    </td>
                  </tr>
                  <?php
      }

                      ?>
                </tbody>
              </table>
            </div>
            <div>
              <div class="">
                <h3 contenteditable="true">Experience : </h3>
              </div>
              <div class="">
                <div id="intjppr_table">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th>Sr.No</th>
                        <th width="20%">Type</th>
                        <th width="20%">Name</th>
                        <th width="20%">Designation</th>
                        <th width="20%">Duration</th>
                        <th width="40%">Details</th> 
                      </tr>
                      <?php
			$sno = 1;
    $query= "select * from tpwork WHERE username='$username' ORDER BY wid DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
                      <tr>
                        <td>
                          <?php echo $sno++; ?>
                        </td>
                        <td>
                          <?php echo $row['w_type']?>
                        </td>
                        <td>
                          <?php echo $row['w_name']?>
                        </td>
                        <td>
                          <?php echo $row['w_desi']?>
                        </td>
                        <td>
                          <?php echo $row['w_dura']?>
                        </td>
                        <td>
                          <?php echo $row['w_details']?>
                        </td>
                      </tr>
                      <?php
      }

                      ?>
                    </tbody>
                  </table>
                </div>
                <div> </div>
              </div>
            </div>
          
          <div class="">
            <h2>Short Term Training Programmes Participated: </h2>
          </div>
          <div class="">
            <div id="intjppr_table">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th>Sr.No</th>
                    <th width="20%">Academic Year</th>
                    <th width="20%">Course name</th>
                    <th width="20%">From</th>
                    <th width="20%">TO</th>
                    <th width="20%">Organising Institute/Agency</th>
                    <th width="40%">Details</th>
                  </tr>
                  <?php
			$sno = 1;
    $query= "select * from shorttrain WHERE username='$username' ORDER BY sh_id DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
                  <tr>
                    <td>
                      <?php echo $sno++; ?>
                    </td>
                    <td>
                      <?php echo $row['sh_year']?>
                    </td>
                    <td>
                      <?php echo $row['sh_name']?>
                    </td>
                    <td>
                      <?php echo $row['sh_from']?>
                    </td>
                    <td>
                      <?php echo $row['sh_to']?>
                    </td>
                    <td>
                      <?php echo $row['sh_org']?>
                    </td>
                    <td>
                      <?php echo $row['sh_details']?>
                    </td>
                  </tr>
                  <?php
      }

                      ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <input type="submit" class="form-control btn-primary col-sm-3" value="Update">
            <input type="submit" class="form-control btn-danger col-sm-3" value="Print"> </div>
        </div>
        
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  </div>
</body>

</html>