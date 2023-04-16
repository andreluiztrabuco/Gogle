<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<style>
body {
	margin: 10;
}
.gsc-control-cse {
	background-color: #387deb !important;
	border: 0 !important;
	padding: 6px 8px 6px 10px !important;
	margin: 0px;
	border-radius: 2px;
	overflow: hidden;
}
form.gsc-search-box,
table.gsc-search-box {
	margin-bottom: 0 !important;
}
.gcse-search-box {
	border: 0 !important;
	background: #387deb !important;
}
.gcse-search-box-tools .gcse-search-box .gcse-input {
	padding-right: 0 !important;
}
#gs_tti50 {
	padding: 6px 0 !important;
}
#gsc-i-id1 {
	color: #000 !important;
	text-indent: 0 !important;
	font-size: 14px !important;
	line-height: 1 !important;
	background: none !important;
}
#gsc-i-id1::-webkit-input-placeholder {
	color: #000 !important;
}
#gsc-i-id1::-as-input-placeholder {
	color: #fff;
}
#gsc-i-id1::-moz-placeholder {
	color: #fff;
	opacity: 1;
}
#gsc-i-id1::-moz-placeholder {
	color: #fff;
	opacity: 1;
}
.gsib_b {
	display: none !important;
}
.gsc-search-button -v2 {
	padding: 7.5px !important;
	margin-left: !important;
	outline: none !important;
	border: !important;
	cursor: pointer;
}
.gsc-search-button-v2,gsc-search-button-v2: hover {
	cursor: pointer;
}
.gsc-search-button-v2,gsc-search-button-v2: hover {
	background-color: transparent !important;
	background-image: none !important;
}
.gsc-search-button -v2:focus {
	outline: none !important;
	box-shadow: none !important;
	background-color: transparent !important;
	background-image: none !important;
}
.gsc-search-button -v2:focus {
	outline: none !important;
	box-shadow: none !important;
}
</style>
<script>
(function () {
	var cx = '210b06286d70b46c7';
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<?php
try {
$MySQLDb = new mysqli("localhost", "root", "", "MySQLtest");
if($MySQLDb->connect_errno)
{
     throw new Exception( $MySQLDb>connect_error);

}
else
{
 echo "";
}
}
catch (Exception $e) {
echo "Connection aborted.";
$mysqli -> dump_debug_info();

}
?>
</head>
<body>
<img src="https://andreluiztrabuco.neocities.org/festisite_google.png" alt="The Gogle Foundation" width="220">
<script async src="https://cse.google.com/cse.js?cx=50ac353e52550535f"></script>
<center>
<div class="gcse-search"></div>
</center>
