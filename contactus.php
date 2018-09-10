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
#apDiv1 {
	position: absolute;
	width: 462px;
	height: 452px;
	z-index: 1;
	left: 819px;
	top: 364px;
}
#apDiv2 {
	position: absolute;
	width: 581px;
	height: 275px;
	z-index: 2;
	left: 15px;
	top: 370px;
	font-size: 16px;
}
#apDiv3 {
	position: absolute;
	width: 1269px;
	height: 115px;
	z-index: 3;
	left: 14px;
	top: 865px;
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
    <table width="100%" border="0" cellpadding="5">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
    <form id="form1" name="form1" method="post" action="/gdform.php">
      <p>
        <label>Name
          <input name="textfield" type="text" id="textfield" maxlength="50" />
        </label>
      </p>
      <p>
        <label>Email
          <input name="textfield2" type="text" id="textfield2" maxlength="75" />
        </label>
      </p>
      <p>
        <label>Comments
          <br />
          <textarea name="textarea" id="textarea" cols="45" rows="10"></textarea>
        </label>
      </p>
      <p>
        <input type="submit" name="button" id="button" value="Submit" /> 
        <input type="reset" name="button2" id="button2" value="Reset" />
      </p>
      <p>&nbsp;</p>
    </form>
  </div>
  <div id="apDiv2">
    <p align="justify">We would love to hear from you! </p>
    <p align="justify">Please leave your information to the right, and we will contact you within 48 hours. If you prefer to contact us by mail or phone, please see the information below.</p>
    <p align="justify">&nbsp;</p>
    <p align="justify">&nbsp;</p>
    <p align="justify">&nbsp;</p>
    <p align="justify">Mailing Address</p>
    <p align="justify">La Noche</p>
    <p align="justify">14271 Jeffrey Road, Irvine, CA, United States    </p>
    <p align="justify">&nbsp;</p>
    <p align="justify">Telephone Number</p>
    <p align="justify">323-632-1458</p>
  </div>
  <p align="right">&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv3">
  <div align="center"><span style="font-size: 0.6em">© La Noche, Premium Tequila Liquor</span></div>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
