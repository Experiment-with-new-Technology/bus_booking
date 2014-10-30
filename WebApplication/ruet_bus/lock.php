<?php
include('database.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select u_name from admin where u_name='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['u_name'];

if(!isset($login_session))
{
header("Location: admin.php");
}
?>