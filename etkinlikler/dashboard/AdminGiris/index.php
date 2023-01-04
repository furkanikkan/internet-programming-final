<?php 
  require_once("../Database/baglanti.php");

  $yoneticiAdi= $_POST["username"];
  $yoneticiSifre= sha1($_POST["password"]);

  $yoneticiGirisSorgusu=$baglanti->prepare("SELECT * FROM yoneticiler
  WHERE yoneticiKullaniciAdi=? AND yoneticiSifre=?");
  $yoneticiGirisSorgusu->execute(array($yoneticiAdi, $yoneticiSifre));

  if($yoneticiGirisSorgusu->rowCount()>0){
    // index phpde kullanıcı bilgilerini elde etmek için session oluşturdum
    $_SESSION["username"]=$yoneticiAdi;
    $_SESSION["password"]=$yoneticiSifre;
  //Kullanıcı bulunduysa oturum açtı ve admin anasayfasına yönlendirdim
    header("Location:../anasayfa");
    exit(); 
 
  } else{  
    //Kullanıcı bulanamadıysa giriş sayfasına durumu get methodu ile gönderdik
    header("Location:../giris-yap?durum=bulunamadi");
    exit();
  }
  
?>