<?php
ob_start(); 
session_start();
include"conn.php";
$cid=$_POST['chk'];
if(isset($_SESSION['idadmin']))
{
// if(isset($_POST['delete']))
// {
// $cid=$_POST['chk'];
// foreach($cid as $v)
// {
//  $sql3 = $conn->prepare("SELECT * FROM project WHERE id = '".$v."'");
//  $sql3->execute();
//  $row=$sql3->fetch(PDO::FETCH_OBJ);
//  $img = $row->resume;
//  $file = "../resume/".$img;
//  unlink($file);
// $sql = $conn->prepare("DELETE FROM `project` WHERE id='".$v."'");
//  $sql->execute();
// }
// if($sql->execute()){ 
// $_SESSION['msg']="
//     <h4><strong>Success!</strong>Delete Project Successfully.</h4>
// ";
// }
// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="css/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="css/jquery.dataTables.css">
    <link type="text/css" rel="stylesheet" href="css/dataTables.tableTools.min.css">
    <link type="text/css" rel="stylesheet" href="css/dataTables.bootstrap.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/pace.css">
    <link type="text/css" rel="stylesheet" href="css/all.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.notific8.min.css">
    <link type="text/css" rel="stylesheet" href="css/daterangepicker-bs3.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/orange-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="css/orange-blue.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
    <style>
    
    @media print
    {
    .noprint {display:none;}
    #print{display:inline-table!important; display:block!important;}
    }
    
    </style>
    
  </head>
  <body class="">
    <div>
      <!--BEGIN BACK TO TOP-->
      <a class="noprint" id="totop" href="#"><i class="fa fa-angle-up"></i></a>
      <!--END BACK TO TOP-->
      <!--BEGIN TOPBAR-->
      <?php
      include'include/header.php'
      ?><!--END TOPBAR-->
      <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        <?php include'include/sidebar.php';?>
        <!--END SIDEBAR MENU-->
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
          <!--BEGIN TITLE & BREADCRUMB PAGE-->
          <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb noprint">
            
            <ol class="breadcrumb page-breadcrumb pull-left">
              <li><i class="fa fa-home"></i>&nbsp;<a href="profile.php">Profile</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
              <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
              <li class="active">Manage Banner</li>
              
            </ol>
            <div class="btn btn-blue reportrange"><i class="fa fa-calendar"></i>&nbsp;<span></span></div>
            <div class="clearfix"></div>
          </div>
          <!--END TITLE & BREADCRUMB PAGE-->
          <!--BEGIN CONTENT-->
          <div class="page-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive">
                  <div class="panel-heading">
                    <h4 align="center" class="panel-title" style="color:#FF0000;"><strong>Manage Banner</strong></h4>
                    
                  </div>
                  
                  <?php
                  if (isset($_SESSION['msg'])) {
                  echo $_SESSION['msg'];
                  
                  }
                  unset ($_SESSION["msg"]);
                  ?>
                  <form action="" id ="frm1" method="post">
                  <input name="delete" type="submit" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-success pull-right btn-xs" id="delete" style="margin-right:10px;margin-bottom: 20px;" value="Multiple Delete">
                  <table id="table_id" class="table table-hover table-6striped table-bordered table-advanced tablesorter display">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Title1</th>
                        <th>Title2</th>
                        
                        <th>Image</th>
                      
                        <th>Update</th>
                      <!--   <th style="width:100px"> <input type="checkbox" class="checkall" name='checkall[]' onclick='checkedAll(frm1);'/></th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      $sql = $conn->prepare("SELECT * FROM banner");
                      $sql->execute();
                      $result = $sql->fetchAll(PDO::FETCH_OBJ);
                      foreach($result as $data)
                      {
                      
                      ?>
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $data->title1;?></td>
                        <td><?php echo $data->title2;?></td>
                      
                       <td><img width="75" src="../images/<?=$data->image;?>"></td>
                        
                        <td>
                          <a href="update-banner.php?id=<?php echo $data->id;?>" class="btn btn-warning btn-xs" title="Update">Update</a>
                        </td>
                     <!--   <td>
                        <input type="checkbox" style="margin-left:10px;" name="chk[]" id="checkall[]" value="<?php //echo $data->id;?>">
                        </td> -->
                      </tr>
                      <?php $i++; } ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div><!--END CONTENT-->
          </div>
          <!--END PAGE WRAPPER-->
          <!--BEGIN FOOTER-->
          <?php include'include/footer.php'?>
          <!--END FOOTER-->
          <!--END  WRAPPER-->
        </div></div>
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery-ui.js"></script><!--loading bootstrap js-->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-hover-dropdown.js"></script>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/icheck.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/jquery.notific8.min.js"></script>
        <script src="js/highcharts.js"></script>
        <script src="js/jquery.menu.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/holder.js"></script>
        <script src="js/responsive-tabs.js"></script>
        <script src="js/jquery.newsTicker.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/daterangepicker.js"></script>
        <!--CORE JAVASCRIPT-->
        <script src="js/main.js"></script>
        <!--LOADING SCRIPTS FOR PAGE-->
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <!--<script src="js/dataTables.tableTools.min.js"></script>-->
        <script src="js/table-datatables.js"></script>
      </body>
    </html>
     <?php
    }
    else
    {
    header("location:index.php");
    }
    ?>
   