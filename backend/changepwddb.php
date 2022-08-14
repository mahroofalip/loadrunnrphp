<?php
ob_start();
session_start();
include "conn.php";
$id=$_SESSION['idadmin'];
if(isset($_POST['submit']))
{
$c=$_POST['npwd'];
$s="select * from adminlogin  where adminloginid='".$id."' and password='".$_POST['opwd']."'";
 $r = $conn->prepare($s);

 
if($r>0)
{
$sql=$conn->prepare("update adminlogin  set password='".$c." ' where adminloginid='".$id."' ");
	//echo $sql;
 if($sql->execute([$c]))
        {
//$a=mysql_query($sql) or die(mysql_error());
header("location:change-password.php?msg=1");
}
else
{ 
header("location:change-password.php?msg=0");
}
ob_flush();
}
}
?>
