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
$password=$_POST['password'];
$username=stripslashes($username);
$password=stripslashes($password);
$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);
$sql="Select * from nurselogin where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==1){
		$_SESSION["user_id"] = $username;
			
		//echo $_SESSION["user_id"];
		header("location: nursehome.php");
}
else
{
	header("location: nurselogin.php");
}
mysqli_close($conn)
?>

</body>
</html>
