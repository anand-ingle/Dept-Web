<?php

include 'session-check-profile.php';
$msg="";
require 'database.php';

if(isset($_POST['click_submit'])){
  $coursecode = $_POST['coursecode'];
  $coursename = $_POST['coursename'];
  $year=$_POST['selectyr'];
  $sem=$_POST['sem'];
  $branch=$_POST['branch'];
  $lectures = $_POST['lectures'];
  $tutorials=$_POST['tutorials'];
  $totalcredit=$_POST['totalcredit'];
  $testmark1=$_POST['testmark1'];
  $testmark2 = $_POST['testmark2'];
  $teacherassess = $_POST['teacherassess'];
  $endexam = $_POST['endexam'];
  $prerequ=$_POST['prereq'];
  $contacthr=$_POST['contacthr'];
  $coursedesc=$_POST['coursedesc'];
  $courseobj=$_POST['courseobj'];
  $courseoutcome = $_POST['courseoutcome'];
  $unit1 = $_POST['unit1'];
  $unit2 = $_POST['unit2'];
  $unit3=$_POST['unit3'];
  $unit4=$_POST['unit4'];
  $unit5=$_POST['unit5'];
  $textbook=$_POST['textbooks'];
  $refbook=$_POST['refbooks'];
  $useris=$_SESSION['username'];

$sql=mysqli_query( $database,"INSERT INTO itcourse
VALUES(
DEFAULT,
'$coursecode',
'$coursename',
'$year',
'$sem',
'$branch',
'$lectures',
'$tutorials',
'$totalcredit',
'$testmark1',
'$testmark2',
'$teacherassess',
'$endexam',
'$contacthr',
'$prerequ',
'$coursedesc',
'$courseobj',
'$courseoutcome',
'$unit1',
'$unit3',
'$unit2',
'$unit4',
'$unit5',
'$textbook',
'$refbook',
'$useris'
  )
");

if( $sql )
echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
else
echo "<script type='text/javascript'>alert('failed!')</script>";


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
  <link rel="stylesheet" href="theme.css" type="text/css">
  <meta name="description" content="Government College of Engineering Aurangabad, Department of Information Technology was started in 2000-01.
Provides UG programme in Information Technology with intake capacity of 60.">
  <meta name="keywords" content="IT department ,GECA, Aurangabad, Government College of Engineering Aurangabad ,IT GECA,itsa,Maharashtra Engineering,IT Engineering,BAMU,BATU,IT">
  <link rel="icon" href="geca.png">

</head>

<body>
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
    </div>
    <b class="text-white"><b class="w-30">
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

        <div class="col-md- col-md-10">
          <h1 class="display">
            <br>Syllabus Designer</h1>
          <form class="form form-control" id="resumeform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            <div class="row">
          
                    <div class="col-sm-4 form-group col-md-3"> <label>Year</label>
                

                        <select class="selectyr form-control" name="selectyr">
                         <option value="first">First Year</option>
                         <option value="second">Second Year</option>
                          <option value="third">Third Year</option>
                          <option value="fourth">Final Year</option>
                        </select>
                       </div>

                

              <div class="col-sm-4 form-group col-md-3"> <label>Semester</label>
              <select class="sem form-control" name="sem">
                  <option value="1" >I</option>
                  <option value="2">II</option>
                  <option value="3">III</option>
                  <option value="4">IV</option>
                  <option value="5">V</option>
                  <option value="6">VI</option>
                  <option value="7">VII</option>
                  <option value="8">VIII</option>
                </select>
                </div>
            
                <div class="form-group col-md-5 "> <label>Branch</label>
              <select class="branch form-control" name="branch">
                  <option value="IT">Information Technology</option>
                </select>
                </div>
              
              <div class="col-sm-6 form-group col-md-4"> <label>Course code</label>
                <input type="text" placeholder="Enter Here.." class="form-control" name="coursecode" required> </div>
              <div class="col-sm-6 form-group col-md-4"> <label>Course Name</label>
                <input type="text" class="form-control" placeholder="Enter Here.." name="coursename" required> </div>
              </div>
            <label>Teaching Scheme</label>
            <div class="row">
              <div class="col-sm-6 form-group col-md-4"> <label>Lectures</label>
                <input type="text" placeholder="Enter Here.." class="form-control" name="lectures" required> </div>
              <div class="col-sm-6 form-group col-md-4"> <label>Tutorials</label>
                <input type="text" placeholder="Enter Here.." class="form-control" name="tutorials" required> </div>
              <div class="col-sm-6 form-group col-md-4"> <label>Total Credits</label>
                <input type="text" placeholder="Enter credits Here.." class="form-control" name="totalcredit" required> </div>
            </div>
            <label>Evaluation Scheme </label>
            <div class="row">
              <div class="col-sm-6 form-group col-md-2"> <label>Test 1</label>
                <input type="text" placeholder="Enter Marks Here.." class="form-control" name="testmark1" required> </div>
              <div class="col-sm-6 form-group col-md-2"> <label>Test 2</label>
                <input type="text" placeholder="Enter Marks Here.." class="form-control" name="testmark2" required> </div>
              <div class="col-sm-6 form-group col-md-4"> <label>Teacher Assesment</label>
                <input type="text" placeholder="Enter Marks Here.." class="form-control" name="teacherassess" required> </div>
              <div class="col-sm-6 form-group col-md-4"> <label>End-Semester Examination</label>
                <input type="text" class="form-control" placeholder="Enter Marks Here.." name="endexam" required> </div>
            </div>
            <div class="col-sm-5"> <label>Contact Hours for this Subject is</label>
              <input type="text" class="form-control" placeholder="Enter hours Here.." name="contacthr" required> </div>
            <div class="form-group"> <label>Course Prerequisites</label> <textarea placeholder="Enter Here.." rows="3" class="form-control" name="prereq" required></textarea> </div>
            <div class="form-group"> <label>Course Description</label> <textarea placeholder="Enter Here.." rows="3" name="coursedesc" class="form-control" required></textarea> </div>
            <div class="form-group"> <label>Course Objectives</label> <textarea placeholder="Enter Here.." rows="3" class="form-control " name="courseobj" required></textarea> </div>
            <div class="form-group"> <label>Course Outcomes</label> <textarea placeholder="Enter Here.." rows="3" class="form-control" name="courseoutcome" required></textarea> </div>
            <div class="form-group"> <label>Unit 1</label> <textarea placeholder="Enter Here.." rows="3" class="form-control" name="unit1" required></textarea> </div>
            <div class="form-group"> <label>Unit 2</label> <textarea placeholder="Enter Here.." rows="3" class="form-control" name="unit2" required></textarea> </div>
            <div class="form-group"> <label>Unit 3</label> <textarea placeholder="Enter Here.." rows="3" class="form-control" name="unit3" required></textarea> </div>
            <div class="form-group"> <label>Unit 4</label> <textarea placeholder="Enter Here.." rows="3" class="form-control" name="unit4" required></textarea> </div>
            <div class="form-group"> <label>Unit 5</label> <textarea placeholder="Enter Here.." rows="3" class="form-control" name="unit5" required></textarea> </div>
            <div class="form-group"> <label>Text Books</label> <textarea placeholder="Enter Here.." rows="3" class="form-control" name="textbooks" required></textarea> </div>
            <div class="form-group"> <label>Reference Books</label> <textarea placeholder="Enter Here.." rows="3" class="form-control" name="refbooks" required></textarea> </div>
            
            <div class="row">
              <button type="submit" class="form-group form-control btn-primary col-md-4" name="click_submit">Submit</button>
              <button type="submit" class="form-group form-control btn-secondary col-md-4" name="click_update">Update</button>
              <button type="submit" class="form-group form-control btn-danger col-md-4" name="click-cancel">Cancel</button>
            </div>
        
              
</form>
</div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>
