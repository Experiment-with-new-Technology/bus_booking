<?php
/*
$email=addslashes($_POST['email']);
$to =$email; 
$subject = "RUET CAR BOOKING";
$message="Your Booking have been successfully Approved.\r\nDriver Name:"+$_POST['driver_name']+"\r\nHelper Name:"+$_POST['helper_name']+"\r\nCar No:"+$_POST['car_no'];
$headers = "From: RUET CAR BOOKING"; 
 $sent = mail($to, $subject, $message, $headers) ;
*/ 
echo "Booking is successfully approved.";	
$con = mysql_connect("localhost","root","");
if (!$con){                                                                       
die('Could not connect: ' . mysql_error());}
mysql_select_db("bus", $con);
$dr_name=$_POST['driver_name'];
$helper_name=$_POST['helper_name'];
$car_no=$_POST['car_no'];
$number=$_POST['number_booking'];
$approve="Approved";
mysql_query("update driver set dr_booking=1 where dr_name='$dr_name'");
mysql_query("update helper set hel_booking=1 where hel_name='$helper_name'");
mysql_query("update registration set car_no='$car_no',driver_name='$dr_name',helper_name='$helper_name',admin_approval='$approve' where number='$number'");
mysql_close($con);
?>     