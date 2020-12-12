-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Tem 2020, 17:58:07
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bilgiyonetimi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cinsiyet`
--

CREATE TABLE `cinsiyet` (
  `cinsiyet_id` int(11) NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cinsiyet`
--

INSERT INTO `cinsiyet` (`cinsiyet_id`, `cinsiyet`) VALUES
(1, 'Cinsiyetiniz Seçiniz'),
(2, 'Erkek'),
(3, 'Kadın');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doktor`
--

CREATE TABLE `doktor` (
  `doktor_id` int(11) NOT NULL,
  `unvan_ad_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `doktor_tc` bigint(20) NOT NULL,
  `doktor_tel` bigint(20) NOT NULL,
  `eposta` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `klinik_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `doktor`
--

INSERT INTO `doktor` (`doktor_id`, `unvan_ad_soyad`, `doktor_tc`, `doktor_tel`, `eposta`, `klinik_id`) VALUES
(1, 'Uzm. Dr. Umut Eryiğit', 12547896325, 5312311261, 'umuteryigit@gmail.com', '1'),
(2, 'Ass. Dr. Seda Öztaş Menteşe', 13456598753, 5313241020, 'sedaoztasmentese@gmail.com', '1'),
(3, 'Dr. Öğr. Üyesi Yunus Karaca', 14563221785, 5323245875, 'yunuskaraca@gmail.com', '1'),
(4, 'Dr. Özgür Tatlı', 15654578965, 5342156398, 'ozgurtatli61@gmail.com', '1'),
(5, 'Dr. Öğr. Üyesi Erdal Özer', 13256874456, 5321452880, 'erdalozer57@gmail.com', '2'),
(6, 'Dr. Öğr. Üyesi İsmail Birincioğlu', 16987854325, 5366587595, 'ismailbirinciogluu@gmail.com', '2'),
(7, 'Doç. Dr. Turan Set', 68754210321, 5358961907, 'turannsett@gmail.com', '3'),
(8, 'Dr. Gonca Armutçu', 14526568963, 5412036321, 'goncaarmutcu61@gmail.com', '4'),
(9, 'Uzm. Dr. Asiye Özdemir', 25636874966, 5332369897, 'asiyeozdemirr53@gmail.com', '4'),
(10, 'Dr. Ahmet Can Şenel', 25458796325, 5345647899, 'ahmetcansenel@outlook.com', '4'),
(11, 'Uzm. Dr. Ahmet Beşir', 15423698778, 5412098978, 'besirahmet@gmail.com', '4'),
(12, 'Doç. Dr. Engin Ertürk', 25636985456, 5358966787, 'enginerturkk@gmail.com', '4'),
(13, 'Prof. Dr. Hatice Nesrin Erciyes', 36965698741, 5459876362, 'haticenesrinerciyes@gmail.com', '4'),
(14, 'Doç. Dr. Müge Koşucu', 45632178961, 5423589632, 'mugekosucu@gmail.com', '4'),
(15, 'Dr. Öğr. Üyesi Ali Rıza Güvercin', 56321458758, 5415216365, 'alirizaguvercin@gmail.com', '5'),
(16, 'Dr. Ertuğrul Çakır', 58963254789, 5555423563, 'ertugrullcakirr@gmail.com', '5'),
(17, 'Prof. Dr. Haydar Usul', 58963215165, 5323266872, 'haydarusul6161@gmail.com', '5'),
(18, 'Prof. Dr. Kayhan Kuzeyli', 41675486858, 5369852575, 'kuzeylikayhann@outlook.com', '5'),
(19, 'Prof. Dr. Mustafa İmamoğlu', 35456587986, 5563654102, 'mustafaimamoglu@icloud.com', '6'),
(20, 'Uzm. Dr. Nilgün Eroğlu', 41762874149, 5389656475, 'nilgüneroglu@gmail.com', '7'),
(21, 'Dr. Beril Dilber', 65458521369, 5569852144, 'berildilberrr@gmail.com', '7'),
(22, 'Dr. Elif Sağ', 65896322147, 5489632157, 'sagelif@gmail.com', '7'),
(23, 'Dr. Mutlu Karakuş', 68796545214, 5613214986, 'mutlukarakus@gmail.com', '8'),
(24, 'Uzm. Dr. İhsan Habiboğlu', 45624574112, 5418976532, 'ihsanhabiboglu@gmail.com', '9'),
(25, 'Ass. Dr. Elanur Karaman', 85452156321, 5528796521, 'elanurkaraman@outlook.com', '9'),
(26, 'Dr. Seda Altınova', 58125632585, 5496541257, 'altınovaseda@gmail.com', '9'),
(27, 'Ass. Dr. Leyla Baykal', 28676105489, 5612318796, 'leylanaykall@gmail.com', '10'),
(28, 'Dr. Öğr. Üyesi Deniz Aksu Arıca', 41818978964, 5389654721, 'denizaksuarıca@icloud.com', '10'),
(29, 'Ass. Dt. Işık Aktürk', 89817646547, 5345691907, 'ısıkakturk@gmaail.com', '11'),
(30, 'Ass. Dr. İlknur Yavuz', 78741464151, 5387452152, 'ilknuryavuz@outlook.com', '12'),
(31, 'Dr. Öğr. Üyesi Erhan Çapkın', 89652315451, 5478521496, 'erhancapkinn@gmail.com', '13'),
(32, 'Prof. Dr. Mustafa Öncü', 84084146546, 5663214785, 'mustafaoncuu@gmail.com', '14'),
(33, 'Doç. Dr. Serdar Topaloğlu', 41644686463, 5478521030, 'sedartopaloglu@gmail.com', '14'),
(34, 'Doç. Dr. Serdar Türkyılmaz', 65983215687, 5641230205, 'serdarturkyilmaz@gmail.com', '14'),
(35, 'Dr. Öğr. Üyesi Atila Türkyılmaz', 28964816824, 5643217852, 'atillaturkyilmaz@gmail.com', '15'),
(36, 'Prof. Dr. Celal Tekinbaş', 65262562523, 5214562010, 'celaltekinbas@hotmail.com', '15'),
(37, 'Prof. Dr. Funda Öztuna', 46532120255, 5632145257, 'fundaoztuna@gmmail.com', '16'),
(38, 'Prof. Dr. Tevfik Özlü', 78615543245, 5412013638, 'tevfikozlu@gmail.com', '16'),
(39, 'Doç. Dr. Yasin Abul', 65323105088, 5417856932, 'yasinabul@gmail.com', '16'),
(40, 'Doç. Dr. Yılmaz Bülbül', 32125458790, 5452103878, 'yilmazbulbul@hotmail.com', '16'),
(41, 'Dr. Öğr. Üyesi Adem Türk', 72165415468, 5328014257, 'ademturkk@gmail.com', '17'),
(42, 'Prof. Dr. Halil İbrahim İmamoğlu', 47532165896, 5385420306, 'halilibrahimimamoglu@outlook.com', '17'),
(43, 'Prof. Dr. Hidayet Erdöl', 36954215485, 5578540295, 'erdolhidayet@icloud.com', '17'),
(44, 'Dr. Gamze Çan', 58514146427, 5412015660, 'gamzecan@gmail.com', '18'),
(45, 'Dr. Murat Topbaş', 20301050741, 5402039657, 'murattopbas@hotmail.com', '18'),
(46, 'Prof. Dr. Ersan Odacı', 45621514450, 5347546321, 'ersanodaci@gmail.com', '19'),
(47, 'Uzm. Dr. Gökçen Kaplan', 71564156767, 5412089654, 'gokcekaplann@outlook.com', '19'),
(48, 'Prof. Dr. Emine Seda Güvendağ Güven', 1561541867, 5412033610, 'eminesedagüvendag@icloud.com', '20'),
(49, 'Uzm. Dr. Gülseren Dinç', 45610204017, 5369512014, 'gulserendinc@gmail.com', '20'),
(50, 'Prof. Dr. Hasan Bozkaya', 18614762452, 5421232005, 'hasanbozkayaa@gmail.com', '20'),
(51, 'Doç. Dr. Turhan Aran', 46846121464, 5387536214, 'turhanarann@gmail.com', '20'),
(52, 'Doç. Dr. Bekir Sami Karapolat', 54562652551, 5432189657, 'bekirsamikarapolat@gmail.com', '21'),
(53, 'Dr. Doğuş Hemşinli', 78245642641, 5306302159, 'dogushemsinli@hotmail.com', '21'),
(54, 'Prof. Dr. Fahri Özcan', 27164743264, 5324590806, 'fahrii_ozcann@gmail.com', '21'),
(55, 'Uzm. Dr. Kibar Yaşar Güven', 23564726843, 5412015859, 'kibaryasasrguven@outlook.com', '21'),
(56, 'Prof. Dr. Zerrin Pulathan', 26342947328, 5489654221, 'zerrinpulathan@icloud.com', '21'),
(57, 'Doç. Dr. Abdulkadir Kırış', 32648389473, 5478513598, 'abdulkadirkiris@hotmail.com', '22'),
(58, 'Ass. Dr. Bilgihan Arslan', 47389737384, 5368542021, 'bilgihanarslan@gmail.com', '22'),
(59, 'Prof. Dr. Merih Kutlu', 84375042932, 5254632529, 'merihkutlu@gmail.com', '22'),
(60, 'Prof. Dr. Abdulcemal Ümit Işık', 89729362736, 5587536214, 'abdulcemalumitisik@gmail.com', '23'),
(61, 'Doç. Dr. Osman Bahadır', 43758934739, 5593254786, 'osmanbahadır@gmail.com', '23'),
(62, 'Dr. Sibel Gazioğlu', 92738427328, 5312033631, 'sibelgazioglu@gmail.com', '24'),
(63, 'Prof. Dr. Sibel Velioğlu', 65441767746, 5345201425, 'sibelvelioglu@gmail.com', '24'),
(64, 'Dr. Öğr. Üyesi Vildan Altunayoğlu Çakmak', 82749824823, 5433652018, 'vildanaltunayoglucakmak@outlook.com', '24'),
(65, 'Dr. Öğr. Üyesi Bircan Sönmez', 36243882743, 5612362012, 'bircansonmez@hotmail.com', '25'),
(66, 'Doç. Dr. Bahanur Çekiç', 86274526244, 5496587402, 'bahanurcekic@hotmail.com', '26'),
(67, 'Uzm. Dr. Mehmet Emre Baki', 74365823756, 5152020806, 'mehmetemrebaki@gmail.com', '26'),
(68, 'Ass. Dr. Orkun Gül', 3826478624234, 5412015863, 'orkungul@gmail.com', '26'),
(69, 'Prof. Dr. Çetin Önder', 72364826429, 5420123056, 'cetinoner@gmail.com', '26'),
(70, 'Doç. Dr. Murat Livaoğlu', 36256472488, 5403085451, 'muratlivanoglu@gmail.com', '27'),
(71, 'Dr. Ümit Naci Karaçal', 25472496478, 5506002070, 'umitnacikaracal@gmail.com', '27'),
(72, 'Dr. Neşe Türkmen', 38246243256, 5466555050, 'neseturkmen@gmail.com', '28'),
(73, 'Dr. Nurten Nur Kenç', 72482742426, 5152358995, 'nurtennurkenc@outlook.com', '28'),
(74, 'Dr. Öğr. Üyesi Demet Sağlam Aykut', 73264872364, 5605422528, 'demetsaglamaykut@gmail.com', '29'),
(75, 'Doç. Dr. Evrim Özkorumak', 76423632234, 5587412536, 'evrimozkorumak@gmail.com', '29'),
(76, 'Dr. Öğr. Üyesi Filiz Civil Arslan', 36274624434, 5612033855, 'filizcivilarslan@icloud.com', '29'),
(77, 'Dr. Öğr. Üyesi Emine Canyılmaz', 76328472472, 5612485159, 'eminecanyilmaz@gmail.com', '30'),
(78, 'Dr. Öğr. Üyesi Zümrüt Bahat', 27648732634, 5575215306, 'bahatzumrut@gmail.com', '30'),
(79, 'Dr. Adnan Yöney', 84389724249, 5520120332, 'adnanyoney@hotmail.com', '30'),
(80, 'Dr. Öğr. Üyesi Ayşegül Cansu', 67326328745, 5563218587, 'aysegulcansu@hotmail.com', '31'),
(81, 'Dr. Özlem Kömürcüoğlu', 23746382740, 5539046567, 'ozlemkomurcuoglu@gmail.com', '31'),
(82, 'Dr. Mine Kadıoğlu Duman', 34050347270, 5496587410, 'minekadiogluduman@gmail.com', '32'),
(83, 'Prof. Dr. Nuri İhsan Kalyoncu', 36284624888, 5587521020, 'nuriihsankalyoncu@gmail.com', '32'),
(84, 'Dr. Sabri Murat Kesim', 38329742747, 5384510202, 'sabrimuratkesim@hotmail.com', '32'),
(85, 'Dr. Öğr. Üyesi Alper Han Çebi', 76436386587, 5402099875, 'alperhancebi@gmail.com', '33'),
(86, 'Doç. Dr. Mevlüt İkbal', 82742342784, 5436859661, 'mevlutikball@gmail.com', '33'),
(87, 'Uzm. Dr. Esra Özkaya', 95327894720, 5523105143, 'ozkayaesra@gmail.com', '34'),
(88, 'Dr. Gülçin Bayramoğlu', 83789427454, 5508521454, 'bayramoglugulcin@gmail.com', '34'),
(89, 'Prof. Dr. Neşe Kaklıkkaya', 36243726456, 5463218172, 'nesekaklikkaya@gmail.com', '34'),
(90, 'Dr. Ruşen Dede', 28171297324, 5584123030, 'rusendede@gmail.com', '34'),
(91, 'Dr. Kadriye Yıldız', 436587436537, 5575412031, 'yildizkadriye@gmail.com', '35'),
(92, 'Dr. Öğr. Üyesi Sevdegül Munğan', 79832648326, 5471025258, 'sevdegulmungan', '35'),
(93, 'Dr. Öğr. Üyesi Ümit Çobanoğlu', 84548451543, 5412063789, 'umitcobanoglu@gmail.com', '35'),
(94, 'Dr. Şafak Ersöz', 87638472758, 5484102560, 'safakersoz@gmail.com', '35'),
(95, 'Uzm. Dr. İlke Onur Kazaz', 87327846723, 5412087892, 'ilkeonurkazaz@gmail.com', '36'),
(96, 'Prof. Dr. Abdullah Sivrikaya', 87923748230, 5596102357, 'abdullahsivrikaya@hotmail.com', '36'),
(97, 'Prof. Dr. Atilla Gör', 82479284320, 5541047070, 'atillagor@gmail.com', '36'),
(98, 'Prof. Dr. Rasin Özyavuz', 89284908242, 5712036998, 'rasinozyavuz@hotmail.com', '36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hastalar`
--

CREATE TABLE `hastalar` (
  `hasta_id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tc` bigint(20) NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hastalar`
--

INSERT INTO `hastalar` (`hasta_id`, `ad`, `soyad`, `tc`, `sifre`, `tel`, `cinsiyet`) VALUES
(1, 'Burak', 'Şentürk', 68002070520, 'fenerbahce1907', 2147483647, 'Erkek'),
(2, 'Yasin', 'Şentürk', 22365478965, 'yasin1907', 2147483647, 'Erkek'),
(3, 'Reyhan', 'Şahin', 20453020896, 'reyhan6161', 2147483647, 'Kadın'),
(4, 'Yiğitcan', 'Şentürk', 65459683201, 'yigit5757', 2147483647, 'Erkek'),
(5, 'Emre', 'Demir', 22566980102, 'emre5555', 2147483647, 'Erkek'),
(6, 'Orhan Enes', 'Kılıç', 45879632023, 'orhan5353', 2147483647, 'Erkek');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `klinik`
--

CREATE TABLE `klinik` (
  `klinik_id` int(11) NOT NULL,
  `klinik_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `klinik`
--

INSERT INTO `klinik` (`klinik_id`, `klinik_adi`) VALUES
(1, 'Acil Tıp'),
(2, 'Adli Tıp'),
(3, 'Anestezi ve Reanimasyon'),
(4, 'Beyin ve Sinir Cerrahisi'),
(5, 'Çocuk Cerrahisi'),
(6, 'Çocuk Sağlığı ve Hastalıkları'),
(7, 'Çocuk ve Ergen Psikiyatristi'),
(8, 'Dahiliye - İç Hastalıkları'),
(9, 'Dermatoloji'),
(10, 'Diş Hekimi'),
(11, 'Enfeksiyon Hastalıkları ve Klinik Mikrobiyoloji'),
(12, 'Fiziksel Tıp ve Rehabilitasyon'),
(13, 'Genel Cerrahi'),
(14, 'Göğüs Cerrahisi'),
(15, 'Göğüs Hastalıkları'),
(16, 'Göz Hastalıkları'),
(17, 'Halk Sağlığı'),
(18, 'Histoloji ve Embriyoloji'),
(19, 'Kadın Hastalıkları ve Doğum'),
(20, 'Kalp Damar Cerrahisi'),
(21, 'Kardiyoloji'),
(22, 'Kulak Burun Boğaz hastalıkları - KBB'),
(23, 'Nöroloji (Beyin ve Sinir Hastalıkları)'),
(24, 'Nükleer Tıp'),
(25, 'Ortopedi ve Travmatoloji'),
(26, 'Plastik Rekonstrüktif ve Estetik Cerrahi'),
(27, 'Pratisyen Hekimlik'),
(28, 'Psikiyatri'),
(29, 'Radyasyon Onkolojisi'),
(30, 'Radyoloji'),
(31, 'Tıbbi Farmakoloji'),
(32, 'Tıbbi Genetik'),
(33, 'Tıbbi Mikrobiyoloji'),
(34, 'Tıbbi Patoloji'),
(35, 'Üroloji');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE `randevular` (
  `randevu_id` int(11) NOT NULL,
  `klinik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `doktor` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tc` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `saat` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `randevular`
--

INSERT INTO `randevular` (`randevu_id`, `klinik`, `doktor`, `tarih`, `tc`, `saat`) VALUES
(1, '5', '16', '2020-05-29', '68002070520', '12:00'),
(2, '7', '21', '2020-05-29', '68002070520', '14:00'),
(3, '10', '27', '2020-05-31', '68002070520', '15:00'),
(5, '5', '15', '2020-06-26', '68002070520', '11:00'),
(6, '2', '5', '2020-06-25', '68002070520', '12:00'),
(7, '5', '16', '2020-06-26', '22566980102', '14:00'),
(8, '3', '7', '2020-06-26', '68002070520', '20:00'),
(9, '3', '7', '2020-06-17', '68002070520', '20:00'),
(10, '13', '31', '2020-06-30', '68002070520', '19:00'),
(11, '5', '18', '2020-07-15', '68002070520', '16:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `saat`
--

CREATE TABLE `saat` (
  `saat_id` int(11) NOT NULL,
  `saat` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `saat`
--

INSERT INTO `saat` (`saat_id`, `saat`) VALUES
(1, '09:00'),
(2, '10:00'),
(3, '11:00'),
(4, '12:00'),
(5, '13:00'),
(6, '14:00'),
(7, '15:00'),
(8, '16:00'),
(9, '17:00'),
(10, '18:00'),
(11, '19:00'),
(12, '20:00'),
(13, '21:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cinsiyet`
--
ALTER TABLE `cinsiyet`
  ADD PRIMARY KEY (`cinsiyet_id`);

--
-- Tablo için indeksler `doktor`
--
ALTER TABLE `doktor`
  ADD PRIMARY KEY (`doktor_id`),
  ADD KEY `klinik` (`klinik_id`);

--
-- Tablo için indeksler `hastalar`
--
ALTER TABLE `hastalar`
  ADD PRIMARY KEY (`hasta_id`),
  ADD KEY `cinsiyet` (`cinsiyet`);

--
-- Tablo için indeksler `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`klinik_id`);

--
-- Tablo için indeksler `randevular`
--
ALTER TABLE `randevular`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Tablo için indeksler `saat`
--
ALTER TABLE `saat`
  ADD PRIMARY KEY (`saat_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cinsiyet`
--
ALTER TABLE `cinsiyet`
  MODIFY `cinsiyet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `doktor`
--
ALTER TABLE `doktor`
  MODIFY `doktor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- Tablo için AUTO_INCREMENT değeri `hastalar`
--
ALTER TABLE `hastalar`
  MODIFY `hasta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `klinik`
--
ALTER TABLE `klinik`
  MODIFY `klinik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `randevular`
--
ALTER TABLE `randevular`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `saat`
--
ALTER TABLE `saat`
  MODIFY `saat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
