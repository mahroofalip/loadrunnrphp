<?php 
session_start();
include"conn.php";
 if(isset($_POST['submit']))
{
     $id=$_GET['id'];
 $title = $_POST['title'];
 $value = $_POST['value'];


$sql2 = $conn->prepare("UPDATE data set title='".$title."',value='".$value."' where id='".$id."'");

if($sql2->execute())
{
$_SESSION['msg1']="
    <h4><strong>Success!</strong>Update Data Successfully.</h4>
";
header("location:manage-data.php?msg1=1");
}

}
?>