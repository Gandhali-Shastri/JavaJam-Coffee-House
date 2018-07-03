function validate(){

	var a = document.getElementById("address").value;
	var b=document.getElementById("city").value;
	var c=document.getElementById("state").value;
	var d = document.getElementById("zip").value;
	var e=document.getElementById("cc").value;
	var f=document.getElementById("month").value;
	var f=document.getElementById("yr").value;

	if (a == "" || a==null) 
	{
		alert("Address Required."); 
		return false;
	}
	if (b == "" || b==null) 
	{
		alert("City Required."); 
		return false;
	}
	if (c == "" || c==null) 
	{
		alert("State Required."); 
		return false;
	}
	if (d == "" || d==null) 
	{
		alert("Zip Required."); 
		return false;
	}
	else{
		if(isNaN(d))
			{
				alert("Enter a number");
				return false;
			}
	}
	if (e == "" || e==null) 
	{
		alert("Card Required."); 
		return false;
	}
	else{
		if(isNaN(e))
			{
				alert("Enter a number");
				return false;
			}
	}
	if (f == "" || f==null) 
	{
		alert("Month Required."); 
		return false;
	}
	else{
		if(isNaN(f))
			{
				alert("Enter a number");
				return false;
			}
	}
	if (g == "" || g==null) 
	{
		alert("Year Required."); 
		return false;
	}
	else{
		if(isNaN(g))
			{
				alert("Enter a number");
				return false;
			}
	}
}