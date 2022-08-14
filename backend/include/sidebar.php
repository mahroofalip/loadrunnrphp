<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side noprint" style="background:#101f41;">

<div class="sidebar-collapse menu-scroll" style="background:#101f41;">
<ul id="side-menu" class="nav">

<li class="user-panel">
	<div class="thumb"><img src="images/profile.jpg" alt="Profile" class="img-circle"/></div>
	<div class="info"><p><?php  echo $_SESSION['name']?></p><!-- <p><?php  echo 'Clean Earth'?></p>-->
	<ul class="list-inline list-unstyled">
		<li><a href="profile.php" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a></li>
		<li><a href="logout.php" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a></li>
	</ul>
</div>
<div class="clearfix"></div>
</li>

<?php
 $admintype1= $_SESSION['type'];
if($admintype1=='Superadmin')
{
?>


<!-- <li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Home</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
    <li><a href="manage-homesection1.php"><span class="submenu-title">Manage Banner</span></a></li>
    <li><a href="manage-homesection2.php"><span class="submenu-title">Manage Home Section 2</span></a></li>
     <li><a href="manage-homesection3.php"><span class="submenu-title">Manage Home Section 3</span></a></li>

    <li><a href="manage-homewhyuscon1.php"><span class="submenu-title">Manage Why Choose Us Content (1)</span></a></li>
  
 <li><a href="manage-homesection4.php"><span class="submenu-title">Manage Home Section(4)</span></a></li>

   <li><a href="manage-homesection5.php"><span class="submenu-title">Manage Home Section(4)</span></a></li>
</ul>
</li> --> 

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Home</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
    <li><a href="manage-banner.php"><span class="submenu-title">Manage Banner</span></a></li>

    <li><a href="manage-home-section1.php"><span class="submenu-title">Manage Section 1</span></a></li>

    <li><a href="manage-home-section2.php"><span class="submenu-title">Manage Section 2</span></a></li> 

    <li><a href="manage-home-section3.php"><span class="submenu-title">Manage Section 3</span></a></li> 

    <li><a href="manage-home-section4.php"><span class="submenu-title">Manage Section 4</span></a></li> 

</ul>
</li>


<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Driver</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
   
    <li><a href="manage-driver-section1.php"><span class="submenu-title">Manage Section 1</span></a></li>

    <li><a href="manage-driver-section2.php"><span class="submenu-title">Manage Section 2</span></a></li> 

    <li><a href="manage-driver-section3.php"><span class="submenu-title">Manage Section 3</span></a></li> 

    <li><a href="manage-driver-section4.php"><span class="submenu-title">Manage Section 4</span></a></li> 

</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">About Us</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
   
    <li><a href="manage-about-section1.php"><span class="submenu-title">Manage Section 1</span></a></li>

    <li><a href="manage-about-section2.php"><span class="submenu-title">Manage Section 2</span></a></li> 

   

</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Contact</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	<!-- <li><a href="manage-contactusinquiry.php"><span class="submenu-title">Manage Contact Us Enquiry</span></a></li> -->
	<li><a href="manage-contactuscon.php"><span class="submenu-title">Manage Contact Us Content</span></a></li>
	

</ul>
</li>



<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Logo</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	<li><a href="manage-logo.php"><span class="submenu-title">Manage Logo</span></a></li>
</ul>
</li>


<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Terms & Conditions</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	
	<li><a href="manage-terms.php"><span class="submenu-title">Manage Terms & Conditions</span></a></li>
</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Privacy Policy</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	
	<li><a href="manage-privacy.php"><span class="submenu-title">Manage Privacy Policy</span></a></li>
</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Social Media Links</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	<li><a href="manage-links.php"><span class="submenu-title">Manage Links </span></a></li>
	
</ul>
</li>

 
</ul>
</li>
<?php }
?>
</ul>
</div>

</nav>