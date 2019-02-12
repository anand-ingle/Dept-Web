<?php include 'session-check-profile.php';

require 'database.php';
$msg="";
$username=$_SESSION['username'];
if(!empty($_POST))
{
 $output = '';
	$p_id=$_POST['p_id'];
    $pub_type=$_POST['pub_type'];
    $title1=$_POST['title1'];
    $publisher1=$_POST['publisher1'];
    $date1=$_POST['date1'];
    $details1=$_POST['details1'];
    
 $sql="UPDATE education 
 SET
	p_type='{$year}',
	p_title='{$course}',
	pub_name='{$board}',
	p_date='{$mark}',
	P_details='{$division}'
	where p_id=".$p_id;
   
     if(mysqli_query($database, $sql))
    {
		
	 $sno = 1;
     $output .= '<label class="text-success">Data Added...</label>';
         $select_query= "select * from publications WHERE username='$username' ORDER BY p_id DESC ";
		$result = mysqli_query($database, $select_query);
     $output .= '
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

     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
        <tr>
			<td>' . $sno++ . '</td>
            <td>' . $row['p_type'] . '</td>
            <td>' . $row['p_title'] . '</td>
            <td>' . $row['pub_name'] . '</td>
            <td>' . $row['p_date'] . '</td>
            
            <td nowrap><button type="submit" class="btn btn-primary ijprbtn-edit" id="' . $row['p_id'] . '"><i class="fa fa-edit"></i></button>
			<button type="submit" class="btn btn-primary ijprbtn-remove" id="' . $row['p_id'] . '"><i class="fa fa-remove"></i></button>
			</td>
                
                      </tr>
      ';
     }
     $output .= '</table>';
    }
    echo $output;
}

   

?>
