<!-- add css -->

<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<html>
<head>
	<title>my_first_form_php</title>
</head>
	<body>
		<h1>User Login</h1>
		<form method="POST" action="/my_first_form.php">
					<!-- original does not show name or password in query string -->
					<!-- form being empty results in username and password in query sting and places in the GET array -->
					<!-- form with method="POST" results in query empty, array filled in for POST -->

					<!-- changing method="GET" puts info in get array and displays it in the query -->
			<p>
				<label for="username">Click me to focus the username field</label>
					<!-- had a difficult time with getting this to work. label, for, and username is super important -->
			</p>
			------------------------
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		    <p>
		        <label for="username">Username</label>
		        <input id="username" name="username" type="text" placeholder="Username">
		        	<!-- small issue, make sure that "for" and "id" match. otherwise it will not work when calling it -->
		        	<!-- taking away the name results in the password being in post array, query sting empty -->
		        	<!-- taking out id="password" results in username being stored in post array, query empty -->
		    </p>
		    <p>
		        <label for="password">Password</label>
		        <input id="password" name="username" type="password" placeholder="Password">
		        	<!-- taking out name results in username being set in post array, query sting empty -->
		        	<!-- taking out id results in password being saved in post array, query sting empty -->
		        	<!-- type="password" will show dots instead of letters and numbers-->
		    </p>
		    <p>
		        <button type="submit" name="username" value="Click here to login">Login!</button>
		    </p>
		</form>

		<h1>Compose Email</h1>
		<form method="GET">
			<p>
				<label for="to">To:</label>
				<input id="to" type="email" value="To">
			</p>
			<p>
				<label for="from">From:</label>
				<input id="from" type="email" value="From">
			<p>
				<label for="subject">Subject:</label>
				<input if="subject" type="text" value="Subject">
			</p>
			<p>
				<textarea name="email" id="email" cols="" rows="" placeholder="Send an email"></textarea>
					<!-- cols deals with length -->
					<!-- rows deals with height -->
			</p>
				<input type="checkbox" id="copy" name="copy" value="yes" checked>
				<label for="copy">Send me a copy!</label>
			<p>
				<button>Send Email</button>
			</p>
		</form>

		<h1>Your Searching Needs</h1>
		<form method="GET" action="http://duckduckgo.com" target="_blank">
			<!-- GET sends you to where action sends you -->
			<!-- action will take you to that page -->
			<input type="text" name="q" placeholder="www.duckduckgo.com">
				<!-- name has to be there to submit the request, q is the variable that duckduckgo uses -->
			<input type="submit">
		</form>

		<form method="GET" action="http://google.com" target="_blank">
			<input type="text" name="q" placeholder="www.google.com">
			<input type="submit">
		</form>

		<form method="GET" action="https://reddit.com/search" target="_blank">
			<!-- search must be on the end for reddit otherwise it will take you to reddit. -->
			<input type="text" name="q" placeholder="www.reddit.com">
			<input type="hidden" name="sort" value="top" >
			<button type="submit">Submit</button>
			<a href="https://www.reddit.com/search?q=javascript&sort=top" target="_blank">Search reddit for JavaScript</a>
		</form>

		<h2>Multiple Choice Test</h2>
		<form>
			<p>
				What radio station do you listen to?
			</p>
			<p>
				<label>
					<input type="radio" name="q1" value="102.7">
					102.7
				</label>
				<label>
					<input type="radio" name="q1" value="100.3">
					100.3
				</label>
				<label>
					<input type="radio" name="q1" vaule="106.7">
					106.7
				</label>
				<label>
					<input type="radio" name="q1" value="95.1">
					95.1
				</label>
			</p>
			<p>
				When using command line, what is the quickest way to get home?
			</p>
				<label>
					<input type="radio" id="command" name="home" value="~"> ~
				</label>
				<label>
					<input type="radio" id="command" name="home" value="cd"> cd
				</label>
				<label>
					<input type="radio" id="command" name="home" value="rm"> rm
				</label>	
				<label>	
					<input type="radio" id="command" name="home" value="../"> ../
				</label>
			<p>
				What color(s) are primary colors?
			</p>
			<p>
				<label for="a1">	
					<input type="checkbox" id="a1" name="a[]" value="red">Red
				</label>
				<label>
					<input type="checkbox" id="a1" name="a[]" value="yellow">Yellow
				</label>
				<label>
					<input type="checkbox" id='a1' name="a[]" value='green'>Green
				</label>
				<label>
					<input type="checkbox" id="a1" name="a[]" value="blue">Blue
				</label>
			</p>
			<p>
				Are you a dog, cat, neither, or other person?
				<label for="animal">
					<select id="animal" name="animal[]" multiple>
						<option value="dog">Dog</option>
						<option value="cat">Cat</option>
						<option value="neither">Neither</option>
						<option value="other">Other</option>
					</select>
				</label>
			<p>
			<p>
				<label for="day"> Are you having a good day?</label>
				<select id="day" name="day">
					<option value=1 selected>Yes</option>
					<option value=0>No</option>
				</select>
			</p>
				<button>Submit</button>
			</p>
		</form>
	</body>
</html>






