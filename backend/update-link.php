<?php
session_start();
require_once('conn.php');
if(isset($_SESSION['idadmin']))
{

if(isset($_POST['submit']))
{
$fblink = $_POST['fblink'];
$twitterlink = $_POST['twitterlink'];
$instalink = $_POST['instalink'];
$gmaillink = $_POST['gmaillink'];
// $whatshaplink = $_POST['whatshaplink'];
$ylink = $_POST['ylink'];

$sql = $conn->prepare("UPDATE social_link SET fb_link =?,twitter_link =?,insta_link =?,gmail_link =?,youtube_link =? WHERE id = '".$_GET['id']."'");
if($sql->execute([$fblink,$twitterlink,$instalink,$gmaillink,$ylink]))
{
header("location:manage-link.php?msg=1");
$_SESSION['msg']="<h4><strong>Success!</strong>Update Social Media Link Successfully.</h4>";
}
}
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
      <link type="text/css" rel="stylesheet" href="css/bootstrap-markdown.min.css">
      <link type="text/css" rel="stylesheet" href="css/bootstrap3-wysihtml5.min.css">
      <link type="text/css" rel="stylesheet" href="css/summernote.css">
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
      <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
      <style>
      
      @media print
      {
      .noprint {display:none;}
      #print{display:inline-table!important; display:block!important;}
      }
      
      </style>
      <style type="text/css">
      .help-inline{
      color: red;
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
          <?php include'include/sidebar.php';?><!--END SIDEBAR MENU-->
          <!--BEGIN PAGE WRAPPER-->
          <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb noprint">
              
              <ol class="breadcrumb page-breadcrumb pull-left">
                <li><i class="fa fa-home"></i>&nbsp;<a href="profile.php">Profile</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="active">Update Social Media Link</li>
                
              </ol>
              <div class="btn btn-blue reportrange"><i class="fa fa-calendar"></i>&nbsp;<span></span></div>
              <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <!--BEGIN CONTENT-->
            <div class="page-content">
              <div id="table-action" class="row">
                
                <div class="col-lg-12">
                  
                  <div id="tableactionTabContent" class="tab-content">
                    
                    <div id="pp" class="tab-pane fade in active">
                      <div class="row">
                        <div class="col-lg-12">
                         
                          
                          <div class="panel panel-blue">
                            <div class="panel-heading">Update Social Media Link</div>
                            <div class="panel-body pan">
                              <div class="panel-heading">
                                <h4 align="center" class="panel-title" style="color:#FF0000;"> </h4>
                                
                              </div>
                              <?php
                                 $sqls=$conn->prepare("SELECT * FROM social_link WHERE id='".$_GET['id']."' ");
                                 $sqls->execute();
                                 $row=$sqls->fetch(PDO::FETCH_OBJ);
                              ?>
                              
                              <form action="" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" id="test_form" name="form1">
                                 <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                              <div  class="form-body">
                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Facebook Link<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="<?php echo $row->fb_link; ?>" name="fblink" placeholder="Facebook Link" required ="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Twitter Link<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="<?php echo $row->twitter_link; ?>" name="twitterlink" placeholder="Twitter Link" required ="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Instagram Link<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="<?php echo $row->insta_link; ?>" name="instalink" placeholder="Instagram Link" required ="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Gmail Link<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="<?php echo $row->gmail_link; ?>" name="gmaillink" placeholder="Gmail Link" required ="">
                                    </div>
                                  </div>

                                 <!--  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Whatshap Link<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="<?php //echo $row->whatshap_link; ?>" name="whatshaplink" placeholder="Whatshap Link" required ="">
                                    </div>
                                  </div> -->

                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Youtube Link<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="<?php echo $row->youtube_link; ?>" name="ylink" placeholder="Youtube Link" required ="">
                                    </div>
                                  </div>
                                <div  class="form-actions text-right pal">
                                <button type="submit" name="submit"  class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                  Save</button>&nbsp;
                                  <button type="reset" class="btn btn-green"><i class="fa fa-times"></i>Clear</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--END CONTENT-->
          </div>
          <!--END PAGE WRAPPER-->
          <!--BEGIN FOOTER-->
          <?php include'include/footer.php'?>
          <!--END FOOTER-->
          <!--END  WRAPPER-->
        </div></div>
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/additional-methods.min.js"></script>
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
        <script src="js/bootstrap-markdown.js"></script>
        <script src="js/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="js/ckeditor.js"></script>
        <script src="js/summernote.js"></script>
        <script src="js/ui-editors.js"></script>
      
        <script>
        CKEDITOR.replace( 'description');
        </script>
        
      </body>
    </html>
    <?php
    }
    else
    {
    header("location:index.php");
    }
    ?>