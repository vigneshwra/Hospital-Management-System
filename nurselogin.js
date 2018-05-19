function validateFunction(){
var c=document.forms["myforms"]["username"].value;
  var atpos=c.indexOf("@");
  var dotpos=c.lastIndexOf(".");
  if(atpos<1||dotpos<atpos+2||atpos+2>=c.length)
  {
  alert("please enter a valid email");
  return false;
  }

var z=document.forms["myforms"]["password"].value;
 if(z.length != 6 )
 {
 alert("please enter a valid password");
 return false;
 }
}