<?php
session_start(); 
if(session_destroy())
{

}
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING REGISTRATION SYSTEM||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
</head>
<body>
<div id="header">
  <table width="200" align="center">
    <tr>
      <td height="212"><img src="images/header1.jpg" alt="" width="770" height="210" /></td>
    </tr>
  </table>
</div>
<div id="menu">
	<ul>
		<li> <a href="home.php"> |  Home  |</a></li>
		<li>
		  <a href="login.php">|  Voting  |</a></li>
		<li>
		  <a href="login.php" >|  Login  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#FF1000;"><strong><marquee  behavior="scroll">
    THIS E-VOTING SYSTEM IS FOR CS313 CLASS 
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
</div>
<div id="footer">
  <p class="style1">YOU HAVE SUCCESSFULLY LOGGED OUT</p>
  <p class="style1">THANKS </p>
  <p class="style1"><a href="index.php"><img src="images/cooltext457951615.png" alt="" width="86" height="43" /></a></p>
</div>
</body>
</html>
