<?php
require_once("../dashboard/Database/baglanti.php");

$eklenicekBakiye = $_POST["eklenicekBakiye"]; 
$mevcutBakiye=$_SESSION["kullaniciBakiye"];
$guncelBakiye = $mevcutBakiye + $eklenicekBakiye;
 
$bakiyeGuncellemeSorgusu = $baglanti->prepare("UPDATE kullanicilar SET 
bakiye=? 
WHERE ID=?  ");
$guncelleme=$bakiyeGuncellemeSorgusu->execute(array($guncelBakiye,$_SESSION["kullaniciId"]));

if($guncelleme){
    header("Location:../credit?kontrol=basarili");
    die;
}else{
    header("Location:../credit?kontrol=basarisiz");
    die;
}
 
?>