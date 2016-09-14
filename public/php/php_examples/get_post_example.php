GET - implies that we are simply reading data
Simple GET request in HTML
	<a href="http://google.com">Google</a>
Simple GET request in HTML with a form:
If you type something in the text box then it will search for that in duckduckgo.com. The query string will also read as: https://duckduckgo.com/?q=codeup
	<form method="GET" action="https://duckduckgo.com/">
		<input type="text" name="q" value="" placeholder="Search DuckDuckGo">
		<button type="submit">Go!</button>
	</form>
