<HTML>
<BODY>
<?php
$conn = mysqli_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db($conn,"hms");
$hospitalname=mysqli_real_escape_string($conn,$_POST['hosname']);
$datevisited=mysqli_real_escape_string($conn,$_POST['visit']);
$doctorname=mysqli_real_escape_string($conn,$_POST['dname']);
$attendername=mysqli_real_escape_string($conn,$_POST['aname']);
$intime = mysqli_real_escape_string($conn,$_POST['timei']);
$history=mysqli_real_escape_string($conn,$_POST['his']);
$cheif1=mysqli_real_escape_string($conn,$_POST['comp1']);
$cheif2=mysqli_real_escape_string($conn,$_POST['comp2']);
$outtime=mysqli_real_escape_string($conn,$_POST['timeo']);
$height=mysqli_real_escape_string($conn,$_POST['hname']);
$weight=mysqli_real_escape_string($conn,$_POST['wname']);
$temperature = mysqli_real_escape_string($conn,$_POST['tempname']);
$pulserate = mysqli_real_escape_string($conn,$_POST['pname']);
$respiratory=  mysqli_real_escape_string($conn,$_POST['rname']);
$issue1=  mysqli_real_escape_string($conn,$_POST['i1']);
$issue2=  mysqli_real_escape_string($conn,$_POST['i2']);
$issue3=  mysqli_real_escape_string($conn,$_POST['i3']);
$common1= mysqli_real_escape_string($conn,$_POST['e1']);
$common2= mysqli_real_escape_string($conn,$_POST['e2']);
$common3= mysqli_real_escape_string($conn,$_POST['e3']);
$physical1= mysqli_real_escape_string($conn,$_POST['p1']);
$physical2= mysqli_real_escape_string($conn,$_POST['p2']);
$physical3= mysqli_real_escape_string($conn,$_POST['p3']);
$clinical1 = mysqli_real_escape_string($conn,$_POST['c1']);
$clinical2 = mysqli_real_escape_string($conn,$_POST['c2']);
$clinical3 = mysqli_real_escape_string($conn,$_POST['c3']);
$aadhar= mysqli_real_escape_string($conn,$_POST['aadhar']);
$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
$gender= mysqli_real_escape_string($conn,$_POST['gender']);
$phone=  mysqli_real_escape_string($conn,$_POST['telephone']);
$mode= mysqli_real_escape_string($conn,$_POST['mpname']);
$age=mysqli_real_escape_string($conn,$_POST['age']);
$sql = ("INSERT INTO outpatient(hospitalname,datevisited,doctor,attender,intime,history,cheifcomp1,cheifcomp2,outtime,height,weight,temperature,pulserate,respiratory,issues1,issues2,issues3,common1,common2,common3,physical1,physical2,physical3,clinical1,clinical2,clinical3,aadhar,firstname,gender,phone,age,mode) VALUES ('$hospitalname','$datevisited','$doctorname','$attendername','$intime','$history','$cheif1','$cheif2','$outtime','$height','$weight','$temperature','$pulserate','$respiratory','$issue1','$issue2','$issue3','$common1','$common2','$common3','$physical1','$physical2','$physical3','$clinical1','$clinical2','$clinical3','$aadhar','$firstname','$gender','$phone','$age','$mode')");
$email = stripslashes($_POST['email']);
$email = mysqli_real_escape_string($conn,$email);
mail($email,'Record Update','Dear Patient, Your Medical Records Has been updated.','From: Freak@freakzoid.com');
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }

header("Location:selectpatient.php");

mysqli_close($conn)
?>
</body>
</html>