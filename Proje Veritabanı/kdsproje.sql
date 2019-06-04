-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Haz 2019, 12:08:11
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kdsproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisan_sayi`
--

CREATE TABLE `calisan_sayi` (
  `calisan_sayi_id` int(11) NOT NULL,
  `calisan_anne_sayisi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `calisan_sayi`
--

INSERT INTO `calisan_sayi` (`calisan_sayi_id`, `calisan_anne_sayisi`) VALUES
(1, 5100),
(2, 6740),
(3, 7235),
(4, 95),
(5, 5370),
(6, 495),
(7, 2895),
(8, 850),
(9, 560),
(10, 1050),
(11, 2410);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_duzeyi`
--

CREATE TABLE `egitim_duzeyi` (
  `egitim_duzeyi_id` int(11) NOT NULL,
  `ilkokul` int(11) NOT NULL,
  `ortaokul` int(11) NOT NULL,
  `lise` int(11) NOT NULL,
  `universite` int(11) NOT NULL,
  `doktora` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `egitim_duzeyi`
--

INSERT INTO `egitim_duzeyi` (`egitim_duzeyi_id`, `ilkokul`, `ortaokul`, `lise`, `universite`, `doktora`) VALUES
(1, 875, 1750, 3200, 4910, 2),
(2, 1090, 930, 5200, 3200, 2),
(3, 700, 1700, 6740, 4320, 5),
(4, 490, 230, 140, 2, 0),
(5, 2700, 3050, 6320, 3245, 1),
(6, 400, 750, 1460, 1040, 0),
(7, 1320, 2005, 7030, 2100, 1),
(8, 1650, 1315, 3005, 350, 0),
(9, 620, 900, 1240, 340, 0),
(10, 975, 1050, 2450, 2100, 1),
(11, 1430, 1520, 3000, 4110, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelir`
--

CREATE TABLE `gelir` (
  `gelir_id` int(11) NOT NULL,
  `ortalama_aylik_gelir` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gelir`
--

INSERT INTO `gelir` (`gelir_id`, `ortalama_aylik_gelir`) VALUES
(1, 4650),
(2, 4050),
(3, 4600),
(4, 2010),
(5, 3140),
(6, 2980),
(7, 2895),
(8, 2000),
(9, 2210),
(10, 2860),
(11, 3670),
(22, 3670);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmet_guven_orani`
--

CREATE TABLE `hizmet_guven_orani` (
  `guven_orani_id` int(11) NOT NULL,
  `guven_orani` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmet_guven_orani`
--

INSERT INTO `hizmet_guven_orani` (`guven_orani_id`, `guven_orani`) VALUES
(1, 52.6),
(2, 61.1),
(3, 55.3),
(4, 18.7),
(5, 35.4),
(6, 37.2),
(7, 19.8),
(8, 22.6),
(9, 14.1),
(10, 24.5),
(11, 33.7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kulturel_faaliyet`
--

CREATE TABLE `kulturel_faaliyet` (
  `kultur_id` int(11) NOT NULL,
  `kulturel_faaliyetlere_katilim_orani` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kulturel_faaliyet`
--

INSERT INTO `kulturel_faaliyet` (`kultur_id`, `kulturel_faaliyetlere_katilim_orani`) VALUES
(1, 22.3),
(2, 16.2),
(3, 21.9),
(4, 2.1),
(5, 9.7),
(6, 8.9),
(7, 8.2),
(8, 5.3),
(9, 4.6),
(10, 6.1),
(11, 9.1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mevcut_krese_giden`
--

CREATE TABLE `mevcut_krese_giden` (
  `mevcut_giden_id` int(11) NOT NULL,
  `mevcut_kreslere_giden_cocuk_sayisi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mevcut_krese_giden`
--

INSERT INTO `mevcut_krese_giden` (`mevcut_giden_id`, `mevcut_kreslere_giden_cocuk_sayisi`) VALUES
(1, 1220),
(2, 1615),
(3, 2400),
(4, 25),
(5, 2675),
(6, 490),
(7, 1450),
(8, 0),
(9, 0),
(10, 995),
(11, 1670);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mevcut_sayi`
--

CREATE TABLE `mevcut_sayi` (
  `mevcut_sayi_id` int(11) NOT NULL,
  `mevcut_kres_ve_anaokulu_sayisi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mevcut_sayi`
--

INSERT INTO `mevcut_sayi` (`mevcut_sayi_id`, `mevcut_kres_ve_anaokulu_sayisi`) VALUES
(1, 3),
(2, 4),
(3, 8),
(4, 1),
(5, 2),
(6, 2),
(7, 1),
(8, 0),
(9, 0),
(10, 1),
(11, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `nufuus`
--

CREATE TABLE `nufuus` (
  `nufus_id` int(11) NOT NULL,
  `toplam_nufus` int(11) NOT NULL,
  `iki_ve_alti_yas_cocuk_sayisi` int(11) NOT NULL,
  `toplam_cocuk_sayisi` int(11) NOT NULL,
  `mevcut_kreslere_giden_cocuk_sayisi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `nufuus`
--

INSERT INTO `nufuus` (`nufus_id`, `toplam_nufus`, `iki_ve_alti_yas_cocuk_sayisi`, `toplam_cocuk_sayisi`, `mevcut_kreslere_giden_cocuk_sayisi`) VALUES
(1, 16780, 5020, 6100, 1220),
(2, 19180, 6000, 7300, 1615),
(3, 22310, 7980, 8610, 2400),
(4, 1320, 115, 460, 25),
(5, 25315, 8070, 10000, 2675),
(6, 5200, 1100, 1620, 490),
(7, 19780, 5460, 7310, 1450),
(8, 9430, 2710, 3120, 0),
(9, 5015, 1140, 1650, 0),
(10, 9505, 1990, 2850, 995),
(11, 14770, 3500, 4645, 1670);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semtler`
--

CREATE TABLE `semtler` (
  `semt_id` int(11) NOT NULL,
  `semt_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semtler`
--

INSERT INTO `semtler` (`semt_id`, `semt_adi`) VALUES
(1, 'adatepe'),
(2, 'bucakoop'),
(3, 'sirinyer'),
(4, 'kaynaklar'),
(5, 'yildiz'),
(6, 'evka1'),
(7, 'camlikule'),
(8, 'camlik'),
(9, 'izkent'),
(10, 'inkilap'),
(11, 'kurucesme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_calisan_sayisi`
--

CREATE TABLE `semt_calisan_sayisi` (
  `semt_id` int(11) NOT NULL,
  `calisan_sayi_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt_calisan_sayisi`
--

INSERT INTO `semt_calisan_sayisi` (`semt_id`, `calisan_sayi_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_egitim_duzeyi`
--

CREATE TABLE `semt_egitim_duzeyi` (
  `semt_id` int(11) NOT NULL,
  `egitim_duzeyi_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt_egitim_duzeyi`
--

INSERT INTO `semt_egitim_duzeyi` (`semt_id`, `egitim_duzeyi_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_gelir`
--

CREATE TABLE `semt_gelir` (
  `semt_id` int(11) NOT NULL,
  `gelir_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt_gelir`
--

INSERT INTO `semt_gelir` (`semt_id`, `gelir_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_hizmet_guven`
--

CREATE TABLE `semt_hizmet_guven` (
  `semt_id` int(11) NOT NULL,
  `guven_orani_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt_hizmet_guven`
--

INSERT INTO `semt_hizmet_guven` (`semt_id`, `guven_orani_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_kultur`
--

CREATE TABLE `semt_kultur` (
  `semt_id` int(11) NOT NULL,
  `kultur_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt_kultur`
--

INSERT INTO `semt_kultur` (`semt_id`, `kultur_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_mevcut`
--

CREATE TABLE `semt_mevcut` (
  `semt_id` int(11) NOT NULL,
  `mevcut_sayi_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt_mevcut`
--

INSERT INTO `semt_mevcut` (`semt_id`, `mevcut_sayi_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_mevcut_giden`
--

CREATE TABLE `semt_mevcut_giden` (
  `semt_id` int(11) NOT NULL,
  `mevcut_giden_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_nufus`
--

CREATE TABLE `semt_nufus` (
  `semt_id` int(11) NOT NULL,
  `nufus_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt_nufus`
--

INSERT INTO `semt_nufus` (`semt_id`, `nufus_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_nufuus`
--

CREATE TABLE `semt_nufuus` (
  `semt_id` int(11) NOT NULL,
  `nufus_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt_nufuus`
--

INSERT INTO `semt_nufuus` (`semt_id`, `nufus_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt_yeni_evli`
--

CREATE TABLE `semt_yeni_evli` (
  `semt_id` int(11) NOT NULL,
  `yeni_evli_cift_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt_yeni_evli`
--

INSERT INTO `semt_yeni_evli` (`semt_id`, `yeni_evli_cift_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yeni_evli_cift`
--

CREATE TABLE `yeni_evli_cift` (
  `yeni_evli_cift_id` int(11) NOT NULL,
  `yeni_evli_cift_sayisi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yeni_evli_cift`
--

INSERT INTO `yeni_evli_cift` (`yeni_evli_cift_id`, `yeni_evli_cift_sayisi`) VALUES
(1, 3210),
(2, 3780),
(3, 3930),
(4, 130),
(5, 4045),
(6, 660),
(7, 3855),
(8, 1030),
(9, 765),
(10, 1680),
(11, 2730);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `calisan_sayi`
--
ALTER TABLE `calisan_sayi`
  ADD PRIMARY KEY (`calisan_sayi_id`);

--
-- Tablo için indeksler `egitim_duzeyi`
--
ALTER TABLE `egitim_duzeyi`
  ADD PRIMARY KEY (`egitim_duzeyi_id`);

--
-- Tablo için indeksler `gelir`
--
ALTER TABLE `gelir`
  ADD PRIMARY KEY (`gelir_id`);

--
-- Tablo için indeksler `hizmet_guven_orani`
--
ALTER TABLE `hizmet_guven_orani`
  ADD PRIMARY KEY (`guven_orani_id`);

--
-- Tablo için indeksler `kulturel_faaliyet`
--
ALTER TABLE `kulturel_faaliyet`
  ADD PRIMARY KEY (`kultur_id`);

--
-- Tablo için indeksler `mevcut_krese_giden`
--
ALTER TABLE `mevcut_krese_giden`
  ADD PRIMARY KEY (`mevcut_giden_id`);

--
-- Tablo için indeksler `mevcut_sayi`
--
ALTER TABLE `mevcut_sayi`
  ADD PRIMARY KEY (`mevcut_sayi_id`);

--
-- Tablo için indeksler `nufuus`
--
ALTER TABLE `nufuus`
  ADD PRIMARY KEY (`nufus_id`);

--
-- Tablo için indeksler `semtler`
--
ALTER TABLE `semtler`
  ADD PRIMARY KEY (`semt_id`);

--
-- Tablo için indeksler `semt_calisan_sayisi`
--
ALTER TABLE `semt_calisan_sayisi`
  ADD UNIQUE KEY `semt_id` (`semt_id`),
  ADD UNIQUE KEY `calisan_sayi_id` (`calisan_sayi_id`);

--
-- Tablo için indeksler `semt_egitim_duzeyi`
--
ALTER TABLE `semt_egitim_duzeyi`
  ADD UNIQUE KEY `semt_id` (`semt_id`),
  ADD UNIQUE KEY `egitim_duzeyi_id` (`egitim_duzeyi_id`);

--
-- Tablo için indeksler `semt_gelir`
--
ALTER TABLE `semt_gelir`
  ADD UNIQUE KEY `semt_id` (`semt_id`),
  ADD UNIQUE KEY `gelir_id` (`gelir_id`);

--
-- Tablo için indeksler `semt_hizmet_guven`
--
ALTER TABLE `semt_hizmet_guven`
  ADD UNIQUE KEY `semt_id` (`semt_id`),
  ADD UNIQUE KEY `guven_orani_id` (`guven_orani_id`);

--
-- Tablo için indeksler `semt_kultur`
--
ALTER TABLE `semt_kultur`
  ADD UNIQUE KEY `semt_id` (`semt_id`),
  ADD UNIQUE KEY `kultur_id` (`kultur_id`);

--
-- Tablo için indeksler `semt_mevcut`
--
ALTER TABLE `semt_mevcut`
  ADD UNIQUE KEY `semt_id` (`semt_id`),
  ADD UNIQUE KEY `mevcut_sayi_id` (`mevcut_sayi_id`);

--
-- Tablo için indeksler `semt_mevcut_giden`
--
ALTER TABLE `semt_mevcut_giden`
  ADD UNIQUE KEY `semt_id` (`semt_id`),
  ADD UNIQUE KEY `mevcut_giden_id` (`mevcut_giden_id`);

--
-- Tablo için indeksler `semt_nufus`
--
ALTER TABLE `semt_nufus`
  ADD UNIQUE KEY `semt_id` (`semt_id`),
  ADD UNIQUE KEY `nufus_id` (`nufus_id`);

--
-- Tablo için indeksler `semt_nufuus`
--
ALTER TABLE `semt_nufuus`
  ADD UNIQUE KEY `semt_id` (`semt_id`,`nufus_id`);

--
-- Tablo için indeksler `semt_yeni_evli`
--
ALTER TABLE `semt_yeni_evli`
  ADD UNIQUE KEY `semt_id` (`semt_id`),
  ADD UNIQUE KEY `yeni_evli_cift_id` (`yeni_evli_cift_id`);

--
-- Tablo için indeksler `yeni_evli_cift`
--
ALTER TABLE `yeni_evli_cift`
  ADD PRIMARY KEY (`yeni_evli_cift_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `calisan_sayi`
--
ALTER TABLE `calisan_sayi`
  MODIFY `calisan_sayi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `egitim_duzeyi`
--
ALTER TABLE `egitim_duzeyi`
  MODIFY `egitim_duzeyi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Tablo için AUTO_INCREMENT değeri `gelir`
--
ALTER TABLE `gelir`
  MODIFY `gelir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Tablo için AUTO_INCREMENT değeri `hizmet_guven_orani`
--
ALTER TABLE `hizmet_guven_orani`
  MODIFY `guven_orani_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `kulturel_faaliyet`
--
ALTER TABLE `kulturel_faaliyet`
  MODIFY `kultur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Tablo için AUTO_INCREMENT değeri `mevcut_krese_giden`
--
ALTER TABLE `mevcut_krese_giden`
  MODIFY `mevcut_giden_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `mevcut_sayi`
--
ALTER TABLE `mevcut_sayi`
  MODIFY `mevcut_sayi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Tablo için AUTO_INCREMENT değeri `semtler`
--
ALTER TABLE `semtler`
  MODIFY `semt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Tablo için AUTO_INCREMENT değeri `yeni_evli_cift`
--
ALTER TABLE `yeni_evli_cift`
  MODIFY `yeni_evli_cift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
