<?php
ob_start();
session_start();
include 'conn.php';
if(isset($_POST['submit']))
{
	
$query="SELECT * FROM adminlogin where username = :username AND password= :password and status ='Active'";

	$sth = $conn->prepare($query);
$sth->execute( 
	array(
		'username' =>$_POST['uname'],
		'password' =>$_POST['password']
	)
);

  $row=$sth->fetch(PDO::FETCH_OBJ);
  $c=$sth->rowCount();


		
	if($c==1)
	{		
		date_default_timezone_set('Asia/Calcutta');
		$line ="$_SERVER[REMOTE_ADDR]";
		$datetime=date('d-m-Y H:i:s');


	    $_SESSION['idadmin']= $row->adminloginid;
		$_SESSION['name']=$row->name;
		$_SESSION['type']=$row->type;
		header("location:profile.php");
	}
	else
	{
		header("location:index.php?msg=0");
		
	}
	ob_flush();
}