<!DOCTYPE html>
<!-- Gogle's 404 error page -->
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<?php
header("HTTP/1.1 404 Not Found");
header("Server: The Gogle Foundation");
header("Expires: 12-31-2026");
?>
<title>400 - Bad request - Gogle</title>
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
img { 
    width: 152px;
    margin-left: 740px;
  }
.error-text {
    margin-left: 740px;
}
.error-text-ending {
color: grey;
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<a href="/index.php">
<img src="https://andreluiztrabuco.neocities.org/festisite_google.png" alt="" width="152">
</a>
<div class="error-text">
<p>
<strong>400.</strong>
<?php
echo "That's an error.";
?>
</p>
<br>
<p>Your client has issued a malformed or illegal request.
<br> The requested URL contains malformed characters: <?php
echo $_SERVER['REQUEST_URI'];
?> <p class="error-text-ending"><?php
echo "That's all we know.";
?></p>
</div>
</body>
</html>