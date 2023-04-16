<!DOCTYPE html>
<!-- This transforms the old sites content into blue.css ones. -->
<html>
<head>

<style>
.check::before, .rated::after{
	content:'\2605';
	font-size:60px;
	position:absolute;
	color:#777;
	left:0;
	bottom:0;
    line-height: 50px;	
}
.rated::after{
	color:orange;
}
.check:hover::before{
	color:orange;
}
label i{
	position:absolute;

	font-size:35px;
}
label i.em{
	display:none;	
}

</style>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <style>
      @font-face {
        font-family: 'Glyphicons Halflings';
        src:url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/fonts/glyphicons-halflings-regular.eot');
        src:url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),
          url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/fonts/glyphicons-halflings-regular.woff') format('woff'),
          url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/fonts/glyphicons-halflings-regular.ttf') format('truetype'),
          url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
      }
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js" integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://download852.mediafire.com/8jwdiw57oqsgpIfSaRdXclC5ZrP-_63OVC57W-jKjmDdhPqFlXBOCHZcLxp97do_PNmze2RbFE1-ukCBOtppLxS1tNKUct1F/k7x4l8ertbik3mz/blue.min.css">


<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 30px;
  box-sizing: border-box;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
    border-radius: 15px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  border-radius: 15px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<header>
<h1>HTTP Status 401 - Unauthorized - Access is denied due to invalid credentials.</h1>
</header>
<h1>What happened?</h1>
<p>Access to the requested document is denied because you need to be signed in to access the document, but the credentials were not specified (for example, username and password) and access to the requested resource is denied. You must specify credentials in the login form and login by pressing the button in the bottom of the form's open window. If you continue to get this message, contact your server administrator for assistance.</p>
<h1>What can i do?</h1>
<strong>If you are the visitor of the site: </strong><p>Log in by clicking the button that says "Sign in", then provide the correct username and password. If the credentials are incorrect, contact the site owner.</p>
<strong>If you are the owner of the site: </strong><p>Add the database that contains the provided credentials from the PHPMyAdmin workbench, and ensure that the MySQL connection is tested with the database that contain the credentials. Log in on this page by clicking the button that says "Sign in", then provide the username and password from the MySQL database, then you will be redirected to the dashboard. Click on the User Accounts menu option from the GogleSQL workbench and verify that you are signed in correctly. If not, click on the below button that says <q>Reset Password</q> from the user account menu and type your old password, then type your new password. Confirm your new password, then click <q>Reset password</q>. This will log you out from the GogleSQL workbench and you have to log in again with the new password.</p>
<hr>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Click here to sign in</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
<h1>GogleSQL Workbench</h1>
<a href="http://localhost/index.php">Go back to Gogle Search</a>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</footer>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

<!-- the classic-like login form reimagined -->
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
