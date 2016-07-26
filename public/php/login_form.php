<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!-- * uername with placeholder -->
<!-- * user email with placeholder -->
<!-- * password input type -->
<!-- * remember me check box -->
<!-- add css -->

<html>
<head>
	<title>LOGIN FORM</title>
</head>
	<body>
		<h1>Login Form</h1>
		<form method="POST" action="/php/login_form.php">
			<p>
				<label for="username">Username or Email:</label>
				<input id="username" name="username" type="text" placeholder="Username">
				<input id="username" name="username" type="email" placeholder="Email">
			</p>
			<p>
				<label for="password">Password:</label>
				<input id="password" name="username" type="password" placeholder="Password">
			</p>
			<p>
				<input type="checkbox" id="remember" value="yes" name="remember" checked>
				<label for="remember">Remember Me!</label>
				<!-- you can swith the input and the lable, if reversed then the checked box will 
				be on the right of the text -->
			</p>
			<p>
				<button type="submit" name="username">Submit</button>
			</p>
		</form>
	</body>
</html>