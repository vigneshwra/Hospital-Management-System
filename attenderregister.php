<HTML>
<BODY>
<?php
$conn = mysqli_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db($conn,"hms");
$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
$fathername=mysqli_real_escape_string($conn,$_POST['fname']);
$mothername=mysqli_real_escape_string($conn,$_POST['mname']);
$email = stripslashes($_POST['email']);
$email = mysqli_real_escape_string($conn,$email);
$qualification=mysqli_real_escape_string($conn,$_POST['qualification']);
$job=mysqli_real_escape_string($conn,$_POST['prof']);
$institute=mysqli_real_escape_string($conn,$_POST['institute']);
$doctor=mysqli_real_escape_string($conn,$_POST['doctor']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$district=mysqli_real_escape_string($conn,$_POST['district']);
$gendertype=$_POST['gender'];
$gendertype= stripslashes($gendertype);
$gendertype = mysqli_real_escape_string($conn,$gendertype);
$martial=$_POST['martial'];
$martial= stripslashes($martial);
$martial = mysqli_real_escape_string($conn,$martial);
$aadhar=  mysqli_real_escape_string($conn,$_POST['aadhar']);
$dob=  mysqli_real_escape_string($conn,$_POST['bday']);
$phone=  mysqli_real_escape_string($conn,$_POST['telephone']);
$pincode=  mysqli_real_escape_string($conn,$_POST['pin']);
$yearpassed=  mysqli_real_escape_string($conn,$_POST['year']);
$age=mysqli_real_escape_string($conn,$_POST['age']);
$sql = ("INSERT INTO nurseregist(firstname,lastname,fathername,mothername,email,qualification,jobtype,institute,headdoctor,address,district,gender,martial,aadhar,dob,phone,pincode,yearpassed,age) VALUES ('$firstname','$lastname','$fathername','$mothername','$email','$qualification','$job','$institute','$doctor','$address','$district','$gendertype','$martial','$aadhar','$dob','$phone','$pincode','$yearpassed','$age')");
$sql1= ("INSERT INTO nurselogin (username,password) VALUES ('$email','$pincode')");


if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
if (!mysqli_query($conn,$sql1))
  {
  die('Error: ' . mysqli_error($conn));
  }
header("location: nurselogin.php");
mysqli_close($conn)
?>
</body>
</html>
