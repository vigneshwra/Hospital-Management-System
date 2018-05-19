function validateFunction(){
var phoneno = /^\d{10}$/;
var c=document.forms["myforms"]["username"].value;
  if(c==" ")
  {
	  alert("Enter a valid Username");
	  return false;
  }
if(c.match(phoneno))
	{
		return true;
	}
	else
	{
		alert("Enter a Valid  Username");
	    return false;
	}

var z=document.forms["myforms"]["password"].value;
 if(z.length != 6 )
 {
 alert("Enter a Valid Password");
 return false;
 }
}