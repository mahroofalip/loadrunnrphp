<div id="header-topbar-option-demo" class="page-header-topbar noprint">
<nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
    <?php
                     
                     $sql = $conn->prepare("SELECT * FROM logo where id=4");
                     $sql->execute();
                     $result = $sql->fetch(PDO::FETCH_OBJ);
                     
                     ?>
<div class="navbar-header">
<button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

<a id="logo" href="profile.php" class="navbar-brand" style="color: #000000; padding-top: 3px;"><img src="../images/<?= $result->image; ?>"  style="width:80px "><!-- <h3>FITTYUS</h3> --><!-- <img src="images/logo.png" style="width:120px "> -->
</a>
</div>


<div class="topbar-main" style="background:#101f41;"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
    <ul class="nav navbar-nav   horizontal-menu hidden-sm hidden-xs">
	  <!--<li><a href="profile.php"><i class="fa fa-file-text"></i>&nbsp;  Reminder</a></li>-->
	  <!-- <li ><a href="page.html"><i class="fa fa-envelope-o"></i>&nbsp;  Inbox</a></li>
	    <li ><a href="page.html"><i class="fa fa-weixin"></i>&nbsp;  Message</a></li>-->
	  </ul>

	<ul class="nav navbar navbar-top-links navbar-right mbn">
	  
		<li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/profile.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php  echo $_SESSION['name']?><!-- <?php  echo 'Clean Earth';?> --></span>&nbsp;<span class="caret"></span></a>
		<ul class="dropdown-menu dropdown-user pull-right">
		 <li><a href="update-profile.php"><i class="fa fa-user"><div class="icon-bg bg-green"></div></i>Update Profile</a></li>
		 <li><a href="change-password.php"><i class="fa fa-pencil-square-o fa-fw"><div class="icon-bg bg-green"></div></i>Change Password</a></li>
		
		 <li><a href="logout.php"><i class="fa fa-key"></i>Log Out</a></li>
		</ul>
	  </li>
	  <!--<li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>-->
	</ul>
	<br><br /> 
</div>


</nav>
	 
	  
 </div>