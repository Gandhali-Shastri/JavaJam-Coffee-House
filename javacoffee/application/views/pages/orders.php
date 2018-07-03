<!-- <script type="text/javascript">
	function validate(){

		var x = document.getElementById("name1").value;
		var y=document.getElementById("email1").value;
		var a = document.getElementById("address").value;
		var b=document.getElementById("city").value;
		var c=document.getElementById("state").value;
		var d = document.getElementById("zip").value;
		var e=document.getElementById("cc").value;
		var f=document.getElementById("month").value;
		var g=document.getElementById("yr").value;

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
			else if(e.length==0 || e.length <16 || e.length > 16){
				alert("Enter a valid card number");
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
			else if(f.length !=2){
				alert("Enter month as 'mm'.(Range:01 to 12)");
				return false;
			}
			else{
				if(f>12 || f<=0){
					alert("Enter month correctly.(Range:01 to 12)");
					return false;
				}
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
			else {
				if(g.length != 2 || g<18){
					alert("Enter year as 'yy'.(Must be greater than current year.)");
					return false;
				}
			}
		}
	}
</script> -->

<div class="main">
	<header>
		<h1>JavaJam Coffee House</h1>
	</header>

	<div align="center" style="padding-top:10%"><b>Shopping Cart</b> </div><br>



	<table id="shoppingcart" cellpadding="10" width="60%" align="center">
		<tr>
			<th>Description</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>

		<?php foreach ($this->cart->contents() as $items): ?>


			<tr>
				<td> <?php echo $items['name']; ?></td>
				<td><?php echo  $items['qty']; ?></td>
				<td><?php echo $items['price']; ?></td>
			</tr>

		<?php endforeach; ?>
		<tr>
			<td></td>
			<td class="right"><strong>Total</strong></td>
			<td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
		</tr>

	</table>


	<section align="center">
		<fieldset class="order_fieldset">
			<legend align="center">Fill Details:</legend>

			<?php echo form_open('orders/ordersdata'); ?>
			<?php echo validation_errors(); ?><br>
			<center><table id="order">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" id="name1"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email1"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input name="address" id="address"></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" id="city"></td>
				</tr>
				<tr>
					<td>State</td>
					<td><input type="text" name="state" id="state"></td>
					<td style="padding-left: 3%">Zip</td>
					<td><input type="text" name="zip" id="zip"></td>
				</tr>
				<tr>
					<td>Credit Card</td>
					<td><input type="text" name="cc" id="cc"></td>
				</tr>
				<tr>
					<td>Expire Month</td>
					<td><input type="Month" name="month" id="month"></td>
					<td style="padding-left: 3%">Year</td>
					<td><input type="text" name="year" id="yr"></td>
				</tr>

				<tr>
					<td></td>
					<td align="center" style="padding-top: 2%">
						<input name="ordernow" type="submit" value="Order Now" id="ordernow"> 
						<!-- /onclick="return validate()"> -->
					</td>
				</tr>
			</table>			 
		</form>
	</fieldset>
</section>

</article>
</div>
</div>
