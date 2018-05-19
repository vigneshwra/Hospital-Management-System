<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<title>Payment_mode</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="stylenurse.css">
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
<h2></h2>    
 
   



<div id="contact-form" class="clearfix">

		<div class="row">
  <div class="col-75">
  <h1>CHECKOUT REPORT </h1>
    <form method="post" action="process.php" name="myforms">
      <h4>Details: <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i><td><input type="number" name="txt_name" placeholder="No of entries"></td> <b></b></span></h4>
	  <table>
  <tr>
    <th>S.No</th>
    <th>List</th>
    <th>Price</th>
  </tr>
  <tr>
       <td><input type="text" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="List name"></td>
    <td><input type="text" name="txt_name" placeholder="Amount"></td>
  </tr>
  
   <tr>
       <td><input type="text" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="List name"></td>
    <td><input type="text" name="txt_name" placeholder="Amount"></td>
  </tr>
  
   <tr>
       <td><input type="text" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="List name"></td>
    <td><input type="text" name="txt_name" placeholder="Amount"></td>
  </tr>
  
   <tr>
       <td><input type="text" name="txt_name" placeholder=""></td>
    <td><input type="text" name="txt_name" placeholder="List name"></td>
    <td><input type="text" name="txt_name" placeholder="Amount"></td>
  </tr>
</table>
      <hr>
      <p>Total <span class="price" style="color:black"><b><input type="number" name="txt_name" placeholder="Total Amount"></b></span></p>
    </div>
		
		<div class="col-25">
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


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Pincode</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  

</body>
</html>
