
function validateFunction(){
var x=document.forms["myforms"]["hosname"].value;
  if(x == ""){
   alert("please enter a valid Hospital name");
   return false;
}
var y=document.forms["myforms"]["visit"].value;
  if(y == ""){
   alert("please enter a valid enroll date");
   return false;
}
var z=document.forms["myforms"]["dname"].value;
  if(z == ""){
   alert("please enter a valid Doctor name");
   return false;
}
var a=document.forms["myforms"]["aname"].value;
  if(a == ""){
   alert("please enter a valid Attender name");
   return false;
}
var b=document.forms["myforms"]["timei"].value;
  if(b == ""){
   alert("please enter a valid Time IN time");
   return false;
}
var c=document.forms["myforms"]["admittype"].value;
  if(c == ""){
   alert("please enter a valid admit type");
   return false;
}

var e=document.forms["myforms"]["hname"].value;
  if(e == ""){
   alert("please enter a valid height");
   return false;
}
var f=document.forms["myforms"]["wname"].value;
  if(f == ""){
   alert("please enter a valid weight");
   return false;
}
var g=document.forms["myforms"]["tempname"].value;
  if(g == ""){
   alert("please enter a valid temperature range");
   return false;
}
var h=document.forms["myforms"]["pname"].value;
  if(h == ""){
   alert("please enter a valid pulse rate");
   return false;
}
var i=document.forms["myforms"]["rname"].value;
  if(i == ""){
   alert("please enter a valid respiratory rate");
   return false;
}


var j=document.forms["myforms"]["firstname"].value;
  if(j == ""){
   alert("please enter a valid first name");
   return false;
}

var m=document.forms["myforms"]["gender"].value;
  if(m == ""){
   alert("please enter a valid gender");
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
	
var o=document.forms["myforms"]["dob"].value;
  if(o == ""){
   alert("please enter a valid date of birth");
   return false;
}
var p=document.forms["myforms"]["bloodgroup"].value;
  if(p == ""){
   alert("please enter a valid Blood Group");
   return false;
}

}