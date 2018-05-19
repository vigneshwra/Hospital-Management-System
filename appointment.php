<html>
<style>
.fwimage2
{
	background-image:url(https://cdn.pixabay.com/photo/2018/01/31/09/42/people-3120717_1280.jpg);
	width:100%;
	height:100%;
	background-repeat:no-repeat;
	background-size:auto;
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
<script src="appointmentvalidate.js">
</script>
<body>
<header>
<nav>
<h1>Folio Basis </h1>
<ul id="nav">
<li><a class="homered" href="selectpatientoption.php">HOME</a></li>
</ul>
</nav>
<na>
<ul id="na">
<li><a class="homelink" href="patientlogout.php">LOG OUT</a></li>
</ul>
</na>
</header>
<div class="divider">
</div>
<div class="fwimage2">
<div class="container">
<div class="text-block">   
<div id="contact-form" class="clearfix">

    <h1>Appointment</h1>
    <form method="post" action="appointmentinsert.php" onsubmit="return validateFunction()" name="appoint">
		<div class="row">
		<div class="column">
  		<label for="name">Name:<span class="required">*</span></label>	
		 <input type="text" id="name" name="name" value="" />
  		<label for="name">	Email: <span class="required">*</span></label>	
		 <input type="text" id="email" name="email" value="" />
		 <label for="phone">	Phone Number: </label>	
		 <input type="text" id="phone" name="phone" value="" />
		 <label for="timing">Timing: <span class="required">*</span></label>
              <select id="timing" name="timing">
            <option value="Morning">Morning</option>
            <option value="Afternoon">Afternoon</option>
            <option value="Evening">Evening</option>
        </select>
		<label for="name">	Doctor Name: </label>	
		 <input type="text" id="name" name="dname" value="" />
		</div>
		<div class="column1">
		<label for="dob">Date: <span class="required">*</span></label>
		<input type="date" name="visit" max="3000-12-31"><br><br>
	  <label for="Department">Department: <span class="required">*</span></label>
              <select id="Department" name="department">
            <option value="General">General</option>
            <option value="Neurosurgery">Neurosurgery</option>
            <option value="Surgery Clinic">Surgery</option>
            <option value="ENT">ENT</option>
            <option value="Oncology">Oncology</option>
        </select>
		 <label for="insurance">Insurance </label>
        <textarea id="insurance" name="insurance" placeholder="Enter Any Insurance If you can Apply"  data-minlength="60"></textarea>
         
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