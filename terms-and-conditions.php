<?php
session_start();
require_once('backend/conn.php');


$sql = $conn->prepare("SELECT * FROM terms_conditions ");
$sql->execute();
$result = $sql->fetch(PDO::FETCH_OBJ);

$sql1 = $conn->prepare("SELECT * FROM logo where id=3");
$sql1->execute();
$result1 = $sql1->fetch(PDO::FETCH_OBJ);

$sql11 = $conn->prepare("SELECT * FROM logo where id=4");
$sql11->execute();
$result11 = $sql11->fetch(PDO::FETCH_OBJ);

$sql7= $conn->prepare("SELECT * FROM contact_content ");
$sql7->execute();
$result7 = $sql7->fetch(PDO::FETCH_OBJ);

$sql61= $conn->prepare("SELECT * FROM home_section4 ");
$sql61->execute();
$result61 = $sql61->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Terms & Conditions | LoadRunnr</title>
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
</head>

<body class="page-home">
  <div class="page-wrapper">
    <header class="page-header bg-orange">
      <div class="page-header__scroll bg-orange" data-uk-sticky>
        <div class="uk-container uk-container-xlarge">
          <div class="page-header__inner">
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
              <div class="section-banner__title">Terms & Conditions</div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <?= $result->description; ?>
         <!-- <p><strong>Welcome to LoadRunnr</strong></p>
<p>LoadRunnr is operated by LoadRunnr Technologies India Pvt. Ltd.<br>
LoadRunnr provides every user with a platform where they can avail of specific carriage services which are offered by us. The LoadRunnr may be presently accessed on our website, www.loadrunnr.in & LoadRunnr Mobile Application.</p>
     
     
     <h5><u>Please review the Terms of Service carefully.</u></h5>
     
         
              
              <ul class="uk-list uk-list-disc">
                <li>Use of the LoadRunnr is governed by the following terms and conditions (“Terms of Service''). The use of any other product or service offered by LoadRunnr Technologies
India Pvt. Ltd (including access to its websites) shall be governed by separate terms and conditions and are not covered by these Terms of Service.</li>
               
              </ul> -->
           
         
         
        
        </div>
      </div>
    </main>
    <footer class="page-footer">
      
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
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>