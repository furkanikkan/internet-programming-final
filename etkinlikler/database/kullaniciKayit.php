<?php 
require_once("../dashboard/Database/baglanti.php");
 
/* kullanıcı kayıt */
$kayitAd = $_POST["kayitAd"];
$kayitSoyad = $_POST["kayitSoyad"];
$kayitKullaniciAdi = $_POST["kayitKullaniciAdi"];
$kayitSifre = sha1($_POST["kayitSifre"]);
$kayitResim = $_POST["kayitResim"];

$kullaniciEkle = $baglanti->prepare("INSERT INTO kullanicilar SET
 ad=?,
 soyad=?,
 kullaniciAdi=?,
 sifre=?,
 profilResim=?
 ");
$kayit=$kullaniciEkle->execute(array($kayitAd, $kayitSoyad, $kayitKullaniciAdi,$kayitSifre,$kayitResim));

if ($kayit) {
    // index phpde kullanıcı bilgilerini elde etmek için session oluşturdum
    $_SESSION["kullaniciAdi"] = $kullaniciAdi;
    $_SESSION["sifre"] = $kullaniciSifre;
    //Kullanıcı bulunduysa oturum açtı ve admin anasayfasına yönlendirdim
    header("Location:../register.php?durum=basarili");
    exit();
  } else {
    //Kullanıcı bulanamadıysa giriş sayfasına durumu get methodu ile gönderdik
    header("Location:../register.php?durum=basarisiz");
    exit();
  }
?>