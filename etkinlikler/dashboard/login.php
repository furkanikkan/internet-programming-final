<?php 
  require_once("Database/baglanti.php");

  $ayarlariGetir=$baglanti->prepare("SELECT * FROM ayarlar WHERE ayarId=1");
  $ayarlariGetir->execute();
  $ayar=$ayarlariGetir->fetch();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $ayar["ayarSiteBasligi"]; ?> - Yönetici Giriş </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="AdminGiris/" method="POST">
                        <h1> Yönetici Giriş</h1>
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
                }elseif($durum=="izinsiz"){
                    echo '  <div class="alert alert-danger">
                    Giriş izniniz yok, oturum açın!
                         </div>';
                }
              ?> 

                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Kullanıcı adını girin"
                                required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password"
                                placeholder="Kullanıcı adını girin" required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-secondary">Giriş Yap</button>
                        </div>
                        <div class="separator">
                            <div>
                                <h1><i class="fa fa-code"></i> <?php echo $ayar["ayarTasarlayan"]; ?></h1>
                                <p>&copy; 2022. <strong><?php echo $ayar["ayarTasarlayan"]; ?></strong> tarafından
                                    tasarlandı ve geliştirildi.</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>