<html>
<head>
<title>Attender Register</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="nursereg.css">
</head>
<body>
<header>
<nav>
<h1>Folio Basis </h1>
<ul id="nav">
<li><a class="homered" href="nursehome.php">HOME</a></li>
</ul>
</nav>
</header>
<script src="validatenurse.js">
</script>

<div class="divider">
</div>
<div class="fimage3"></div>
<div class="container">
<div class="text-block"> 
<div id="contact-form" class="clearfix">
    <h1>SIGNUP - Attender Registration</h1>
    <form method="post" action="attenderregister.php" name="attenderregist" onsubmit="return validateForm()">
        <label for="name"> First Name: <span class="required">*</span></label>
        <input type="text" id="name" name="firstname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
	<label for="name"> Last Name: <span class="required">*</span></label>
        <input type="text" id="name" name="lastname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
	<label for="fname"> Father Name: <span class="required">*</span></label>
        <input type="text" id="fname" name="fname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
	<label for="mname"> Mother Name: <span class="required">*</span></label>
        <input type="text" id="mname" name="mname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
        <label for="email">Email Address: </label>
        <input type="text" id="email" name="email" value="" placeholder="johndoe@example.com"  />
	<label for="aadhar">Aadhar Card Number: <span class="required">*</span></label></label>
        <input type="number" id="aadhar" name="aadhar" value="" />
	<label for="name"> Qualification: <span class="required">*</span></label>
        <input type="text" id="name" name="qualification" value="" placeholder="M.B.B.S/M.S/B.sc" required="required" autofocus="autofocus" />
	<label for="prof">Job Type: <span class="required">*</span></label>
        <input type="text" id="prof" name="prof" value="" placeholder="Teacher" required="required" autofocus="autofocus" />
	<label for="name"> Institute: <span class="required">*</span></label>
        <input type="text" id="name" name="institute" value="" placeholder="College Name" required="required" autofocus="autofocus" />
		
		<label for="name"> Year Passed: <span class="required">*</span></label>
        <input type="number" id="name" name="year" value="" placeholder="upto 2015" required="required" autofocus="autofocus" />
		
		<label for="name"> Doctor Surveillance: <span class="required">*</span></label>
        <input type="text" id="name" name="doctor" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
		
		  <label for="gender">Gender: <span class="required">*</span></label>
              <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
		
		 <label for="martial">Martial Status: <span class="required">*</span></label>
              <select id="martial" name="martial">
            <option value="single">Married</option>
            <option value="committed">Not Married</option>
        </select>
		
	 <label for="dob">Date Of Birth: <span class="required">*</span></label>
      <input type="date" name="bday" max="3000-12-31"><br><br>
	  
	   <label for="age">Age: <span class="required">*</span></label>
	  <input type="number" name="age" min="0" max="150">
         
        <label for="telephone">Phone Number: <span class="required">*</span></label></label>
        <input type="tel" id="telephone" name="telephone" value="" />
         
        
         
        <label for="address">Address: <span class="required">*</span></label>
        <textarea id="address" name="address" placeholder="Your address must be lesser than 60 charcters" required="required" data-minlength="60"></textarea>
         
		         <label for="district">District: <span class="required">*</span></label></label>
        <input type="text" id="district" name="district" value="" />
		
		        <label for="pin">Pincode: <span class="required">*</span></label></label>
        <input type="number" id="pin" name="pin" value="" />
		 
        <span id="loading"></span>
        <input type="submit" value="Submit" id="submit-button" />
        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
    </form>
</div>
</div>
	
	</div>
</body>
</html>