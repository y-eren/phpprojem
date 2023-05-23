-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 May 2023, 16:45:16
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bagisci`
--

CREATE TABLE `bagisci` (
  `id` int(11) NOT NULL,
  `isim` varchar(30) NOT NULL,
  `soyisim` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sifre` varchar(30) NOT NULL,
  `miktar` float NOT NULL,
  `tarih` date NOT NULL,
  `bagisci_not` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `bagisci`
--

INSERT INTO `bagisci` (`id`, `isim`, `soyisim`, `email`, `sifre`, `miktar`, `tarih`, `bagisci_not`) VALUES
(1, 'Ahmet', 'Yılmaz', 'ahmet.yilmaz@example.com', 'asdfghb34', 3064, '2023-04-10', 'Teşekkürler!'),
(2, 'admin', 'admin', 'admin@hotmail.com', 'abc123', 0, '2023-05-18', 'sad<br>saBaşarılar'),
(3, 'Ayşe', 'Demir', 'ayse.demir@example.com', 'xyz456', 350, '2023-04-30', 'Harikasınız'),
(7, 'Mehmet', 'Öztürk', 'mehmet.ozturk@example.com', 'qwe789', 754, '2023-05-18', 'Çok sağolun'),
(12, 'Elif	', 'Aksoy	', 'elif.aksoy@example.com', '123qwe', 133, '2023-05-18', ''),
(19, 'Mustafa', 'Kaya', 'mustafa.kaya@example.com', 'asd456', 100, '2023-05-18', 'Destekleriniz için Teşekkürler!'),
(20, 'Zeynep				', 'Şahin', 'zeynep.sahin@example.com', 'zxc789', 80, '2023-05-18', 'Çok iyi'),
(21, 'Ali', 'Tekin', 'ali.tekin@example.com', 'plm987', 50, '2023-05-18', 'Desteklerinizi takdir ediyoruz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurumlar`
--

CREATE TABLE `kurumlar` (
  `kid` int(11) NOT NULL,
  `kisim` varchar(50) NOT NULL,
  `miktar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kurumlar`
--

INSERT INTO `kurumlar` (`kid`, `kisim`, `miktar`) VALUES
(1, 'Mehmetçik Vakfı', 3206),
(2, 'TEV', 8351),
(3, 'Türk Kızılayı', 1243),
(4, 'LÖSEV', 2051);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bagisci`
--
ALTER TABLE `bagisci`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bagisci`
--
ALTER TABLE `bagisci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
