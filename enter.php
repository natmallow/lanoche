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
	left: 8px;
	top: 2570px;
}
#apDiv2 {
	position: absolute;
	width: 1278px;
	height: 567px;
	z-index: 2;
	left: 9px;
	top: 1475px;
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
<div id="sliderbox"><iframe id="comslider_iframe_759711" width="1280" height="1147" style="border:0; margin:0; overflow:hidden;" scrolling="no" src="http://commondatastorage.googleapis.com/comslider/target/users/1441810091x9c5f4eabc7bf5e0ee672b558280d4dad/comsliderframe759711.html"></iframe></div>
<p>&nbsp;</p>
<div id="apDiv1">
  <div align="center"><span style="font-size: 0.6em">© La Noche, Premium Tequila Liquor</span></div>
</div>
<p>&nbsp;</p>
<div id="apDiv2">
  <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=10,1,1,0" width="1920" height="1080">
    <param name="src" value="LA NOCHE SPOT.mp4" />
    <embed src="LA NOCHE SPOT.mp4" pluginspage="http://www.adobe.com/shockwave/download/" width="1920" height="1080"></embed>
  </object>
</div>
</body>
</html>

