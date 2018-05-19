<?php
$conn = mysqli_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db($conn,"hms");
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email = stripslashes($_POST['email']);
$email = mysqli_real_escape_string($conn,$email);
$phone=  mysqli_real_escape_string($conn,$_POST['phone']);
$doctor=mysqli_real_escape_string($conn,$_POST['dname']);
$visit=  mysqli_real_escape_string($conn,$_POST['visit']);	
$department=$_POST['department'];
$department= stripslashes($department);
$department = mysqli_real_escape_string($conn,$department);
$timing=$_POST['timing'];
$timing= stripslashes($timing);
$timing = mysqli_real_escape_string($conn,$timing);
$insurance=  mysqli_real_escape_string($conn,$_POST['insurance']);	
$sql=("INSERT INTO appointment(name,email,phone,timing,doctor,date,department,insurance) values ('$name','$email','$phone','$timing','$doctor','$visit','$department','$insurance')");
mail($email,'Appointment Confirmation','Your appointment has been confirmed.','From: Freak@freakzoid.com');
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: appointment.php");
mysqli_close($conn)
?>