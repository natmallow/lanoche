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
	position: relative;
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
	left: 359px;
	top: 553px;
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
}
#apDiv4 {
	position: relative;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 954px;
	top: 485px;
}
#apDiv5 {
	position: absolute;
	width: 1431px;
	height: 747px;
	z-index: 2;
	left: 9px;
	top: 1389px;
}
#apDiv6 {
	position: absolute;
	width: 1441px;
	height: 115px;
	z-index: 3;
	left: -20px;
	top: 1566px;
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
  <p align="right">&nbsp;</p>
  <div class="background2"><img src="bottlepic.jpg" width="633" height="1045" /></div>
  <div id="Picture tag">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <p align="center">_______________________________________</p>
  <p align="center">REFERRED TO AS THE ELIXIR OF THE GODS</p>
  <p align="center">BY TAKING THE POWER OF PREMIUM TEQUILA</p>
  <p align="center">COMBINED WITH THE  EXOTIC TASTE OF POMEGRANATE.</p>
  <p align="center">&nbsp;</p>
  <p align="center">LIFTING THE SOUL, ENERGIZING THE SPIRIT</p>
  <p align="center">TO LIGHT YOUR INNER FIRE.</p>
  <p align="center">&nbsp;</p>
  <p align="center">FROM GENERATION TO GENERATION</p>
  <p align="center">SPANNING OVER 150 YEARS</p>
  <p align="center">IT IS MY PLEASURE TO INTRODUCE TO YOU,</p>
  <p align="center">LA NOCHE</p>
  <p align="center">_______________________________________</p>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div id="apDiv6">
  <div align="center"><span style="font-size: 0.6em">© La Noche, Premium Tequila Liquor</span></div>
</div>
</body>
</html>
