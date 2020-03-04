<!DOCTYPE html>
<html>
<head>
	<title>delete user</title>
</head>
<body>
	<?php
  $MID=$_GET['id'];


// step 2: CONNECTING TO THE FORM TO THE DATABASE(MYSQL SERVER) localHost=127.0.0.0.1
$con=@mysqli_connect("localhost","root","") or die(@mysqli_error()); 

//step 3: Select the database to use
$db=@mysqli_select_db($con,"bank") or die(@mysqli_error($con));

//step 4: write the sql statement
$stat="DELETE FROM client WHERE c_id='$MID'";

//step 5: Execute the sql statement
$result=@mysqli_query($con,$stat) or die(@mysqli_error($con));

if ($result) {
	
	header("Location:tables.php");
}
?>
</body>
</html>