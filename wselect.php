<?php
require_once('database.php');
$cmd = $_REQUEST['cmd'];

if($cmd == "get_details2"){
	$tbl_id = $_REQUEST['tbl_id2'];
	$out_put = array();
	$query = "select * from tpwork where wid='$tbl_id'";
	$result = mysqli_query($database,$query) or die(mysqli_error());
	$row = mysqli_fetch_assoc($result);
	
	echo json_encode($row);
}

?>