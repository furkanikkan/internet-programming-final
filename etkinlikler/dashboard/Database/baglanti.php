<?php
 @session_start();
 $db="etkinlikler";
 $host="localhost";
 $password="12345678";
 $user="root";
  
 try {
	
	 $baglanti = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
	 $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
	 }
 catch(PDOException $e)
	 {
	 echo "Bağlantı hatası: " . $e->getMessage();
	 }
 ?>
 