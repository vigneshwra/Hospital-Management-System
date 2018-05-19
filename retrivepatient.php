<html>
<style>
.fwimage2
{
	background-image:url(https://cdn.pixabay.com/photo/2018/01/31/09/42/people-3120717_1280.jpg);
	width:100%;
	height:100%;
	background-repeat:no-repeat;
	background-size:cover;
	margin:0px;
	padding:0px;
}
</style>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PATIENT RECORD</title>

<link rel="stylesheet" href="style_2.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<nav>
<h1>Folio Basis </h1>
<ul id="nav">
<li><a class="homered" href="selectpatientoption.php">BACK</a></li>

</ul>
</nav>
<na>
<ul id="na">
<li><a class="homelink" href="patientlogout.php">LOG OUT</a></li>
</ul>
</na>
<?php
session_start();
$conn = mysqli_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysqli_select_db($conn,"hms");
  $username=$_SESSION["user_id"];
  $sql="Select * from inpatient where phone='$username'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
mysqli_close($conn)
?>

</header>

<div class="divider">
</div>
<div class="fwimage2">
<div class="container">
<div class="text-block"> 
<div id="contact-form" class="clearfix">
<h1>Patient Record</h1>

<form method="post" name="myforms" >
<div class="row">
  <div class="column">
  			<label for="name"> Hospital Name: </label>	
			<input type="text" id="name" name="hosname" value="<?php echo $row['hospitalname']; ?>"/>
	    	<label for="dob">Date Visited:</label>
			<input type="date" name="visit" value="<?php echo $row['enroll']; ?>" max="3000-12-31"><br><br>
			<label for="name"> Doctor Incharge: </label>
			<input type="text" id="name" name="dname" value="<?php echo $row['doctor']; ?>" autofocus="autofocus" />				
			<label for="name"> Attender Incharge: 				</label>
			<input type="text" id="name" name="aname" value="<?php echo $row['attender']; ?>"  required="required" autofocus="autofocus" />		
			<label for="name">Time IN: </label>
			<input type=" number" id="number" name="timei" value="<?php echo $row['intime']; ?>"  required="required" autofocus="autofocus" />		
			<label for="name"> History of Visit: </label>	
			<input type="text" id="name" name="his" value="<?php echo $row['history']; ?>" />
			<label for="name"> Chief Complaint: (any) </label>	
				1) <input type="text" id="name" name="comp1" value="<?php echo $row['cheif1']; ?>" />	<br/>
				2) <input type="text" id="name" name="comp2" value="<?php echo $row['cheif2']; ?>" />
			<label for="name">Time Out: </label>
			<input type=" number" id="number" name="timeo" value="<?php echo $row['outtime']; ?>"  required="required" autofocus="autofocus" />
			<label for="name"> Height: (cms)</label>
			<input type="number" id="name" name="hname" value="<?php echo $row['height']; ?>" />
			<label for="name"> Weight: (Kg)</label>
			<input type="number" id="name" name="wname" value="<?php echo $row['weight']; ?>" />
			<label for="name"> Temperature: (deg C)</label>
			<input type="number" id="name" name="tempname" value="<?php echo $row['temperature']; ?>" />		
			<label for="name"> Pulse rate: (/min)</label>
			<input type="number" id="name" name="pname" value="<?php echo $row['pulse']; ?>" />
			<label for="name"> Respiratory rate: (/min)</label>
			<input type="number" id="name" name="rname" value="<?php echo $row['respiratory']; ?>" />
			<h3><font-size="25px"><align="left">GENERAL PROBLEMS</align></font-size></h3>	
			<label for="name"> Issues: </label>	
				1) <input type="text" id="name" name="i1" value="<?php echo $row['issues1']; ?>" /><br/>
				2) <input type="text" id="name" name="i2" value="<?php echo $row['issues2']; ?>" /><br/>
				3) <input type="text" id="name" name="i3" value="<?php echo $row['issues3']; ?>" />
			<h3><font-size="25px"><align="left">REVIEW OF SYSTEMS:</align></font-size></h3>
			<label for="name"> Common: </label>	
				1) <input type="text" id="name" name="e1" value="<?php echo $row['common1']; ?>" /><br/>
				2) <input type="text" id="name" name="e2" value="<?php echo $row['common2']; ?>" /><br/>
				3) <input type="text" id="name" name="e3" value="<?php echo $row['common3']; ?>" />
			<label for="name"> Physical Problems: </label>	
				1) <input type="text" id="name" name="p1" value="<?php echo $row['physical1']; ?>" /><br/>
				2) <input type="text" id="name" name="p2" value="<?php echo $row['physical2']; ?>" /><br/>
				3) <input type="text" id="name" name="p3" value="<?php echo $row['physical3']; ?>" />
			<label for="name"> Clinical Test Report: </label>	
				1) <input type="text" id="name" name="c1" value="<?php echo $row['clinical1']; ?>" /><br/>
				2) <input type="text" id="name" name="c2" value="<?php echo $row['clinical2']; ?>" /><br/>
				3) <input type="text" id="name" name="c3" value="<?php echo $row['clinical3']; ?>" />
		</div>
			<div class="column1">
				<h3><font-size="25px"><align="left">PATIENT INFO:</align></font-size></h3>
				<label for="aadhar">Aadhar Card Number: </label></label>
				<input type="number" id="aadhar" name="aadhar" value="<?php echo $row['aadhar']; ?>" />
				<label for="name"> First Name: </label>
				<input type="text" id="name" name="firstname" value="<?php echo $row['firstname']; ?>"  required="required" autofocus="autofocus" />		
				<label for="name"> Gender: </label>
				<input type="text" id="name" name="gender" value="<?php echo $row['gender']; ?>"  required="required" autofocus="autofocus" />		         
				<label for="telephone">Phone Number: </label></label>
				<input type="tel" id="telephone" name="telephone" value="<?php echo $row['phone']; ?>" />
				<label for="name"> Age: </label>
				<input type="number" id="name" name="age" value="<?php echo $row['age']; ?>" />
				<label for="name"> Mode of patient: </label>
				<input type="text" id="name" name="mpname" value="<?php echo $row['mode']; ?>"  required="required" autofocus="autofocus" />
			</div>
		</div>
        <span id="loading"></span>
        <input type="submit" value="Submit" id="submit-button" />
        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
    </form>

	</div>
</div>
</div>

	</body>
</html>