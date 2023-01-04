<?php  
  require_once("../Database/baglanti.php");
 
  $sanatciAd=$_POST["sanatciAd"];
  $sanatciSoyad=$_POST["sanatciSoyad"];
  $sanatciTelefonNo=$_POST["sanatciTelefonNo"];
  $sanatciMail=$_POST["sanatciMail"];

  $ext = strtolower(substr($_FILES['profil']["name"], strpos($_FILES['profil']["name"], '.') + 1));
  @$tmp_name = $_FILES['profil']["tmp_name"];
  @$name = $_FILES['profil']["name"];
  $uploads_dir = '../../images/sanatcilar'; 
  $profilresmi = substr($uploads_dir, 6) . "/" . $name . "." . $ext;
  @move_uploaded_file($tmp_name, "$uploads_dir/$name.$ext");

  $sanatciEkle=$baglanti->prepare("INSERT INTO sanatcilar SET 
  profilResmi=?,
  ad=?,
  soyad=?,
  telefonNo=?,
  mail=?
  ");

  $sanatciEkle->execute(
    array($profilresmi,$sanatciAd,$sanatciSoyad,$sanatciTelefonNo,$sanatciMail)
  );

  if($sanatciEkle){

    header("Location:../sanatci?kontrol=basarili");
    die();

  }else{

    header("Location:../sanatci?kontrol=basarisiz");
    die();

  }

?>