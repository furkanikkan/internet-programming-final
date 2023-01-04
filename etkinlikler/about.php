<?php include("header.php"); 

$hakkimizdaGetir=$baglanti->prepare("SELECT * FROM hakkimizda WHERE hakkimizdaID=1");
$hakkimizdaGetir->execute();
$hakkimizda=$hakkimizdaGetir->fetch();

?>


<div class="title-bar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<ol class="title-bar-text">
<li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
<li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
</ol>
</div>
</div>
</div>
</div>


<main class="discussion-mp">
<div class="main-section">
<div class="about-us">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="checkout-heading text-center">
<h2><?php echo $hakkimizda["hakkimizdaBaslik"]; ?></h2>
</div>
<div class="about-text">
<p><?php echo $hakkimizda["hakkimizdaIcerik"]; ?></p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-3">
<div class="about-steps">
<div class="about-item1">
<div class="about-icon">
<img src="images/about/sicon-1.svg" alt="">
</div>

</div>
</div>
</div>
<div class="col-lg-3 col-md-3">
<div class="about-steps">
<div class="about-item1">
<div class="about-icon">
<img src="images/about/sicon-2.svg" alt="">
</div>

</div>
</div>
</div>
<div class="col-lg-3 col-md-3">
<div class="about-steps">
<div class="about-item1">
<div class="about-icon">
<img src="images/about/sicon-3.svg" alt="">
</div>

</div>
</div>
</div>
<div class="col-lg-3 col-md-3">
<div class="about-steps">
<div class="about-item1">
<div class="about-icon">
<img src="images/about/sicon-4.svg" alt="">
</div>

</div>
</div>
</div>
</div>
</div>
</div>
<div class="expert-team">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="team-heading text-center">
<h2>Uzman Ekip</h2>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="team-bg">
<div class="team-img">
<img src="images/about/elon.jpg" alt="">
<div class="team-overlay">
<div class="team-overlay-text">
<h4>Elon Musk</h4>
<span>CEO & Founder</span>
<ul class="experts-social-links">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="team-bg">
<div class="team-img">
<img src="images/about/ronaldo.jpg" alt="">
<div class="team-overlay">
<div class="team-overlay-text">
<h4>Cristiano Ronaldo</h4>
<span>CEO & Founder</span>
<ul class="experts-social-links">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="team-bg">
 <div class="team-img">
<img src="images/about/messi.webp" alt="">
<div class="team-overlay">
<div class="team-overlay-text">
<h4>Lionel messi</h4>
<span>CEO & Founder</span>
<ul class="experts-social-links">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="testimonials">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="testi-heading text-center">
<h2>Görüşler</h2>
</div>
<div class="owl-testimonials">
<div class="owl-carousel testi-owl owl-theme">
<div class="item">
<div class="testi-text">
<h6>Başarıyı tek cümleye sığdıracak olsam.</h6>
<p>“ Azimle çalışan kaleye golü atar. ” derdim.</p>
</div>
<div class="testi-user-dt">
<h4>C.Ronaldo</h4>
<span>Türkiye</span>
</div>
</div>
<div class="item">
<div class="testi-text">
<h6>3 Maddede dünyadaki amacımız</h6>
<p>“ 1-Para,2-Para,3-Para”</p>
</div>
<div class="testi-user-dt">
<h4>Elon Musk</h4>
<span>Türkiye</span>
</div>
</div>
<div class="item">
<div class="testi-text">
<h6>Win mi almak istiyorsun?</h6>
<p>“ Her yerine bal sür. ”</p>
</div>
<div class="testi-user-dt">
<h4>L.Messi</h4>
<span>Türkiye</span>
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


