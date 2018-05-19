<html>
<style>
.container {
    position: relative;
    font-family: Arial;
}

.text-block {
    position: absolute;
	top : 90px;
    bottom: 180px;
    right: 150px;
	left: 100px;
    padding-left: 20px;
    padding-right: 20px;
}

.fwimage3
{
	background-image:url(https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5b80eacd43b58afc9e5b88995715104a&auto=format&fit=crop&w=1035&q=80);
	width:100%;
	height:100%;
	background-repeat:no-repeat;
	background-size:cover;
	margin:0px;
	padding:0px;
}


.img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}

#contact-form {
    background-color:white;
    width:465px;
    padding:20px;
    margin: 50px auto;    
	float : left;
    border: 2px solid #8FB5C1;
    -moz-border-radius:15px;
    -webkit-border-radius:15px;
    border-radius:15px;
    position:relative;
}
 
#contact-form h1 {
    font-size:42px;
}
 
#contact-form h2 {
    margin-bottom:15px;
    font-style:italic;
    font-weight:normal;
}
 
#contact-form input, 
#contact-form select, 
#contact-form textarea, 
#contact-form label {
    font-size:15px;
    margin-bottom:2px;
}
 
#contact-form input, 
#contact-form select, 
#contact-form textarea {
    width:450px;
    border: 1px solid #CEE1E8;
    margin-bottom:20px;
    padding:4px;
}
 
#contact-form input:focus, 
#contact-form select:focus, 
#contact-form textarea:focus {
    border: 1px solid #AFCDD8;
    background-color: #EBF2F4;
}
 
#contact-form textarea {
    height:150px;
    resize: none;
}
 
#contact-form label {
    display:block;
}
 
#contact-form .required {
    font-weight:bold;
    color:#F00;    
}
 
#contact-form #submit-button {
    width: 100px;
    background-color:#333;
    color:#FFF;
    border:none;
    display:block;
    float:right;
    margin-bottom:0px;
    margin-right:6px;
    background-color:#8FB5C1;
    -moz-border-radius:8px;
}
 
#contact-form #submit-button:hover {
    background-color: #A6CFDD;
}
 
#contact-form #submit-button:active {
    position:relative;
    top:1px;
}
 
#contact-form #loading {
    width:32px;
    height:32px;
    background-image:url(../img/loading.gif);
    display:block;
    position:absolute;
    right:130px;
    bottom:16px;
    display:none;
}
 
#errors {
    border:solid 1px #E58E8E;
    padding:10px;
    margin:25px 0px;
    display:block;
    width:437px;
    -webkit-border-radius:8px;
    -moz-border-radius:8px;
    border-radius:8px;
    background:#FFE6E6 url(../img/cancel_48.png) no-repeat 405px center;
    display:none;
}
 
#errors li {
    padding:2px;
    list-style:none;    
}
 
#errors li:before {
    content: ' - ';    
}
 
#errors #info {
    font-weight:bold;
}
 
#errors #info:before {
    content: '';    
}
 
#success {
    border:solid 1px #83D186;
    padding:25px 10px;
    margin:25px 0px;
    display:block;
    width:437px;
    -webkit-border-radius:8px;
    -moz-border-radius:8px;
    border-radius:8px;
    background:#D3EDD3 url(../img/accepted_48.png) no-repeat 405px center;
    font-weight:bold;
    display:none;
}
 
#errors.visible, #success.visible {
    display:block;    
}
 
#req-field-desc {
    font-style:italic;
}
 
/* Remove box shadow firefox, chrome and opera put around required fields. It looks rubbish. */
input:required, textarea:required {
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
}
 
/* Normalize placeholder styles */
 
/* chrome, safari */
::-webkit-input-placeholder {
    color:#CCC;
    font-style:italic;
}
 
/* mozilla */
input:-moz-placeholder, textarea:-moz-placeholder {
    color:#CCC;
    font-style:italic;
}
 
/* ie (faux placeholder) */
input.placeholder-text, textarea.placeholder-text  { 
    color:#CCC;
    font-style:italic;


	
	}
</style>



<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<nav>
<h1>Folio Basis </h1>
<ul id="nav">
<li><a class="homered" href="frontht.php">HOME</a></li>
<li><a class="homeblack" href="#">HOSPITALS</a></li>
<li><a class="homeblack" href="#">SCHEMES</a></li>
<li><a class="homeblack" href="#">CONTACT</a></li>
</ul>
</nav>
</header>

<div class="divider">
</div>
<div class="fimage3"></div>
<div class="container">
  <div class="text-block"> 
    
 
   



<div id="contact-form" class="clearfix">

    <h1>SIGNUP - Patient Registration </h1>
    <form method="post" action="patientadd.php" name="myforms">
        <label for="name"> First Name: <span class="required">*</span></label>
        <input type="text" id="name" name="firstname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
		
		
		
		<label for="name"> Last Name: <span class="required">*</span></label>
        <input type="text" id="name" name="lastname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
		
				<label for="fname"> Father Name: <span class="required">*</span></label>
        <input type="text" id="fname" name="fname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
		
				<label for="mname"> Mother Name: <span class="required">*</span></label>
        <input type="text" id="mname" name="mname" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
         
		 
        <label for="email">Email Address: </label>
        <input type="email" id="email" name="email" value="" placeholder="johndoe@example.com"  />
		
				         <label for="aadhar">Aadhar Card Number: <span class="required">*</span></label></label>
        <input type="number" id="aadhar" name="aadhar" value="" />
		
		 <label for="prof">Job Type: <span class="required">*</span></label>
         <input type="text" id="prof" name="prof" value="" placeholder="Teacher" required="required" autofocus="autofocus" />
		
		  <label for="gender">Gender: <span class="required">*</span></label>
              <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
		
		 <label for="martial">Martial Status: <span class="required">*</span></label>
              <select id="martial" name="martial">
            <option value="Married">Married</option>
            <option value="Not Married">Not Married</option>
        </select>
		
	 <label for="dob">Date Of Birth: <span class="required">*</span></label>
      <input type="date" name="bday" max="3000-12-31"><br><br>
	  
	   <label for="age">Age: <span class="required">*</span></label>
	  <input type="number" name="age" min="0" max="150">
         
        <label for="telephone">Phone Number: <span class="required">*</span></label></label>
        <input type="text" id="telephone" name="telephone" value="" />
         
        
         
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