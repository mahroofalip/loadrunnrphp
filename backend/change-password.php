<?php
session_start();
include "conn.php";
if(isset($_SESSION['idadmin']))
{
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
<link rel="shortcut icon" href="../images/favicon.png">
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
<link type="text/css" rel="stylesheet" href="css/colorpicker.css">
<link type="text/css" rel="stylesheet" href="css/datepicker.css">
<link type="text/css" rel="stylesheet" href="css/daterangepicker-bs3.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-timepicker.min.css">
<link type="text/css" rel="stylesheet" href="css/clockface.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-switch.css">
<link href="css/style-review.css" rel="stylesheet" type="text/css" />



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
  
  <script type="text/javascript" src="js1/jquery-latest.js"></script>
    <script type="text/javascript"> 
      $(document).ready( function() {
        $('#deletesuccess').delay(3000).fadeOut();
      });
    </script>

</head>


<body class=" ">
<div>
<!--BEGIN BACK TO TOP-->
<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
<!--END BACK TO TOP-->

<!--BEGIN TOPBAR-->
<?php include'include/header.php'?>
<!--END TOPBAR-->


<div id="wrapper">
<!--BEGIN SIDEBAR MENU-->
<?php include'include/sidebar.php'?>
<!--END SIDEBAR MENU-->



<!--BEGIN PAGE WRAPPER-->
<div id="page-wrapper">

<!--BEGIN TITLE & BREADCRUMB PAGE-->
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <!--<div class="page-header pull-left"><div class="page-title">Publish News</div></div>-->
    <ol class="breadcrumb page-breadcrumb pull-left">
       <li><i class="fa fa-home"></i>&nbsp;<a href="profile.php">Profile</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	   <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	   <li class="active">Change Password</li>
	</ol>
	<div class="btn btn-blue reportrange"><i class="fa fa-calendar"></i>&nbsp;<span></span></div>
	<div class="clearfix"></div>
</div>
<!--END TITLE & BREADCRUMB PAGE-->


<!--BEGIN CONTENT-->
<div class="page-content">
    <div id="page-user-profile" class="row">
	    <div class="col-md-12">
		 <div class="row">
		   <div class="col-md-3">
		     <div class="form-group">
			  <div class="text-center mbl">
	<img src="images/profile.jpg" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);" class="img-circle"/>
			   </div>
			  </div>
			  <!--<table class="table table-striped table-hover">
			    <tbody>
				  <tr>
				    <td width="50%">Username</td>
					<td>0832me131005</td>
				 </tr>
				 <tr>
				    <td width="50%">Email</td>
					<td>abhi.ptl.06@gmail.com</td>
				 </tr>
				 <tr>
				    <td width="50%">Contact</td>
					<td>+91 9000 000 000</td>
				 </tr>
				 
			   </tbody>
			 </table>-->
		  </div>
		  
		  <div class="col-md-9">
		   <!-- <ul class="nav nav-tabs ul-edit responsive">
			  
                <li class="active"><a href="#tab-edit" data-toggle="tab"><i class="fa fa-edit"></i>&nbsp;Edit Profile</a></li>
				
			</ul>-->
			
			<div id="generalTabContent" class="tab-content">
			  
			  <div id="tab-Profile" class="tab-pane fade in active">
			     <div class="row">
				 
				 <div class="col-md-9">
				    <div class="tab-content">
					  <div id="tab-profile-setting" class="tab-pane fade in active">
					  <?php if(!isset($_GET['msg']))
		{ ?>
		
		<?php }
		else
		{
		if(($_GET['msg'])==1)
		{ ?>
		<div class="panel-heading">
          
          <h4 class="panel-title">
		  <div id="deletesuccess" style="font-size:14px; color:#AF2822;"><strong>Password Changed Successfully</strong> </div>
		  </h4>
    
        </div>
		 <?php }
		if(($_GET['msg'])==0)
		{ ?>
		<div class="panel-heading">
          
          <h4 class="panel-title">
		  <div id="deletesuccess" style="font-size:14px; color:#AF2822;"><strong>Wrong Old Password.</strong> </div>
		  </h4>
     
        </div>
		<?php }
		}?>
					   <form name="chg_pwd_Form" action="changepwddb.php" method="post" class="form-horizontal " onSubmit="return Validatechg_pwd_Form();">
					   <div class="form-body">
					     <div class="form-group">
						   <label class="col-sm-4 control-label">Old Password</label>
						   <div class="col-sm-8 controls">
						     <input type="password"name="opwd" placeholder="" class="form-control"/>
						   </div>
						</div>
						<div class="form-group">
						   <label class="col-sm-4 control-label">New Password</label>
						   <div class="col-sm-8 controls">
						     <input type="password" name="npwd" placeholder="" class="form-control"/>
						   </div>
					   </div>
					   <div class="form-group">
			<label class="col-sm-4 control-label">Confirm New Password</label>
						   <div class="col-sm-8 controls">
	<input type="password" name="cpwd" placeholder="" class="form-control"/>
						   </div>
					   </div>			
					<div class="form-group mbn">
					  <label class="col-sm-4 control-label"></label>
					  <div class="col-sm-8 controls">
					     

                        
						 <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;
Submit</button>
						
						 &nbsp; &nbsp;  <a href="profile.php"><button type="button" class="btn btn-green"><i class="fa fa-times"></i>Cancel</button> </a>
						
					  </div>
					</div>
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
</div>
</div>
<!--END CONTENT-->
</div>
<!--END PAGE WRAPPER-->

<!--BEGIN FOOTER-->
<?php
include"include/footer.php";
include"include/validpage.php";
?>
<!--END FOOTER-->

<!--END  WRAPPER-->
</div></div>


<!----    POPUP #1    ----->  
<a href="#x" class="overlay" id="login_form"></a>
<div class="box">
	<h5>Data Submitted Successfully.</h5>

     <a href="#close" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;
OK</button>
       
		
      

    	<a class="close" href="#close"></a>

  
</div>
<!----- END OF POPUP #1  ----->  



<script src="js/jquery-1.10.2.min.js"></script>

<script>
  
	$(document).ready(function () {

            //Function to copy from txtShiptoAddress to txtShiptoAddress when checkbox is checked
            $('#chkCopyHomeAddress').on("click", function () {
                if ($(this).is(":checked")) {
                   
					$('#address2').val($('#address1').val());
					$('#city2').val($('#city1').val());
					$('#pincode2').val($('#pincode1').val());
					$('#state2').val($('#state1').val());
	
                }
            });
			
			
            //Function to copy from txtShiptoAddress to txtShiptoAddress when checkbox is checked and user modifies it
            
			
			$('#address1').on("keypress", function () {
                if ($('#chkCopyHomeAddress').is(":checked")) {
                    $('#address2').val($('#address1').val());
                }
            });
			
						
			$('#city1').on("keypress", function () {
                if ($('#chkCopyHomeAddress').is(":checked")) {
                    $('#city2').val($('#city1').val());
                }
            });
			
		
			
		
			
           
        });  
		</script>
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

<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script src="js/clockface.js"></script>
<script src="js/bootstrap-colorpicker.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/jquery-maskedinput.js"></script>
<script src="js/charCount.js"></script>
<script src="js/form-components.js"></script>
<script src="js/ui-checkbox-radio.js"></script>


</body>
</html>
<?php 
}
else
{
header("location:index.php");
}
?>