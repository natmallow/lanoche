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
#Productbox {
	font-size: 24px;
	font-style: italic;
	text-decoration: none;
}
#apDiv1 {
	position: absolute;
	width: 1403px;
	height: 115px;
	z-index: 1;
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
  <p align="left">&nbsp;</p>
  <div id="Productbox">
    <p>Products</p>
    <p align="center">&nbsp;</p>
    <p align="center"><img src="bottlepic.jpg" width="333" height="445" /></p>
    <p align="center">Pomegranate Tequila Drink</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
  </div>
  <p align="center">Our Pomegranate tequila drink has a fruity, sweet, and citrus flavor.</p>
  <p align="center">The drink comes bottled in a bottle that lights up, and a shot glass as an added bonus. To locate stores with product availability, please click below.</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv1">
  <div align="center"><span style="font-size: 0.6em">© La Noche, Premium Tequila Liquor</span></div>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
