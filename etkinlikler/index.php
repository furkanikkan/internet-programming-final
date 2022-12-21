<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Etkinlikler</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Vinyl&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/083f0ce600.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <div id="mySidenav" class="sidenav">
            <a href="#" id="Anasayfa">Anasayfa</a>
            <a href="#" id="Etkinlikler">Etkinlikler</a>
            <a href="#" id="Giris">Giriş</a>
            <a href="#" id="Basvurular">Başvurular</a>
            <a href="#" id="İletisim">İletişim</a>
        </div>

        <a href="#" class="logo">
            <img src="images/logo.png" alt="logo">
        </a>

        <section class="intro">
            <div class="video-container">
                <video src="assets/videos/video.mp4" autoplay loop playsinline muted></video>
            </div>
            <div class="content">
                <a href="#page" class="read-more">Keşfet</a>
            </div>
        </section>
        <section id="page">
        <h1>Dün, bugün ve yarınlar için eğlenmeye hazır mısın?</h1>
        <br><br>
            <form action="/action_page.php" style="font-family: 'Shadows Into Light', cursive;">
                <label for="etkinlikler">Etkinlikler:</label>
                <select name="menu" id="menu">
                    <option value="konser">konser</option>
                    <option value="tiyatro">tiyatro</option>
                    <option value="sinema">sinema</option>
                    <option value="geziler">geziler</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="etkinlikTarihi">Etkinlik Tarihi:</label>
                <input id="etkinlikTarihi" type="date">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="cars">Yerler:</label>
                <select name="cars" id="cars">
                    <option value="tumTurkiye">Tüm Türkiye</option>
                    <option value="balikesir">Balıkesir</option>
                    <option value="istanbul">İstanbul</option>
                    <option value="kutahya">Kütahya</option>
                </select>
                &nbsp;&nbsp;
                <input type="submit" value="      Ara     ">
            </form>
        </section>
    </div>
    <!-- Footer Başlangıç -->
     <footer class="site-footer">
      <div class="container">
        <div class="row">
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter"  href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
<!--Footer Bitiş-->


</body>
</html>