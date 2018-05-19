function validateForm(){
	var a=document.forms["attenderregist"]["firstname"].value;
	if(a==""){
		alert("First Name is Not Filled");
		return false;
	}
	var x = document.forms["attenderregist"]["email"].value;
    var atpos = x.indexOf("@kct");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	var phoneno = /^\d{10}$/;
	var f = document.forms["attenderregist"]["telephone"].value;
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
	
	var aadhar = document.forms["attenderregist"]["aadhar"].value;
	if(aadhar=="")
	{
		alert("Please Enter Your Aadhar Number");
		return false;
	}
	if(isNaN(aadhar))
	{
		alert("Enter the valid 12 Digit Aadhar Number");
		return false;
	}
	if((aadhar.length < 1) || (aadhar.length > 12))
	{
		alert(" Your Aadhar Number must be 12 digits");
	    return false;
	}
	
	
	}