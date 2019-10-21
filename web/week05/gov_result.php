<?php
// Check if session is not registered , redirect back to main page.
// Put this code in first line of web page.
session_start();
if(!session_is_registered(txtusername)){
header("location:login.php");
}
?>
<?php
include('includes/config.php');
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
      <td height="212"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyOTLToxdMty7hND1kulM0hjWRW2Wq-QKDJZ51grxAiHtP4wo1" alt="" width="770" height="210" /></td>
    </tr>
  </table>
</div>
<div id="menu">
	<ul>
		<li> <a href="index.php"> |  Home  |</a></li>
		<li>
		  <a href="login.php">|  Voting  |</a></li>
		<li>
		  <a href="pres_result.php">|  Result  |</a></li>
		<li>
		  <a href="login.php" >|  Login  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS E-VOTING SYSTEM IS FOR ELEGIBLE NIGERIAN WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD JUNE 2012 
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
</div>
<div id="footer">
  <p class="style1"><a href="logout.php">LOGOUT</a></p>
  <p class="style1">UPDATED GOVERNORSHIP RESULT  </p>
  <table width="743" height="93" border="1" align="center" cellpadding="7" cellspacing="0" bgcolor="#999999">
    <tr>
      <th width="263" height="56" scope="col" >CANDIDATE NAME </th>
      <th width="215" scope="col" >PARTY</th>
      <th width="215" scope="col" >VOTES</th>
    </tr>
    <?php 
 $row = get_gov_vote();
 foreach($row as $col_val){
  $sno++;
 if(($sno%2)==0)$format="background-color:#cccccc";
 else $format="background-color:#00FF66";
 
?>
    <tr>
      <td  style="<?php echo $format; ?>"><?php echo $col_val['cand_name'] ?></td>
      <td  style="<?php echo $format; ?>"><?php echo $col_val['party'] ; ?></td>
      <td  style="<?php echo $format; ?>"><?php echo $col_val['gov_count'] ; ?> </td>
    </tr>
    <?php  } ?>
  </table>
</div>
</body>
</html>
