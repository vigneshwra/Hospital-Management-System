function validateFunction(){
var x=document.forms["myforms"]["username"].value;
 var atpos=x.indexOf("@");
  var dotpos=x.lastIndexOf(".");
  if(atpos<1||dotpos<atpos+2||atpos+2>=x.length)
  {
  alert("Enter a Valid Username");
  return false;
  }
var z=document.forms["myforms"]["password"].value;
 if(z.length != 6)
 {
 alert("Enter the Correct Password");
 return false;
 }
}