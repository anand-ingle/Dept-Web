<?php


$msg="";
require 'database.php';
$id=$_GET["courseid"];

$query=mysqli_query($database,"select * from itcourse where courseid='$id'") ;
while($row=mysqli_fetch_array($query)){


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
  </head>

<body class="">
          
          <form method="get"  action="gen.php">
                <p class="font-weight-bold text-center">
                          <?php echo $row['courseid']; ?>
                          <?php echo $row['coursename']; ?>
                      </p>
              
                  <table class="table table-bordered">
                        <td class="text-left"><strong>Teaching Scheme</strong>
                          <br>Lectures:
                          <?php echo $row['lectures'];?>
                          <br>Credits:
                          <?php echo $row['totalcredit'];?>
                          <br>Contact Hours:
                          <?php echo $row['contacthr'];?>
                        </td>
                          <td class="text-right"><strong>Examination Scheme</strong>
                          <br>Test1:
                          <?php echo $row['testmark1'];?>
                          <br>Test2:
                          <?php echo $row['testmark2'];?>
                          <br>Teachers Assessment:
                          <?php echo $row['teacherassess'];?>
                          <br>End Semester Exam:
                          <?php echo $row['endexam'];?>
                        </td>
                      </tr>
                  </table>
                
              

            <span class="font-weight-bold">Prerequistes:</span>
              <?php echo $row['prerequ'];?>
<br>
<br>
            <span class="font-weight-bold"><b>Course Description:</b></span>
              <p><?php echo $row['coursedesc'];?></p>

            <p class="font-weight-bold"><b>Course Objectives:  </p>
              </b>
              <?php echo $row['courseobj'];?>

            <p class="font-weight-bold"><b>Course Outcome:</p>
              </b>
              <?php echo $row['courseoutcome'];?>

            <p class="font-weight-bold"><b>Detailed Syllabus</b></p>
            <form class="border border-dark form-control">
              <p class="font-weight-bold"><b>Unit 1 :</p>
              </b>
                <?php echo $row['unit1'];?>
<br>
              <p class=" font-weight-bold"><b>Unit 2 :</p>
              </b>
                <?php echo $row['unit2'];?>
                <br>
              <p class="font-weight-bold"><b>Unit 3 :</p>
              </b>
                <?php echo $row['unit3'];?>
<br>
              <p class="font-weight-bold"><b>Unit 4 :</p>
              </b>
                <?php echo $row['unit4'];?>
<br>
              <p class="font-weight-bold"><b>Unit 5 :</p>
              </b>
                <?php echo $row['unit5'];?>

</form>
<br>
            <p class="font-weight-bold"><b>Text Books:</p>
              </b>
              <?php echo $row['textbook'];?>
<br>
            <p class="font-weight-bold"><b>Reference Books:</p>
              </b>
              <?php echo $row['ref-book'];?>

            <?php

          }
          ?>
<a class="btn btn-primary" href="gen.php"></a>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
         


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <div class="p-1">
            <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:180px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo&nbsp;&nbsp;
              <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
            </pingendo>
          </div>
        </div>
      </div>

    </div>

</body>

</html>
