<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Version - Gogle</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.1/dist/jquery-migrate.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
<style>
html, head, body {
font-family: 'Roboto';
}
</style>
</head>
<body>
<center>
<h1>Gogle is brought to you by:</h1>
<script>
      "use strict";
       
    var getECMAVersion = function() {
        var rv ="";
         
        return rv = null, "function" == typeof RegExp && (rv = {
            edition: 3,
            date_published: "1999-12"
        }), "function" == typeof Array.isArray && (rv = {
            edition: 5,
            date_published: "2009-12"
        }), "function" != typeof Array.find && "function" != typeof Array.findIndex || (rv = {
            edition: 6,
            date_published: "2015-06",
            name: "ECMAScript 2015",
            name_code: "ES2015"
        }), "function" == typeof Array.prototype.includes && (rv = {
            edition: 7,
            date_published: "2016-06",
            name: "ECMAScript 2016",
            name_code: "ES2016"
        }), "function" == typeof Object.entries && (rv = {
            edition: 8,
            date_published: "2017-06",
            name: "ECMAScript 2017",
            name_code: "ES2017"
        }), "undefined" != typeof Promise && "function" == typeof Promise.prototype.finally && (rv = {
            edition: 9,
            date_published: "2018-06",
            name: "ECMAScript 2018",
            name_code: "ES2018"
        }), "function" != typeof Object.fromEntries && "function" != typeof String.prototype.trimStart || (rv = {
            edition: 10,
            date_published: "2019-06",
            name: "ECMAScript 2019",
            name_code: "ES2019"
        }), "function" == typeof BigInt && (rv = {
            edition: 11,
            date_published: "2020-06",
            name: "ECMAScript 2020",
            name_code: "ES2020"
        }), rv
    }
 
    $(document).ready(function() {
        var ecma = getECMAVersion();
 
        if (typeof ecma !== "undefined") {
 
            var ecmaversion = "";
 
          
 
            if (ecma.name) {
                ecmaversion = ecmaversion + "<div>" + ecma.name + "</div>";
            }
 
           
 
           $("#ecma-verion").html(ecmaversion);
        }
    });
</script>
      <div class="value" id="ecma-verion"></div>
<?php
echo "HTML5 <br>";
echo "CSS4<br>";
$phpver = phpversion();
print 'PHP/' . $phpver;
echo "<br>";
if(function_exists("apache_get_version")){
  $AVerpache = apache_get_version();
} else {
  $AVerpache = "unknown";
}
print $AVerpache;
?>
<br>
<hr>
<p>Copyright &copy; 1987-2023 Gogle LLC. All rights reserved.</p>
<a href="http://localhost/index.php">Go back to Gogle Search</a>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</center>
</body>
</html>