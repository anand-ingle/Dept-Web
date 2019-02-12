<?php include 'session-check-profile.php';

require 'database.php';
$msg="";
$username=$_SESSION['username'];
if(!empty($_POST))
{
 $output = '';
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $email=$_POST['temail'];
    $mobileno1=$_POST['tmobileno1'];
    $gender=$_POST['genderrdo'];
	$bday=$_POST['tbday'];
	$address=$_POST['address'];
	$summery=$_POST['summery'];
	//$image = $_FILES["image"]["tmp_name"];
	$imgContent = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	 
	 
 $sql="UPDATE user
 SET
 	fname='{$fname}',
 	mname='{$mname}',
 	lname='{$lname}',
 	email='{$email}',
 	mobileno1='{$mobileno1}',
 	gender='{$gender}',
 	bday='{$bday}',
 	image='{$imgContent}',
 	address='{$address}',
 	summery='{$summery}' 
   WHERE username='$username'";  

    if(mysqli_query($database, $sql))
    echo '<label class="text-success">Data Updated....</label>';
	else
		//echo sqli_error();
	echo "<script type='text/javascript'>alert('failed!')</script>";
}
?>	