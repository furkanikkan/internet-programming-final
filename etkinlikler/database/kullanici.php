<?php

/* kullanıcı giriş */
require_once("../dashboard/Database/baglanti.php");

$kullaniciAdi = $_POST["kullaniciAdi"];
$kullaniciSifre = sha1($_POST["sifre"]);


$kullaniciGirisSorgusu = $baglanti->prepare("SELECT * FROM kullanicilar
  WHERE kullaniciAdi=? AND sifre=?");
$kullaniciGirisSorgusu->execute(array($kullaniciAdi, $kullaniciSifre));


if ($kullaniciGirisSorgusu->rowCount() > 0) {
  // index phpde kullanıcı bilgilerini elde etmek için session oluşturdum
  $_SESSION["kullaniciAdi"] = $kullaniciAdi; 
  //Kullanıcı bulunduysa oturum açtı ve admin anasayfasına yönlendirdim
  header("Location:../");
  exit();
} else {
  //Kullanıcı bulanamadıysa giriş sayfasına durumu get methodu ile gönderdik
  header("Location:../giris-yap?durum=bulunamadi");
  exit();
}



?>