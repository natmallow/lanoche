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
#sliderbox {
	float: left;
	position: relative;
}
#apDiv1 {
	position: absolute;
	width: 1280px;
	height: 115px;
	z-index: 1;
	left: 6px;
	top: 1785px;
}
#apDiv2 {
	position: absolute;
	width: 1278px;
	height: 567px;
	z-index: 2;
	left: 9px;
	top: 1475px;
}
#apDiv3 {
	position: absolute;
	width: 1380px;
	height: 1403px;
	z-index: 2;
}
#apDiv4 {
	position: absolute;
	width: 540px;
	height: 350px;
	z-index: 3;
	left: 847px;
}
#apDiv5 {
	position: absolute;
	width: 540px;
	height: 350px;
	z-index: 4;
	left: 847px;
	top: 670px;
}
#apDiv6 {
	position: absolute;
	width: 963px;
	height: 700px;
	z-index: 5;
	left: 425px;
	top: 1021px;
}
#apDiv7 {
	position: absolute;
	width: 417px;
	height: 350px;
	z-index: 6;
	top: 1020px;
}
#apDiv8 {
	position: absolute;
	width: 417px;
	height: 350px;
	z-index: 7;
	left: 9px;
	top: 1371px;
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
<p>&nbsp;</p>
<div id="sliderbox"></div>
<div id="apDiv3"><iframe id="comslider_iframe_777190" width="840" height="700" style="border:0; margin:0; overflow:hidden;" scrolling="no" src="http://commondatastorage.googleapis.com/comslider/target/users/1443457173xa10edfc9d95865cc2ecff596aa91ae68/comsliderframe777190.html"></iframe>
</div>
<div id="apDiv4"><img src="IMG_1340.JPG" width="540" height="350" /></div>
<p>&nbsp;</p>
<div id="apDiv1">
  <div align="center"><span style="font-size: 0.6em">© La Noche, Premium Tequila Liquor</span></div>
</div>
<div id="apDiv5"><img src="eventpic1.jpg" width="540" height="350" /></div>
<div id="apDiv6"><img src="IMG_1480.JPG" width="963" height="700" /></div>
<div id="apDiv7"><img src="IMG_4166.jpg" width="417" height="350" /></div>
<div id="apDiv8"><img src="IMG_1341.JPG" width="417" height="350" /></div>
</body>
</html>

