<?php include 'session-check-profile.php';

require 'database.php';
$msg="";
$username=$_SESSION['username'];
if(!empty($_POST))
{
 $output = '';
    $w_type=$_POST['w_type'];
    $w_name=$_POST['w_name'];
    $w_dura=$_POST['w_dura'];
    $w_desi=$_POST['w_desi'];
    $w_details=$_POST['w_details'];
    
 $sql="INSERT INTO tpwork 
 VALUES(
 DEFAULT,
 '$w_type',
 '$w_name',
 '$w_desi',
 '$w_dura',
 '$w_details',
 '$username'
 )";
   
    if(mysqli_query($database, $sql))
    {
		
	 $sno = 1;
     $output .= '<label class="text-success">Data Added...</label>';
     $select_query = "select * from tpwork WHERE username='$username' ORDER BY wid DESC ";
     $result = mysqli_query($database, $select_query);
     $output .= '

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
     
        
        ';
        while($row = mysqli_fetch_array($result))
     {
      $output .= '
      <tr>
      <td>' . $sno++ . '</td>
            <td>' . $row['w_type'] . '</td>
            <td>' . $row['w_name'] . '</td>
            <td>' . $row['w_desi'] . '</td>
            <td>' . $row['w_dura'] . '</td>
       
           
            <td nowrap><button type="submit" class="btn btn-primary wbtn-edit" id="' . $row['wid'] . '" ><i class="fa fa-edit"></i></button>
      <button type="submit"   class="btn btn-primary wbtn-remove" id="' . $row['wid'] . '"><i class="fa fa-remove"></i></button>

                </td>
                      </tr>
              ';
            
     }
     $output .= '</table>';
    }
    echo $output;
}

   

?>
