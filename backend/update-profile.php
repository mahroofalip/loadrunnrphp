<?php
session_start();
include "conn.php";
if(isset($_SESSION['idadmin']))
{

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel | Update Profile </title>
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
<style>
 
        @media print
{
.noprint {display:none;}
#print{display:inline-table!important; display:block!important;}
}
         
</style>

<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object

		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState4(city) {		
		
		var strURL="findstc.php?city="+city;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;
						//document.getElementById('citydiv').innerHTML='<select name="city">'+
						//'<option>Select City</option>'+
				        //'</select>';						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
</script>
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
	   <!--<li class="active">Profile </li>-->
	   
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
			        <div class="panel-heading">Profile</div>
				<div class="panel-body pan">
		 <?php if(isset($_GET['msg']))
		{
		$m=$_GET['msg'];
		if($m==1)
		{
		?>
		<div class="panel-heading">
          <h4 class="panel-title">
		  <div id="deletesuccess" style="font-size:14px; color:#AF2822;"><strong>Profile Updated Successfully</strong> </div>
		  </h4>
        </div>
		<?php }
		
		} ?>					
		
        <div class="panel-heading">
          
          <h4 align="center" class="panel-title" style="color:#FF0000;"> </h4> 
    
        </div> 
 <script type="text/javascript" language="javascript">
function profile()
{
   
	var name=document.formlogin.name.value;
	var name_exp=/^[A-Za-z\s]+$/;
	if(name=='')
	{
		alert("Enter Name");
		document.formlogin.name.focus();
		return false;
	}
	else if(!name.match(name_exp))
	{
		alert("Enter Only Character");
		document.formlogin.name.focus();
		return false;
	}
	
	var email=document.formlogin.email.value;
	var email_exp=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	if(email=='')
	{
		alert("Please Enter Email-Id!");
		document.formlogin.email.focus();
		return false;
	}
	else if(!email.match(email_exp))
	{
		alert("Invalid Email ID !");
		document.formlogin.email.focus();
		return false;
	}
	
	var mobileno = document.formlogin.mobileno.value;
	if(mobileno== '')
	{
   
       alert("Enter Mobile No.");
	   document.formlogin.mobileno.focus();
		return false;
    }
	else if (isNaN(mobileno))
	{
       alert("Enter Only No.");
	   document.formlogin.mobileno.focus();
	   return false;
  
    }
	else if (!(mobileno.length == 10))
	{
         alert("Enter 10 digit mobile no.");
		document.formlogin.mobileno.focus();
		return false;
  
    }
	
	var address = document.formlogin.address.value;
	if(address== '')
	{
   
       alert("Enter Address");
	   document.formlogin.address.focus();
		return false;
    }
	
	var state = document.formlogin.state.value;
	if(state== '')
	{
   
       alert("Slect State");
	   document.formlogin.state.focus();
		return false;
    }	
		
	
	var city = document.formlogin.city.value;
	if(city== '')
	{
   
       alert("Slect City");
	   document.formlogin.city.focus();
		return false;
    }	
	
	 
	var pincode = document.formlogin.pincode.value;
	if(pincode== '')
	{
   
       alert("Enter Pincode");
	   document.formlogin.pincode.focus();
		return false;
    }
	else if (isNaN(pincode))
	{
       alert("Enter Only No.");
	   document.formlogin.pincode.focus();
	   return false;
  
    }
	else if (!(pincode.length == 6))
	{
         alert("Enter 6 digit pincode");
		document.formlogin.pincode.focus();
		return false;
  
    }
	                                                               
			
}
</script>		
		<tbody>

<?php
                          $sqls=$conn->prepare("select * from adminlogin where adminloginid='".$_SESSION['idadmin']."'   ");
                          $sqls->execute();
                          $row=$sqls->fetch(PDO::FETCH_OBJ);
                          
                        ?>
			     <form action="updateprofiledb.php" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" name="formlogin" onSubmit="return profile();">
				   <div class="form-body">
				   			 
				 <div class="form-group">
	 <label for="inputFirstName" class="col-md-2 control-label"> Name </label>
					    <div class="col-md-6">
						<input type="text" placholder="Enter Name"  name="name" value="<?php echo $row->name; ?>" class="form-control"/>
						<input type="hidden" placholder="Enter Name"  name="id" value="<?php echo $_SESSION['idadmin'];?>" class="form-control"/>
					    
						</div>
					 </div>
					 
					 			 <div class="form-group">
	 <label for="inputFirstName" class="col-md-2 control-label"> Email </label>
					    <div class="col-md-6">
						<input type="text" placholder="Enter Email"  name="email" value="<?php echo $row->email; ?>" class="form-control"/>
					   
						</div>
					 </div>
					 
					 			 <div class="form-group">
	 <label for="inputFirstName" class="col-md-2 control-label"> Mobile No. </label>
					    <div class="col-md-6">
						<input type="text" placholder="Enter Name"  name="mobileno" value="<?php echo $row->mobileno; ?>" class="form-control"/>
					   
						</div>
					 </div>
					 
					 
					 			 <div class="form-group">
	 <label for="inputFirstName" class="col-md-2 control-label"> Address </label>
					    <div class="col-md-6">
						<input type="text" placholder="Enter Address"  name="address" value="<?php echo $row->address; ?>" class="form-control"/>
					    
						</div>
					 </div>
					 
					  			
					  			
					 
					 
					  			 <div class="form-group">
	 <label for="inputFirstName" class="col-md-2 control-label"> Pincode </label>
					    <div class="col-md-6">
						<input type="text" placholder="Enter Pincode" value="<?php echo $row->pincode; ?>"  name="pincode" class="form-control"/>
					   
						</div>
					 </div>
					 	 					 
 
					 					  
		 <div  class="form-actions text-right pal">
		   <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
Save</button>&nbsp;
		   <a href="profile.php"><button type="button" class="btn btn-green"><i class="fa fa-times"></i>Cancel</button> </a>
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
<!--END CONTENT-->
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
<script src="jsjs/bootstrap-markdown.js"></script>
<script src="js/bootstrap3-wysihtml5.all.min.js"></script>
<script src="js/ckeditor.js"></script>
<script src="js/summernote.js"></script>
<script src="js/ui-editors.js"></script>

</body>
</html>

<?php 
}
else
{
header("location:index.php");
}
?>