function validateFunction(){
var x=document.forms["myforms"]["hosname"].value;
  if(x == ""){
   alert("please enter a valid Hospital name");
   return false;
}
var y=document.forms["myforms"]["visit"].value;
  if(y == ""){
   alert("please enter a valid Date of Visit");
   return false;
}
var z=document.forms["myforms"]["dname"].value;
  if(z == ""){
   alert("please enter a valid Dcotor name");
   return false;
}
var a=document.forms["myforms"]["aname"].value;
  if(a == ""){
   alert("please enter a valid Attender name");
   return false;
}
var b=document.forms["myforms"]["timei"].value;
  if(b == ""){
   alert("please enter a valid Time IN");
   return false;
}
var c=document.forms["myforms"]["timeo"].value;
  if(c == ""){
   alert("please enter a valid time Out");
   return false;
}
var d=document.forms["myforms"]["hname"].value;
  if(d == ""){
   alert("please enter a valid Height");
   return false;
}
var e=document.forms["myforms"]["wname"].value;
  if(e == ""){
   alert("please enter a valid Weight");
   return false;
}
var l=document.forms["myforms"]["tempname"].value;
  if(l == ""){
   alert("please enter a valid Temperature");
   return false;
}
var g=document.forms["myforms"]["pname"].value;
  if(g == ""){
   alert("please enter a valid Pulse rate");
   return false;
}
var h=document.forms["myforms"]["rname"].value;
  if(h == ""){
   alert("please enter a valid Respiratory rate");
   return false;
}

var i=document.forms["myforms"]["firstname"].value;
  if(i == ""){
   alert("please enter a valid First name");
   return false;
}
var j=document.forms["myforms"]["gender"].value;
  if(j == ""){
   alert("please enter a valid Gender");
   return false;
}

var phoneno = /^\d{10}$/;
	var n = document.forms["myforms"]["telephone"].value;
	if(n.match(phoneno))
	{
		return true;
	}
	else
	{
		alert(" Your Mobile Number must be 1 to 10 Integers");
	    return false;
	}
	if(isNaN(n))
	{
		alert("Enter the valid Mobile Number(Like : 9566137117)");
		return false;
	}
	
}
