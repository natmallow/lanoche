<?php

session_start();

if(!$_SESSION['over21'])
{
	header("index.php");
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #000;
	color: #CCC;
}
a:link {
	color: #CCC;
	text-decoration: none;
}
a:visited {
	color: #CCC;
	text-decoration: none;
}
.box1 {
	width: 400px;
}
.box1 {
	right: 1px;
	margin-left: 800px;
}
.wrapper {
	width: 1400px;
}
.box1 {
	position: relative;
}
.background1 {
	float: left;
	width: 700px;
}
.background2 {
	float: left;
	width: 700px;
}
#apDiv1 {
	position: absolute;
	width: 690px;
	height: 366px;
	z-index: 1;
	left: 363px;
	top: 647px;
	color: #000;
	background-color: #000000;
}
#apDiv2 {
	position: absolute;
	width: 203px;
	height: 210px;
	z-index: 1;
	left: 3px;
	top: 53px;
}
#apDiv3 {
	position: absolute;
	width: 446px;
	height: 300px;
	z-index: 2;
	left: 233px;
	top: 53px;
	color: #CCC;
}
#apDiv4 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 2;
	left: -800px;
	top: 1035px;
}
#apDiv5 {
	position: absolute;
	width: 1400px;
	height: 115px;
	z-index: 2;
	left: 9px;
	top: 1246px;
}
</style>
</head>

<body>
<div class="wrapper">
  <p><a href="enter.php"><img src="1634e5ff5c27fb8ea20a57d25749dd60.png" width="171" height="120" /></a></p>
  <p>Premium Tequila Liquor</p>
  <div class="box1">
    <table width="580" border="0" cellspacing="1">
      <tr>
        <td width="80"><div align="center"><a href="enter.php">Home</a></div></td>
        <td width="80"><div align="center"><a href="about.php">About</a></div></td>
        <td width="80"><div align="center"><a href="ourstory.php">Our Story</a></div></td>
        <td width="80"><div align="center"><a href="products.php">Products</a></div></td>
        <td width="80"><div align="center"><a href="events.php">Events</a></div></td>
        <td width="80"><div align="center"><a href="contactus.php">Contact Us</a></div></td>
        <td width="100"><div align="center"><a href="https://www.facebook.com/drinklightyourinnerfire" target="_blank"><img src="http://www.niftybuttons.com/modern/facebook.png" alt="Facebook" width="41" height="34" style="margin:1px;" align="left" border="0" /></a><a href="https://twitter.com/drinklanoche" target="_blank"><img src="http://www.niftybuttons.com/modern/twitter.png" alt="Twitter" width="41" height="34" style="margin:1px;" border="0"  align="left" /></a></div></td>
      </tr>
    </table>
  </div>
  <div id="apDiv1">
    <div id="apDiv2"><img src="Logo.png" width="201" height="210" /></div>
    <div id="apDiv3">
      <p>La Noche tequila was founded in 2011, after the founder Lily Lopez Lomeli decided she wanted to make her quality drinks available to the world. La Noche's products are created using a recipe that has been passed down through generations.</p>
      <p>The company is nestled out of Jalisco, Mexico. The family owned agave farm allows the company to make quality its top priority. The product is currently available in Mexico and The United States.</p>
    </div>
  </div>
  <div id="apDiv5">
    <div align="center"><span style="font-size: 0.6em">© La Noche, Premium Tequila Liquor</span></div>
  </div>
  <p align="right">&nbsp;</p>
  <div class="background1"><img src="statue.jpg" width="700" height="933" /></div>
  <div class="background2"><img src="Agave.jpg" width="700" height="933" /></div>
  <p align="right">&nbsp;</p>
  <p>&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
