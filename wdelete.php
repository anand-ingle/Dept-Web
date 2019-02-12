<?php include 'session-check-profile.php';

require 'database.php';
$msg="";
$username=$_SESSION['username'];
if(!empty($_POST))
{
	$output="";
  	$id = $_POST['id2'];
  	$sql = "DELETE FROM tpwork WHERE wid=" . $id;
   if(mysqli_query($database, $sql))
    {
		
	 $sno = 1;
     $output .= '<label class="text-success">Data Deleted...</label>';
    $select_query = "SELECT * FROM tpwork WHERE username='$username' ORDER BY wid DESC";
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
     
        <tr>';
        while($row = mysqli_fetch_array($result))
     {
      $output .= '
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