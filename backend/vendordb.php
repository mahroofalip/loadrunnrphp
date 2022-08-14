<?php
ob_start();
session_start();
include 'backend/conn.php';
if(isset($_POST['submit']))
{

$location=mysql_real_escape_string($_POST['location']);
$date = mysql_real_escape_string($_POST['date']);
$service=mysql_real_escape_string($_POST['service']);

$sql="update adminlogin  set name='".$name."',email='".$email."',mobileno='".$mobileno."',address='".$address."',city='".$city."',pincode='".$pincode."',state='".$state."'  where adminloginid='".$id."'  ";
//echo $sql;     
mysql_query($sql) or die(mysql_error());
}

header("location:service-providers.php?msg=1");
ob_flush();
}
?>