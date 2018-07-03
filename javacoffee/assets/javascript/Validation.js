function validateForm()
{

	var x = document.getElementById("name1").value;
	var y=document.getElementById("email1").value;
	var z=document.getElementById("exp").value;

	if (x == "" || x==null) 
	{
		alert("Name is Required."); 
		return false;
	}
	if(y == "")
	{
		alert("Email is Required."); 
		return false;
	}
	if(z == "")
	{
		alert("Experience is Required."); 
		return false;
	}

		var emailvalid=validateEmail();
	if(emailvalid==false)
	{
		alert("Email must be in proper format");
		return false;
	}

	var validname=validateName();
	if(validname==false)
	{
		alert("Name should have letters and whitespace");
		return false;
	}

		function validateEmail()
	{
		var emailID = document.getElementById("email1").value;
		var atpos = emailID.indexOf("@");
		var dotpos = emailID.lastIndexOf(".");

		if (atpos < 1 || ( dotpos - atpos < 2 )) 
		{ 
			return false;
		}
		return( true );
	}

	function validateName()
	{

		var name1=document.getElementById("name1").value;
		var regex = /^[a-zA-Z ]*$/;
		var ans=regex.test(name1);
		if(ans==true)
			{return true}
		return false;
	}
}
