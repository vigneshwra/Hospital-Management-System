<!DOCTYPE html>
<html>
<head>
<style>




/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 600px; /* Should be removed. Only for demonstration */
}

.column1 {
    float: right;
    
    padding: 10px;
    height: 600px; /* Should be removed. Only for demonstration */
}


/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

table {
    font-family: arial, sans-serif;
    
    width: 0%;
}

td, th {
    border: 0px solid #dddddd;
  
    padding: 6px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.container {
    position: relative;
    font-family: Arial;
}

.text-block {
    position: absolute;
	top : 0px;
    bottom: 0px;
    left: 0px;
    padding-left: 20px;
    padding-right: 20px;
}

.img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}
.fwimage2
{
	background-image:url(https://images.unsplash.com/photo-1504439468489-c8920d796a29?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=08994392bc20449cb64841dd4f1457ff&auto=format&fit=crop&w=1051&q=80);
	width:100%;
	height:100%;
	background-repeat:no-repeat;
	background-size:cover;
	margin:0px;
	padding:0px;
}
#contact-form {
    background-color:white;
    width:1265px;
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
    width:250px;
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
    width: 70px;
    background-color:#333;
    color:#FFF;
    border:none;
    display:block;
    float:center;
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
<title>Pharmacy report</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<header>
<nav>
<h1>Folio Basis </h1>
<ul id="nav">
<li><a class="homered" href="#">HOME</a></li>
<li><a class="homeblack" href="#">HOSPITALS</a></li>
<li><a class="homeblack" href="#">SCHEMES</a></li>
<li><a class="homeblack" href="#">CONTACT</a></li>
</ul>
</nav>
<na>
<ul id="na">
<li><a class="homelink" href="#">SIGN IN</a></li>
</ul>
</na>
</header>

<div class="divider">
</div>
<div class="fwimage2">
<div class="container">

  <div class="text-block"> 
    
 
   



<div id="contact-form" class="clearfix">
		<div class="row">
  <div class="column">
    <h1>PHARMACY REPORT </h1>
    <form method="post" action="process.php" name="myforms">
<table>
  <tr>
    <th>S.No</th>
    <th>Tablets</th>
    <th>Quantity</th>
  </tr>
  <tr>
    <td><input type="number" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
  </tr>
  <tr>
    <td>    <input type="number" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
  </tr>
  <tr>
    <td><input type="number" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
  </tr>
  <tr>
    <td><input type="number" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
  </tr>
  <tr>
    <td><input type="number" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
  </tr>
  <tr>
    <td><input type="number" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
    <td><input type="text" name="txt_name" placeholder="Tablet name"></td>
  </tr>
</table>
		    <span id="loading"></span>
        <input type="submit" value="Submit" id="submit-button" />
       <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>    
			</div>
		
		<div class="column1">
		<h3>PATIENT INFO</h3>
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
	</form>
</div>
</div>
	
	</div>
</body>
</html>
