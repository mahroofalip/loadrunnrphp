<?php
session_start();
require_once('backend/conn.php');

$sql1 = $conn->prepare("SELECT * FROM logo where id=3");
$sql1->execute();
$result1 = $sql1->fetch(PDO::FETCH_OBJ);

$sql11 = $conn->prepare("SELECT * FROM logo where id=4");
$sql11->execute();
$result11 = $sql11->fetch(PDO::FETCH_OBJ);

$sql3 = $conn->prepare("SELECT * FROM about_section1 ");
$sql3->execute();
$result3 = $sql3->fetch(PDO::FETCH_OBJ);

$sql4= $conn->prepare("SELECT * FROM about_section2 ");
$sql4->execute();
$result4 = $sql4->fetch(PDO::FETCH_OBJ);

$sql7= $conn->prepare("SELECT * FROM contact_content ");
$sql7->execute();
$result7 = $sql7->fetch(PDO::FETCH_OBJ);

$sql8= $conn->prepare("SELECT * FROM social_media ");
$sql8->execute();
$result8 = $sql8->fetch(PDO::FETCH_OBJ);

$sql61= $conn->prepare("SELECT * FROM home_section4 ");
$sql61->execute();
$result61 = $sql61->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>About Us | LoadRunnr</title>
  <meta content="" name="author">
  <meta content="" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/uikit.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/simple-line-icons.css">
  <link rel="stylesheet" href="css/main.css">
  <style>
  .f-large{font-size:20px; text-align:justify}
  </style>
</head>

<body class="page-home">
  <div class="page-wrapper">
    <header class="page-header bg-orange">
      <div class="page-header__scroll bg-orange" data-uk-sticky>
        <div class="uk-container uk-container-xlarge">
          <div class="page-header__inner ">
            <div class="page-header__left">
              <div class="page-header__logo logo"><a class="logo__link" href="index.php"><img class="logo__img" src="images/<?= $result1->image; ?>" width="150" alt="LoadRunnr"></a></div>
            </div>
            <div class="page-header__right">
              <div class="page-header__mainmenu">
                <nav class="mainmenu" data-uk-navbar>
                  <ul class="uk-navbar-nav">
                    <li><a href="index.php"> Home</a></li> 
                    <li><a href="delivery-partner.php"> Delivery Partner</a></li> 
                    <li><a href="about-us.php"> About Us</a></li>       
                   
                  </ul>
                </nav>
              </div>
             
               <div class="page-header__btn"> <a class="uk-button uk-button-primary btnimgx" href="<?= $result61->url; ?>"> <img src="images/btnimg.png" width="125" ></a></div>
                 
              <div class="page-header__btn-menu"><a href="#offcanvas" data-uk-toggle data-uk-icon="menu"></a></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="page-main">
      <div class="section-banner">
        <div class="section-banner__bg" >
          <div class="uk-container uk-text-center">
            <div class="section-banner__content">
              <div class="section-banner__title">About Us</div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section uk-container">
        
<div class="section-steps">
        <div class=" uk-container">
          <div class="section-title uk-text-center">
            <h3 class="uk-h3"><?= $result3->title; ?></h3>
            
          </div>
          <div class="">
            <div class=" uk-container">
         

<!-- <p class="text-center"><strong>LoadRunnr is operated by LoadRunnr Technologies India Pvt. Ltd.</strong></p><br> -->
<div class="f-large"><?= $result3->description; ?><!-- LoadRunnr provides every user with a platform where they can avail of specific carriage services which are offered by us. The LoadRunnr may be presently accessed on our website, 
www.loadrunnr.in &amp; LoadRunnr Mobile Application. LoadRunnr provides every user with a platform where they can avail of specific carriage services which are offered by us. The LoadRunnr may be presently accessed on our website, 
www.loadrunnr.in &amp; LoadRunnr Mobile Application.<br><br> LoadRunnr provides every user with a platform where they can avail of specific carriage services which are offered by us. The LoadRunnr may be presently accessed on our website, 
www.loadrunnr.in &amp; LoadRunnr Mobile Application. LoadRunnr provides every user with a platform where they can avail of specific carriage services which are offered by us. The LoadRunnr may be presently accessed on our website, 
www.loadrunnr.in &amp; LoadRunnr Mobile Application. LoadRunnr provides every user with a platform where they can avail of specific carriage services which are offered by us. The LoadRunnr may be presently accessed on our website, 
www.loadrunnr.in &amp; LoadRunnr Mobile Application. --></div>



       
           
         
         
        
        </div>
          </div>
        </div>
      </div>
           
  
  
  
         
        
        </div>
      </div>
      
      
<div class="section-category">
        <div class="uk-section-large uk-container uk-container-xlarge">
          <div class="section-title uk-text-center">
            <h3 class="uk-h3"><?= $result4->title1; ?></h3>
            <p class="text-white"><?= $result4->title2; ?>

</p>
          </div>
          <div class="section-content">
            <div data-uk-slider="sets: true">
              <div class="uk-position-relative" tabindex="-1">
                <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-4@l uk-child-width-1-6@xl">
                  <li>
                    <div class="category-item"><a class="category-item__box" href="javascript:void(0);">
                        <div class="category-item__icon"><img src="images/<?= $result4->image1; ?>" width="150" alt="ico-category"></div>
                        <div class="category-item__title"><?= $result4->point1; ?> </div>
                       
                      </a></div>
                  </li>
                  <li>
                    <div class="category-item"><a class="category-item__box" href="javascript:void(0);">
                        <div class="category-item__icon"><img src="images/<?= $result4->image2; ?>" width="150" alt="ico-category"></div>
                        <div class="category-item__title"><?= $result4->point2; ?></div>
                        
                      </a></div>
                  </li>
                  <li>
                    <div class="category-item"><a class="category-item__box" href="javascript:void(0);">
                        <div class="category-item__icon"><img src="images/<?= $result4->image3; ?>" width="150" alt="ico-category"></div>
                        <div class="category-item__title"><?= $result4->point3; ?></div>
                        
                      </a></div>
                  </li>
                  <li>
                    <div class="category-item"><a class="category-item__box" href="javascript:void(0);">
                        <div class="category-item__icon"><img src="images/<?= $result4->image4; ?>" width="150" alt="ico-category"></div>
                        <div class="category-item__title"><?= $result4->point4; ?></div>
                        
                      </a></div>
                  </li>
                  
                  
                  
                 
                </ul>
              </div>
              <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
            </div>
          </div>
        </div>
      </div>

      
      
    </main>
   <footer class="page-footer">
      <div class="page-footer__top">
        <div class="uk-container">
          <div class="uk-grid">
            <div class="xuk-width-auto@m text-center">
              <div class="logo"><a class="logo__link" href="index.html"><img class="logo__img" src="images/<?= $result11->image; ?>" width="150" alt="LoadRunnr"></a></div>
              <p><?= $result7->title; ?></p>
              <ul class="uk-list">
                <li> <span>Address: </span><a href=""><?= $result7->address; ?></a></li>
                <li> <span>Email: </span><a href="mailto:<?= $result7->email; ?>"><?= $result7->email; ?></a></li>
                <li> <span>Phone: </span><a href="tel:<?= $result7->phone; ?>"><?= $result7->phone; ?></a></li>
              </ul>
               <ul class="social">
                <li><a target="_blank" href="<?= $result8->twitter; ?>"><i class="fab fa-twitter"></i></a></li>
                <li><a target="_blank" href="<?= $result8->fb; ?>"><i class="fab fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="<?= $result8->insta; ?>"><i class="fab fa-instagram"></i></a></li>
                <li><a target="_blank" href="<?= $result8->linkedin; ?>"><i class="fab fa-linkedin"></i></a></li>
                <li><a target="_blank" href="<?= $result8->youtube; ?>"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
            
            
          </div>
        </div>
      </div>
      <div class="page-footer__bottom">
         <div class="uk-container"><span class="text-white">Copyright © 2021 LoadRunnr - All Rights Reserved. | <a class="text-white" href="terms-and-conditions.php">Terms & Conditions</a> | <a class="text-white" href="privacy-policy.php">Privacy Policy
</a></span></div>
      </div>
      <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
          <div>
            <div class="uk-margin">
              <div class="logo"><a class="logo__link" href="index.php"><img class="logo__img" src="images/logoorange.png" width="150" alt=""></a></div>
            </div>
            <div class="uk-margin-medium">
              <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
                <li><a href="https://loadrunnr.in"> Home</a></li> 
                <li><a href="delivery-partner.php"> Delivery Partner</a></li> 
                    <li><a href="about-us.php"> About Us</a></li>  
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
    
    </footer>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>