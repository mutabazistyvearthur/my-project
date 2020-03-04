<!DOCTYPE html>
<html>
<head>
	<title>add users</title>
</head>
<body>
   <?php
   if (isset($_POST['add'])) {
   	$fn=$_POST['fname'];
   	$ln=$_POST['lname'];
   	$ad=$_POST['address'];
   	$em=$_POST['email'];
   	$ph=$_POST['phone'];
   	$g=$_POST['gender'];

   	$con=@mysqli_connect("localhost","root","");
   	$db=@mysqli_select_db($con,"bank");
   	$stat="INSERT INTO client VALUES(0,'$fn','$ln','$ad','$em','$ph','$g')";
   	$result=@mysqli_query($con,$stat);
   	@mysqli_close($con);
   	if ($result) {
   		header("location:tables.php");
   	}
   }



     ?>
</body>
</html>