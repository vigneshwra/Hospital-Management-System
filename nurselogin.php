<html>
<head>
<title>Attender Login</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style_base.css">
</head>
<script src="loginvalidate.js">
</script>
<body>
<header>
<nav>
<h1>Folio Basis </h1>
<ul id="nav">
<li><a class="homered" href="frontht.php">HOME</a></li>
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
<input type="button" value="Register"  onclick="window.location.href='nursesign.php'" />
</form>
    <h1>Attender Login </h1>
    <form method="post" action="validatenurse.php" onsubmit="return validateFunction()" name="myforms">
        <label for="name"> User Name <span class="required">*</span></label>
        <input type="text" id="name" name="username" value="" required="required" autofocus="autofocus" />
        <label for="name"> Password <span class="required">*</span></label>
        <input type="password" id="name" name="password" value="" autofocus="autofocus" />
        <span id="loading"></span>
        <input type="submit" value="Submit" id="submit-button" />
        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
    </form>
</div>
</div>
	
	</div>
</body>
</html> 