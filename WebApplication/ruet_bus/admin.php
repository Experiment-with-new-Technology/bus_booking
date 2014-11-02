<?php
include("database.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 
//addslashes is used for convert to safe mode of database entry ie Zannat's to zannat\'s (if necessary)
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 


$sql="SELECT * FROM admin WHERE u_name='$myusername' and pass='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: welcome_admin.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Rajshahi University of Engineering &amp; Technology</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
  

  
  
  
</head>
<body>
<div id="main-wraper">
<div id="top-wraper">
<div id="banner"></div>
<div id="nav">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="about_ruet.php">About RUET</a></li>
  <li><a href="#">Notice Board</a></li>
  <li><a href="bus.php">Bus Booking</a></li>
  <li><a href="#">FAQ</a></li>
  
</ul>
</div>
</div>

<div id="mid-wraper">
<div class="mid-wraper-top">
<div class="mid-leftouter">
<div class="mid-left-container">
<h1>ADMIN<span class="yellow-heading">PANEL</span></h1>

<form action="" method="post">
<p>Username :  <input type="text" name="username" class="input"></p>
<br><p>Password : <input type="password" class="input" name="password"></p><br>
<input type="submit" style="height:35px;width:120px;" value="Login">		
</form>



</div>

</div>
<div class="right-container">
<div class="right-container-top">

<h3>Notice<span class="yellow-heading"> Board</span></h3>
<div id="moving_tab">
	<div class="tabs">
		<div class="lava"></div>
		<span class="item">Common Notice</span>
		<span class="item">Academic Notice</span>

	</div>
					
	<div class="content">	
<marquee style="font-family:Book Antiqua; color: #FFFFFF" direction="up">	
		<div class="panel">						
			<ul>
				<li><a href='#'>Panel 01 Item 01</a></li>
				<li><a href='#'>Panel 01 Item 02</a></li>
				<li><a href='#'>Panel 01 Item 03</a></li>
				<li><a href='#'>Panel 01 Item 04</a></li>
				<li><a href='#'>Panel 01 Item 05</a></li>
				<li><a href='#'>Panel 01 Item 01</a></li>


			</ul>
			<ul>
				<li><a href='#'>Panel 02 Item 01</a></li>
				<li><a href='#'>Panel 02 Item 02</a></li>
				<li><a href='#'>Panel 02 Item 03</a></li>
				<li><a href='#'>Panel 02 Item 04</a></li>
				<li><a href='#'>Panel 02 Item 05</a></li>	
				<li><a href='#'>Panel 01 Item 01</a></li>
					
			</ul>						
		</div>
		</marquee>

	</div>	
</div>
</div>
<div class="right-container-dwn">
<h4>News and Updates</h4>
<strong>15.04.2010</strong> Lorem Ipsum is simply dummy text of the
printing and typesetting industry. Lorem Ipsum has been. <br>
<br>
<strong>15.04.2010</strong> Lorem Ipsum is simply dummy text of the
printing and typesetting industry. Lorem Ipsum has been.<br>
<br>
<strong><a href="#" class="read-more-right">read more...</a></strong> </div>
</div>
</div>
<div class="mid-wraper-bttm"><img src="images/mid-bttm.jpg" alt=""></div>
</div>
<div class="footer">



<div class="footer-left">&copy; Copyright 2014 © All rights reserved, RUET. Designed by @ Rakib Hasan, CSE-093004, RUET</a>

</div>
</div>
</div>

</body></html>