<!DOCTYPE html>
<!-- Redesigned 404 error page made in HTML, JS, CSS and PHP -->
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<?php
header("HTTP/1.1 500 Guru Meditation");
header("Server: The Gogle Foundation");
header("Expires: 12-31-2026");
?>
<title>Guru Meditation - Gogle</title>
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
<h1>Sorry, we have encountered a critical error while processing your request.</h1>
<p>We apologize for the inconvenience. If the problem continues, contact your system administrator.</p>
<style>

@keyframes blink { 50% { border-color: #ff0000; }  }

error {
  border: 8px solid #000000 ;
  position: absolute;

  transform: translate(-50%, -50%);
  width: 50% ;
  min-width: 800px;
  text-align:center ;
  font: bold 1.5em/2em monospace ;
  color: #ff0000 ;
  background-color: #000000 ;
  animation: blink .55s step-end infinite alternate;
}
</style>
<br>
<?php
function rand_string($length)
{
    $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*_.";
    $len = strlen($string)-1;
    $rand_string ='';
    for ($i=0; $i < $length; $i++) {
        $rand_string.=$string[rand(0,$len)];
    }
    return $rand_string;
}
?>
<br>
<br>
 <error>
Error Code: 500 <br>
Request URI: <?php echo $_SERVER['REQUEST_URI']; ?> <br>
Reference Number: #<?php echo rand(10000000,90000000); ?>.<?php echo rand(10000000,90000000); ?>
  </error>
<br>
<br>
<br>
<br>
<br>
<hr>
<a href="/index.php">
<img src="https://andreluiztrabuco.neocities.org/festisite_google.png" alt="" width="152">
</a>
</center>
</body>
</html>