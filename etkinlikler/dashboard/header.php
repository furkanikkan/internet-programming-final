<?php 
  require_once("Database/baglanti.php");

$ayarlariGetir=$baglanti->prepare("SELECT * FROM ayarlar WHERE ayarId=1");
$ayarlariGetir->execute();
$ayar=$ayarlariGetir->fetch();

 
  
$yoneticiAdi = $_SESSION["username"];
$yoneticiSifre =  $_SESSION["password"]; 

$yoneticiSorgulama=$baglanti->prepare("SELECT * FROM yoneticiler
WHERE yoneticiKullaniciAdi=? AND yoneticiSifre=?");
$yoneticiSorgulama->execute(array($yoneticiAdi, $yoneticiSifre));
$say=$yoneticiSorgulama->rowCount();//İçi boş mu diye kontrol ettim ve 19. satırda eğer değer yoksa logine geri döndürdüm
$yonetici=$yoneticiSorgulama->fetch();


if($say==0){

    Header("Location:login.php?durum=izinsiz");
    exit;

}

/* $title="Biletix";
$ayarGuncelle=$baglanti->prepare("UPDATE ayarlar SET
ayarSiteBasligi=?
WHERE ayarId=1");
$ayarGuncelle->execute(array($title)); */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title><?php echo $ayar["ayarSiteBasligi"]; ?> - Yönetici Paneli </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="anasayfa" class="site_title"> 
                            <span><?php echo $ayar["ayarSiteBasligi"]; ?></span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <!-- <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div> -->
                        <div class="profile_info">
                            <span>Hoşgeldiniz,</span>
                            <h2><?php echo $yonetici["yoneticiAdi"]." ".$yonetici["yoneticiSoyadi"]; ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <?php 
                  require_once("sidebar.php") 
                  ?>


                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                   <!--  <img src="images/img.jpg" alt=""> --><?php echo $yonetici["yoneticiAdi"]." ".$yonetici["yoneticiSoyadi"]; ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;">Kullanıcı Ayarları</a> 
                                    <a class="dropdown-item" href="cikis-yap"><i class="fa fa-sign-out pull-right"></i>
                                     Çıkış Yap</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->