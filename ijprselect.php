<?php
require_once('database.php');
$cmd = $_REQUEST['cmd'];

if($cmd == "get_details1"){
	$tbl_id1 = $_REQUEST['tbl_id1'];
	$out_put = array();
	$query = "select * from publications where p_id='$tbl_id1'";
	$result = mysqli_query($database,$query) or die(mysqli_error());
	$row = mysqli_fetch_assoc($result);
	
	echo json_encode($row);
}

?>