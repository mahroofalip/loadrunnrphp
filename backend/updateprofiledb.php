<?php
ob_start();
session_start();
include 'conn.php';
if(isset($_POST['submit']))
{
$stype=$_SESSION['type'];
if($stype=='Superadmin')
{

$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$id = $_POST['id'];


$sql=$conn->prepare("UPDATE adminlogin  SET name='".$name."',email='".$email."',mobileno='".$mobileno."',address='".$address."',city='".$city."',pincode='".$pincode."',state='".$state."'  WHERE adminloginid='".$id."' ");
//echo $sql;     
if($sql->execute([$name,$email,$mobileno,$address,$city,$pincode,$state]))
{
header("location:update-profile.php?msg=1");
ob_flush();
}
}
}
?>