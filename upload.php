<?php
  // Create database connection
  require "database.php";

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES["image"]["tmp_name"];
  	// Get text
  	//$image_text = mysqli_real_escape_string($database, $_POST['image_text']);
	$imgContent = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  	// image file directory
	//$target = mysql_real_escape_string($target);
  	//$target = "images/";

  	$sql = "INSERT INTO images (image) VALUES ('$imgContent')";
  	// execute query
  	mysqli_query($database, $sql);

  	if ($sql) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($database, "SELECT * FROM images where id='25'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
   $row=mysqli_fetch_assoc($result);
   //header('Content-type:type/jpeg');
  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
      //echo "<div id='img_div'>";
      	//echo "<img src='images/".$row['image']."' >";
      	//echo "<p>".$row['image']."</p>";
      //echo "</div>";
    
  ?>
  <form method="POST"  enctype="multipart/form-data">
  
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>