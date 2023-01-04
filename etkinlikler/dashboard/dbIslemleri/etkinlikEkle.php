<?php  
  require_once("../Database/baglanti.php");

  $sanatci=$_POST["sanatci"];
  $biletUcret=$_POST["biletUcret"];
  $icerik=$_POST["icerik"];
  $adres=$_POST["adres"];
  $ilce=$_POST["ilce"];
  $il=$_POST["il"];
  $profil = $_POST["profilResim"];
  $tip=$_POST["tip"];
  $tarih=date($_POST["tarih"],strtotime("yyyy-MM-dd H:i:s"));
  $maxKisiSayisi=$_POST["maxKisiSayisi"];

  $etkinlikEkle=$baglanti->prepare("INSERT INTO etkinlikler SET 
  sanatciID=?,
  biletUcret=?,
  icerik=?,
  adres=?,
  ilce=?,
  il=?,
  tip=?,
  tarih=?, 
  maxKisiSayisi=?,
  etkinlikImage=?
  ");

  $etkinlikEkle->execute(
    array($sanatci, $biletUcret,$icerik,$adres,$ilce,$il,$tip,$tarih,$maxKisiSayisi,$profil)
  );

  if($etkinlikEkle){

    header("Location:../etkinlik?kontrol=basarili");
    die();

  }else{

    header("Location:../etkinlik?kontrol=basarisiz");
    die();

  }

?>