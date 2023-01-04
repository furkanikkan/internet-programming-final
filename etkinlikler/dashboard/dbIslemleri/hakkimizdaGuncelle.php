<?php  
  require_once("../Database/baglanti.php");

  $hakkimizdaBaslik=$_POST["hakkimizdaBaslik"];
  $hakkimizdaIcerik=$_POST["hakkimizdaIcerik"];

  $hakkimizdaGuncelle=$baglanti->prepare("UPDATE hakkimizda SET 
  hakkimizdaBaslik=?,
  hakkimizdaIcerik=?
  WHERE hakkimizdaID=1");

  $hakkimizdaGuncelle->execute(
    array($hakkimizdaBaslik, $hakkimizdaIcerik)
  );

  if($hakkimizdaGuncelle){

    header("Location:../hakkimizda?kontrol=basarili");
    die();

  }else{

    header("Location:../hakkimizda?kontrol=basarisiz");
    die();

  }

?>