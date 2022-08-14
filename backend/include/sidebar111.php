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
    <li><a href="manage-slider.php"><span class="submenu-title">Manage Slider</span></a></li>

    <li><a href="manage-home-section.php"><span class="submenu-title">Manage Section 2</span></a></li>

    <li><a href="manage-home-section2.php"><span class="submenu-title">Manage Section 3</span></a></li> 

    <li><a href="manage-home-section3.php"><span class="submenu-title">Manage Section 4</span></a></li> 

    <li><a href="manage-home-section4.php"><span class="submenu-title">Manage Section 5</span></a></li> 

    <li><a href="manage-home-section5.php"><span class="submenu-title">Manage Section 6</span></a></li> 

     <li><a href="manage-home-section6.php"><span class="submenu-title">Manage Section 7</span></a></li> 

       <li><a href="manage-home-section7.php"><span class="submenu-title">Manage Section 8</span></a></li> 
   
</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">About us</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	 <li><a href="manage-aboutus-top-section.php"><span class="submenu-title">Manage Top Section</span></a></li>

	  <li><a href="manage-aboutus-section2.php"><span class="submenu-title">Manage Section 2</span></a></li>

	 <li><a href="manage-aboutus-section3.php"><span class="submenu-title">Manage Section 3</span></a></li>

    <li><a href="manage-aboutus-section4.php"><span class="submenu-title">Manage Section 4</span></a></li>
      
   
</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Our Coaches</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	 <li><a href="manage-coach-top-section.php"><span class="submenu-title">Manage Top Section</span></a></li>

	 <li><a href="add-coaches.php"><span class="submenu-title">Add Coaches</span></a></li>

    <li><a href="manage-coaches.php"><span class="submenu-title">Manage Coaches</span></a></li>

 <!--    <li><a href="manage-coaches-registration.php"><span class="submenu-title">Manage Coaches Registration</span></a></li>
       -->
   <li><a href="manage-coaches-registration-enquiry.php"><span class="submenu-title">Manage Coaches Enquiry</span></a></li>
</ul>
</li>


<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title"> Client</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

    <li><a href="manage-user.php"><span class="submenu-title">Manage Client</span></a></li>
      
   
</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title"> Program</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

    <li><a href="add-program.php"><span class="submenu-title">Add Program</span></a></li>
    <li><a href="manage-program.php"><span class="submenu-title">Manage Program</span></a></li>
      
   
</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title"> Coupon Code</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

    <li><a href="manage-coupon-code.php"><span class="submenu-title">Manage Coupon Code</span></a></li>
      
   
</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Healthy Recipe</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	 <li><a href="manage-recipe-top-section.php"><span class="submenu-title">Manage Top Section</span></a></li>

	 <li><a href="add-recipe.php"><span class="submenu-title">Add Recipe</span></a></li>

    <li><a href="manage-recipe.php"><span class="submenu-title">Manage Recipe</span></a></li>
      
   
</ul>
</li>


<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Diet Plan (Client)</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	 <li><a href="add-diet-plan.php"><span class="submenu-title">Add Plan</span></a></li>

    <li><a href="manage-diet-plan.php"><span class="submenu-title">Manage Plan</span></a></li>
      
   
</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Notification</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	 <li><a href="add-notification.php"><span class="submenu-title">Add Notification</span></a></li>

    <li><a href="manage-notification.php"><span class="submenu-title">Manage Notification</span></a></li>
      
   
</ul>
</li>



<!-- <li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Projects</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	 <li><a href="add-project.php"><span class="submenu-title">Add Project</span></a></li>
    <li><a href="manage-project.php"><span class="submenu-title">Manage Projects</span></a></li>
  
      
</ul>
</li>
 -->
<!-- <li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Offers</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	
    <li><a href="manage-offers.php"><span class="submenu-title">Manage Offers</span></a></li>
   
</ul>
</li> -->



<!-- 
<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Blog</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	<li><a href="add-blog.php"><span class="submenu-title">Add Blog</span></a></li>
	<li><a href="manage-blog.php"><span class="submenu-title">Manage Blog</span></a></li>
	<li><a href="manage-blogcon.php"><span class="submenu-title">Manage Blog Content</span></a></li>
	<li><a href="manage-comment.php"><span class="submenu-title">Manage Comment</span></a></li>
	<li><a href="add-blog-cat.php"><span class="submenu-title">Add Blog Category</span></a></li>
	<li><a href="manage-blog-cat.php"><span class="submenu-title">Manage Blog Category</span></a></li>
</ul>
</li> -->




<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Contact</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	<li><a href="manage-contactusinquiry.php"><span class="submenu-title">Manage Contact Us Enquiry</span></a></li>
	<li><a href="manage-contactuscon.php"><span class="submenu-title">Manage Contact Us Content</span></a></li>
	<li><a href="manage-contactus-top-section.php"><span class="submenu-title">Manage Top Section</span></a></li>
	<!-- <li><a href="manage-contactusadd.php"><span class="submenu-title">Manage Contact Us Address</span></a></li> -->
		<!-- <li><a href="manage-header-contactus.php"><span class="submenu-title">Manage Header Contact Us </span></a></li> -->

</ul>
</li>



<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Appointment</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	<li><a href="manage-appointment.php"><span class="submenu-title">Manage Appointment Enquiry</span></a></li>

	<li><a href="manage-appointment-content.php"><span class="submenu-title">Manage Appointment Page Content</span></a></li>

	<li><a href="manage-appointment-section.php"><span class="submenu-title">Manage Top Section</span></a></li>
	<!-- <li><a href="manage-contactuscon.php"><span class="submenu-title">Manage Contact Us Content</span></a></li>
	<li><a href="manage-contactus-top-section.php"><span class="submenu-title">Manage Top Section</span></a></li> -->
	<!-- <li><a href="manage-contactusadd.php"><span class="submenu-title">Manage Contact Us Address</span></a></li> -->
		<!-- <li><a href="manage-header-contactus.php"><span class="submenu-title">Manage Header Contact Us </span></a></li> -->

</ul>
</li>


<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Subscribe</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	<li><a href="manage-subscribe.php"><span class="submenu-title">Manage Subscribe</span></a></li>
	
	<!-- <li><a href="manage-contactusadd.php"><span class="submenu-title">Manage Contact Us Address</span></a></li> -->
		<!-- <li><a href="manage-header-contactus.php"><span class="submenu-title">Manage Header Contact Us </span></a></li> -->

</ul>
</li>


<!-- <li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Proposals</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	<li><a href="manage-proposalsinquiry.php"><span class="submenu-title">Manage Proposals</span></a></li>
	

</ul>
</li> -->
<!-- <li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Register User</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	
	<li><a href="add-userregister.php"><span class="submenu-title">Add User</span></a></li>
	<li><a href="manage-userregister.php"><span class="submenu-title">Manage User</span></a></li>
</ul>
</li> -->

<!-- <li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Newsletter</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	<li><a href="manage-newsletter.php"><span class="submenu-title">Manage Newsletter</span></a></li>
	<li><a href="manage-newslettercon.php"><span class="submenu-title">Manage Newsletter Content</span></a></li>
</ul>
</li> -->

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Logo</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	<li><a href="manage-logo.php"><span class="submenu-title">Manage Logo</span></a></li>
</ul>
</li>

<!-- <li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Terms & Conditions</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	
	<li><a href="manage-terms.php"><span class="submenu-title">Manage Terms & Conditions</span></a></li>
</ul>
</li> -->
<!-- 
<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Privacy Policy</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	<li><a href="manage-privacy.php"><span class="submenu-title">Manage Privacy Policy</span></a></li>
	
</ul>
</li> -->
<!-- 
<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Social Media</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
	<li><a href="manage-link.php"><span class="submenu-title">Manage Social Media Link</span></a></li>
</ul>
</li> -->

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Terms & Conditions</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">

	<li><a href="manage-terms-top.php"><span class="submenu-title">Manage Terms & Conditions Top Content</span></a></li>
	
	<li><a href="manage-terms.php"><span class="submenu-title">Manage Terms & Conditions</span></a></li>
</ul>
</li>

<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Privacy Policy</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
    <li><a href="manage-privacy-top.php"><span class="submenu-title">Manage Privacy Policy Top Content</span></a></li>

	<li><a href="manage-privacy.php"><span class="submenu-title">Manage Privacy Policy</span></a></li>
	
</ul>
</li>


<li>
	<a href="#"><i class="fa fa-file-text fa-fw"><div class="icon-bg bg-orange"></div></i>
	<span class="menu-title">Refund & Cancellations</span><span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
    <li><a href="manage-refund-top.php"><span class="submenu-title">Manage Refund & Cancellations Top Content</span></a></li>

	<li><a href="manage-refund.php"><span class="submenu-title">Manage Refund & Cancellations</span></a></li>
	
</ul>
</li>
 
</ul>
</li>
<?php }
?>
</ul>
</div>

</nav>