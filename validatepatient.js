
function validateForm(){
	var a=document.forms["patientregist"]["firstname"].value;
	if(a==""){
		alert("First Name is Not Filled");
		return false;
	}
	var x = document.forms["patientregist"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	var phoneno = /^\d{10}$/;
	var f = document.forms["patientregist"]["telephone"].value;
	if(f.match(phoneno))
	{
		return true;
	}
	else
	{
		alert(" Your Mobile Number must be 1 to 10 Integers");
	    return false;
	}
	if(isNaN(f))
	{
		alert("Enter the valid Mobile Number(Like : 9566137117)");
		return false;
	}
	var aadharno = /^\d{12}$/;
	var aadhar = document.getElementById("aadhar").value;
	if(aadharno.test(aadhar))
	{
		alert("Your mobile number :"+ mobile);
		return true;
	}
	else
	{
		alert("Your Aadhar Number is not valid");
		return false;
	}
}