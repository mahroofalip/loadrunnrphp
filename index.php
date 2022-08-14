<?php
session_start();
require_once('backend/conn.php');

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>LoadRunnr | On-Demand Goods Delivery | Motorcycle |Tata Ace</title>
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

</style>
</head>
<?php

$sql1 = $conn->prepare("SELECT * FROM logo where id=3");
$sql1->execute();
$result1 = $sql1->fetch(PDO::FETCH_OBJ);

$sql11 = $conn->prepare("SELECT * FROM logo where id=4");
$sql11->execute();
$result11 = $sql11->fetch(PDO::FETCH_OBJ);

$sql2 = $conn->prepare("SELECT * FROM banner ");
$sql2->execute();
$result2 = $sql2->fetch(PDO::FETCH_OBJ);

$sql3 = $conn->prepare("SELECT * FROM home_section1 ");
$sql3->execute();
$result3 = $sql3->fetch(PDO::FETCH_OBJ);

$sql4= $conn->prepare("SELECT * FROM home_section2 ");
$sql4->execute();
$result4 = $sql4->fetch(PDO::FETCH_OBJ);

$sql5= $conn->prepare("SELECT * FROM home_section3 ");
$sql5->execute();
$result5 = $sql5->fetch(PDO::FETCH_OBJ);

$sql6= $conn->prepare("SELECT * FROM home_section4 ");
$sql6->execute();
$result6 = $sql6->fetch(PDO::FETCH_OBJ);

$sql7= $conn->prepare("SELECT * FROM contact_content ");
$sql7->execute();
$result7 = $sql7->fetch(PDO::FETCH_OBJ);

$sql8= $conn->prepare("SELECT * FROM social_media ");
$sql8->execute();
$result8 = $sql8->fetch(PDO::FETCH_OBJ);
?>
<body class="page-home">
  <div class="page-wrapper">
    <header class="page-header page-header--transparent">
      <div class="page-header__scroll" data-uk-sticky="top: 100vh">
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
             
              <div class="page-header__btn"> <a class="uk-button uk-button-primary btnimgx" href="<?= $result6->url; ?>"> <img src="images/btnimg.png" width="125" ></a></div>
               
               <div class="page-header__btn-menu"><a href="#offcanvas" data-uk-toggle data-uk-icon="menu"></a></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="page-main">
      <div class="section-banner section-banner--custome">
        <div class="section-banner__bg" style="background-image: url(images/<?= $result2->image; ?>)">
          <div class="uk-container">
            <div class="section-banner__content ss2">
              <div class="section-banner__title"><?= $result2->title1; ?></div>
              <div class="section-banner__text"><?= $result2->title2; ?></div>
              <div class="section-banner__bottom">
                <div class="popular-searches"><span></span>
                  <ul>
                    <li><a href="<?= $result6->urllink; ?>" ><img src="images/<?= $result6->image3; ?>" alt="popular-search" data-uk-svg></a></li>
                    <li><a href="<?= $result6->url; ?>" ><img src="images/<?= $result6->image2; ?>" alt="popular-search" data-uk-svg></a></li>
                    
                  </ul>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>


<div class="section-info">
        <div class="uk-section-large uk-container uk-container-large">
          <div class="uk-grid uk-child-width-1-2@m uk-flex-middle " data-uk-grid>
            <div class="uk-flex-last@m uk-text-center posr"><img src="images/loadrunner-ace.svg" alt="img-info"> <!--<img class="sco_class" src="images/scooter.png" alt="img-info">--></div>
            <div>
              <div class="section-content">
                <h3 class="uk-h3"><?= $result3->title; ?></h3>
                <ul class="info-list">
                  <li>
                    <div class="info-list-item">
                      <div class="info-list-item__icon"><img src="images/<?= $result3->logo1; ?>" alt="ico-info"></div>
                      <div class="info-list-item__desc">
                        <div class="info-list-item__title"><?= $result3->logo_title1; ?></div>
                        <div class="info-list-item__text"><?= $result3->logo_description1; ?>

</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-list-item">
                      <div class="info-list-item__icon"><img src="images/<?= $result3->logo2; ?>" alt="ico-info"></div>
                      <div class="info-list-item__desc">
                        <div class="info-list-item__title"><?= $result3->logo_title2; ?></div>
                        <div class="info-list-item__text"><?= $result3->logo_description2; ?></div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-list-item">
                      <div class="info-list-item__icon"><img src="images/<?= $result3->logo3; ?>" alt="ico-info"></div>
                      <div class="info-list-item__desc">
                        <div class="info-list-item__title"><?= $result3->logo_title3; ?>
</div>
                        <div class="info-list-item__text"><?= $result3->logo_description3; ?></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-category">
        <div class="uk-section-large uk-container uk-container-xlarge">
          <div class="section-title uk-text-center"><span class="text-white"><?= $result4->title1; ?></span>
            <h3 class="uk-h3 text-white"><?= $result4->title2; ?></h3>
            <p class="text-white"><?= $result4->title3; ?></p>
          </div>
          <div class="section-content">
            <div data-uk-slider="sets: true">
              <div class="uk-position-relative" tabindex="-1">
                <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-5@l uk-child-width-1-6@xl">
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
                        <div class="category-item__title"><?= $result4->point3; ?> </div>
                       
                      </a></div>
                  </li>
                  <li>
                    <div class="category-item"><a class="category-item__box" href="javascript:void(0);">
                        <div class="category-item__icon"><img src="images/<?= $result4->image4; ?>" width="150" alt="ico-category"></div>
                        <div class="category-item__title"><?= $result4->point4; ?></div>
                        
                      </a></div>
                  </li>
                  <li>
                    <div class="category-item"><a class="category-item__box" href="javascript:void(0);">
                        <div class="category-item__icon"><img src="images/<?= $result4->image5; ?>" width="150" alt="ico-category"></div>
                        <div class="category-item__title"><?= $result4->point5; ?></div>
                        
                      </a></div>
                  </li>
                </ul>
              </div>
              <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
            </div>
          </div>
        </div>
      </div>


      <div class="section-steps">
        <div class="uk-section-large uk-container">
          <div class="section-title uk-text-center"><span><?= $result5->title1; ?></span>
            <h3 class="uk-h3"><?= $result5->title2; ?></h3>
            <p><?= $result5->title3; ?></p>
          </div>
          <div class="section-content">
            <div data-uk-slider="finite: true">
              <div class="uk-position-relative" tabindex="-1">
                <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m">
                  <li>
                    <div class="card-with-icon">
                      <div class="card-with-icon__box">
                        <div class="card-with-icon__icon"><img src="images/<?= $result5->image1; ?>" alt="icon"></div>
                        <div class="card-with-icon__title"><?= $result5->point1; ?></div>
                        <div class="card-with-icon__text"><?= $result5->desc1; ?></div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="card-with-icon">
                      <div class="card-with-icon__box">
                        <div class="card-with-icon__icon"><img src="images/<?= $result5->image2; ?>" alt="icon"></div>
                        <div class="card-with-icon__title"><?= $result5->point2; ?>
</div>
                        <div class="card-with-icon__text"><?= $result5->desc2; ?></div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="card-with-icon">
                      <div class="card-with-icon__box">
                        <div class="card-with-icon__icon"><img src="images/<?= $result5->image3; ?>" alt="icon"></div>
                        <div class="card-with-icon__title"><?= $result5->point3; ?></div>
                        <div class="card-with-icon__text"><?= $result5->desc3; ?></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="uk-hidden@s">
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <section class="">
            <div class="block no-padding red-bg">
                <img class="bottom-clouds-mockup" src="images/clouds2.png" alt="clouds2.png" itemprop="image">
                <div class="uk-section-large uk-container uk-container-large no-padding">
                    <div class="uk-grid uk-child-width-1-2@m uk-flex-middle">
                        <div class="width-100">
                            <div class="app-sec">
                                <div class="uk-grid  uk-flex-middle">
                                    <div class="uk-first-column uk-width-1-3@m">
                                        <div class="app-mockup text-right overlape-110 wow fadeInUp" data-wow-delay="0.2s"><img src="images/<?= $result6->image1; ?>" alt="app-mockup.png" itemprop="image"></div>
                                    </div>
                                    <div class="uk-width-2-3@m ">
                                        <div class="app-info text-white">
                                            <?= $result6->description; ?>
                                            <!-- <h4 itemprop="headline" class="text-white">Download our app now to get your deliveries going places.
</h4>
                                            <p itemprop="description">This is a sample of Intrepid Websoul Pvt. Ltd dummy copy text often used to show page layout and design. This is a sample of Intrepid Websoul Pvt. Ltd dummy copy text often used to show page layout and design.</p> -->
                                            <div class="app-download-btns">
                                                <a class="" href="<?= $result6->url; ?>" title="Google Play Store" itemprop="url" target="_blank"><img src="images/<?= $result6->image2; ?>" alt="app-download-btn1.png" itemprop="image"></a>
                                                <a class="" href="<?= $result6->urllink; ?>" title="Apple App Store" itemprop="url" target="_blank"><img src="images/<?= $result6->image3; ?>" alt="app-download-btn2.png" itemprop="image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- App Section -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- red section -->
      
     
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
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>