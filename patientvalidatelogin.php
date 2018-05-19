<html>
<body>
<?php
session_start();
$conn = mysqli_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db($conn,"hms");
$username=$_POST['username'];
$phone=$_POST['password'];
$username=stripslashes($username);
$phone=stripslashes($phone);
$username=mysqli_real_escape_string($conn,$username);
$phone=mysqli_real_escape_string($conn,$phone);
$sql="Select * from patientlogin where username='$username' and phone='$phone'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==1){
		$_SESSION["user_id"] = $username;
			
		//echo $_SESSION["user_id"];
		header("location: selectpatientoption.php");
}
else
{
	header("location: login.php");
}
mysqli_close($conn)
?>

</body>
</html>
