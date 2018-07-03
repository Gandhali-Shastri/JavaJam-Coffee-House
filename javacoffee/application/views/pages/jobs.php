<!-- <script type="text/javascript">

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
</script> -->
<div class="main">
		<header class="job_header">
			<h1>JavaJam Coffee House</h1>
		</header>
		<article>	
			<section>
				<h2>Jobs at JavaJam</h2>

				<p><div id=content1>
					Want to work at JavaJam? Fill out the form below to start your application. 
					Required fields are marked with an asterisk (*).</div></p>

									
					<div class="form">
						<?php echo validation_errors(); ?>
							<?php echo form_open_multipart('jobs/jobsdata'); ?>
							
								<label id="name">*Name:</label>
								<input type="text" name="name" id="name1" >
									
							<br>
								<label id="email">*E-mail:</label>
								<input type="text" name="email" id="email1">
												
							<br>
						
								<label id="exp">*Experience:</label>
								<textarea name="experience" rows="2" cols="18" id="exp"></textarea>
								
							<br>

							<input name="applynow" id="applynow" type="submit" value="Apply Now">
							 <!-- onclick="return validateForm()"> -->
							
						</form>
					</div>
			</section>
		</article>
</div>
</div>

