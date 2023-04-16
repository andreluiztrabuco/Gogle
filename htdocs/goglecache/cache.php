<!DOCTYPE html>
<html>
<head>
<!-- Unfortunately, our unsaved work was completely lost, so i had to redo the code. -->
<?php
header("Access-Control-Request-Method: POST");
header("Access-Control-Request-Headers: Content-Type");
header("Access-Control-Allow-Origin: *");
?>
 <script type="module" src="https://unpkg.com/x-frame-bypass"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection to MySQL database failed: " . $conn->connect_error);
}
echo "";
?>
</head>
<body>
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 60px;
  background: #808080;
  color: black;
}

/* Page Content */
.content {padding:20px;}
</style>
<div class="header">
  <p>This is a cached copy of the site, <?php
echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?> you are looking for. If you are having trouble accessing any website due to server issues, we'll save a cached copy to the specified site. If the host name does not exist, Gogle Cache will be unable to save a cached copy to this site. If you want to visit the original page, <a href='<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>' target='_blank'>click here.</a> </p>
</div>
<div id='GOGLECACHE-tmp'></div>
<script>
$('div#GOGLECACHE-tmp').load('<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>', { limit: 1 });
</script>
<?php
$data = array(
    'url' => 'https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"',
);

http_build_query( $data );
?>
