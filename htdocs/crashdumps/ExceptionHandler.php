<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <style>
    /* Gogle UI stylesheet */
/* Copyright (c) 1987-2023 The Gogle Foundation - All rights reserved. */
body, html {
    font-family: 'Roboto', sans-serif;
}
.gogleui-btn {
   background-color: #000000;
  color: white;
  border: none;
  text-align: center;
  padding: 10px 20px;
  border-radius: 45px;
  background-position: center;
  transition: background 0.8s;
}
/* Styled the noscript error message */
noscript {
    color: red;
}
.gogleui-btn:hover {
 background: #383838 radial-gradient(circle, transparent 1%, #47a7f5 1%) center/15000%;
}
.gogleui-btn:active { 
  background-color: #808080;
  background-size: 100%;
  transition: background 0s;
}

/* Continuing to completely redesign the old HTML interface */
h3, h4, h5, h6, strike, i {
  font-weight: 100;
    font-family: 'Roboto', sans-serif;
}
[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
  border-radius: 45px;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
  border-radius: 45px;
}

label {
  display: block;
}
input {
  border: 1px solid #c4c4c4;
  border-radius: 45px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
}
/* New HTML element completely redesigned: dialog */
dialog[open] {
    border-radius: 8px;
   font-weight: bold;
    font-family: 'Roboto', sans-serif;
   font-size: 14px;
    padding: 20px;
  background-color: #FFFFFF;
  color: black;

}
/* Redesigning the textbox and video player */
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
   border-radius: 45px;
}
video {

   padding: 30px;
   width: auto;
   height: auto;
      border-radius: 45px;
}
/* Modifying the button element */
/* Ripple effect */
.ripple {
  background-position: center;
  transition: background 0.8s;
}
.ripple:hover {
  background: #383838 radial-gradient(circle, transparent 1%, #47a7f5 1%) center/15000%;
}
.ripple:active {
  background-color: #383838;
  background-size: 100%;
  transition: background 0s;
}
/* Redesigning the header element, original code by W3schools */
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
/* Redesign of the footer HTML element */
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: grey;
   color: white;

}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
  </style>
<?php
try {

$MySQLDb = new mysqli("localhost", "root", "", "test");
if($MySQLDb->connect_errno)
{
     throw new Exception( $MySQLDb>connect_error);

}
else
{
 echo "Successfully connected to the database! <br>";
}

}
catch (Exception $e) {
    echo "Failure connecting to database: " . $e->getMessage();
    echo "<br>";
    echo "Line: " . $e->getCode();
    echo "<br>";
    echo "Exception details: " . $e->__toString();
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body>
<img src="https://andreluiztrabuco.neocities.org/festisite_google.png" alt="The Gogle Foundation" width="220"><?php echo "<h1>Exception Handler</h1>"; ?><hr>
<?php

try {
function DivideByZero() {
echo (1/0);
}
DivideByZero();
}
catch(DivisionByZeroError $ex) {
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
$stack = $ex->getTraceAsString();
  echo "Exception thrown in $file on line $line: [Error code $code] <br>
  $message <br>
Stack trace:
<br>
$stack";
}
?>
<hr>
<p>Do you want to save the exception details as a .txt file?</p>
<p><textarea id="txtData"></textarea></p>
<button type="button" id="btnSave" onclick="save()">SAVE</button>

<script>

function save() {
var data = document.getElementById("txtData").value;
var c = document.createElement("a");
c.download = "user-text.txt";

var t = new Blob([data], {
type: "text/plain"
});
c.href = window.URL.createObjectURL(t);
c.click();
}
</script>
<hr>
<p><strong style="color: red;">1</strong><?php echo " unreported crashes were detected in your application. You can fix the error by changing the PHP code. If this does not resolve the problem, contact your application administrator." ?></p>
<div class="footer">
<p><?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
</p>
</div>
</body>
</html>