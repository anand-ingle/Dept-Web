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
        <div class="col-md-10">
          <h1 class="">Resume</h1>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="fa fa-bookmark"></span>Personal Info</a>
              </h4>
            </div>
            <?php 

            $sql="select * from user where username='$username'";
           $result = mysqli_query($database, $sql);
      while($row = mysqli_fetch_array($result))
      {
        ?>
      
      

          
            <!-- <div id="collapse3" class="panel-collapse collapse out">
              <div class="panel-body">-->
            <form class="form form-control" name="resumeform" id="resumeform" method="post" enctype="multipart/form-data">
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-6 form-group col-md-4"> <label>First Name</label>
                    <input type="text" name="fname" id="fname" placeholder="Enter First Name Here.." value="<?php echo $row['fname']?>" class="form-control"> </div>
                  <div class="col-sm-6 form-group col-md-4"> <label>Middle Name</label>
                    <input type="text" class="form-control" value="<?php echo $row['mname']?>" name="mname" id="mname" placeholder="Enter Middle Name Here.."> </div>
                  <div class="col-sm-6 form-group col-md-4"> <label>Last Name</label>
                    <input type="text" name="lname" value="<?php echo $row['lname']?>" id="lname" placeholder="Enter Last Name Here.." class="form-control"> </div>
                </div>
              </div>
              
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-6 form-group col-md-4"> <label>Email ID</label>
                    <input type="text" id="temail" value="<?php echo $row['email']?>" name="temail" placeholder="Enter Email Here.." class="form-control"> </div>
                  <div class="col-sm-6 form-group col-md-4"> <label>Mobile Number</label>
                    <input type="text" name="tmobileno1" value="<?php echo $row['mobileno1']?>" id="tmobileno1" placeholder="Enter Mobile number 1" class="form-control"> </div>
                </div>  
        
                <div class="teacher_radio_pos"> <label>Gender: </label>
                  <input type="radio" name="genderrdo" value="Male"> <span class="p_font">&nbsp;Male</span>
                  <input type="radio" name="genderrdo" value="Female"> <span class="p_font">&nbsp;Female</span> </div>
          
         <div class="row">
        <div class="col-md-6">
        <label>Birthday: </label>
         <input type="text" class="datepicker form-control col-md-3" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" value="<?php echo $row['bday']?>" name="tbday" id="tbday" ></div>
<div></div>
                <div>
                <div class="col-md-3"> 
                  <?php
                           echo '<img  class="card-img-top" height="180px" alt="Profile Pic" width="120px" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/
                           >';?>
          Profile Picture 
          <input type="file" name="image"  value="image" id="image">
</div></div>
 
 </div>      
          </div>
      <br>
          <div class="form-group"> <label>Address:</label> <textarea  name="address" id="address" placeholder="Enter Address Here.." value="" rows="3" class="form-control"><?php echo $row['address']?></textarea> </div>
          <div class="form-group"> <label>Summary:</label> <textarea name="summery" id="summery" placeholder="Enter Summery Here.." value="" rows="3" class="form-control"><?php echo $row['summery']?></textarea> </div>
          <div class="">
      <button class="btn btn-primary" name="savep" id="savep" type="submit">SAVE</button>
      <div id="sup" name="sup"></div>
      </div>
      <br>
      </form>
      <?php
            }
            ?>
      <!--?php
      $sql="select * from tpinfo where tpuser='$username'";
      $result = mysqli_query($database,$sql) or die(mysqli_error());
      $row = mysqli_fetch_assoc($result);
    ?-->  
    <script>
    $('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
   
});
      
$(document).ready(function(){
 $('#resumeform').on('click', '#savep', function(event){  
  event.preventDefault();  
  var form=$('form').get(0);
  // console.log(form);
  if($('#fname').val() == "")  
  {  
   alert("First Name is required");  
  }  
  else if($('#mname').val() == "")  
  {  
   alert("Middle Name is required");  
  } 
  else if($('#lname').val() == "")  
  {  
   alert("Last Name is required");  
  } 
  else if($('#temail').val() == '')  
  {  
   alert("Email is required");  
  }  
  else if($('#tmobileno1').val() == '')
  {  
   alert("Mobile Number is required");  
  }else if($('#genderrdo').val() == '')
  {  
   alert("Gender is required");  
  }else if($('#tbday').val() == '')
  {  
   alert("Birthday is required");  
  }else if($('#address').val() == '')
  {  
   alert("Address is required");  
  }
  else if($('#summery').val() == '')
  {  
   alert("Summery is required");  
  }
   
  else  
  {  
   $.ajax({  
   
  
    url:"saveprsnl.php",  
    //method:"POST", 
  dataType:"JSON",
  type: "POST",
  data: new FormData(form),
  success:function(result){  
  console.log(data);
     alert("Your Information Saved");  
     //$('#add_data_Modal').modal('hide');  
     //$('#sup').html(data);  
    },
  error:function(){
    alert("Your Information Saved");
    
  },
  
    contentType: false,
  processData:false,
  //data:$('#resumeform').serialize(),    
     
   });  
  }  
 });
      }
      );
 </script>
      
      
     <div class="panel panel-success">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="fa fa-bookmark"></span>Educational Qualification</a>
              </h4>
            </div>
            
    
      <div class="border container">
              <form method="post" id="insert_form">
                         <div class="row" name="">
                <div class="col-sm-6 form-group col-md-2">
                    
                    <label>Year</label>
                  <input type="textarea" placeholder="Enter Year" name="year" id="year" class="form-control"> </div>
                <div class="col-sm-6 form-group col-md-2"> <label>Course</label>
                  <input type="textarea" placeholder="Enter Course" name="course" id="course" class="form-control"> </div>
                <div class="col-sm-6 form-group col-md-3"> <label>Board/University</label>
                  <input type="textarea" placeholder="Enter Here..." name="board" id="board" class="form-control"> </div>
                <div class="col-sm-6 form-group col-md-2"> <label>% Mark</label>
                  <input type="textarea" placeholder="Enter here.." name="mark" id="mark" class="form-control"> </div>
                <div class="col-sm-6 form-group col-md-3"> <label>Division</label>
                  <input type="textarea" placeholder="Enter here.." name="division" id="division" class="form-control"> </div>
              </div>
            
                <button type="submit" class="btn btn-default btn-primary" id="eduadd" name="eduadd">Add</button>
                 <button type="submit" style="display: none;" class="btn btn-default btn-primary" id="eduupdate" name="eduupdate">Update</button>

                      
                </form>
              
              
              <div class="row container">
        <div id="education_table">
                  <table class="table table-bordered">
                      <tr>
              <th>Sr.No</th>
                          <th width="10%">Year</th>
                          <th width="20%">Course</th>
                          <th width="20%">Board</th>
                           <th width="10%">Mark</th>
                           <th width="10%">Division</th>
                          <th >Action</th>
                      </tr>
            <?php
      $sno = 1;
    $query= "select * from education WHERE username='$username' ORDER BY edu_id DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
        <tr>
      <td><?php echo $sno++; ?></td>
            <td><?php echo $row['year']?></td>
            <td><?php echo $row['course']?></td>
            <td><?php echo $row['board']?></td>
            <td><?php echo $row['mark']?></td>
            <td><?php echo $row['division']?></td>
            <td nowrap><button type="submit" class="btn btn-primary btn-edit" id="<?php echo $row['edu_id']; ?>" ><i class="fa fa-edit"></i></button>
      <button type="submit" class="btn btn-primary btn-remove" id="<?php echo $row['edu_id']; ?>"><i class="fa fa-remove"></i></button>

                </td>
                      </tr>
                      <?php
      }

                      ?>
                  </table>
          </div>
              </div></div>
        <br>
        
      

<script>
$(document).ready(function(){
 $('#insert_form').on('click', '#eduadd', function(event){  
  event.preventDefault();  
  if($('#year').val() == "")  
  {  
   alert("Year is required");  
  }  
  else if($('#course').val() == '')  
  {  
   alert("Course is required");  
  }  
  else if($('#board').val() == '')
  {  
   alert("Board is required");  
  }else if($('#mark').val() == '')
  {  
   alert("Mark is required");  
  }else if($('#division').val() == '')
  {  
   alert("Division is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"eduinsert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     //$('#add_data_Modal').modal('hide');  
     $('#education_table').html(data);  
    }  
   });  
  }  
 });
 

 var tbl_id;
$(document).on('click', '.btn-edit', function(ev){
      ev.preventDefault();
      var btn_button = $(this);
      btn_button.html(' <i class="fa fa fa-spinner fa-spin"></i> ');
      tbl_id = $(this).attr("id");
      $('.btn-reset').trigger('click');
      $.ajax({
        cache: false,
        url: 'eduselect.php', // url where to submit the request
        type : "POST", // type of action POST || GET
        dataType : 'json', // data type
        data : { cmd: "get_details", tbl_id: tbl_id }, // post data || get data
        success : function(result) {
        btn_button.html(' <i class="fa fa fa-pencil-square-o"></i> ');
        console.log(result);
        $("#year").val(result['year']);
        $("#course").val(result['course']);
        $("#board").val(result['board']);
        $("#mark").val(result['mark']);
        $("#division").val(result['division']).change();
        $('#eduadd').hide();
        $('#eduupdate').show();
        },
        error: function(xhr, resp, text) {
        console.log(xhr, resp, text);
        }
      });
    });
    
 $('#insert_form').on('click', '#eduupdate', function(event){  
  event.preventDefault();  
  if($('#year').val() == "")  
  {  
   alert("Year is required");  
  }  
  else if($('#course').val() == '')  
  {  
   alert("Course is required");  
  }  
  else if($('#board').val() == '')
  {  
   alert("Board is required");  
  }else if($('#mark').val() == '')
  {  
   alert("Mark is required");  
  }else if($('#division').val() == '')
  {  
   alert("Division is required");  
  }
   
  else  
  {  //var ed_id=$(this).attr("id");
   var year=$('#year').val();
   var course=$('#course').val();
   var board=$('#board').val();
   var mark=$('#mark').val();
   var division=$('#division').val();
   
   $.ajax({  
    url:"eduupdate.php",  
    method:"POST",  
    data:{
    'ed_id':tbl_id,
    'year':year,
    'course':course,
    'board':board,
    'mark':mark,
    'division':division,
  },  
  
    success:function(data){  
     $('#insert_form')[0].reset();  
     //$('#add_data_Modal').modal('hide');  
     $('#education_table').html(data);  
   $('#eduadd').show();
   $('#eduupdate').hide();
    }  
   });  
  }  
 });
 $(document).on('click', '.btn-remove', function(e){
   var id = $(this).attr("id");
    $clicked_btn = $(this);
    $.ajax({
      url: 'edudelete.php',
      type: 'POST',
      data: {
      'delete': 1,
      'id': id,
      },
      success: function(data){
        // remove the deleted comment
    $('#education_table').html(data);
        $clicked_btn.parent().remove();
        
      }
    });
  });
    
});   
</script>   
            </div>
            
         
       <div class="border container">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="fa fa-bookmark"></span>Publications And Conference</a>
              </h4>
            </div>
      <form id="intjppr">
            <div class="form-group"> 
      <select class="select form-control " name="pub_type" id="pub_type">
      <option value="International Journal Papers" >International Journal Papers</option>
      <option value="National Journal Papers">National Journal Papers</option>
      <option value="International Conference">International Conference</option>
      <option value="National Conference">National Conference</option>

      </select>
              <div class="col-sm-6 form-group col-md-12"> <label>Title</label>
                <input type="textarea" placeholder="Enter Year" name="title1" id="title1" class="form-control"> </div>
              <div class="col-sm-6 form-group col-md-12"> <label>Publisher:</label>
                <input type="textarea" placeholder="Enter Year" name="publisher1" id="publisher1" class="form-control"> </div>
              <div class="col-sm-6 form-group col-md-12"> <label>Date:</label>
                <input class="form-control" placeholder="e.g. August 2015" name="date1" id="date1" maxlength="255" id="dateField-0" type="text">
                <div class="form-group"> <label>Details:</label> <textarea name="details1" id="details1" placeholder="Enter Here.." rows="3" class="form-control"></textarea> </div>
                <button type="button" class="btn btn-default" name="ijpr_btn_save" id="ijpr_btn_save" data-step="6"> <i class="fa fa-plus-circle"></i> ADD </button>
                <button type="button" style="display: none;" class="btn btn-default" name="ijpr_btn_update" id="ijpr_btn_update" data-step="6"> <i class="fa fa-plus-circle"></i> UPDATE </button>

        </div>
            </div></form>
      
      
              <div class="row container">
        <div id="intjppr_table">
                  <table class="table table-bordered">
                      <tr>
              <th>Sr.No</th>
               <th width="20%">Type</th>
                          <th width="20%">Title</th>
                          <th width="20%">Publisher</th>
                          <th width="20%">Date</th>
                           <!--<th width="40%">Details</th>-->
                  
                          <th >Action</th>
                      </tr>
            <?php
      $sno = 1;
    $query= "select * from publications WHERE username='$username' ORDER BY p_id DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
        <tr>
      <td><?php echo $sno++; ?></td>
            <td><?php echo $row['p_type']?></td>
            <td><?php echo $row['p_title']?></td>
            <td><?php echo $row['pub_name']?></td>
            <td><?php echo $row['p_date']?></td>
       
           
            <td nowrap><button type="submit" class="btn btn-primary ijprbtn-edit" id="<?php echo $row['p_id']; ?>" ><i class="fa fa-edit"></i></button>
      <button type="submit"   class="btn btn-primary ijprbtn-remove" id="<?php echo $row['p_id']; ?>"><i class="fa fa-remove"></i></button>

                </td>
                      </tr>
                      <?php
      }

                      ?>
                  </table>
          </div>
              </div>
        </div>
      </div>
    </div>
  
      

<script>
$(document).ready(function(){
 $('#intjppr').on('click', '#ijpr_btn_save', function(event){  
  event.preventDefault();  
  if($('#title1').val() == "")  
  {  
   alert("Title is required");  
  }  
  else if($('#publisher1').val() == '')  
  {  
   alert("Publisher is required");  
  }  
  else if($('#date1').val() == '')
  {  
   alert("Date is required");  
  }else if($('#details1').val() == '')
  {  
   alert("Details is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"intjrp_insert.php",  
    method:"POST",  
    data:$('#intjppr').serialize(),  
    beforeSend:function(){  
     $('#ijpr_btn').val("Inserting");  
    },  
    success:function(data){  
     $('#intjppr')[0].reset();  
     //$('#add_data_Modal').modal('hide');  
     $('#intjppr_table').html(data);  
    }  
   });  
  }  
 });
 

var tbl_id1;
$(document).on('click', '.ijprbtn-edit', function(ev){
      ev.preventDefault();
      var btn_button = $(this);
      btn_button.html(' <i class="fa fa fa-spinner fa-spin"></i> ');
      tbl_id1 = $(this).attr("id");
      $('.btn-reset').trigger('click');
      $.ajax({
        cache: false,
        url: 'ijprselect.php', // url where to submit the request
        type : "POST", // type of action POST || GET
        dataType : 'json', // data type
        data : { cmd: "get_details1", tbl_id1: tbl_id1 }, // post data || get data
        success : function(result) {
        btn_button.html(' <i class="fa fa fa-pencil-square-o"></i> ');
        console.log(result);
        //$("#pub_type").val(result['pub_type']);
        $("#title1").val(result['p_title']);
        $("#publisher1").val(result['pub_name']);
        $("#date1").val(result['p_date']);
        $("#details1").val(result['P_details']).change();
        $('#ijpr_btn_save').hide();
        $('#ijpr_btn_update').show();
        },
        error: function(xhr, resp, text) {
        console.log(xhr, resp, text);
        }
      });
    });
    
 $('#intjppr').on('click', '#ijpr_btn_update', function(event){  
  event.preventDefault();  
  if($('#title1').val() == "")  
  {  
   alert("Title is required");  
  }  
  else if($('#publisher1').val() == '')  
  {  
   alert("Publisher is required");  
  }  
  else if($('#date1').val() == '')
  {  
   alert("Date is required");  
  }else if($('#details1').val() == '')
  {  
   alert("Details is required");  
  }
  else  
  {  //var ed_id=$(this).attr("id");
   var pub_type=$("#pub_type option:selected").val();
   var title1=$('#title1').val();
   var publisher1=$('#publisher1').val();
   var date1=$('#date1').val();
   var details1=$('#details1').val();
   
   $.ajax({  
    url:"ijprupdate.php",  
    method:"POST",  
    data:{
    'p_id':tbl_id1,
    'pub_type':pub_type,
    'title1':title1,
    'publisher1':publisher1,
    'date1':date1,
    'details1':details1,
    //'division':division,
  },  
  
    success:function(data){  
    $('#intjppr')[0].reset();  
     //$('#add_data_Modal').modal('hide');  
     $('#intjppr_table').html(data);  
   $('#ijpr_btn_save').show();
   $('#ijpr_btn_update').hide();
    }  
   });  
  }  
 });
 var id1;

 $(document).on('click', '.ijprbtn-remove', function(e){
   var id1 = $(this).attr("id");
    $clicked_btn = $(this);
    $.ajax({
      url: 'ijprdelete.php',
      type: 'POST',
      data: {
      'id1': id1,
      },
      success: function(data){
        // remove the deleted comment
    $('#intjppr_table').html(data);
        $clicked_btn.parent().remove();
        
      }
    });
  });
    
});   
</script>   
      
      
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="fa fa-bookmark"></span>Others</a>
                  </h4>
                  <form class="form workform" name="workform" id="workform">
                  
                    <div class="form-group form-control "> <label class="h4">Work Experience</label>
                      <div class="row col-md-12">
                        <div class="form-group">
                         <select class="form-control" name="w_type" id="w_type">
                                             <option value="Company">Company</option>
                                             <option value="Institute">Institute</option>
                                            </select><div>
                         <input type="text" placeholder="Enter Name Here.." class="form-control" name="w_name" id="w_name"> </div>
                     </div>
                        <div class="col-sm-6 form-group col-md-4"> <label>Designation</label>
                          <input type="text" placeholder="Enter  Here.." name="w_desi" id="w_desi" class="form-control"> </div>
                        <div class="col-sm-6 form-group col-md-4"> <label>Duration</label>
                          <input type="text" placeholder="Enter  Here.." class="form-control" id="w_dura" name="w_dura"> </div></div>
                           <div class="col-sm-6 form-group col-md-10"> <label>Details</label>
                          <textarea placeholder="Enter  Here.." class="form-control" name="w_details" id="w_details"></textarea> </div>
                        
             <div class="form-group">
                          <button type="button" class="btn btn-default btn-primary addWork" name="addWork" id="addWork"><i class="fa fa-plus"></i> ADD</button>
                             <button type="button" style="display: none;" class="btn btn-default wbtn_update" name="wbtn_update" id="wbtn_update" data-step="6"> <i class="fa fa-plus-circle"></i> UPDATE </button>
                        </div>
                         
                        
            </div>
                  </form>
                      

              <div class="row container">
        <div id="work_table">
                  <table class="table table-bordered">
                      <tr>
              <th>Sr.No</th>
               <th width="20%">Type</th>
               <th width="20%">Name</th>
                          <th width="20%">Designation</th>
                          <th width="20%">Duration</th>
                          
                           <!--<th width="40%">Details</th>-->
                  
                          <th >Action</th>
                      </tr>
            <?php
      $sno = 1;
    $query= "select * from tpwork WHERE username='$username' ORDER BY wid DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
        <tr>
      <td><?php echo $sno++; ?></td>
            <td><?php echo $row['w_type']?></td>
            <td><?php echo $row['w_name']?></td>
            <td><?php echo $row['w_desi']?></td>
            <td><?php echo $row['w_dura']?></td>
       
           
            <td nowrap><button type="submit" class="btn btn-primary wbtn-edit" id="<?php echo $row['wid']; ?>" ><i class="fa fa-edit"></i></button>
      <button type="submit"   class="btn btn-primary wbtn-remove" id="<?php echo $row['wid']; ?>"><i class="fa fa-remove"></i></button>

                </td>
                      </tr>
                      <?php
      }

                      ?>
                  </table>
          </div>
              </div>
                      
      

<script>
$(document).ready(function(){
 $('#workform').on('click', '#addWork', function(event){  
  event.preventDefault();  
  if($('#w_name').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#w_dura').val() == '')  
  {  
   alert("Duration is required");  
  }  
  else if($('#w_desi').val() == '')
  {  
   alert("Designation is required");  
  }else if($('#w_details').val() == '')
  {  
   alert("Details is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"work_insert.php",  
    method:"POST",  
    data:$('#workform').serialize(),  
    beforeSend:function(){  
     $('#addWork').val("Inserting");  
    },  
    success:function(data){  
     $('#workform')[0].reset();  
     //$('#add_data_Modal').modal('hide');  
     $('#work_table').html(data);  
    }  
   });  
  }  
 });
 

var tbl_id2;
$(document).on('click', '.wbtn-edit', function(ev){
      ev.preventDefault();
      var btn_button = $(this);
      btn_button.html(' <i class="fa fa fa-spinner fa-spin"></i> ');
      tbl_id2 = $(this).attr("id");
      $('.btn-reset').trigger('click');
      $.ajax({
        cache: false,
        url: 'wselect.php', // url where to submit the request
        type : "POST", // type of action POST || GET
        dataType : 'json', // data type
        data : { cmd: "get_details2", tbl_id2: tbl_id2 }, // post data || get data
        success : function(result) {
        btn_button.html(' <i class="fa fa fa-pencil-square-o"></i> ');
        console.log(result);
        //$("#pub_type").val(result['pub_type']);
        $("#w_name").val(result['w_name']);
        $("#w_desi").val(result['w_desi']);
        $("#w_dura").val(result['w_dura']);
        $("#w_details").val(result['w_details']).change();
        $('#addWork').hide();
        $('#wbtn_update').show();
        },
        error: function(xhr, resp, text) {
        console.log(xhr, resp, text);
        }
      });
    });
    
 $('#workform').on('click', '#wbtn_update', function(event){  
  event.preventDefault();  
  if($('#w_name').val() == "")  
  {  
   alert("name is required");  
  }  
  else if($('#w_details').val() == '')  
  {  
   alert("Details is required");  
  }  
  else if($('#w_dura').val() == '')
  {  
   alert("Duration is required");  
  }else if($('#w_details').val() == '')
  {  
   alert("Details is required");  
  }
  else  
  {  //var ed_id=$(this).attr("id");
   var w_type=$("#w_type option:selected").val();
   var w_name=$('#w_name').val();
   var w_desi=$('#w_desi').val();
   var w_dura=$('#w_dura').val();
   var w_details=$('#w_details').val();
   
   $.ajax({  
    url:"wupdate.php",  
    method:"POST",  
    data:{
    'wid':tbl_id2,
    'w_type':w_type,
    'w_name':w_name,
    'w_desi':w_desi,
    'w_dura':w_dura,
    'w_details':w_details,
    
  },  
  
    success:function(data){  
    $('#intjppr')[0].reset();  
     //$('#add_data_Modal').modal('hide');  
     $('#work_table').html(data);  
   $('#addWork').show();
   $('#wbtn_update').hide();
    }  
   });  
  }  
 });
 var id2;

 $(document).on('click', '.wbtn-remove', function(e){
   var id2 = $(this).attr("id");
    $clicked_btn = $(this);
    $.ajax({
      url: 'wdelete.php',
      type: 'POST',
      data: {
      'id2': id2,
      },
      success: function(data){
        // remove the deleted comment
    $('#work_table').html(data);
        $clicked_btn.parent().remove();
        
      }
    });
  });
    
});   
</script>   
          
                      <div class="form-group form-control"> <label class="h4">Short Term Training Programmes Participated: </label>
                        <form class="form shform" id="shform" name="shform">
            <div class="row col-md-12">
            <div class="form-group col-md-3 "> <label>Academic year</label>
            <input type="text" placeholder="Enter  Here.." name="sh_year" id="sh_year" class="form-control"></div>
            <div class="form-group col-md-8 "> <label>Course Name</label>
                          <input type="text" placeholder="Enter  Here.." name="sh_name" id="sh_name" class="form-control"></div> 
            <div class="form-group col-md-4">
             <label>From</label>
                          <input type="text" placeholder="Enter  Here.." name="sh_from" id="sh_from" class="form-control"></div>
               <div class="form-group col-md-4"><label>To</label>
                          <input type="text" placeholder="Enter  Here.." name="sh_to" id="sh_to" class="form-control"></div>
             <div class="col-md-10"> <label> Organising Institute /Agency:</label>
                         <input type="text" placeholder="Enter  Here.." name="sh_org" id="sh_org" class="form-control"></div>
              <br>
             
              </div>
              <div class=" form-group col-md-12"> <label>Details</label>
                          <textarea placeholder="Enter  Here.." class="form-control" name="sh_details" id="sh_details"></textarea> </div>
                         
 <div class=" form-group col-md-4">
                          <button type="button" class="btn btn-default btn-primary addShort" name="addShort" id="addShort"><i class="fa fa-plus"></i> ADD</button>
                            <button type="button" style="display: none;" class="btn btn-default" name="shbtn_update" id="shbtn_update" data-step="6"> <i class="fa fa-plus-circle"></i> UPDATE </button>
                        </div>
                    <!--  <div class="form-group"> <label>Skills: </label> <textarea placeholder="Enter Here.." rows="3" class="form-control"></textarea> </div>
                  </div>-->
</form>
              <div class="row container">
        <div id="sh_table">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th>Sr.No</th>
                    <th width="20%">Academic Year</th>
                    <th width="20%">Course name</th>
                    <th width="20%">From</th>
                    <th width="20%">TO</th>
                    <th width="20%">Organising Institute/Agency</th>
                    <th>Action</th>
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
                    
                
                
          
            <td nowrap><button type="submit" class="btn btn-primary shbtn-edit" id="<?php echo $row['sh_id']; ?>" ><i class="fa fa-edit"></i></button>
      <button type="submit"   class="btn btn-primary shbtn-remove" id="<?php echo $row['sh_id']; ?>"><i class="fa fa-remove"></i></button>

                </td>
                      </tr>
                      <?php
      }

                      ?>
                  </table>
          </div>
              </div></div>
        </div>
      
    </div>

<script>
$(document).ready(function(){
 $('#shform').on('click', '#addShort', function(event){  
  event.preventDefault();  
  if($('#sh_year').val() == "")  
  {  
   alert("Year is required");  
  }  
  else if($('#sh_name').val() == '')  
  {  
   alert("Name is required");  
  }  
  else if($('#sh_from').val() == '')
  {  
   alert("from is required");  
  }else if($('#sh_to').val() == '')
  {  
   alert("TO is required");  
  }else if($('#sh_org').val() == '')
  {  
   alert("Organising is required");  
  }else if($('#sh_details').val() == '')
  {  
   alert("Details required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"shinsert.php",  
    method:"POST",  
    data:$('#shform').serialize(),  
    beforeSend:function(){  
     $('#addShort').val("Inserting");  
    },  
    success:function(data){  
     $('#shform')[0].reset();  
     //$('#add_data_Modal').modal('hide');  
     $('#sh_table').html(data);  
    }  
   });  
  }  
 });
 

var tbl_id3;
$(document).on('click', '.shbtn-edit', function(ev){
      ev.preventDefault();
      var btn_button = $(this);
      btn_button.html(' <i class="fa fa fa-spinner fa-spin"></i> ');
      tbl_id3 = $(this).attr("id");
      $('.btn-reset').trigger('click');
      $.ajax({
        cache: false,
        url: 'shselect.php', // url where to submit the request
        type : "POST", // type of action POST || GET
        dataType : 'json', // data type
        data : { cmd: "get_details3", tbl_id3: tbl_id3 }, // post data || get data
        success : function(result) {
        btn_button.html(' <i class="fa fa fa-pencil-square-o"></i> ');
        console.log(result);
        //$("#pub_type").val(result['pub_type']);
        $("#sh_year").val(result['sh_year']);
        $("#sh_name").val(result['sh_name']);
        $("#sh_from").val(result['sh_from']);
        $("#sh_to").val(result['sh_to']);
        $("#sh_org").val(result['sh_org']);
        $("#sh_details").val(result['sh_details']).change();
        $('#addShort').hide();
        $('#shbtn_update').show();
        },
        error: function(xhr, resp, text) {
        console.log(xhr, resp, text);
        }
      });
    });
    
 $('#shform').on('click', '#shbtn_update', function(event){  
  event.preventDefault();  
  if($('#sh_year').val() == "")  
  {  
   alert("Year is required");  
  }  
  else if($('#sh_name').val() == '')  
  {  
   alert("Name is required");  
  }  
  else if($('#sh_from').val() == '')
  {  
   alert("from is required");  
  }else if($('#sh_to').val() == '')
  {  
   alert("TO is required");  
  }else if($('#sh_org').val() == '')
  {  
   alert("Organising is required");  
  }else if($('#sh_details').val() == '')
  {  
   alert("Details required");  
  }
   
  else  
  {  //var ed_id=$(this).attr("id");
   var sh_year=$("#sh_year").val();
   var sh_name=$('#sh_name').val();
   var sh_from=$('#sh_from').val();
   var sh_to=$('#sh_to').val();
   var sh_org=$('#sh_org').val();
   var sh_details=$('#sh_details').val();

   $.ajax({  
    url:"shupdate.php",  
    method:"POST",  
    data:{
    'sh_id':tbl_id3,
    'sh_year':sh_year,
    'sh_name':sh_name,
    'sh_from':sh_from,
    'sh_to':sh_to,
   
    'sh_org':sh_org,

    'sh_details':sh_details,
    //'division':division,
  },  
  
    success:function(data){  
    $('#shform')[0].reset();  
     //$('#add_data_Modal').modal('hide');  
     $('#sh_table').html(data);  
   $('#addShort').show();
   $('#shbtn_update').hide();
    }  
   });  
  }  
 });
 var id3;

 $(document).on('click', '.shbtn-remove', function(e){
   var id3 = $(this).attr("id");
    $clicked_btn = $(this);
    $.ajax({
      url: 'shdelete.php',
      type: 'POST',
      data: {
      'id3': id3,
      },
      success: function(data){
        // remove the deleted comment
    $('#sh_table').html(data);
        $clicked_btn.parent().remove();
        
      }
    });
  });
    
});   
</script>      
       

                  
          
        </div>
      </div>
    </div>
  </div>
</body>

</html>
