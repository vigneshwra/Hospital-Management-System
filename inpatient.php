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
<li><a class="homered" href="selectpatient.php">BACK</a></li>

</ul>
</nav>
</header>

<div class="divider">
</div>
<div class="fwimage2">
<div class="container">

  <div class="text-block"> 
    
 
   



<div id="contact-form" class="clearfix">

    <h1>Patient Record - IN PATIENT</h1>
    <form method="post" action="inpinsert.php" name="myforms">

		
		
		
		<div class="row">
  <div class="column">
  			<label for="name"> Hospital Name: </label>	
		 <input type="text" id="name" name="hosname" value="" />
	    	 <label for="dob">Enroll Date: <span class="required">*</span></label>
      <input type="date" name="visit" max="3000-12-31"><br><br>
		<label for="name"> Doctor Incharge: </label>
        <input type="text" id="name" name="dname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />				
		
				<label for="name"> Attender Incharge: 				</label>
        <input type="text" id="name" name="aname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />		
		
				<label for="name">Time IN: </label>
        <input type=" number" id="number" name="timei" value="" placeholder="08:00" required="required" autofocus="autofocus" />	
		<label for="Admit type">Admit type <span class="required">*</span></label>
              <select id="admit" name="admittype">
            <option value="1">Planned (Routine)</option>
            <option value="2">Urgent (Direct Admit or Transfer)</option>
            <option value="3">Emergent (Through ED)</option>
        </select>
		<label for="details">Does the member have an government insurance?<span class="required">*</span></label>
              <select id="insurance" name="insurance">
            <option value="1">YES</option>
            <option value="2">NO</option>
        </select><br>
	<label for="name"> Other health insurance policy name: </label>	
	 <input type="text" id="name" name="otherpolicy" value="" />
	 
	 <label for="name">Policy Number:</label>	
	 <input type="text" id="name" name="policynum" value="" />
	 
	 <label for="dob">Policy effective date:</label>
      <input type="date" name="policydate" max="3000-12-31"><br><br>
	 
<label for="name"> History of Visit: </label>	
	 <input type="text" id="name" name="his" value="" />

<label for="name"> Chief Complaint: (any) </label>	
		1) <input type="text" id="name" name="comp1" value="" />	<br/>
		2) <input type="text" id="name" name="comp2" value="" />

		
	  				<label for="name">Time Out: </label>
        <input type=" number" id="number" name="timeo" value="" placeholder="08:00" required="required" autofocus="autofocus" />
					
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
		
		<h3><font-size="25px"><align="left">GENERAL PROBLEMS</align></font-size></h3>
		
	<label for="name"> Issues: </label>	
		1) <input type="text" id="name" name="i1" value="" /><br/>
		2) <input type="text" id="name" name="i2" value="" /><br/>
		3) <input type="text" id="name" name="i3" value="" />
		
		<h3><font-size="25px"><align="left">REVIEW OF SYSTEMS:</align></font-size></h3>
		<label for="name"> Common: </label>	
		1) <input type="text" id="name" name="e1" value="" /><br/>
		2) <input type="text" id="name" name="e2" value="" /><br/>
		3) <input type="text" id="name" name="e3" value="" />
		
		<label for="name"> Physical Problems: </label>	
		1) <input type="text" id="name" name="p1" value="" /><br/>
		2) <input type="text" id="name" name="p2" value="" /><br/>
		3) <input type="text" id="name" name="p3" value="" />
		
		<label for="name"> Clinical Test Report: </label>	
		1) <input type="text" id="name" name="c1" value="" /><br/>
		2) <input type="text" id="name" name="c2" value="" /><br/>
		3) <input type="text" id="name" name="c3" value="" />
		
		</div>
		<div class="column1">
		<h3><font-size="25px"><align="left">PATIENT INFO:</align></font-size></h3>
		<label for="aadhar">Aadhar Card Number: </label></label>
        <input type="number" id="aadhar" name="aadhar" value="" />
		<label for="name"> First Name: </label>
        <input type="text" id="name" name="firstname" value="" placeholder="" required="required" autofocus="autofocus" />		
		<label for="name"> Gender: </label>
        <input type="text" id="name" name="gender" value="" placeholder="" required="required" autofocus="autofocus" />		         
        <label for="telephone">Phone Number: </label></label>
        <input type="tel" id="telephone" name="telephone" value="" />
	    <label for="dob">DOB: <span class="required">*</span></label>
        <input type="date" name="dob" max="3000-12-31"><br><br>
		<label for="Blood Group">Blood Group: <span class="reqired">*</span></label>
		<input type="text" id="Blood Group" name="bloodgroup" value="" />
		
		<label for="name"> Age: </label>
        <input type="number" id="name" name="age" value="" />
        <label for="name"> Mode of patient: </label>
        <input type="text" id="name" name="mpname" value="IN patient"  required="required" autofocus="autofocus" />
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