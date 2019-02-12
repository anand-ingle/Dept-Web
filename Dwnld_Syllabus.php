<?php


$msg="";
require 'database.php';
$id=$_GET['id'];
$query=mysqli_query($database,"select * from itcourse where id='$id'") ;
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
  <style>
  body{
  text-align: justify;
    text-justify:auto;
  }
  </style>
  </head>

<body>
          
          <form method="get" >
          <p class="text-center"><strong>
			<?php echo $row['courseid']; ?>
                          <?php echo $row['coursename']; ?> 
</strong>
</p>
              <div class="row">
   
                  <table class="table table-bordered">
                
                    <tbody>
                      <tr>
                        <td class=""><strong>Teaching Scheme</strong>
                          <br>Lectures:
                          <?php echo $row['lectures'];?>
                          <br>Credits:
                          <?php echo $row['totalcredit'];?>
                          <br>Contact Hours:
                          <?php echo $row['contacthr'];?>
                        </td>
                        <td class=""><strong>Examination Scheme</strong>
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
    
                    </tbody>
                  </table>
                </div>             

            <span class="font-weight-bold">Prerequistes:</span>
              <?php echo $row['prerequ'];?>
              <br>
            <span class="font-weight-bold"><b>Course Description:</b></span>
              <p><?php echo $row['coursedesc'];?></p>

            <p class="font-weight-bold"><b>Course Objectives:</b>  </p>
              
              <?php echo $row['courseobj'];?>

            <p class="font-weight-bold"><b>Course Outcome: </b></p>
             
              <?php 
              $wordChunks = explode(")",  $row['courseoutcome']);
              for($i = 0; $i < count($wordChunks); $i++){
                echo "$wordChunks[$i]"; }
        ?>

            <p class="font-weight-bold"><b>Detailed Syllabus</b></p>
            <form class="border border-dark form-control">
              <p><b>Unit 1 :
              </b>
              <br>
                <?php echo $row['unit1'];?>
              <p><b>Unit 2 :
              </b>
              <br>
                <?php echo $row['unit2'];?>
                <br></p>
              <p><b>Unit 3 :
              </b>
              <br>
                <?php echo $row['unit3'];?></p>
              <p><b>Unit 4 :
              </b><br>
                <?php echo $row['unit4'];?></p>
              <p><b>Unit 5 :
              </b><br>
                <?php echo $row['unit5'];?></p>

</form>
<br>
            <p ><b>Text Books:
              </b><br>
              <?php echo $row['textbook']."\n";?></p>
<br>
            <p ><b>Reference Books:
              </b><br>
              
              <?php
                $wordChunks1 = explode("&",  $row['ref-book']);
                for($i = 0; $i < count($wordChunks1); $i++){
                echo "$wordChunks1[$i]";
                }

                ?>
</p>

            <?php

          }
          ?>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
         


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
     
  

</body>

</html>
