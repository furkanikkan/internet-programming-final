-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 04 Oca 2023, 11:15:40
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `etkinlikler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayarId` int(1) NOT NULL,
  `ayarSiteBasligi` varchar(100) NOT NULL,
  `ayarSiteAciklama` text NOT NULL,
  `ayarFacebookUsername` varchar(50) NOT NULL,
  `ayarInstagramUsername` varchar(50) NOT NULL,
  `ayarYoutubeUsername` varchar(50) NOT NULL,
  `ayarTwitterUsername` varchar(50) NOT NULL,
  `ayarLinkedinUsername` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ayarTasarlayan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayarId`, `ayarSiteBasligi`, `ayarSiteAciklama`, `ayarFacebookUsername`, `ayarInstagramUsername`, `ayarYoutubeUsername`, `ayarTwitterUsername`, `ayarLinkedinUsername`, `ayarTasarlayan`) VALUES
(1, 'ikkaNs', 'merhaba', 'facebook.com', 'instagram.com', 'youtube.com', 'twitter.com', 'linkedin.com', 'Furkan İkkan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `biletler`
--

CREATE TABLE `biletler` (
  `biletID` int(255) NOT NULL,
  `kullaniciID` int(255) NOT NULL,
  `etkinlikID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `biletler`
--

INSERT INTO `biletler` (`biletID`, `kullaniciID`, `etkinlikID`) VALUES
(10, 1, 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blogID` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blogID`, `baslik`, `resim`, `icerik`, `tarih`) VALUES
(1, 'başlık', '', 'içerik', '2023-01-18 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `etkinlikID` int(11) NOT NULL,
  `sanatciID` int(11) NOT NULL,
  `biletUcret` int(11) NOT NULL,
  `etkinlikImage` varchar(100) NOT NULL,
  `etkinlikBaslik` varchar(100) NOT NULL,
  `icerik` text NOT NULL,
  `adres` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ilce` varchar(50) NOT NULL,
  `il` varchar(50) NOT NULL,
  `tip` enum('Online','Yüz Yüze') NOT NULL,
  `tarih` datetime NOT NULL,
  `maxKisiSayisi` int(255) NOT NULL,
  `olusturulmaTarihi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `etkinlikler`
--

INSERT INTO `etkinlikler` (`etkinlikID`, `sanatciID`, `biletUcret`, `etkinlikImage`, `etkinlikBaslik`, `icerik`, `adres`, `ilce`, `il`, `tip`, `tarih`, `maxKisiSayisi`, `olusturulmaTarihi`) VALUES
(7, 1, 100, '1.jpg', 'etkinlikBaslikk', 'içerikk', 'adress', 'ilçe', 'il', 'Yüz Yüze', '2023-01-21 00:00:00', 100, '2023-01-03 23:07:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizdaID` int(10) NOT NULL,
  `hakkimizdaBaslik` varchar(50) NOT NULL,
  `hakkimizdaIcerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizdaID`, `hakkimizdaBaslik`, `hakkimizdaIcerik`) VALUES
(1, 'Hakkımızda', '1998 yılında \"En yeni iletişim ve bilgisayar teknolojilerini kullanarak müşterilerine dünya standartlarında çözümler sunmak\" ilkesiyle yola çıkan isimtescil.net, geçen 16 yıllık süreçte Dünya ve Türkiye’ye, en büyük domain ve hosting firmalarından biri olmayı başarmıştır.\r\n\r\n2008 yılında alan adları standartlarını belirleyen ve denetleyen tek otorite ICANN\'e akredite olan isimtescil.net, 2010 yılından beri Türkiye\'nin en büyük 500 bilişim şirketi arasında yer almakta ve kurulduğu günden buyana 1 milyonun üzerinde domain kaydı ve 200 bininin üzerinde barındırma hizmetne ev sahipliği yapmıştır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisimID` int(11) NOT NULL,
  `konu` varchar(50) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `ID` int(255) NOT NULL,
  `profilResmi` varchar(50) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `kullaniciAdi` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `bakiye` int(255) NOT NULL,
  `hakkinda` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`ID`, `profilResmi`, `ad`, `soyad`, `kullaniciAdi`, `sifre`, `bakiye`, `hakkinda`, `adres`) VALUES
(1, '1.jpg', 'Furkan', 'İkkan', 'furkan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 100, 'hakkinda', 'adres');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sanatcilar`
--

CREATE TABLE `sanatcilar` (
  `sanatciID` int(2) NOT NULL,
  `profilResmi` varchar(100) NOT NULL,
  `ad` varchar(20) NOT NULL,
  `soyad` varchar(20) NOT NULL,
  `telefonNo` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sanatcilar`
--

INSERT INTO `sanatcilar` (`sanatciID`, `profilResmi`, `ad`, `soyad`, `telefonNo`, `mail`) VALUES
(1, '', 'Gülben', 'Ergen', '5551111111', 'gulbenergen@hotmaili.com'),
(2, '', 'Fatma', 'Turgut', '5552222222', 'fatmaturgut@hotmail.com'),
(3, '', 'Can', 'Bonomo', '5553333333', 'canbonomo@hotmail.com'),
(4, '', 'Yıldız', 'Tilbe', '5554444444', 'yildiztilbe@hotmaili.com'),
(5, '', 'Haluk', 'Levent', '5555555555', 'haluklevent@hotmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `yoneticiId` int(11) NOT NULL,
  `yoneticiAdi` varchar(100) NOT NULL,
  `yoneticiSoyadi` varchar(100) NOT NULL,
  `yoneticiKullaniciAdi` varchar(100) NOT NULL,
  `yoneticiSifre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`yoneticiId`, `yoneticiAdi`, `yoneticiSoyadi`, `yoneticiKullaniciAdi`, `yoneticiSifre`) VALUES
(1, 'Furkan', 'İkkan', 'furkan', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayarId`);

--
-- Tablo için indeksler `biletler`
--
ALTER TABLE `biletler`
  ADD PRIMARY KEY (`biletID`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogID`);

--
-- Tablo için indeksler `etkinlikler`
--
ALTER TABLE `etkinlikler`
  ADD PRIMARY KEY (`etkinlikID`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizdaID`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisimID`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `kullaniciAdi` (`kullaniciAdi`);

--
-- Tablo için indeksler `sanatcilar`
--
ALTER TABLE `sanatcilar`
  ADD PRIMARY KEY (`sanatciID`);

--
-- Tablo için indeksler `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`yoneticiId`),
  ADD UNIQUE KEY `yoneticiKullaniciAdi` (`yoneticiKullaniciAdi`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayarId` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `biletler`
--
ALTER TABLE `biletler`
  MODIFY `biletID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `etkinlikler`
--
ALTER TABLE `etkinlikler`
  MODIFY `etkinlikID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkimizdaID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisimID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `sanatcilar`
--
ALTER TABLE `sanatcilar`
  MODIFY `sanatciID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `yoneticiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
