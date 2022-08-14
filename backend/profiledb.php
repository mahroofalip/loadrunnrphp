<?php
ob_start();
session_start();
include 'conn.php';
if(isset($_POST['submit']))
{
$stype=$_SESSION['type'];
if($stype=='Superadmin')
{

$name=mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$mobileno=mysql_real_escape_string($_POST['mobileno']);
$address=mysql_real_escape_string($_POST['address']);
$city = mysql_real_escape_string($_POST['city']);
$state = mysql_real_escape_string($_POST['state']);
$pincode = mysql_real_escape_string($_POST['pincode']);



$id = mysql_real_escape_string($_POST['id']);
$sql="update adminlogin  set name='".$name."',email='".$email."',mobileno='".$mobileno."',address='".$address."',city='".$city."',pincode='".$pincode."',state='".$state."'  where adminloginid='".$id."'  ";
//echo $sql;     
mysql_query($sql) or die(mysql_error());
}
else
{

if($_FILES["image2"]["name"]!='')
{

$fileName2 = $_FILES["image2"]["name"]; // The file name

$fileTmpLoc2 = $_FILES["image2"]["tmp_name"]; // File in the PHP tmp folder

$fileType2 = $_FILES["image2"]["type"]; // The type of file it is

$fileSize2 = $_FILES["image2"]["size"]; // File size in bytes

$fileErrorMsg2 = $_FILES["image2"]["error"]; // 0 for false... and 1 for true

$kaboom2 = explode(".", $fileName2); // Split file name into an array using the dot

$fileExt2 = end($kaboom2); // Now target the last array element to get the file extension

$pic2=($_FILES['image2']['name']);

$random_digit2=rand(000000,999999);

$filename2 = $random_digit2.'_'.stripslashes($_FILES['image2']['name']);

$targett2="uploadshopstoreimg/".$filename2;

$source_file2 = $_FILES['image2']['tmp_name'];

list($img_width2,$img_height2) = getimagesize($source_file2);

$im2 = @imagecreatetruecolor($img_width2, $img_height2) or

die('Cannot Initialize new GD image stream');

  $ext2 = strtolower($fileExt2);

    if ($ext2 == "gif"){

      $img_source2 = imagecreatefromgif($source_file2);

    } else if($ext2 =="png"){

      $img_source2 = imagecreatefrompng($source_file2);

    } else {

      $img_source2 = imagecreatefromjpeg($source_file2);

    }

imagecopyresampled($im2, $img_source2, 0, 0, 0, 0, $img_width2, $img_height2,$img_width2, $img_height2);

$uu2=imagejpeg($im2, "uploadshopstoreimg/$filename2", 80);

move_uploaded_file($uu2, $targett2);
}


$name=mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$mobileno=mysql_real_escape_string($_POST['mobileno']);
$address=mysql_real_escape_string($_POST['address']);
$city = mysql_real_escape_string($_POST['city']);
$pincode = mysql_real_escape_string($_POST['pincode']);
$state = mysql_real_escape_string($_POST['state']);
$maplink = mysql_real_escape_string($_POST['maplink']);
$ownername = mysql_real_escape_string($_POST['ownername']);
$id = mysql_real_escape_string($_POST['id']);
$sql="update adminlogin  set name='".$name."',email='".$email."',mobileno='".$mobileno."',address='".$address."',city='".$city."',pincode='".$pincode."',state='".$state."',maplink='".$maplink."',ownername='".$ownername."'  where adminloginid='".$id."'  ";
//echo $sql; 
//echo "Shopstore";    
mysql_query($sql) or die(mysql_error());

if($_FILES["image2"]["name"]!='')
{

$sql2="select * from adminlogin where adminloginid='".$id."' ";
$result2=mysql_query($sql2);
$row2=mysql_fetch_array($result2);
$img2=$row2['image'];
if($img2!='')
{
unlink("uploadshopstoreimg/$img2");
}

$sql1="update adminlogin set image ='".$filename2."' where adminloginid='".$id."'  ";
//echo $sql;
mysql_query($sql1) or die(mysql_error()); 
}

}
header("location:profile.php?msg=1");
ob_flush();
}
?>