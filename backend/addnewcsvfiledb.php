<?php
session_start();
include 'conn.php';
error_reporting('E_All');
if(isset($_POST["Import"])){
	$type=$_POST['type'];
	if($type=='1')
	{
// $filename=$_FILES["file"]["tmp_name"];
// if($_FILES["file"]["size"] > 0)
// {
	//  	$file = fopen($filename, "r");
//        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
//        {
		// 		$sql1 = "INSERT into hotelresto (`id`,`storeid`, `storetype`, `description`, `cashback`, `offer_desc`, `affiliate_type`, `urllink`, `image`, `couponcode`, `promoid`, `idseller`, `latest`, `status`)
	//           	values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]')";
		// 		$result1 = mysql_query( $sql1, $conn );
	// 	if(! $result1 )
	// 	{
	// 	header('location:add-csv-file.php?msg=Error');
	// 	}
//        }
//        fclose($file);
// header('location:add-csv-file.php?msg=Csv file has been upload');
// mysql_close($conn);
// }
	}
	else
	{
		if($type=='2')
		{
			$filename=$_FILES["file"]["tmp_name"];
			if($_FILES["file"]["size"] > 0)
			{
				$file = fopen($filename, "r");
				while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
				{
					
					$sql20 = $conn->prepare("INSERT into coupon (`store_name`,`offer`,`url`,`description`,`category`,`code`)values('".$emapData[0]."','".$emapData[1]."','".$emapData[2]."','".$emapData[3]."','".$emapData[4]."','".$emapData[5]."')");
					if($sql20->execute())
					{
						$_SESSION['msg']="<h4><strong>Success!</strong>CSV File Upload Successfully.</h4>";
						header("location:add-csv-file.php");
					}
				}
				fclose($file);
				
			}
		}
		if($type=='3')
		{
			$filename=$_FILES["file"]["tmp_name"];
			if($_FILES["file"]["size"] > 0)
			{
				$file = fopen($filename, "r");
				while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
				{
					$sql2 = $conn->prepare("INSERT into product (`product_name`,`store_name`,`brand_name`,`image`,`s_description`,`f_description`,`price`,`mprice`,`discount`,`product_star`,`url`,`status`,`category`, `sub_category`,`reward_point`,`sku`,`specification`)values('".$emapData[0]."','".$emapData[1]."','".$emapData[2]."','".$emapData[3]."','".$emapData[4]."','".$emapData[5]."','".$emapData[6]."','".$emapData[7]."','".$emapData[8]."','".$emapData[9]."','".$emapData[10]."','".$emapData[11]."','".$emapData[12]."','".$emapData[13]."','".$emapData[14]."','".$emapData[15]."','".$emapData[16]."')");
					if($sql2->execute())
					{
						$_SESSION['msg']="<h4><strong>Success!</strong>CSV File Upload Successfully.</h4>";
						header("location:add-csv-file.php");
					}
					
					
				}
				fclose($file);
				
			}
		}
	}
}
?>