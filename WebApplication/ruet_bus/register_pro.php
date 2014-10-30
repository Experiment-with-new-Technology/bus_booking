<?php session_start();
	
		$_SESSION['reg']=array();
		$name=$_POST['name'];
		$desig=$_POST['desig'];
		$email=$_POST['email'];
		$dept=$_POST['dept'];
		$phone=$_POST['phone'];
		$needed_date=$_POST['needed_date'];
		$needed_time=$_POST['needed_time'];
		$return_date=$_POST['return_date'];
		$return_time=$_POST['return_time'];
	    $car_type=$_POST['car_type'];
		$start_journey=$_POST['start_journey'];
		$destination_palce=$_POST['destination_palce'];
		$journey_purpose=$_POST['journey_purpose'];
		
if(empty($_POST))
{
	header("location:booking.php");
}
else
{
   
	if(empty($name))
	{
		$_SESSION['reg']['name']="Please enter name.";
	}
	 if(empty($desig))
	{
		$_SESSION['reg']['desig']="Please enter designation (Student/Teacher(Prof/Ass. Prof/.....) /Others.";
	}

	if(empty($email))
	{
		$_SESSION['reg']['email']="Please enter email address.";
	}
	else if(! eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email ))
	{
		$_SESSION['reg']['email']="Please enter valid email address.";
	}
	if(empty($dept))
	{
		$_SESSION['reg']['dept']="Please select dept.";
	}
	if(empty($phone))
	{
		$_SESSION['reg']['phone']="Please enter phone number.";
	}
	else if(!is_numeric($phone))
	{
		$_SESSION['reg']['phone']="Please enter valid phone number.";
	}
	
	if(empty($needed_date))
	{
		$_SESSION['reg']['needed_date']="Please enter Car needed date.";
	}
	if(empty($needed_time))
	{
		$_SESSION['reg']['needed_time']="Please enter Car needed time.";
	}
	if(empty($return_date))
	{
		$_SESSION['reg']['return_date']="Please enter Car Return date.";
	}
	if(empty($return_time))
	{
		$_SESSION['reg']['return_time']="Please enter Car return time.";
	}
	if(empty($car_type))
	{
		$_SESSION['reg']['car_type']="Please select Car Type.";
	}
	if(empty($start_journey))
	{
		$_SESSION['reg']['start_journey']="Please enter start journey Place.";
	}
	if(empty($destination_palce))
	{
		$_SESSION['reg']['destination_palce']="Please enter destination palce.";
	}
	if(empty($journey_purpose))
	{
		$_SESSION['reg']['journey_purpose']="Please select journey purpose.";
	}

		


   

	
	if(empty($_SESSION['reg']))
	{
	    $link=mysql_connect("localhost","root","");
		mysql_select_db("bus",$link);
	    $q="insert into registration(name,desig,email,dept,phone,needed_date,needed_time,return_date,return_time,car_type,start_journey,destination_palce,journey_purpose,approval,admin_approval)
		values('$name','$desig','$email','$dept','$phone','$needed_date','$needed_time','$return_date','$return_time','$car_type','$start_journey','$destination_palce','$journey_purpose',0,'Not Approve')";
		mysql_query($q,$link);	
			header("location:welcome.php");
			
	}
	else
	{
		$_SESSION['data']=array();
		
		foreach($_POST as $id=>$val)
		{
			$_SESSION['data'][$id]=$val;
		}
		header("location:booking.php");
	}
}
?>