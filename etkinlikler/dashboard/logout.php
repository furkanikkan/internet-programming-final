<?php 
session_start();
session_destroy();
header("Location:giris-yap?durum=cikis");
exit;

?>