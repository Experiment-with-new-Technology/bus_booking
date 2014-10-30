<?php

session_start();

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
  
  
</ul>
</div>
</div>

<div id="mid-wraper">
<div class="mid-wraper-top">
<div class="mid-leftouter">
<div class="mid-left-container">
<h1>WELCOME TO RUET <span class="yellow-heading">Car BOOKING PANEL</span></h1>


	
<form enctype="multipart/form-data" action="register_pro.php" method="post">
<table  height="450px" width="600px" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
	<tr>
		<th colspan=2 style="border-bottom:1px black solid;padding-top:10px;padding-bottom:10px">Motorcar/Microbus/Bus/Ambulance BOOKING Form</th>
		<tr>
		<td>
			<?php
			if(isset($_SESSION['reg']))
			{
				
				$name=$_SESSION['data']['name'];
				$desig=$_SESSION['data']['desig'];
				$email=$_SESSION['data']['email'];
				$phone=$_SESSION['data']['phone'];
				$needed_date=$_SESSION['data']['needed_date'];
				$needed_time=$_SESSION['data']['needed_time'];
				$return_date=$_SESSION['data']['return_date'];
				$return_time=$_SESSION['data']['return_time'];
				$start_journey=$_SESSION['data']['start_journey'];
				$destination_palce=$_SESSION['data']['destination_palce'];
				
				
			}
			
		?>
		<?php if(isset($_SESSION['reg']['done']))
				echo '<font color="green" style="margin-left:10px">'.$_SESSION['reg']['done'].'</font>';
		?>
		</td>
		</tr>
	</tr>
	<tr>
		<td class="td">Applicant Name </td>
		<td class="td"><input type="text" name="name" class="input" value="<?php echo $name ?>">
		<?php if(isset($_SESSION['reg']['name']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['name'].'</font>';
		?></td>
	</tr>
<tr>
		<td class="td">Applicant designation </td>
		<td class="td"><input type="text" name="desig" class="input" value="<?php echo $desig ?>">
		<?php if(isset($_SESSION['reg']['desig']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['desig'].'</font>';
		?></td>
	</tr>
	

	
	<tr>
		<td class="td">Applicant Email </td>
		<td class="td"><input type="text" name="email" class="input" value="<?php echo $email ?>">
		<?php if(isset($_SESSION['reg']['email']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['email'].'</font>';
		?></td>
	</tr>
	<tr>
		<td class="td">Dept/Sec </td>
		<td class="td"><input type="radio" value="cse" name="dept">CSE
			<input type="radio" value="eee" style="border-bottom:1px #a1a1a1 solid" name="dept">EEE
			<input type="radio" value="ete" style="border-bottom:1px #a1a1a1 solid" name="dept">ETE
			<input type="radio" value="me" style="border-bottom:1px #a1a1a1 solid" name="dept">ME
			<input type="radio" value="ipe" style="border-bottom:1px #a1a1a1 solid" name="dept">IPE
			<input type="radio" value="gce" style="border-bottom:1px #a1a1a1 solid" name="dept">GCE
			<input type="radio" value="ce" style="border-bottom:1px #a1a1a1 solid" name="dept">CE
			<input type="radio" value="urp" style="border-bottom:1px #a1a1a1 solid" name="dept">URP
			<input type="radio" value="arc" style="border-bottom:1px #a1a1a1 solid" name="dept">ARC
			<input type="radio" value="oth" style="border-bottom:1px #a1a1a1 solid" name="dept">Other
			<?php if(isset($_SESSION['reg']['dept']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['dept'].'</font>';
		?>
		</td>
	</tr>
	<tr>
		<td class="td">Phone No </td>
		<td class="td"><input type="text" name="phone" class="input" maxlength="10" value="<?php echo $phone ?>">
		<?php if(isset($_SESSION['reg']['phone']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['phone'].'</font>';
		?></td>
	</tr>
    <tr>
		<td class="td">Date (Needed Car) </td>
		<td class="td"><input type="text" name="needed_date" class="input" value="<?php echo $needed_date ?>">
		<?php if(isset($_SESSION['reg']['needed_date']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['needed_date'].'</font>';
		?></td>
	</tr>
	
	<tr>
		<td class="td">Time (Needed Car) </td>
		<td class="td"><input type="text" name="needed_time" class="input" value="<?php echo $needed_time ?>">
		<?php if(isset($_SESSION['reg']['needed_time']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['needed_time'].'</font>';
		?></td>
	</tr>
	<tr>
		<td class="td">Date (Return Car) </td>
		<td class="td"><input type="text" name="return_date" class="input" value="<?php echo $return_date ?>">
		<?php if(isset($_SESSION['reg']['return_date']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['return_date'].'</font>';
		?></td>
	</tr>
	<tr>
		<td class="td">Time (Return Car) </td>
		<td class="td"><input type="text" name="return_time" class="input" value="<?php echo $return_time ?>">
		<?php if(isset($_SESSION['reg']['return_time']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['return_time'].'</font>';
		?></td>
	</tr>
    <tr>
		<td class="td">Type of Car </td>
		<td class="td"><input type="radio" value="bus" name="car_type">BUS
			<input type="radio" value="microbus" style="border-bottom:1px #a1a1a1 solid" name="car_type">Microbus
			<input type="radio" value="motorcar" style="border-bottom:1px #a1a1a1 solid" name="car_type">Motorcar
			<input type="radio" value="ambulance" style="border-bottom:1px #a1a1a1 solid" name="car_type">Ambulance
			<?php if(isset($_SESSION['reg']['car_type']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['car_type'].'</font>';
		?>
		</td>
	</tr>	
	<tr>
		<td class="td">Start Journey Place </td>
		<td class="td"><input type="text" name="start_journey" class="input" value="<?php echo $start_journey ?>">
		<?php if(isset($_SESSION['reg']['start_journey']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['start_journey'].'</font>';
		?></td>
	</tr>
	<tr>
		<td class="td">Destination Place </td>
		<td class="td"><input type="text" name="destination_palce" class="input" value="<?php echo $destination_palce ?>">
		<?php if(isset($_SESSION['reg']['destination_palce']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['destination_palce'].'</font>';
		?></td>
	</tr>

	<tr>
		<td class="td">Journey Purpose </td>
		<td class="td"><input type="radio" value="official" name="journey_purpose">Official
			<input type="radio" value="personal" style="border-bottom:1px #a1a1a1 solid" name="journey_purpose">Personal
			<?php if(isset($_SESSION['reg']['journey_purpose']))
				echo '<font color="red" style="margin-left:10px">'.$_SESSION['reg']['journey_purpose'].'</font>';
		?>
		</td>
	</tr>
	
	
	
	<th colspan="2"><input type="submit" style="height:35px;width:120px" value="Book"></th>
		<?php unset($_SESSION['reg']); ?>
</table>
</form>


</div>

</div>

</div>
</div>
<div class="mid-wraper-bttm"><img src="images/mid-bttm.jpg" alt=""></div>
</div>
<div class="footer">



<div class="footer-left">&copy; Copyright 2014 © All rights reserved, RUET. Designed by @ Tanjila Parvin Tomby, CSE-103044, RUET</a>

</div>
</div>
</div>

</body></html>