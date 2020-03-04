<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
    <?php

   if(isset($_POST['up'])) {
   	$ID=$_POST['ID'];
   	$fn=$_POST['fname'];
   	$ln=$_POST['lname'];
   	$ad=$_POST['address'];
   	$em=$_POST['email'];
   	$ph=$_POST['phone'];
   	$g=$_POST['gender'];
   	$con=@mysqli_connect("localhost","root","");
   	$db=@mysqli_select_db($con,"bank");
   	$stat="UPDATE client SET fname='$fn',
   	lname='$ln',
   	address='$ad', 
   	email='$em', 
   	phone='$ph', 
   	gender='$g' WHERE c_id='$ID'";

   	$result=@mysqli_query($con,$stat);
   	@mysqli_close($con);
   	if ($result) {
   		header("Location:tables.php");
   	}
   }



    



     ?>
</body>
</html>