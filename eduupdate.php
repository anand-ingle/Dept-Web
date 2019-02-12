<?php include 'session-check-profile.php';

require 'database.php';
$msg="";
$username=$_SESSION['username'];
if(!empty($_POST))
{
 $output = '';
	$ed_id=$_POST['ed_id'];
    $year=$_POST['year'];
    $course=$_POST['course'];
    $board=$_POST['board'];
    $mark=$_POST['mark'];
    $division=$_POST['division'];
    
 $sql="UPDATE education 
 SET
	 year='{$year}',
	 course='{$course}',
	board='{$board}',
	mark='{$mark}',
	division='{$division}'
	where edu_id=".$ed_id;
   
    if(mysqli_query($database, $sql))
    {
		
	 $sno = 1;
     $output .= '<label class="text-success">Data Updated....</label>';
     $select_query = "SELECT * FROM education WHERE username='$username' ORDER BY edu_id DESC";
     $result = mysqli_query($database, $select_query);
     $output .= '
        <div class="row container">
                  <table class="table table-bordered">
                      <tr>
						  <th>Sr. No</th>
                          <th width="10%">Year</th>
                          <th width="20%">Course</th>
                          <th width="20%">Board</th>
                           <th width="10%">Mark</th>
                           <th width="10%">Division</th>
                          <th width="30%">Action</th>
                      </tr>
        

     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
        <tr>
			<td>' . $sno++ . '</td>
            <td>' . $row['year'] . '</td>
            <td>' . $row['course'] . '</td>
            <td>' . $row['board'] . '</td>
            <td>' . $row['mark'] . '</td>
            <td>' . $row['division'] . '</td>
            <td nowrap><button type="submit" class="btn btn-primary btn-edit" id="' . $row['edu_id'] . '"><i class="fa fa-edit"></i></button>
			<button type="submit" class="btn btn-primary btn-remove" id="' . $row['edu_id'] . '"><i class="fa fa-remove"></i></button>
			</td>
                
                      </tr>
      ';
     }
     $output .= '</table>';
    }
    echo $output;
}

   

?>
