<?php
session_start();
require_once('conn.php');
if(isset($_SESSION['idadmin']))
{
if(isset($_POST['submit']))
{

$description = $_POST['description'];
$url         = $_POST['url'];
$url1        = $_POST['url1'];  

$sql3 = $conn->prepare("SELECT * FROM home_section4 WHERE id = '".$_GET['id']."'");
$sql3->execute();
$res3 = $sql3->fetch(PDO::FETCH_ASSOC);
$oldImg1 = $res3['image1'];
$oldImg2 = $res3['image2'];
$oldImg3 = $res3['image3'];



if($_FILES['image1']['name'])
{
$img_name1 = $_FILES['image1']['name'];
$tmp_name1 = $_FILES['image1']['tmp_name'];
$path1 = "../images/";
$image1 = uniqid().$img_name1;
move_uploaded_file($tmp_name1,$path1.$image1);
unlink("../images/".$oldImg1);
}
else{
$image1 = $oldImg1;
}

if($_FILES['image2']['name'])
{
$img_name2 = $_FILES['image2']['name'];
$tmp_name2 = $_FILES['image2']['tmp_name'];
$path2 = "../images/";
$image2 = uniqid().$img_name2;
move_uploaded_file($tmp_name2,$path2.$image2);
unlink("../images/".$oldImg2);
}
else{
$image2 = $oldImg2;
}

if($_FILES['image3']['name'])
{
$img_name3 = $_FILES['image3']['name'];
$tmp_name3 = $_FILES['image3']['tmp_name'];
$path3 = "../images/";
$image3 = uniqid().$img_name3;
move_uploaded_file($tmp_name3,$path3.$image3);
unlink("../images/".$oldImg3);
}
else{
$image3 = $oldImg3;
}

$sql = $conn->prepare("UPDATE home_section4 SET description =?,image1=?,image2=?,url=?,image3 =?,urllink=? WHERE id = '".$_GET['id']."'");

if($sql->execute([$description,$image1,$image2,$url,$image3,$url1]))
{
 header("location:manage-home-section4.php?msg=1");
 $_SESSION['msg']="<h4><strong>Success!</strong>Update Successfully.</h4>";
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
        include'include/header.php';
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
                <li class="active">Update Home Section(4) </li>
                
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
                            <div class="panel-heading">Update Home Section(4)</div>
                            <div class="panel-body pan">
                              
                              
                              <div class="panel-heading">
                                
                                <h4 align="center" class="panel-title" style="color:#FF0000;"> </h4>
                                
                              </div>
                        <?php
                          $sqls=$conn->prepare("select * from home_section4 where id='".$_GET['id']."' ");
                          $sqls->execute();
                          $row=$sqls->fetch(PDO::FETCH_OBJ);
                          
                        ?>
                              
                              <form action="" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" id="test_form" name="form1">
                                 <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                              <div  class="form-body">

                                 
                               
                                   <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Description<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                      <textarea rows="8" cols="75" id="description" name="description"><?php echo $row->description;?></textarea>
                                    </div>
                                  </div>

                                   <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Image1<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                      <input type="file" class="form-control" name="image1" placeholder="Enter Image" >
                                    <img width="50" src="../images/<?php echo $row->image1;?>">
                                   <span style="color: red;">Image Size Should Be 334x445 PX</span>

                                    </div>
                                  </div>

                                  
                                   <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Image2<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                    <input type="file" class="form-control" name="image2" placeholder="Enter Image" >
                                    <img width="50" src="../images/<?php echo $row->image2;?>">
                                    <span style="color: red;">Image Size Should Be 150x50 PX</span>
                                    <input type="text" class="form-control" name="url" placeholder="Enter URL" value="<?php echo $row->url; ?>" >
                                    </div>
                                  </div>

                               
                                   <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Image3<span style="color:#FF0000"></span></label>
                                    <div class="col-md-10">
                                    <input type="file" class="form-control" name="image3" placeholder="Enter Image" >
                                    <img width="50" src="../images/<?php echo $row->image3;?>">
                                    <span style="color: red;">Image Size Should Be 150x50 PX</span>
                                    <input type="text" class="form-control" name="url1" placeholder="Enter URL" value="<?php echo $row->urllink; ?>" >

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
          <?php include'include/footer.php';?>
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
       // CKEDITOR.replace( 'description');
        // CKEDITOR.replace( 'description2');
          // CKEDITOR.replace( 'link1');
          // CKEDITOR.replace( 'link2');
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