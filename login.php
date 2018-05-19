<html>

<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style_base.css">
</head>
<script src="patientlogin.js">
</script>
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
<div class="fwimage2">
<div class="container">

  <div class="text-block"> 
    
 
   



<div id="contact-form" class="clearfix">
<label><align="center">Have you not registered?
<form>
<input type="button" value="Register" onclick="window.location.href='samform.php'" />
</form></label>
    <h1>Patient Login </h1>
    <form method="post" action="patientvalidatelogin.php" onsubmit="return validateFunction()" name="myforms">
        <label for="name"> Username: <span class="required">*</span></label>
        <input type="text" id="name" name="username"  autofocus="autofocus" /> 
        <label for="telephone">Password: <span class="required">*</span></label></label>
        <input type="password" id="password" name="password" value="" />
        <span id="loading"></span>
        <input type="submit" value="Submit" id="submit-button" />
        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
    </form>
</div>
</div>
	
	</div>
</body>
</html>