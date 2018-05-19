function validateFunction(){
var c=document.forms["appoint"]["email"].value;
  var atpos=c.indexOf("@kct");
  var dotpos=c.lastIndexOf(".");
  if(atpos<1||dotpos<atpos+2||atpos+2>=c.length)
  {
  alert("Invalid Email");
  return false;
  }
  
	var phoneno = /^\d{10}$/;
	var f = document.forms["appoint"]["phone"].value;
	if(f.match(phoneno))
	{
		return true;
	}
	else
	{
		alert(" Your Mobile Number must be 1 to 10 Integers");
	    return false;
	}
var z=document.forms["appoint"]["timing"].value;
  if(z == ""){
   alert("plesae select a timing schedule");
   return false;
}

var a=document.forms["appoint"]["dname"].value;
  if(a == ""){
   alert("plesae enter a valid doctor name");
   return false;
}
var b=document.forms["appoint"]["visit"].value;
  if(b == ""){
   alert("plesae select a date going to visit");
   return false;
}
var c=document.forms["appoint"]["department"].value;
  if(c == ""){
   alert("plesae select your concern area of specialist");
   return false;
}

}