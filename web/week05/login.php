<?php 
include('includes/config.php');
$collect='';
if($_POST){
$collect = login($_POST);
if($collect == 'you have successfully login'){
header("location: choose_election.php");
exit;}
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
.style7 {font-size: 16px; font-weight: bold; }
.style8 {color: #000000; font-weight: bold; font-size: 18px; }
.style3 {	color: #FF0000;
	font-weight: bold;
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
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS E-VOTING SYSTEM IS FOR CS313 CLASS 
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
</div>
<div id="footer">
  <p class="style8">LOGIN CONSOLE </p>
	<table width="371" height="177" border="1" align="center" bgcolor="#99CCFF">
      <tr>
        <td width="361" height="32"><table width="200" align="center" bgcolor="#CCCCCC">
            <tr>
              <td height="29"><div align="center"><span class="style3">LOGIN CONSOLE </span></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="130"><form id="form1" method="post" action="">
            <table width="313" align="center">
              <tr>
                <td width="96"><span class="style3">USERNAME</span></td>
                <td width="205"><label>
                  <input type="text" name="txtusername" />
                </label></td>
              </tr>
              <tr>
                <td height="30"><span class="style3">PASSWORD</span></td>
                <td><input type="password" name="txtelectionid" /></td>
              </tr>
              <tr>
                <td height="41"><label>
                  <input type="submit" name="Submit" value="Submit" />
                </label></td>
                <td><input type="reset" name="Submit2" value="Reset" /></td>
              </tr>
            </table>
        </form></td>
      </tr>
    </table>
	<p>&nbsp;</p>
</div>
</body>
</html>
