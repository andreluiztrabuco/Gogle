<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
header("Access-Control-Allow-Origin: *");

?>
<link rel="stylesheet" href="http://127.0.0.1/blue.css/blue.min.css">
<title>blue.css - a classless CSS framework by Gogle to build modern websites faster</title>
<?php
/*************************************************************************
* This is to test PHP MySQL Connection
*
* www.TestingDocs.com
*************************************************************************/
$MySQLDb = new mysqli("localhost", "root", "", "MySQL");
if($MySQLDb->connect_errno)
{
 echo "Sorry, an error has occurred during MySQL connection: " . $MySQLDb>connect_error;
}
else
{
 echo "";
}
?>
</head>
<body>
<center>
<footer>
<h1>blue.css</h1>
<p>blue.css is a classless CSS framework that blueifies your site to build modern websites faster</p>
</footer>
<h1>Downloads:</h1>
<button onclick="download_min()"><i class="fa fa-download"></i> Minified</button>
<button onclick="download_uncomp()"><i class="fa fa-download"></i> Uncomp.</button>
<script>
function download_min() {
  location.replace("https://download852.mediafire.com/8jwdiw57oqsgpIfSaRdXclC5ZrP-_63OVC57W-jKjmDdhPqFlXBOCHZcLxp97do_PNmze2RbFE1-ukCBOtppLxS1tNKUct1F/k7x4l8ertbik3mz/blue.min.css")
}

function download_uncomp() {
  location.replace("https://download1581.mediafire.com/vvktj2bni4hggAiD6ybiwUIcuOcpNSRwfw6CAXjX4fWGUQpd3daCH8lY7v9uhx_u9mUT7FJGf6HSLtp7WocKLkjGMeN492Ly/p6bw8tfhjyhlycb/blue.uncompressed.css")
}
</script>
<br>
<hr>
<h1>Blueify with JavaScript:</h1>
<p>If you don't want to host blue.css yourself, you can add some JavaScript to blueify your site. Drag this link to your bookmarks, visit any old site, then click the bookmark to blueify. If you experience an error while blueifying your site, check the logs for more info, or try refreshing the page. If that dosen't work, try HTML instead: <code>"link rel="stylesheet" href="http://(your site name here)/blue.css/blue.min.css"</code>. Note that you can replace the <code>(your site name here)</code> with the actual sitename. If you get a 404 error, try the CDN method at the bottom of the page.</p>

 <a href="javascript:var css='@font-face {font-family: Blueified;src: url(https://github.com/FENIX-Platform-Projects/fmd-ui/blob/master/css/fonts/sansation-light-webfont.ttf?raw=true);}* {font-family: Blueified;}button {border-radius: 45px;position: relative;background-color: #4CAF50;border: none;font-size: 28px;color: #FFFFFF;padding: 20px;width: 200px;text-align: center;transition-duration: 0.4s;text-decoration: none;overflow: hidden;cursor: pointer;}button:after {border-radius: 45px;content: "";background: #f1f1f1;display: block;position: absolute;padding-top: 300%;padding-left: 350%;margin-left: -20px !important;margin-top: -120%;opacity: 0;transition: all 0.8s }button:active:after {border-radius: 45px;padding: 0;margin: 0;opacity: 1;transition: 0s }table, th, td {border: 1px solid black;border-radius: 5px;}details p {color: black;font-family: Blueified;border: 1px solid black;border-radius: 5px;}dialog[open] {border-radius: 5px;}footer {background-color: green;border: 15px solid green;padding: 50px;font-family: Blueified;color: white;}header {background-color: green;border: 15px solid green;padding: 50px;font-family: Blueified;color: white;}hr {border: 2px solid green;border-radius: 5px;}h1, h2, h3, h4, h5, h6, strong, em, code, kbd, pre {font-family: Blueified;}legend {border: 2px solid green;background-color: green;border-radius: 5px;font-family: Blueified;color: white;font-weight: bold;}article {font-family: Blueified;border: 2px solid green;border-radius: 5px;}mark {background-color: green;color: white;font-family: Blueified;}progress {-webkit-appearance: none;border-radius: 5px;}::-webkit-progress-bar {background-color: aliceblue;border-radius: 5px;}::-webkit-progress-value {background-color: green;border-radius: 5px;}::-moz-progress-bar {background-color: green;border-radius: 5px;}s {font-weight: bold;font-family: Blueified;}section {border: 2px solid green;border-radius: 5px;font-family: Blueified;font-weight: bold;}select {font-family: Blueified;outline: 0;background: green;color: white;border: 1px solid black;padding: 4px;border-radius: 5px;}sub, sup {font-family: Blueified;font-weight: bold;}u {font-weight: bold;font-family: Blueified;}var {font-family: Blueified;}',head=document.head||document.getElementsByTagName('head')[0],style=document.createElement('style');head.appendChild(style);style.type='text/css';if(style.styleSheet)style.styleSheet.cssText=css;else style.appendChild(document.createTextNode(css));">Blueify</a> <!-- Dosen't seem to work... -->
<hr>
<h1>CDN:</h1>
<p>If you would like to use a MediaFire CDN instead of your actual site, copy the following tags into your site's HTML file:</p>
<code><q>	link rel="stylesheet" href="https://download852.mediafire.com/8jwdiw57oqsgpIfSaRdXclC5ZrP-_63OVC57W-jKjmDdhPqFlXBOCHZcLxp97do_PNmze2RbFE1-ukCBOtppLxS1tNKUct1F/k7x4l8ertbik3mz/blue.min.css</q>	 (Minified) <br> <q>	link rel="stylesheet" href="https://download1581.mediafire.com/vvktj2bni4hggAiD6ybiwUIcuOcpNSRwfw6CAXjX4fWGUQpd3daCH8lY7v9uhx_u9mUT7FJGf6HSLtp7WocKLkjGMeN492Ly/p6bw8tfhjyhlycb/blue.uncompressed.css</q>	 (Uncompressed)</code>
<hr>
<h1>Examples:</h1>
<h4>Button:</h4>
<button>Lorem ipsum</button>
<button disabled>Can't click</button> <!-- We found a bug! The disabled attribute makes the button still clickable, even though the classic HTML makes it unclickable. -->
<h4>Table:</h4>
<table>
<tbody>
<tr>
<td>Foo</td>
<td>Bar</td>
</tr>
<tr>
<td>Lorem ipsum</td>
<td>dolor sit amet</td>
</tr>
</tbody>
</table>
<!-- DivTable.com -->
<h4>Details &amp; summary tags:</h4>
<details>
  <summary>Foobar</summary>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at magna eget turpis malesuada tincidunt. Ut eleifend est nec erat dapibus tincidunt. Donec quis faucibus neque. Sed eleifend dolor non augue euismod, sed tristique ligula pulvinar. Nulla quis venenatis neque. Suspendisse sagittis neque quam, eu dictum sapien luctus sit amet. Mauris lobortis viverra orci at dapibus. Pellentesque auctor pharetra mattis. Sed congue ex vel ligula consequat rutrum. Vivamus porta fermentum lacus, nec luctus nunc iaculis a. Praesent rutrum viverra metus, dapibus volutpat quam luctus sed.

Nunc lacinia molestie commodo. Fusce laoreet viverra tellus. Suspendisse odio leo, iaculis ac cursus a, pharetra a orci. Proin scelerisque quis lorem rutrum fringilla. Integer imperdiet tempor luctus. Proin neque sem, dictum vel tellus non, vulputate placerat urna. Vivamus diam mauris, euismod ut accumsan sed, lobortis bibendum felis. Vivamus scelerisque tellus at ipsum bibendum, vel venenatis justo consectetur. Sed non justo eros. Cras blandit, lacus vitae sodales venenatis, sapien eros congue erat, eget malesuada turpis magna et nisl. Maecenas magna justo, commodo sed quam nec, laoreet fermentum eros.

Duis placerat ut massa ut aliquam. Donec vel porta neque. Etiam sit amet viverra nibh. Fusce venenatis enim at ligula eleifend, non ullamcorper lectus rutrum. Etiam et pretium justo. Praesent aliquam turpis id imperdiet laoreet. Maecenas eget malesuada nulla. Praesent ullamcorper, erat sit amet dapibus commodo, purus ligula egestas ante, a pharetra arcu leo nec leo. Aenean sollicitudin sem nec est rutrum, ac consequat mauris ultrices.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse at ligula vel mauris vehicula malesuada at sit amet risus. Nunc eu nunc at velit dictum lobortis. Aenean varius convallis gravida. Phasellus nulla risus, pellentesque vitae purus quis, mollis bibendum erat. Nam fermentum, lacus vitae consequat lobortis, nulla diam vestibulum ante, nec dictum libero tortor in metus. Vivamus at sodales urna, in dictum lacus. Nullam sit amet lacus sit amet arcu vulputate mollis vitae ac arcu. Aenean faucibus diam at erat molestie interdum.

Integer id augue egestas, condimentum purus id, mattis nibh. Maecenas aliquam lectus sed felis viverra, ut condimentum dui accumsan. Donec vitae felis sed est malesuada condimentum molestie in mauris. Duis a molestie dolor. Aenean sed ultricies velit, eu luctus libero. Quisque at augue sed nisi bibendum pellentesque. Morbi vel lorem in libero tempor malesuada. In id libero eget orci consequat eleifend ac non dui. Fusce porttitor porta nulla id eleifend. Vestibulum sagittis congue lorem ac mollis.
</p>
</details>
<h4>Legend tag:</h4>
<fieldset>
  <legend>Foobar</legend>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at magna eget turpis malesuada tincidunt. Ut eleifend est nec erat dapibus tincidunt. Donec quis faucibus neque. Sed eleifend dolor non augue euismod, sed tristique ligula pulvinar. Nulla quis venenatis neque. Suspendisse sagittis neque quam, eu dictum sapien luctus sit amet. Mauris lobortis viverra orci at dapibus. Pellentesque auctor pharetra mattis. Sed congue ex vel ligula consequat rutrum. Vivamus porta fermentum lacus, nec luctus nunc iaculis a. Praesent rutrum viverra metus, dapibus volutpat quam luctus sed.

Nunc lacinia molestie commodo. Fusce laoreet viverra tellus. Suspendisse odio leo, iaculis ac cursus a, pharetra a orci. Proin scelerisque quis lorem rutrum fringilla. Integer imperdiet tempor luctus. Proin neque sem, dictum vel tellus non, vulputate placerat urna. Vivamus diam mauris, euismod ut accumsan sed, lobortis bibendum felis. Vivamus scelerisque tellus at ipsum bibendum, vel venenatis justo consectetur. Sed non justo eros. Cras blandit, lacus vitae sodales venenatis, sapien eros congue erat, eget malesuada turpis magna et nisl. Maecenas magna justo, commodo sed quam nec, laoreet fermentum eros.

Duis placerat ut massa ut aliquam. Donec vel porta neque. Etiam sit amet viverra nibh. Fusce venenatis enim at ligula eleifend, non ullamcorper lectus rutrum. Etiam et pretium justo. Praesent aliquam turpis id imperdiet laoreet. Maecenas eget malesuada nulla. Praesent ullamcorper, erat sit amet dapibus commodo, purus ligula egestas ante, a pharetra arcu leo nec leo. Aenean sollicitudin sem nec est rutrum, ac consequat mauris ultrices.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse at ligula vel mauris vehicula malesuada at sit amet risus. Nunc eu nunc at velit dictum lobortis. Aenean varius convallis gravida. Phasellus nulla risus, pellentesque vitae purus quis, mollis bibendum erat. Nam fermentum, lacus vitae consequat lobortis, nulla diam vestibulum ante, nec dictum libero tortor in metus. Vivamus at sodales urna, in dictum lacus. Nullam sit amet lacus sit amet arcu vulputate mollis vitae ac arcu. Aenean faucibus diam at erat molestie interdum.

Integer id augue egestas, condimentum purus id, mattis nibh. Maecenas aliquam lectus sed felis viverra, ut condimentum dui accumsan. Donec vitae felis sed est malesuada condimentum molestie in mauris. Duis a molestie dolor. Aenean sed ultricies velit, eu luctus libero. Quisque at augue sed nisi bibendum pellentesque. Morbi vel lorem in libero tempor malesuada. In id libero eget orci consequat eleifend ac non dui. Fusce porttitor porta nulla id eleifend. Vestibulum sagittis congue lorem ac mollis.
</p>
 </fieldset>
<h4>Text:</h4>
<p>Do a <mark>barrel roll</mark>.</p>
<p>Today is <s>April 13, 2023</s> April 14, 2023.</p>
<sub>Subscript</sub> <sup>Superscript</sup>
<p><u>green</u>.css</p>
<p>The area of a triangle is: 1/2 x <var>b</var> x <var>h</var>, where <var>b</var> is the base, and <var>h</var> is the vertical height.</p>
<section>
  <h2>WWF History</h2>
  <p>The World Wide Fund for Nature (WWF) is an international organization working on issues regarding the conservation, research and restoration of the environment, formerly named the World Wildlife Fund. WWF was founded in 1961.</p>
</section>
<article>
  <h2>Google Chrome</h2>
  <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
</article>

<article>
  <h2>Mozilla Firefox</h2>
  <p>Mozilla Firefox is an open-source web browser developed by Mozilla. Firefox has been the second most popular web browser since January, 2018.</p>
</article>

<article>
  <h2>Microsoft Edge</h2>
  <p>Microsoft Edge is a web browser developed by Microsoft, released in 2015. Microsoft Edge replaced Internet Explorer.</p>
</article>

<h4>Progress bar:</h4>
<p>Percentage:</p>
<progress id="progress" value="33" max="100"> 33% </progress>
<p>Unknown (0%):</p>
<progress></progress>
<h4>Dropdown menu:</h4>
<select name="oses" id="oses">
<strong>Operating Systems:</strong>
    <option value="win">Windows</option>
    <option value="mac">macOS</option>
    <option value="linux">Linux</option>
    <option value="other">Other</option>
  </select>
<h4>Open dialog tag:</h4>
<dialog open>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at magna eget turpis malesuada tincidunt. Ut eleifend est nec erat dapibus tincidunt. Donec quis faucibus neque. Sed eleifend dolor non augue euismod, sed tristique ligula pulvinar. Nulla quis venenatis neque. Suspendisse sagittis neque quam, eu dictum sapien luctus sit amet. Mauris lobortis viverra orci at dapibus. Pellentesque auctor pharetra mattis. Sed congue ex vel ligula consequat rutrum. Vivamus porta fermentum lacus, nec luctus nunc iaculis a. Praesent rutrum viverra metus, dapibus volutpat quam luctus sed.

Nunc lacinia molestie commodo. Fusce laoreet viverra tellus. Suspendisse odio leo, iaculis ac cursus a, pharetra a orci. Proin scelerisque quis lorem rutrum fringilla. Integer imperdiet tempor luctus. Proin neque sem, dictum vel tellus non, vulputate placerat urna. Vivamus diam mauris, euismod ut accumsan sed, lobortis bibendum felis. Vivamus scelerisque tellus at ipsum bibendum, vel venenatis justo consectetur. Sed non justo eros. Cras blandit, lacus vitae sodales venenatis, sapien eros congue erat, eget malesuada turpis magna et nisl. Maecenas magna justo, commodo sed quam nec, laoreet fermentum eros.

Duis placerat ut massa ut aliquam. Donec vel porta neque. Etiam sit amet viverra nibh. Fusce venenatis enim at ligula eleifend, non ullamcorper lectus rutrum. Etiam et pretium justo. Praesent aliquam turpis id imperdiet laoreet. Maecenas eget malesuada nulla. Praesent ullamcorper, erat sit amet dapibus commodo, purus ligula egestas ante, a pharetra arcu leo nec leo. Aenean sollicitudin sem nec est rutrum, ac consequat mauris ultrices.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse at ligula vel mauris vehicula malesuada at sit amet risus. Nunc eu nunc at velit dictum lobortis. Aenean varius convallis gravida. Phasellus nulla risus, pellentesque vitae purus quis, mollis bibendum erat. Nam fermentum, lacus vitae consequat lobortis, nulla diam vestibulum ante, nec dictum libero tortor in metus. Vivamus at sodales urna, in dictum lacus. Nullam sit amet lacus sit amet arcu vulputate mollis vitae ac arcu. Aenean faucibus diam at erat molestie interdum.

Integer id augue egestas, condimentum purus id, mattis nibh. Maecenas aliquam lectus sed felis viverra, ut condimentum dui accumsan. Donec vitae felis sed est malesuada condimentum molestie in mauris. Duis a molestie dolor. Aenean sed ultricies velit, eu luctus libero. Quisque at augue sed nisi bibendum pellentesque. Morbi vel lorem in libero tempor malesuada. In id libero eget orci consequat eleifend ac non dui. Fusce porttitor porta nulla id eleifend. Vestibulum sagittis congue lorem ac mollis.</dialog>
<br>
<br>
<header>
<br>
<br>
<br>
<br>
<br>
<br>

<p>Copyright (C) 1987-2023 The Gogle Foundation. All rights reserved.</p>
<p>Developed in HTML, JS and CSS, MySQL connection test made in PHP.</p>
<em>Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0 Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License. For more information about licensing, <a href="https://www.apache.org/licenses/LICENSE-2.0.txt">click here</a>.</em>
<br>
<br>
<br>

<a href="http://localhost/index.php">Go back to Gogle Search</a>
</header>
</center>
</body>
</html>