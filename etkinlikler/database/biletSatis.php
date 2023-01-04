<?php
require_once("../dashboard/Database/baglanti.php");

$etkinlikID=$_GET["etkinlikID"];

$cikartilicakBakiye = $_POST["cikartilicakBakiye"]; 
$mevcutBakiye=$_SESSION["kullaniciBakiye"];
$guncelBakiye = $mevcutBakiye - $cikartilicakBakiye;
 
$bakiyeGuncellemeSorgusu = $baglanti->prepare("UPDATE kullanicilar SET 
bakiye=? 
WHERE ID=?  ");
$guncelleme=$bakiyeGuncellemeSorgusu->execute(array($guncelBakiye,$_SESSION["kullaniciId"]));

if($guncelleme){
    header("Location:../confirmed_order.php?kontrol=basarili&etkinlikID=".$etkinlikID);
    die;
}else{
    header("Location:../confirmed_order.php?kontrol=basarisiz");
    die;
}
 
?>