<!-- 
	- * build a registration form, name it registration_form.php
    - * first name and last name inputs
    - * email input
    - * username
    - * password
    - * password confirmation
    - * sign me up for the newsletter option, make sure this is checked by default 
    - add css
-->

<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<html>
<head>
	<title>REG FORM</title>
</head>
	<body>
		<form method="POST" action="/forms/registration_form.php">
			<p>
				<label for="name">Name</label>
				<input id="name" name="name" type="text" placeholder="First Name">
				<input id="name" name="name" type="text" placeholder="Last Name">
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="Email">
			</p>
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Username">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Password" required>
			</p>
			<p>
				<label for="confirm_password">Confirm Password</label>
				<input id="confirm_password" name="confirm_password" type="password" placeholder="Confrim Password" required>
			</p>
			<p>
				<input type="checkbox" id="newsletter" value="yes" name="newsletter" checked>
				<label for="news_letter">Sign me up for the newsletter!</label>
			</p>
			<p>
				<button type="submit">Submit</button>
			</p>
		</form>

	<script type="text/javascript">
	"use strict";

		var password = document.getElementById("password")
		  , confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
			confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	</script>	
	</body>
</html>