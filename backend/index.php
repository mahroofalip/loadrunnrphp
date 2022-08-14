<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel | Sign In</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
<!--Loading bootstrap css-->
<link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
<link type="text/css" rel="stylesheet" href="css/jquery-ui-1.10.3.custom.css">
<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">

<!--Loading style vendors-->
<link type="text/css" rel="stylesheet" href="css/animate.css">
<link type="text/css" rel="stylesheet" href="css/all.css">

<!--Loading style-->
<link type="text/css" rel="stylesheet" href="css/orange-blue.css" class="default-style">


<link type="text/css" rel="stylesheet" href="css/style-responsive.css">
<link type="text/css" rel="stylesheet" href="css/styles.css">

<!-- invisible message S-->
<script type="text/javascript" src="js1/jquery-latest.js"></script>
    <script type="text/javascript"> 
      $(document).ready( function() {
        $('#deletesuccess').delay(4000).fadeOut();
      });
    </script>
<!-- invisible message E-->

</head>

<body id="signin-page">

  <div class="page-form">
   
                     <?php
                     
                     $sql = $conn->prepare("SELECT * FROM logo where id=4");
                     $sql->execute();
                     $result = $sql->fetch(PDO::FETCH_OBJ);
                     
                     ?>
     <form action="signup.php" method="post" name="form1" class="form" onsubmit="return checkform(this);"> 
     <center> <img src="../images/<?= $result->image; ?>" width="150"><!-- <h1>FITTYUS</h1> --></center>
	    <br/>
	   <div class="header-content" style="background-color:#29599b;">
	   
					<h1> Admin Login</h1>
	   </div>
	   <div class="body-content">
	     
		<?php if(isset($_GET['msg']))
		 {
		 $msg=$_GET['msg'];
		 if($msg==0)
		 {
		 ?>
		<p style="color:#FF0000;font-size:16px;font-weight:bold"> There was an error with your Username /Password
           Combination. Please try again. </p>
        <?php }}?>
		
		<div class="form-group">
		 <div class="input-icon right"><i class="fa fa-user"></i>
	     <input type="text" placeholder="Username" name="uname" required class="form-control">
	    </div>
		</div>
		
		<div class="form-group">
		  <div class="input-icon right"><i class="fa fa-key"></i><input type="password" placeholder="Password" name="password" required class="form-control"></div>
		 </div>
		
		 
		 <!--<div class="form-group pull-left">
		   <div class="checkbox-list"><label><input type="checkbox">&nbsp;Keep me signed in</label></div>
         </div>-->
         
        <div class="form-group">
         <font color="#DD0000">Enter Captcha Code</font>
         <span id="txtCaptchaDiv" style="background-color:#A51D22;color:#FFF;padding:2px;"></span>
         <input type="hidden" id="txtCaptcha" />
         <input type="text" name="txtInput" id="txtInput" size="15" class="form-control" style="margin-top:10px;" />
        </div>
        <div class="divider-sm">
        </div>
		 
		<div class="form-group pull-right">
		    <button type="submit" name="submit" class=" login-btn  btn btn-success" style="background-color:#f28221; border:#783142;">Log In&nbsp;<i class="fa fa-chevron-circle-right"></i></button>
		</div>
		 
		<div class="form-group pull-left">
		 <p style="color:#ff0000">Your ip Address : <?php echo $ip = $_SERVER['REMOTE_ADDR']; ?></p>
		</div>
		 
		 <div class="clearfix"></div>
		 
		<!-- <div class="forget-password">
		    <h4><a href='forgot-password.php' class='forgot btn-forgot-pwd'>Forgot Password ?</a></h4>
		</div>
		<hr>
		<p>Don't have an account? <a id="btn-register" href="distributer.php">Register Now</a></p>-->
	</div>
	
	</form><br><br>
    </div>

    <script type="text/javascript">
       function checkform(theform){
       var uname=document.form1.uname.value;
	   //var name_exp=/^[A-Za-z\s]+$/;
	   if(uname=='')
	   {
	    alert("Enter UserName");
		document.form1.uname.focus();
		return false;
	   }
	   var password=document.form1.password.value;
	   if(password=='')
	   {
		alert("Please Enter Password!");
		document.form1.password.focus();
		return false;
	   }
       var why = "";
       if(theform.txtInput.value == ""){
       why += "- Security code should not be empty.\n";
       }
if(theform.txtInput.value != ""){
if(ValidCaptcha(theform.txtInput.value) == false){
why += "- Security code did not match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

//Generates the captcha function
var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("txtCaptchaDiv").innerHTML = code;

// Validate the Entered input aganist the generated security code function
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('txtInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>
<script language=JavaScript>
//Disable right mouse click Script

var message="Function Disabled!";

function clickIE4(){
if (event.button==2){
//alert(message);
return false;
 }
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
//alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("return false");

</script>
<script type="text/javascript">
jQuery(document).ready(function($){
    $(document).keydown(function(event) { 
        var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
        
        if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u")) {
            //alert('Sorry, This Functionality Has Been Disabled!'); 
            //disable key press porcessing
            return false; 
        }
    });
});
</script>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/icheck.min.js"></script>
<script src="js/custom.min.js"></script>
<script>//BEGIN CHECKBOX & RADIO
$('input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_minimal-grey',
    increaseArea: '20%' // optional
});
$('input[type="radio"]').iCheck({
    radioClass: 'iradio_minimal-grey',
    increaseArea: '20%' // optional
});
//END CHECKBOX & RADIO</script>
</body></html>