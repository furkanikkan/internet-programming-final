<?php 
  require_once("dashboard/Database/baglanti.php");

  $ayarlariGetir=$baglanti->prepare("SELECT * FROM ayarlar WHERE ayarId=1");
  $ayarlariGetir->execute();
  $ayar=$ayarlariGetir->fetch();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title><?php echo $ayar["ayarSiteBasligi"];?></title>

    <link rel="icon" type="image/png" href="images/fav.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="../../../css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datepicker.min.css" rel="stylesheet">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/feather-icons/feather.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
</head>

<body class="body-bg">

    <main class="register-mp">
        <div class="main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="login-register-bg">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="lg-left">
                                        <div class="lg-logo">
                                        </div>
                                        <div class="lr-text">
                                            <h2>Hemen Kaydol</h2>
                                            <p>Eğlenceye Sende Katıl.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="lr-right">
                                        <div class="social-logins">
                                        </div>
                                        <div class="login-register-form">
                                            <form method="post" action="database/kullanici.php"> 
                                            <?php 
                                            @$durum=$_GET["durum"];
                                              if($durum=="bulunamadi"){
                                                echo '  <div class="alert alert-danger">
                                              Kayıt bulunamadı.
                                                  </div>';
                                              }elseif($durum=="cikis"){
                                                  echo '  <div class="alert alert-success">
                                                  Çıkış işlemi başarıyla yapıldı.
                                                      </div>';
                                              }
                                            ?>
                                                <div class="form-group">
                                                    <input class="form-input h_50" type="text" name="kullaniciAdi"
                                                        placeholder="Kullanıcı Adı">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-input h_50" type="password" name="sifre"
                                                        placeholder="Şifre">
                                                </div>
                                                <button class="login-btn" type="submit">Giriş Yap</button>
                                            </form>
                                            <a href="#" class="forgot-link">Şifremi Unuttum?</a>
                                            <div class="regstr-link">Hesabın yok mu? <a href="register.php">Hemen
                                                    Kaydol</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php include("footer.php") ?>


   