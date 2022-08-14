<?php
session_start();
unset($_SESSION['idadmin']);
header('location:index.php');
/*if(isset($_SESSION['iduser'] ) || ($_SESSION['email']) ||  ($_SESSION['name']) )
{*/
//session_unset($_SESSION['iduser']);
//session_destroy($_SESSION['iduser']);

/*} */
?>
