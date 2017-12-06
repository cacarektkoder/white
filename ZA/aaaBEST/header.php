<?php
include 'neadmin/netting/baglan.php';
$ayarcek=$db->query("select * from ayarlar")->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $ayarcek['ayar_title']; ?></title>
  <meta name="description" content=<?php echo $ayarcek['ayar_desc']; ?>>
  <meta name="keywords" content=<?php echo $ayarcek['ayar_keywords']; ?>>
  <meta name="author" content="CACAKREPT">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/lan.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/animate.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
  <script src="js/jquery-1.6.3.min.js"></script>
  <script src="js/cufon-yui.js"></script>
  <script src="js/cufon-replace.js"></script>
  <!-- <script src="js/NewsGoth_BT_400.font.js"></script> -->
  <script src="js/FF-cash.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/tms-0.3.js"></script>
  <script src="js/tms_presets.js"></script>
  <script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
  <div class="extra">
    <div class="main">
      <!--==============================header=================================-->
      <header>
        <div class="indent">
          <div class="row-top">
            <div class="wrapper">


              <img style="margin-top: 30px; margin-left: 35px" src= <?php echo $ayarcek['ayar_logo']; ?>>


              <strong class="support"><?php echo $ayarcek['ayar_telefon']; ?></strong> </div>
            </div>
            <nav>
              <ul class="menu">

                <li><a class="active" href="index.php">Anasayfa</a></li>

                <?php 


                $menucek=$db->query("select * from menuler", PDO::FETCH_ASSOC);

                foreach ($menucek as $menuyaz) { ?>

                


                <li><a href=<?php echo $menuyaz['menu_link'];  ?>><?php echo $menuyaz['menu_ad']; ?></a></li>


                <?php } ?>

              </ul>
            </nav>
          </div>
          <div class="wrapper">
            <div class="slider">
              <ul class="items">
                <li><img src="images/slider-img1.jpg" alt=""></li>
                <li><img src="images/slider-img2.jpg" alt=""></li>
                <li><img src="images/slider-img3.jpg" alt=""></li>
              </ul>
            </div>
            <a class="prev">prev</a> <a class="next">next</a>
            <div class="banner1-bg"></div>
            <div class="banner-1"></div>
          </div>
        </header>