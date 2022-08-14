<?php
	session_start();
	require_once('conn.php');
	if(isset($_SESSION['idadmin']))
		{


		if(isset($_POST['submit']))
			{
				 $idd=$_GET['id'];

			
			$description = $_POST['description'];

			$sql3 = $conn->prepare("SELECT * FROM return_policy WHERE id = '$idd'");
			$sql3->execute();
			$res3 = $sql3->fetch(PDO::FETCH_ASSOC);
			$oldImg = $res3['image'];
			if($_FILES['image']['name'])
				{
				$img_name = $_FILES['image']['name'];
				$tmp_name = $_FILES['image']['tmp_name'];
				$path = "../images/";
				$image = uniqid().$img_name;
				move_uploaded_file($tmp_name,$path.$image);
				unlink("../images/".$oldImg);
				}
			else
				{
				$image = $oldImg;
				}
			$sql = $conn->prepare("UPDATE return_policy SET description =?, image = ? WHERE id = '".$_GET['id']."'");
			if($sql->execute([$description,$image ]))
				{
				header("location:manage-return.php?msg=1");
				$_SESSION['msg']="
				    <h4><strong>Success!</strong>Update Return Policy Successfully.</h4>
				";
				}
		}
	}
?>