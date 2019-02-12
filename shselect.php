<?php
require_once('database.php');
$cmd = $_REQUEST['cmd'];

if($cmd == "get_details3"){
	$tbl_id = $_REQUEST['tbl_id3'];
	$out_put = array();
	$query = "select * from shorttrain where sh_id='$tbl_id'";
	$result = mysqli_query($database,$query) or die(mysqli_error());
	$row = mysqli_fetch_assoc($result);
	
	echo json_encode($row);
}

?>