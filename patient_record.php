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
<title>Record_maintain</title>

<link rel="stylesheet" href="style_2.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<nav>
<h1>Folio Basis </h1>
<ul id="nav">
<li><a class="homered" href="nursehome.php">HOME</a></li>
<li><a class="homeblack" href="#">PATIENT RECORD</a></li>
<li><a class="homeblack" href="#">RECORD UPDATION</a></li>
</ul>
</nav>
</header>

<div class="divider">
</div>
<div class="fwimage2">
<div class="container">

  <div class="text-block"> 
    
 
   



<div id="contact-form" class="clearfix">

    <h1>Patient Record - IN/OUT PATIENT</h1>
    <form method="post" action="patientprocess.php" name="myforms">

		
		
		
		<div class="row">
  <div class="column">
  			<label for="name"> Hospital Name: </label>	
		 <input type="text" id="name" name="hosname" value="" />
	    	 <label for="dob">Date Visited: <span class="required">*</span></label>
      <input type="date" name="visit" max="3000-12-31"><br><br>
		<label for="name"> Doctor Incharge: </label>
        <input type="text" id="name" name="dname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />				
		
				<label for="name"> Attender Incharge: 				</label>
        <input type="text" id="name" name="aname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />		
		
				<label for="name">Time IN: </label>
        <input type=" number" id="number" name="timei" value="" placeholder="08:00" required="required" autofocus="autofocus" />		
        
			    	 <label for="dob">Date Discharged: <span class="required">*</span></label>
      <input type="date" name="discharge" max="3000-12-31"><br><br>
	
<label for="name"> History of Visit: </label>	
	 <input type="text" id="name" name="his" value="" />

<label for="name"> Chief Complaint: (any) </label>	
		1) <input type="text" id="name" name="comp1" value="" />	<br/>
		2) <input type="text" id="name" name="comp2" value="" />

		
	  				<label for="name">Time Out: </label>
        <input type=" number" id="number" name="timeo" value="" placeholder="08:00" required="required" autofocus="autofocus" />
				
				<label for="name"> No of days Stay: </label>
        <input type="number" id="name" name="stayname" value="" />
				<label for="name"> Room number: </label>
        <input type="number" id="name" name="roomname" value="" />		
				<label for="name"> Type of ward: </label>
        <input type="number" id="name" name="wname" value="" />
	<label for="name"> Visitor Incharge: </label>
        <input type="text" id="name" name="visitorname" value="" placeholder="" required="required" autofocus="autofocus" />	
<label for="name"> Height: (cms)</label>
        <input type="number" id="name" name="hname" value="" />

<label for="name"> Weight: (Kg)</label>
        <input type="number" id="name" name="wname" value="" />

<label for="name"> Temperature: (deg C)</label>
        <input type="number" id="name" name="tempname" value="" />		
		
		<label for="name"> Pulse rate: (/min)</label>
        <input type="number" id="name" name="pname" value="" />
		
		<label for="name"> Respiratory rate: (/min)</label>
        <input type="number" id="name" name="rname" value="" />
		
		<label for="name"> BP Systolic: (mm Hg) </label>
        <input type="number" id="name" name="bpsname" value="" />
		
		<label for="name"> BP Diastolic: (mm Hg) </label>
        <input type="number" id="name" name="bphname" value="" />
		
		<label for="name"> Cholesterol: (mg/Kg) </label>
        <input type="number" id="name" name="chname" value="" />
		
		<label for="name"> BG Random: (mg/Kg) </label>
        <input type="number" id="name" name="bgname" value="" />
		
		<label for="name"> Breast exam: </label>
        <input type="number" id="name" name="brname" value="" />
		
		<label for="name"> Mammogram: </label>
        <input type="number" id="name" name="mmname" value="" />
		
		<h3><font-size="25px"><align="left">GENERAL PROBLEMS</align></font-size></h3>
		
	<label for="name"> Issues: </label>	
		1) <input type="text" id="name" name="i1" value="" /><br/>
		2) <input type="text" id="name" name="i2" value="" /><br/>
		3) <input type="text" id="name" name="i3" value="" />
		
			<label for="name"> Allergies: </label>	
		1) <input type="text" id="name" name="a1" value="" /><br/>
		2) <input type="text" id="name" name="a2" value="" /><br/>
		3) <input type="text" id="name" name="a3" value="" />
		
		<h3><font-size="25px"><align="left">REVIEW OF SYSTEMS:</align></font-size></h3>
		<label for="name"> Eyes: </label>	
		1) <input type="text" id="name" name="e1" value="" /><br/>
		2) <input type="text" id="name" name="e2" value="" /><br/>
		3) <input type="text" id="name" name="e3" value="" />
		
			<label for="name"> Ear/Nose/Throat: </label>	
		1) <input type="text" id="name" name="t1" value="" /><br/>
		2) <input type="text" id="name" name="t2" value="" /><br/>
		3) <input type="text" id="name" name="t3" value="" />	
		
		<label for="name"> Cardiovascular: </label>	
		1) <input type="text" id="name" name="cd1" value="" /><br/>
		2) <input type="text" id="name" name="cd2" value="" /><br/>
		3) <input type="text" id="name" name="cd3" value="" />
		
			<label for="name"> Gastrointestinal: </label>	
		1) <input type="text" id="name" name="gi1" value="" /><br/>
		2) <input type="text" id="name" name="gi2" value="" /><br/>
		3) <input type="text" id="name" name="gi3" value="" />		

		<label for="name"> Genitourinary: </label>	
		1) <input type="text" id="name" name="gu1" value="" /><br/>
		2) <input type="text" id="name" name="gu2" value="" /><br/>
		3) <input type="text" id="name" name="gu3" value="" />
		
			<label for="name"> Musculoskeletal: </label>	
		1) <input type="text" id="name" name="ms1" value="" /><br/>
		2) <input type="text" id="name" name="ms2" value="" /><br/>
		3) <input type="text" id="name" name="ms3" value="" />	
		
				<label for="name"> Skin: </label>	
		1) <input type="text" id="name" name="sk1" value="" /><br/>
		2) <input type="text" id="name" name="sk2" value="" /><br/>
		3) <input type="text" id="name" name="sk3" value="" />
		
			<label for="name"> Neurologic: </label>	
		1) <input type="text" id="name" name="nl1" value="" /><br/>
		2) <input type="text" id="name" name="nl2" value="" /><br/>
		3) <input type="text" id="name" name="nl3" value="" />	
		
				<label for="name"> Psychiatric: </label>	
		1) <input type="text" id="name" name="pc1" value="" /><br/>
		2) <input type="text" id="name" name="pc2" value="" /><br/>
		3) <input type="text" id="name" name="pc3" value="" />
		
			<label for="name"> Endocrine: </label>	
		1) <input type="text" id="name" name="ec1" value="" /><br/>
		2) <input type="text" id="name" name="ec2" value="" /><br/>
		3) <input type="text" id="name" name="ec3" value="" />	
		
				<label for="name"> Heme/Lymphatic: </label>	
		1) <input type="text" id="name" name="hl1" value="" /><br/>
		2) <input type="text" id="name" name="hl2" value="" /><br/>
		3) <input type="text" id="name" name="hl3" value="" />
		
			<label for="name"> Allergic/Immunologic: </label>	
		1) <input type="text" id="name" name="ai1" value="" /><br/>
		2) <input type="text" id="name" name="ai2" value="" /><br/>
		3) <input type="text" id="name" name="ai3" value="" />	
		</div>
		<div class="column">
		<label for="aadhar">Aadhar Card Number: </label></label>
        <input type="number" id="aadhar" name="aadhar" value="" />
		<label for="name"> First Name: </label>
        <input type="text" id="name" name="firstname" value="" placeholder="" required="required" autofocus="autofocus" />		
		<label for="name"> Gender: </label>
        <input type="text" id="name" name="gender" value="" placeholder="" required="required" autofocus="autofocus" />		         
        <label for="telephone">Phone Number: </label></label>
        <input type="tel" id="telephone" name="telephone" value="" />
		
		<label for="name"> Age: </label>
        <input type="number" id="name" name="age" value="" />
        <label for="name"> Mode of patient: </label>
        <input type="text" id="name" name="mpname" value="" placeholder="In/Out patient" required="required" autofocus="autofocus" />
		
		<label for="name"> Doctor Incharge </label>
        <input type="text" id="name" name="dname" value="" placeholder="" required="required" autofocus="autofocus" />
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