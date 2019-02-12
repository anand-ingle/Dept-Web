<?php
include 'session-check-profile.php';
$msg="";
require 'database.php';
if(isset($_POST['click_submit'])){
$title=$_POST['titlee'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$postalcode=$_POST['postalcode'];
$city=$_POST['city'];
$state=$_POST['state'];
$religion=$_POST['religion'];
$caste=$_POST['caste'];
$bday=$_POST['bday'];
$pan=$_POST['pan'];
$stdcode=$_POST['stdcode'];
$landline=$_POST['landline'];
$teachermo=$_POST['teachermo'];
$teacheremail=$_POST['teacheremail'];
$faxno=$_POST['faxno'];
$designation=$_POST['designation'];
$appftpt=$_POST['appftpt'];
$grosspay=$_POST['grosspay'];
$appotype=$_POST['appotype'];
$facultytype=$_POST['facultytype'];
$payscale=$_POST['payscale'];
$programme=$_POST['programme'];
$course=$_POST['course'];
$salarymod=$_POST['salarymod'];
$pfnumber=$_POST['pfnumber'];
$dateofjoining=$_POST['dateofjoining'];
$doctoratedegree=$_POST['doctoratedegree'];
$pgdegree=$_POST['pgdegree'];
$ugdegree=$_POST['ugdegree'];
$otherqualification=$_POST['otherqualification'];
$areaofspecial=$_POST['areaofspecial'];
$teachingexp=$_POST['teachingexp'];
$totalworkexp=$_POST['totalworkexp'];
$researchexp=$_POST['researchexp'];
$bankaccnumber=$_POST['bankaccnumber'];
$bankname=$_POST['bankname'];
$bankbranchname=$_POST['bankbranchname'];
$ifsccode=$_POST['ifsccode'];
$nationalpublication=$_POST['nationalpublication'];
$patents=$_POST['patents'];
$nopgguided=$_POST['nopgguided'];
$nofdoctguided=$_POST['nofdoctguided '];
$internpublications=$_POST['internpublications'];
$ishandicapped=$_POST['ishandicapped'];
$minorityindicator=$_POST['minorityindicator'];
$firstyrteacher=$_POST['firstyrteacher'];
$fycommon=$_POST['fycommon'];
$fycomsubject=$_POST['fycomsubject'];
$workexpert=$_POST['workexpert'];
$appliedgrants=$_POST['appliedgrants'];
$basicpay=$_POST['basicpay'];
$da=$_POST['da'];
$hra=$_POST['hra'];
$otherallo=$_POST['otherallo'];
$facultyshift=$_POST['facultyshift'];
$district=$_POST['district'];
$aadharuid=$_POST['aadharuid'];
$enrid=$_POST['enrid'];
$alteremail=$_POST['alteremail'];
$appbygovt=$_POST['appbygovt'];
$appbyuniversity=$_POST['appbyuniversity'];
$anyotherexp=$_POST['anyotherexp'];
$totalexp=$_POST['totalexp'];
$noofnatconf=$_POST['noofnatconf'];
$nuofinterconf=$_POST['nuofinterconf'];

$sql=mysqli_query( $database, "INSERT INTO aicte
VALUES(
'NULL',
'$title',
'$firstname',
'$middlename',
'$lastname',
'$gender',
'$fathername',
'$mothername',
'$add1',
'$add2',
'$postalcode',
'$city',
'$state',
'$religion',
'$caste',
'$bday',
'$pan',
'$stdcode',
'$landline',
'$teachermo',
'$teacheremail',
'$faxno',
'$designation',
'$appftpt',
'$grosspay',
'$appotype',
'$facultytype',
'$payscale',
'$programme',
'$course',
'$salarymod',
'$pfnumber',
'$dateofjoining',
'$doctoratedegree',
'$pgdegree',
'$ugdegree',
'$otherqualification',
'$areaofspecial',
'$teachingexp',
'$totalworkexp',
'$researchexp',
'$bankaccnumber',
'$bankname',
'$bankbranchname',
'$ifsccode',
'$nationalpublication',
'$patents',
'$nopgguided',
'$nofdoctguided',
'$internpublications',
'$ishandicapped',
'$minorityindicator',
'$firstyrteacher',
'$fycommon',
'$fycomsubject',
'$workexpert',
'$appliedgrants',
'$basicpay',
'$da',
'$hra',
'$otherallo',
'$facultyshift',
'$district',
'$aadharuid',
'$enrid',
'$alteremail',
'$appbygovt',
'$appbyuniversity',
'$anyotherexp',
'$totalexp',
'$noofnatconf',
'$nuofinterconf'
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" integrity="sha256-I/m6FhcACNYmRoqn1xUnizh6S7jOJsTq+aiJ6BtE2LE=" crossorigin="anonymous" />
  <meta name="description" content="Government College of Engineering Aurangabad, Department of Information Technology was started in 2000-01.
Provides UG programme in Information Technology with intake capacity of 60.">
  <meta name="keywords" content="IT department ,GECA, Aurangabad, Government College of Engineering Aurangabad ,IT GECA,itsa,Maharashtra Engineering,IT Engineering,BAMU,BATU,IT">
  <link rel="icon" href="geca.png">
  <style>
   hr.style1{
	border-top: 1px solid #8c8b8b;
}
  </style>
<link href="css/datepicker.css" type="text/css" rel="stylesheet">
    <script src="js/datepicker.css"></script>
</head>
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
  <div class="py-4 text-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
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
          </ul>          </div>

        <div class="col-md-9">
          <div class="text-center h2"> <label>AICTE FORM</label></div>
          <form method="post" class="form form-control border text-dark"> Title
        <select class="select form-control col-md-3" name="titlee">
			<option value="MR.">MR.</option>
			<option value="MRS.">MRS</option>
			<option value="MS.">MS</option>

			</select>
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6 form-group col-md-4"> <label>First Name</label>
                  <input type="text" name="firstname" placeholder="Enter First Name Here.." class="form-control"> </div>
                <div class="col-sm-6 form-group col-md-4"> <label>Middle Name</label>
                  <input type="text" name="middlename" class="form-control" placeholder="Enter Middle Name Here.."> </div>
                <div class="col-sm-6 form-group col-md-4"> <label>Last Name</label>
                  <input type="text" name="lastname" placeholder="Enter Last Name Here.." class="form-control"> </div>
              </div> <label>Gender:</label>
            
                <div class=" row form-group">
                    <select class="form-control col-md-4" name="gender">
                        <option value="Male">MALE</option>
                        <option value="Female">FEMALE</option>
                    </select>
                  
                        </div>
              <div class="row">
                <div class="col-md-5 form-group"> <label>Father's Name:</label>
                  <input type="text" class="form-control " placeholder="Enter Father's name" name="fathername"> </div>
                <div class="col-md-5 form-group "> <label> Mother's Name:</label>
                  <input type="text" class="form-control  " placeholder="Enter Mother's name" name="mothername"> </div>
              </div>
            </div>
            <hr class="style1">
            <div clas="form-group "> <label class="font-weight-bold">Address</label>
              <div class="">
                <div class="form-group"> <label>Address Line 1:</label>
                  <input type="text" class="form-control" name="add1" placeholder="Enter Here.."> </div>
                <div class="form-group"> <label>Address Line 2:</label>
                  <input type="text" class="form-control" name="add2" placeholder="Enter Here.."> </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">Postal Code:
                  <input type="text" class="form-control" name="postalcode" placeholder="Enter Here.."> </div>
                <div class="form-group col-md-4"> <label>City/Village:</label>
                  <input type="text" class="form-control" name="city" placeholder="Enter Here.."> </div>
                <div class="form-group col-md-4 "> <label>State:</label>
                  <input type="text" class="form-control" name="state" placeholder="Enter Here.."> </div>
              </div>
              <hr class="style1">
              <div class="row">
                <div class="form-group col-md-4"> <label class="">Religion:</label>
                  <input type="text" class="form-control " name="religion" placeholder="Enter Here.."> </div>
                <div class="form-group col-md-4"> <label> Caste:</label>
                  <input type="text" class="form-control" name="caste" placeholder="Enter Here.."> </div>
              </div>
              <br> </div>
            <div class="teacher_bday row form-group col-md-12"> <label>Birthday:</label>
              <input type="text" class="form-control" name="bday" data-provide="datepicker">
               
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
              </div>
            <div class="form-group row col-md-12"> <label>PAN NO.:</label>
              <input type="text" class="form-control" name="pan" placeholder="Enter PAN Number Here.."> </div>
            <div class=" row">
              <div class="form-group col-md-4"> <label>STD CODE:</label>
                <input type="text" class="form-control" name="stdcode" placeholder="Enter STD code here.."> </div>
              <div class="form-group col-md-6"> <label>Landline:</label>
                <input type="text" name="landline" class="form-control " placeholder="Enter Her.."> </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group col-md-4"> <label>Mobile Number:</label>
                <input type="text" placeholder="Enter Mobile number " class="form-control" name="teachermo"> </div>
              <div class="col-sm-6 form-group col-md-4"> <label>Email ID:</label>
                <input type="text" placeholder="Enter Email Here.." class="form-control" name="teacheremail"> </div>
              <div class="col-sm-6 form-group col-md-4"> <label>Fax No.:</label>
                <input type="text" placeholder="Enter Fax number" name="faxno" class="form-control"> </div>
            </div>
              <hr class="style1">

            <div class="row">
              <div class="form-group col-md-7"> <label>Exact Designation:</label> <select class="form-control " name="designation">
              <option value="Lecturer">Lecturer</option>
              <option value="Lecturer(Sr Scale)">Lecturer(Sr Scale)</option>
              <option value="Asst Professor">Asst Professor</option>
              <option value="Associate Professor">Associate Professor</option>
              <option value="Professor">Professor</option>
              <option value="Workshop Supdt">Workshop Supdt</option>
              <option value="Training &amp; Placement Officer">Training &amp; Placement Officer</option>
              <option value="Head Of Dept">Head Of Dept</option>
              <option value="Lecturer(Sel GR)">Lecturer(Sel GR)</option>
              <option value="Director">Director</option>
              <option value="Principal">Principal</option>
              <option value="Instructor">Instructor</option>
            </select> </div>
              <div class="form-group col-md-5"> <label> Appointment FT/PT:</label> <select class="form-control" name="appftpt">
              <option value="Full Time">Full Time</option>
              <option value="Part Time">Part Time</option></select></div>
            </div>
            <br>
            <div class="row">
              <div class="form-group col-md-4"> <label>Gross Pay per Month:</label>
                <input type="text" class="form-control" placeholder="Enter Gross Pay Here..." name="grosspay"> </div>
              <div class="form-group col-md-4"> Appointment Type: <select class="form-control" name="appotype">
              <option value="Adjunct">Adjunct</option>
              <option value="Regular">Regular</option>
                   <option value="Adhoc">Adhoc</option>
                   <option value="Visiting">Visiting</option>

                </select></div>
              <div class="form-group col-md-4"> Faculty Type :<select class="form-control" name="facultytype">
              <option value="UG">UG</option>
              <option value="PG">PG</option>
                   <option value="Diploma">DIPLOMA</option>
             </select></div>
              <div class="form-group col-md-3"> Pay Scale: <select class="form-control" name="payscale">
              <option value="Vth">Vth Pay Scale</option>
              <option value="VIth">VIth Pay Scale</option>
                   <option value="VIIth">VIIth Pay Scale</option>
                   <option value="Consolidated">Consolidated</option>

                </select></div>
              <div class="form-group col-md-5"> Programme: <select class="form-control" name="programme">
              <option value="Engineering">Engineering And Technology</option>
            <option value="MCA">MCA</option>
              <!--<option value="Architecture">Architecture And Town Planning</option>
                   <option value="Hotel Management">Hotel Management</option>
										<option value="Pharmacy">Pharmacy</option>
										<option value="Applied Arts">Applied Arts and Craft</option>
                   <option value="management">Management</option>-->

            </select></div>
              <div class="form-group col-md-4"> Course: <select class="form-control" name="course">
              <option value="IT">Information Technology</option>
              </select> </div>
            </div>
            <br>
              <hr class="style1">
            <div class="row">
              <div class="form-group col-md-5">Salary Mode: <select class="form-control" name="salarymod">
              <option value="Cheque">Cheque</option>
             <option value="Cash">Cash</option>
                <option value="Credit to Bank Account">Credit to Bank Account</option>
                </select> </div>
              <div class="form-group col-md-5"> <label> PF Number:</label>
                <input type="text" class="form-control" name="pfnumber" placeholder="Enter PF Number Here..."> </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4"> <label> Date of Joining:</label>
                <input type="text" class="form-control" data-provide="datepicker" name="dateofjoining" placeholder="01/02/2000"> </div>
              <div class="form-group col-md-7"> <label>Doctorate Degree:</label> <select class="form-control" name="doctoratedegree">
              <option value="YES">YES</option>
              <option value="NO">NO</option>
              </select></div>
              <div class="form-group col-md-4"> <label> PG Degree:</label>
                <input type="text" class="form-control" name="pgdegree" placeholder="Example ME/MTECH.."> </div>
              <div class="form-group col-md-4"> <label> UG Degree:</label>
                <input type="text" class="form-control" name="ugdegree" placeholder="Example BE/BTECH.."> </div>
              <div class="form-group col-md-4"> <label> Other Qualification's:</label>
                <input type="text" class="form-control" name="otherqualification" placeholder="Example LLB.."> </div>
              <br>
              <div class="form-group col-md-12"><label> Area of Specialization:</label>
                <input type="text" class="form-control" name="areaofspecial" placeholder="Example CSE..."> </div>
              <br>
              <div class="form-group col-md-4"> <label>Teaching Experience in Years:</label>
                <input type="text" name="teachingexp" class="form-control" placeholder="Enter Here.."> </div>
              <br>
              <div class="form-group "> <label> Total Work Experience in Years:</label>
                <input type="text" name="totalworkexp" class="form-control" placeholder="Enter Here.."> </div>
              <br>
              <div class="form-group col-md-4"> <label> Research Experience in Years:</label>
                <input type="text" name="researchexp" class="form-control" placeholder="Enter Here.."> </div>
              <br> </div>
                            <hr class="style1">

            <div class="row ">
              <div class="form-group col-md-6"> <label class="font-weight-bold">Bank Account Number:</label>
                <input type="text" name="bankaccnumber" class="form-control" placeholder="Enter Account Number Here.."> </div>
              <br>
              <div class="form-group col-md-6"> <label>Bank Name:</label>
                <input type="text" name="bankname" class="form-control" placeholder="Enter Bank Name Here..Ex.SBI"> </div>
              <br>
              <div class="form-group col-md-6"> <label>Bank Branch Name:</label>
                <input type="text" name="bankbranchname" class="form-control" placeholder="Enter Branch Name Here.."> </div>
              <br>
              <div class="form-group col-md-6"> <label>IFSC Code:</label>
                <input type="text" name="ifsccode" class="form-control" placeholder="Enter IFSC Code Here..."> </div>
            </div>
            <hr class="style1">
            <div class="row">
              <br>
              <div class="form-group col-md-6"> <label>National Publications:</label>
                <input type="text" name="nationalpublication" class="form-control" placeholder="Enter Number Of Publications"> </div>
              <br>
              <div class="form-group col-md-6"> <label> Patents:</label>
                <input type="text" name="patents" class="form-control" placeholder="Enter Number Of Petents.."> </div>
              <br>
              <div class="form-group col-md-6"> <label>No.of PG Projects Guided:</label>
                <input type="text" name="nopgguided" class="form-control" placeholder="Enter Here.."> </div>
              <br>
              <div class="form-group col-md-6"> <label>No. of Doctorate Students Guided:</label>
                <input type="text" name="nofdoctguided " class="form-control" placeholder="Enter Here..."> </div>
              <br>
              <div class="form-group col-md-12"> <label> International Publications:</label>
                <input type="text" name="internpublications" class="form-control" placeholder="Enter Number Of Publications"> </div>
              <br>
              </div>
         <hr class="style1">
              <div class="row">
              <div class="form-group col-md-6"> <label> Is Physically Handicapped</label> <select class="form-control" name="ishandicapped">
                <option value="N">NO</option>
                <option value="Y">YES</option>
              </select> </div>
              <br>

              <div class="form-group col-md-6"> <label>Minority Indicator:</label> <select class="form-control" name="minorityindicator">
                <option value="N">NO</option>
                <option value="Y">YES</option>
              </select> </div>
              <br>
                <hr class="style1">
              <div class="form-group col-md-6"> <label> First Yr teacher:</label> <select class="form-control" name="firstyrteacher">
                <option value="N">NO</option>
                <option value="Y">YES</option>
              </select></div>
              <br>
              <div class="form-group col-md-6"> <label>FY/Common Subject Teacher?:</label> <select class="form-control" name="fycommon">
                <option value="Y">YES</option>
                <option value="N">NO</option>
              </select></div>
              <br>
              <div class="form-group col-md-6"> <label> FY/Common Subject:</label>
                <input type="text" name="fycomsubject" class="form-control" placeholder="Enter Subject if FY/Common Teacher YES"> </div>
                  <br></div>
              <div class="row">
                  <hr class="style1">
              <div class="form-group col-md-6"> <label>Would you like to work as Expert Member on various committees of AICTE:</label> <select class="form-control" name="workexpert">
                <option value="Y">YES</option>
                <option value="N">NO</option>
              </select></div>
              <br>
              <div class="form-group col-md-6"> <label> Have you ever applied to AICTE for any grants/assistance:</label> <select class="form-control" name="appliedgrants">
                <option value="Y">YES</option>
                <option value="N">NO</option>
              </select></div>
              <br>
              <div class="form-group col-md-6"> <label>  Basic Pay in Rs.:</label>
                <input type="text" name="basicpay" class="form-control" placeholder="Enter Basic Pay.."> </div>
              <br>
              <div class="form-group col-md-6"> <label> DA %:</label>
                <input type="text" name="da" class="form-control" placeholder="Enter Dearness Allowance %"> </div>
              <br>
              <div class="form-group col-md-6"> <label> HRA in Rs.:</label>
                <input type="text" name="hra" class="form-control" placeholder="Enter HRA.."> </div>
              <br>
              <div class="form-group col-md-6"> <label>Other Allowances in Rs.:</label>
                <input type="text" name="otherallo" class="form-control" placeholder="Enter Other Allowances ..."> </div>
              <br>
              </div>
                  <hr class="style1">
              <div class="row">
              <div class="form-group col-md-6"> <label> Faculty Shift:</label>
                <input type="text" name="facultyshift" class="form-control" placeholder="Enter Here...."> </div>
              <br>
              <div class="form-group col-md-6"> <label>District:</label>
                <input type="text" name="district" class="form-control" placeholder="Enter District"> </div>
              <br>
              <div class="form-group col-md-6"> <label>Aadhar Card(UID):</label>
                <input type="text" name="aadharuid" class="form-control" placeholder="Enter 12 Digit Aadhar Number"> </div>
              <br>
              <div class="form-group col-md-6"> <label>Enrollment Id :</label>
                <input type="text" name="enrid" class="form-control" placeholder="Enter 28 Digit Enrollment Id(EID)"> </div>
              <br>
              <div class="form-group col-md-6"> <label> Alternate Email Address:</label>
                <input type="text" name="alteremail" class="form-control" placeholder="Enter Alternate Email.."> </div>
              <br>
              <div class="form-group col-md-6"> <label>Appointment approved by Govt:</label> <select class="form-control" name="appbygovt">
                <option value="Y">YES</option>
                <option value="N">NO</option>
              </select></div>
              <br>
              <div class="form-group col-md-6"> <label>Appointment approved by University:</label> <select class="form-control" name="appbyuniversity">
                <option value="Y">YES</option>
                <option value="N">NO</option>
              </select></div>
              <br>
              </div>
                  <hr class="style1">
              <div class="row">
              <div class="form-group col-md-6"> <label> Any Other Experience in Year:</label>
                <input type="text" name="anyotherexp" class="form-control" placeholder="Enter Any Other Experience in Year"> </div>
              <br>
              <div class="form-group col-md-6"> <label> Total Experience in Year:</label>
                <input type="text" name="totalexp" class="form-control" placeholder="Enter Total Experience in Year "> </div>
              <br>
              <div class="form-group col-md-6"> <label> No. of Publication in National Conference:</label>
                <input type="text" name="noofnatconf" class="form-control" placeholder="Enter Number Of Publication in National Conference"> </div>
              <br>
              <div class="form-group col-md-6"> <label>  No. of Publication in International Conference:</label>
                <input type="text" name="nuofinterconf" class="form-control" placeholder="Enter Number Of"> </div>
              <br>
              </div>
              <div class="row">
              <input type="submit" value="Submit" name="click_submit" class="form-control col-md-4 btn-secondary">
                            <input type="submit" value="Update" class="form-control col-md-4 btn-warning">

                        <input type="submit" value="Cancel" class="form-control col-md-4 btn-danger">
          </div>
          </form>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js" integrity="sha256-7Ls/OujunW6k7kudzvNDAt82EKc/TPTfyKxIE5YkBzg=" crossorigin="anonymous"></script>
       
      </div>
    </div>
  </div>
</body>

</html>
