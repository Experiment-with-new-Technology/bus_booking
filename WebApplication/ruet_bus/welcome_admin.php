<?php
include('lock.php');
?>


<?php
$con = mysql_connect("localhost","root","");
if (!$con){                                                                       
die('Could not connect: ' . mysql_error());}
mysql_select_db("bus", $con);


  
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$dr_name=$_POST['dr_name']; 
mysql_query("update driver set dr_booking=0 where dr_name='$dr_name'");
$hel_name=$_POST['hel_name']; 
mysql_query("update helper set hel_booking=0 where hel_name='$hel_name'");
}


?>
<script type="text/javascript">
  function autoRefresh(refreshPeriod) {
    setTimeout("window.location.reload();",refreshPeriod);
}
</script>
<!Doctype <!DOCTYPE html>
<html>
<head>
  <title>Admin Panael</title>
</head>
<body onload="autoRefresh(20000);">



<?php
$con=mysqli_connect("localhost","root","","bus");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$u_loggedin=$_SESSION['login_user'];
$result = mysqli_query($con,"SELECT * FROM registration");
$result1=mysqli_query($con,"SELECT * FROM admin where u_name='$u_loggedin'");


$dept_loggedin="";
while($row = mysqli_fetch_array($result1))
  {
$dept_loggedin=$row['dept'];

  }
if($dept_loggedin=="all"){
echo "<center><h1>WELCOME TO RUET CAR ADMIN PANEL (Vice Chancellor)<h1></center>";
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Designation</th>
<th>Email</th>
<th>Department</th>
<th>Phone</th>
<th>Needed Date</th>
<th>Needed Time</th>
<th>Return date</th>
<th>Return Time</th>
<th>Car Type</th>
<th>Start Journey</th>
<th>Destination Place</th>
<th>Journey Purpose</th>
<th>Approve Status</th>
<th>Number of Booking</th>
<th>Admin Approval</th>

</tr>";
while($row = mysqli_fetch_array($result))
  {
    if($row['approval']==1){
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['desig'] . "</td>";
  echo "<td>" ."<form action='approve1.php' method='post'><input type='text' name='email' value='".$row['email']."' class='input'>". "</td>";
  echo "<td>" . $row['dept'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['needed_date'] . "</td>";
  echo "<td>" . $row['needed_time'] . "</td>";
  echo "<td>" . $row['return_date'] . "</td>";
  echo "<td>" . $row['return_time'] . "</td>";
  echo "<td>" . $row['car_type'] . "</td>";
  echo "<td>" . $row['start_journey'] . "</td>";
  echo "<td>" . $row['destination_palce'] . "</td>";
  echo "<td>" . $row['journey_purpose'] . "</td>";
  echo "<td>"."<input type='text' name='approve' value='".$row['approval']."' class='input'>" . "</td>";
  echo "<td>"."<input type='text' name='number_booking' value='".$row['number']."' class='input'>" . "</td>";
  echo "<td>" ."<input type='submit' style='height:35px;width:120px;' value='Click to Approve'>"."</form>". "</td>";
  
  echo "</tr>";}
  }
echo "</table>";
echo "<br><br><br><br>";








}
else

if($dept_loggedin!="transport"&&$dept_loggedin!="all"){
if($dept_loggedin!=""){
echo "<center><h1>WELCOME TO RUET CAR ADMIN PANEL (Departmental Head of '$dept_loggedin')<h1></center>";
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Designation</th>
<th>Email</th>
<th>Department</th>
<th>Phone</th>
<th>Needed Date</th>
<th>Needed Time</th>
<th>Return date</th>
<th>Return Time</th>
<th>Car Type</th>
<th>Start Journey</th>
<th>Destination Place</th>
<th>Journey Purpose</th>
<th>Approve Status</th>
<th>Number of Booking</th>
<th>Admin Approval</th>

</tr>";
while($row = mysqli_fetch_array($result))
  {
    if($row['approval']==0){
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['desig'] . "</td>";
  echo "<td>" ."<form action='approve1.php' method='post'><input type='text' name='email' value='".$row['email']."' class='input'>". "</td>";
  echo "<td>" . $row['dept'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['needed_date'] . "</td>";
  echo "<td>" . $row['needed_time'] . "</td>";
  echo "<td>" . $row['return_date'] . "</td>";
  echo "<td>" . $row['return_time'] . "</td>";
  echo "<td>" . $row['car_type'] . "</td>";
  echo "<td>" . $row['start_journey'] . "</td>";
  echo "<td>" . $row['destination_palce'] . "</td>";
  echo "<td>" . $row['journey_purpose'] . "</td>";
  echo "<td>"."<input type='text' name='approve' value='".$row['approval']."' class='input'>" . "</td>";
  echo "<td>"."<input type='text' name='number_booking' value='".$row['number']."' class='input'>" . "</td>";
  echo "<td>" ."<input type='submit' style='height:35px;width:120px;' value='Click to Approve'>"."</form>". "</td>";
  
  echo "</tr>";}
  }
echo "</table>";
echo "<br><br><br><br>";




}



}
else

if($dept_loggedin=="transport"){
echo "<center><h1>WELCOME TO RUET CAR ADMIN PANEL (Departmental Head of '$dept_loggedin')<h1></center>";
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Designation</th>
<th>Email</th>
<th>Department</th>
<th>Phone</th>
<th>Needed Date</th>
<th>Needed Time</th>
<th>Return date</th>
<th>Return Time</th>
<th>Car Type</th>
<th>Start Journey</th>
<th>Destination Place</th>
<th>Journey Purpose</th>
<th>Car No</th>
<th>Driver Name</th>
<th>Helper Name</th>
<th>Number of Booking</th>
<th>Admin Approval</th>

</tr>";
while($row = mysqli_fetch_array($result))
  {
       if($row['approval']==2){
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['desig'] . "</td>";
  echo "<td>" ."<form action='approve.php' method='post'><input type='text' name='email' value='".$row['email']."' class='input'>". "</td>";
  echo "<td>" . $row['dept'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['needed_date'] . "</td>";
  echo "<td>" . $row['needed_time'] . "</td>";
  echo "<td>" . $row['return_date'] . "</td>";
  echo "<td>" . $row['return_time'] . "</td>";
  echo "<td>" . $row['car_type'] . "</td>";
  echo "<td>" . $row['start_journey'] . "</td>";
  echo "<td>" . $row['destination_palce'] . "</td>";
  echo "<td>" . $row['journey_purpose'] . "</td>";
  echo "<td>"."<input type='text' name='car_no' value='".$row['car_no']."' class='input'>" . "</td>";
  echo "<td>"."<input type='text' name='driver_name' value='".$row['driver_name']."' class='input'>" . "</td>";
  echo "<td>"."<input type='text' name='helper_name' value='".$row['helper_name']."' class='input'>" . "</td>";
  echo "<td>"."<input type='text' name='number_booking' value='".$row['number']."' class='input'>" . "</td>";
  echo "<td>" ."<input type='submit' style='height:35px;width:120px;' value='".$row['admin_approval']."'>"."</form>". "</td>";
  
  echo "</tr>";
  }}
echo "</table>";
echo "<br><br><br><br>";




echo"<center><h1>List_of_ Driver</h1></center>";


echo "<center>";

$result2 = mysqli_query($con,"SELECT * FROM driver");

echo "<table border='1'>
<tr>
<th>Driver Name</th>
<th>Mobile Number</th>
<th>Parmanent Address</th>
<th>Booking Status</th>
<th>Review Point</th>
<th>Unbooked Button</th>
</tr>";

while($row = mysqli_fetch_array($result2))
  {
  echo "<tr>";
  echo "<td>" ."<form action='' method='post'><input type='text' name='dr_name' value='".$row['dr_name']."' class='input'>". "</td>";
  echo "<td>" . $row['dr_mobile'] . "</td>";
  echo "<td>" . $row['dr_parmanent'] . "</td>"; 
  echo "<td>" . $row['dr_booking'] . "</td>";
  echo "<td>" . $row['dr_review'] . "</td>";
  echo "<td>" ."<input type='submit' style='height:35px;width:120px;' value='UnBooked'>"."</form>". "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "</center>";



echo "<center><h1>List_of_ Helper</h1></center>";

echo "<center>";

$result3 = mysqli_query($con,"SELECT * FROM helper");

echo "<table border='1'>
<tr>
<th>Helper Name</th>
<th>Mobile Number</th>
<th>Parmanent Address</th>
<th>Booking Status</th>
<th>Review Point</th>
<th>Unbooked Button</th>
</tr>";

while($row = mysqli_fetch_array($result3))
  {
  echo "<tr>";
  echo "<td>" ."<form action='' method='post'><input type='text' name='hel_name' value='".$row['hel_name']."' class='input'>". "</td>";
  echo "<td>" . $row['hel_mobile'] . "</td>";
  echo "<td>" . $row['hel_parmanent'] . "</td>"; 
  echo "<td>" . $row['hel_booking'] . "</td>";
  echo "<td>" . $row['hel_review'] . "</td>";
  echo "<td>" ."<input type='submit' style='height:35px;width:120px;' value='UnBooked'>"."</form>". "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "</center>";
}
mysqli_close($con);


?>

</body>
</html>