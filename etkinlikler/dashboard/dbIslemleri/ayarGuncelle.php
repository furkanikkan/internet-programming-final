<?php  
  require_once("../Database/baglanti.php");

  $baslik=$_POST["baslik"];
  $aciklama=$_POST["aciklama"];
  $facebok=$_POST["facebok"];
  $instagram=$_POST["instagram"];
  $linkedin=$_POST["linkedin"];
  $twitter=$_POST["twitter"];
  $youtube=$_POST["youtube"];
  $tasarlayan=$_POST["tasarlayan"];

  $ayarGuncelle=$baglanti->prepare("UPDATE ayarlar SET 
  ayarSiteBasligi=?,
  ayarSiteAciklama=?,
  ayarFacebookUsername=?,
  ayarInstagramUsername=?,
  ayarLinkedinUsername=?,
  ayarTwitterUsername=?,
  ayarYoutubeUsername=?,
  ayarTasarlayan=? 
  WHERE ayarId=1");

  $ayarGuncelle->execute(
    array($baslik, $aciklama,$facebok,$instagram,$linkedin,$twitter,$youtube,$tasarlayan)
  );

  if($ayarGuncelle){

    header("Location:../ayarlar?kontrol=basarili");
    die();

  }else{

    header("Location:../ayarlar?kontrol=basarisiz");
    die();

  }

?>