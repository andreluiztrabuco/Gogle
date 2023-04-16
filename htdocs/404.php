<!DOCTYPE html>
<!-- Redesigned 404 error page made in HTML, JS, CSS and PHP -->
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<?php
header("HTTP/1.1 404 Not Found");
header("Server: The Gogle Foundation");
header("Expires: 12-31-2026");
?>
<title>Not Found - Gogle</title>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<style>
body {
font-family: 'Roboto';
}
</style>
</head>
<body>
<center>
<h1>Sorry, but the page you requested could not be found.</h1>
<p>Try searching for something else</p>
<script async src="https://cse.google.com/cse.js?cx=50ac353e52550535f"></script>
<div class="gcse-search"></div>
<script>
(function () {
	var cx = '50ac353e52550535f';
	var gcse = document.createElement('script');
	gcse.type = 'text/javascript';
	gcse.async = true;
	gcse.src = (document.location.protocol ==
		'https:' ? 'https:': 'http:') +
	'//cse.google.com/cse.js?cx=' + cx;
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(gcse, s);
})();
window.onload = function () {
	var title = "Search the web";
	var textBox = document.querySelector("#gsc-i-id1");
	var button = document.querySelector
	(".gsc-search-button-v2 svg title");
	textBox.placeholder = title;
	textBox.title = title;
	button.innerHTHL = title;
}
</script>
<br>
<br>
<hr>
<a href="/index.php">
<img src="https://andreluiztrabuco.neocities.org/festisite_google.png" alt="" width="152">
</a>
</center>
</body>
</html>