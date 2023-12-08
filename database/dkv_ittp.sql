-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 12:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bernard_dkv_ittp`
--

-- --------------------------------------------------------

--
-- Table structure for table `akademiks`
--

CREATE TABLE `akademiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `quote` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `created_at`, `updated_at`, `nama`, `status`, `quote`, `gambar`) VALUES
(1, '2023-10-04 21:18:08', '2023-10-04 21:18:08', 'Mutia Putri Soliha', 'Character and Environtment Illustrator di Koff and Gold Studio', '', 'images/alumni/336514406_1937873806559314_5217981116728666124_n.jpg'),
(2, '2023-10-04 21:18:08', '2023-10-04 21:18:08', 'Aulia Nabila Fikra Ayu .L', ' Digital Communication di Syngenta Indonesia', '', 'images/foto_dosen/nn.jpg'),
(3, '2023-10-04 21:18:08', '2023-10-04 21:18:08', 'Umnia Afifah', 'Pattern and Fashion Illustrator di PT.Gagaclo', '', 'images/alumni/329820867_1591958457946618_7468688796556899521_n.jpg'),
(4, '2023-10-04 21:18:08', '2023-10-04 21:18:08', 'Baharudin', ' Creative Director di Sanskara Studio\n                ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `berandas`
--

CREATE TABLE `berandas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beranda_heroes`
--

CREATE TABLE `beranda_heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `headline` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `action_link` varchar(255) NOT NULL,
  `action_label` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beranda_heroes`
--

INSERT INTO `beranda_heroes` (`id`, `created_at`, `updated_at`, `headline`, `isi`, `action_link`, `action_label`, `gambar`, `default`) VALUES
(1, '2023-10-04 21:18:04', '2023-10-12 20:01:22', 'Selamat datang di halaman Program Studi Desain Komunikasi Visual (DKV) Insitut Teknologi Telkom Purwokerto.', '<i>Connecting Creatifity</i>', 'https://pmb.ittelkom-pwt.ac.id', 'Daftar Sekarang', 'image/beranda/eegsINmj4hzBuvHPJNF77aIJZtduv889ixpk6Cce.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `beranda_video_sections`
--

CREATE TABLE `beranda_video_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `headline` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `action_link` varchar(255) NOT NULL,
  `action_label` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beranda_video_sections`
--

INSERT INTO `beranda_video_sections` (`id`, `created_at`, `updated_at`, `headline`, `isi`, `action_link`, `action_label`, `video_url`, `default`) VALUES
(1, '2023-10-04 21:18:04', '2023-10-04 21:18:04', 'Sekilas Tentang DKV IT Telkom Purwokerto', 'Program Studi Desain Komunikasi Visual di IT Telkom Purwokerto adalah pilihan ideal bagi calon mahasiswa yang tertarik dalam menggabungkan kreativitas dan teknologi. Dengan kurikulum yang berfokus pada pengembangan desain grafis, ilustrasi, dan multimedia, program ini memberikan wawasan mendalam tentang bagaimana visual dapat memengaruhi komunikasi modern. Dengan bimbingan dari para pengajar yang berpengalaman dan akses ke fasilitas terbaru, mahasiswa akan siap untuk mengembangkan kemampuan desain yang diperlukan dalam berbagai industri.', '/profil', 'Yuk Kenal Lebih Dekat', 'https://www.youtube.com/embed/xLipDbGB1QI?start=47&autoplay=1&mute=1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `headline` varchar(255) NOT NULL,
  `subheadline` text NOT NULL,
  `bodytext` longtext NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `created_at`, `updated_at`, `headline`, `subheadline`, `bodytext`, `thumbnail`) VALUES
(11, '2023-12-08 03:25:41', '2023-12-08 03:35:07', 'Komik', 'Mengenal Komik', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><b style=\"\"><span style=\"font-size: 16pt;\"><span style=\"font-family: Arial;\">1.</span><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: Arial;\">&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b style=\"\"><span style=\"font-size:16.0pt\">Pengertian\r\nBuku Komik</span></b></font></p><p class=\"MsoNormal\" style=\"margin-left:18.0pt\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Buku komik adalah buku terbitan secara&nbsp; berkala yang menampilkan narasi menggunakan\r\nkombinasi panel bergambar dan teks. Buku komik biasanya menceritakan sebuah\r\ncerita melalui serangkaian gambar yang disusun secara berurutan, sering kali\r\ndisertai dengan dialog, keterangan, dan efek suara. Narasi ini dapat mencakup\r\nberbagai genre, termasuk pahlawan super, fiksi ilmiah, fantasi, horor,\r\nkriminal, romansa, dan banyak lagi.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Fitur utama buku komik meliputi:</font></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">&Acirc;&middot;<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Panel dan Halaman: Cerita disajikan dalam\r\nserangkaian panel, yaitu bingkai tersendiri yang berisi ilustrasi. Panel\r\ndisusun pada halaman-halaman untuk menciptakan alur narasi yang berurutan.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">&Acirc;&middot;<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Balon Dialog dan Keterangan: Dialog karakter\r\nbiasanya disajikan dalam balon ucapan, dan informasi atau narasi tambahan dapat\r\ndiberikan melalui keterangan.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">&Acirc;&middot;<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Gaya Artistik: Buku komik sering kali\r\nmenampilkan berbagai gaya artistik, dan karya seni memainkan peran penting\r\ndalam menyampaikan cerita dan mengatur suasana.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">&Acirc;&middot;<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Genre: Buku komik mencakup beragam genre dan\r\ntema, menarik khalayak berbeda dengan minat beragam.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">&Acirc;&middot;<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Serialisasi: Banyak buku komik yang dibuat\r\nberseri, dengan cerita yang terungkap dalam berbagai terbitan atau episode.\r\nPembaca dapat mengumpulkan dan mengikuti serial tersebut seiring berjalannya\r\nwaktu.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">&Acirc;&middot;<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Pencipta: Buku komik biasanya dibuat oleh tim\r\nindividu, termasuk penulis, seniman, penulis surat, dan pewarna.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Buku komik telah menjadi bentuk hiburan populer selama\r\nbeberapa dekade, dan telah memberikan kontribusi signifikan terhadap budaya\r\npopuler. Karakter ikonik seperti Superman, Batman, Spider-Man, dan Wonder Woman\r\nberasal dari buku komik sebelum berkembang ke media lain seperti film,\r\ntelevisi, dan merchandise.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><b><span style=\"font-size:16.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin\">2.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b><span style=\"font-size:16.0pt\">Elemen\r\nPenyusun Buku Komik</span></b></font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Buku komik menggunakan kombinasi elemen visual dan tekstual\r\nuntuk menyampaikan narasi. Berikut beberapa elemen kunci yang biasa ditemukan\r\ndalam buku komik:</font></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">1.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span><!--[endif]-->Panel: Ini adalah bingkai individual yang berisi\r\nilustrasi. Panel disusun pada halaman dalam urutan tertentu untuk menciptakan\r\naliran visual yang memandu pembaca melalui cerita.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">2.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span><!--[endif]-->Gutter/Parit: Ruang antar panel disebut gutter\r\natau parit. Meskipun tampak kosong, gutter memainkan peran penting dalam\r\nmengatur tempo dan memungkinkan pembaca menafsirkan perjalanan waktu antar\r\npanel.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">3.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span><!--[endif]-->Balon Dialog: Bentuk bulat atau oval berisi\r\ndialog karakter. Mereka sering dihubungkan dengan karakter dengan\r\n\"ekor\" yang menunjukkan siapa yang berbicara.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">4.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span><!--[endif]-->Balon Pikiran: Mirip dengan balon ucapan tetapi\r\ndengan serangkaian gelembung untuk menandakan pemikiran batin seorang karakter.\r\nHal ini memungkinkan pembaca mendapatkan wawasan tentang monolog internal\r\nkarakter.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">5.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span><!--[endif]-->Caption/Keterangan: Blok teks biasanya\r\nditempatkan di luar panel untuk memberikan narasi, informasi latar belakang,\r\natau konteks tambahan. Caption dapat digunakan untuk menyampaikan pemikiran\r\nkarakter atau mendeskripsikan latar.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">6.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span><!--[endif]-->Onomatopoeia/Efek Suara: Kata-kata onomatopoeik\r\nyang mewakili suara, seperti \"BANG\", \"CRASH\", atau\r\n\"ZAP\". Ini sering kali diberi gaya dan diintegrasikan ke dalam karya\r\nseni untuk meningkatkan dampak visual.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">7.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span><!--[endif]-->Garis Gerak: Garis atau coretan yang\r\nmenyampaikan kesan gerak. Mereka sering digunakan untuk menunjukkan gerakan\r\nkarakter atau untuk menyorot rangkaian tindakan.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">8.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span><!--[endif]-->Splash: Ilustrasi satu halaman penuh, sering\r\ndigunakan untuk efek dramatis, untuk memperkenalkan adegan, karakter, atau\r\nperistiwa penting.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">9.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span><!--[endif]-->Tata Letak Halaman: Susunan panel pada halaman,\r\nyang disebut tata letak halaman, memengaruhi tempo dan dampak visual komik\r\nsecara keseluruhan.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">10.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp; </span><!--[endif]-->Frames\r\nand Borders: Batas di sekitar panel dan halaman. Gaya bingkai dan batas dapat\r\nbervariasi dan berkontribusi pada estetika komik secara keseluruhan.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">11.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp; </span><!--[endif]-->Warna:\r\nPenggunaan warna dalam buku komik menambah kedalaman, suasana hati, dan daya\r\ntarik visual. Beberapa komik berwarna hitam putih, sementara komik lainnya\r\nmenggunakan berbagai macam warna.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">12.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp; </span><!--[endif]-->Gaya\r\nGambar: Gaya artistik ilustrasi, yang dapat sangat bervariasi. Seniman yang\r\nberbeda menghadirkan interpretasi visual unik mereka pada karakter dan adegan.</font></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">13.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp; </span><!--[endif]-->Huruf/Lettering:\r\nGaya dan penempatan teks, termasuk dialog, keterangan, dan efek suara. Huruf\r\nadalah aspek penting dalam desain buku komik.</font></p><p class=\"MsoListParagraphCxSpLast\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\">14.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp; </span><!--[endif]-->Seni\r\nSampul: Sampul depan dan belakang buku komik sering kali menampilkan ilustrasi\r\nmenarik dan memberikan pratinjau konten di dalamnya.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Elemen-elemen ini bekerja sama untuk menciptakan pengalaman\r\nbercerita yang dinamis dan menarik dalam buku komik. Kreator menggunakan\r\nkombinasi elemen visual dan tekstual untuk menyampaikan narasi, emosi, dan\r\ntindakan.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent:-18.0pt;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><b><span style=\"font-size:16.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin\">3.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b><span style=\"font-size:16.0pt\">Sejarah\r\nbuku komik di dunia barat</span></b></font></p><p class=\"MsoListParagraphCxSpLast\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Sejarah buku komik di dunia Barat adalah perjalanan yang\r\nkaya dan beragam selama lebih dari satu abad. Berikut ini ikhtisar singkat\r\nmengenai pencapaian dan perkembangan utama:</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">1. Akhir Abad ke-19 - Awal Abad ke-20:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Comic Strips:\r\nPendahulu buku komik, komik strip, mendapatkan popularitas di surat kabar.\r\nStrip seperti \"The Yellow Kid\" (1895) dan \"Little Nemo in\r\nSlumberland\" (1905) adalah contoh awal penceritaan seni berurutan.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">2. 1930-an - Zaman Keemasan Komik:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Superheroes\r\nEmerge:** Action Comics #1, diterbitkan pada tahun 1938, menampilkan debut\r\nSuperman, menandai dimulainya genre superhero. Era ini menyaksikan penciptaan\r\nkarakter ikonik seperti Batman, Wonder Woman, dan Captain America.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">3. 1940-an - Perang Dunia II dan Booming Buku Komik:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Komik Perang: Selama\r\nPerang Dunia II, buku komik berperan dalam meningkatkan semangat. Pahlawan\r\nsuper berperang melawan kekuatan musuh, dan komik bertema perang menjadi\r\npopuler.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Boom Buku Komik:\r\nIndustri ini mengalami pertumbuhan luar biasa, dengan berkembangnya genre\r\npahlawan super, kriminal, horor, dan romansa.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">4. 1950an - Otoritas dan Penurunan Kode Komik:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Seduction of the\r\nInnocent: Pada tahun 1954, psikiater Fredric Wertham menerbitkan\r\n\"Seduction of the Innocent\", yang mengkritik konten buku komik. Hal\r\nini mengarah pada pembentukan Otoritas Kode Komik, sebuah badan pengaturan\r\nmandiri yang memberlakukan pembatasan konten.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Penurunan Genre:\r\nKomik pahlawan super tetap ada, namun genre seperti horor dan kejahatan menurun\r\nkarena pembatasan Kode.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">5. 1960-an - Zaman Perak dan Revolusi Marvel:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Zaman Komik\r\nPerak: Pada tahun 1960-an, komik pahlawan super bangkit kembali, yang dikenal\r\nsebagai Zaman Perak. Marvel Comics, di bawah tokoh seperti Stan Lee dan Jack\r\nKirby, memperkenalkan karakter seperti Spider-Man, X-Men, dan Fantastic Four.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Pendekatan\r\nBercerita Baru: Pendekatan Marvel dalam bercerita mencakup karakter yang lebih\r\nkompleks dan narasi yang saling berhubungan.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">6. 1970an - Zaman Perunggu dan Diversifikasi:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Diversifikasi\r\nGenre: Genre buku komik berkembang melampaui pahlawan super, termasuk munculnya\r\nkomik underground dan penerbit alternatif.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Relevansi Sosial:\r\nKomik mulai membahas isu-isu sosial dan mencerminkan lanskap budaya yang\r\nberubah.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">7. 1980-an - Era Modern dan Tema yang Lebih Gelap:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Tema Gelap dan\r\nBerpasir: Pada tahun 1980-an terjadi pergeseran ke arah tema yang lebih gelap\r\ndan lebih dewasa dalam komik, yang dicontohkan oleh karya-karya seperti\r\n\"The Dark Knight Returns\" karya Frank Miller dan \"Watchmen\"\r\nkarya Alan Moore.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Penerbit\r\nIndependen: Penerbit independen menjadi terkenal karena berkontribusi pada\r\nlanskap buku komik yang lebih beragam.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">8. 1990an - Gelembung dan Keruntuhan Spekulatif:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Ledakan Spekulan:\r\nPada tahun 1990-an terjadi ledakan spekulatif dalam industri ini, dimana para\r\nkolektor berinvestasi pada komik sebagai aset keuangan potensial.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Keruntuhan Pasar:\r\nPasar jatuh pada pertengahan tahun 1990-an karena kejenuhan yang berlebihan,\r\npraktik yang menarik perhatian, dan pecahnya gelembung kolektor.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">9. 2000an dan Setelahnya - Era Digital dan Penerimaan Arus\r\nUtama:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Komik Digital:\r\nMunculnya internet dan teknologi digital memungkinkan pembuatan dan distribusi\r\nkomik digital.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Popularitas Arus\r\nUtama: Film pahlawan super, berdasarkan karakter buku komik, mencapai\r\nkesuksesan arus utama, membawa tingkat popularitas baru ke media.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent:-18.0pt;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><b><span style=\"font-size:16.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin\">4.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b><span style=\"font-size:16.0pt\">Sejarah\r\nBuku Komik Di Jepang</span></b></font></p><p class=\"MsoListParagraphCxSpLast\"><b><span style=\"font-size: 16pt;\"><font color=\"#000000\">&nbsp;</font></span></b></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Sejarah buku komik di Jepang berakar kuat pada tradisi\r\nbudaya dan seni negara tersebut. Buku komik Jepang, yang dikenal sebagai\r\n\"manga\", memiliki sejarah yang kaya selama berabad-abad. Berikut\r\ngambaran evolusi manga di Jepang:</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">1. Periode Edo (1603&acirc;&#128;&#147;1868):</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Kiby&Aring;&#141;shi dan Toba\r\nEhon: Bentuk awal narasi bergambar Jepang, yang dikenal sebagai\r\n\"kiby&Aring;&#141;shi\" dan \"toba ehon\", muncul pada zaman Edo. Buku\r\nbergambar ini sering kali menggabungkan gambar dengan teks untuk menceritakan\r\nkisah dan menyampaikan humor.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">2. Akhir Abad ke-19 - Awal Abad ke-20:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Rakuten Kitazawa:\r\nSering dianggap sebagai bapak manga modern, Rakuten Kitazawa (1876&acirc;&#128;&#147;1955)\r\nberkontribusi pada pengembangan komik strip dan ilustrasi lucu di surat kabar\r\nselama era Meiji.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">3. 1930-an - Periode Sebelum Perang:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Kamishibai:\r\nSebelum Perang Dunia II, \"kamishibai\" (teater kertas) menjadi bentuk\r\nhiburan jalanan yang populer. Pendongeng menggunakan papan bergambar untuk\r\nmenceritakan cerita kepada audiens.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">4. Periode Pasca Perang - Tezuka Osamu dan Lahirnya Manga\r\nModern:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Osamu Tezuka:\r\nSering disebut sebagai \"Dewa Manga\", Osamu Tezuka (1928&acirc;&#128;&#147;1989)\r\nmemainkan peran penting dalam membentuk manga modern. Karya-karyanya, seperti\r\n\"Astro Boy\" (\"Tetsuwan Atom\") dan \"Black Jack\",\r\nmemperkenalkan teknik bercerita sinematik dan karakter ekspresif.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Gerakan Gekiga:\r\nPada akhir tahun 1950-an dan awal tahun 1960-an, muncul gerakan yang disebut\r\n\"gekiga\", dengan fokus pada tema-tema yang lebih dewasa dan\r\nrealistis. Seniman seperti Yoshihiro Tatsumi adalah tokoh kunci dalam gerakan\r\nini.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">5. 1960an - 1970an - Booming Manga dan Diversifikasi Genre:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Majalah Manga\r\nMingguan:** Majalah manga mingguan mendapatkan popularitas, menampilkan cerita\r\nberseri dan berbagai genre. Tahun 1960-an dan 1970-an menandai booming manga\r\ndengan munculnya judul-judul seperti \"Majalah Shonen\" dan\r\n\"Shonen Sunday.\"</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Genre Sh&Aring;&#141;nen dan\r\nSh&Aring;&#141;jo: Genre berbeda yang menyasar anak laki-laki (&acirc;&#128;&#156;sh&Aring;&#141;nen&acirc;&#128;&#157;) dan gadis muda\r\n(&acirc;&#128;&#156;sh&Aring;&#141;jo&acirc;&#128;&#157;) menjadi mapan. \"Shonen Jump\" dan \"Ribon\" adalah\r\ncontoh majalah berpengaruh dalam kategori ini.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">6. 1980an - 1990an - Pengaruh Global dan Adaptasi Anime:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Ekspansi Global:\r\nManga Jepang memperoleh pengakuan internasional, dengan terjemahan tersedia\r\ndalam berbagai bahasa.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Adaptasi Anime:\r\nBanyak serial manga populer yang diadaptasi menjadi anime, sehingga\r\nberkontribusi terhadap popularitas global budaya pop Jepang.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">7. 2000an dan Setelahnya - Era Digital dan Diversifikasi:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Manga Digital:\r\nInternet dan teknologi digital mendorong pembuatan dan distribusi manga online,\r\nsehingga memperluas akses ke khalayak global.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Beragam Genre:\r\nManga telah terdiversifikasi hingga mencakup beragam genre, yang melayani\r\nberagam audiens. Komik web dan manga yang diterbitkan secara independen juga\r\nmenjadi terkenal.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Saat ini, manga adalah bentuk penceritaan yang diakui secara\r\nglobal dan berpengaruh, dengan beragam genre dan gaya. Buku ini terus berkembang,\r\nmemadukan unsur-unsur tradisional dan kontemporer untuk memikat pembaca di\r\nseluruh dunia.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><font color=\"#000000\" style=\"\"><b><span style=\"font-size:16.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin\">5.<span style=\'font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\'>&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b><span style=\"font-size:16.0pt\">Sejarah\r\nbuku komik di Indonesia</span></b></font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Sejarah buku komik di Indonesia berakar pada tradisi\r\npenceritaan visual yang kaya, memadukan gaya seni asli dengan pengaruh luar.\r\nBerikut gambaran singkat perkembangan komik di Indonesia:</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">1. Masa Pra Kemerdekaan:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Wayang Kulit dan\r\nBoneka: Bentuk seni tradisional Indonesia, seperti \"wayang kulit\"\r\n(wayang kulit) dan tradisi wayang lainnya, berfungsi sebagai bentuk awal penceritaan\r\nvisual. Pertunjukan ini seringkali menyampaikan nilai-nilai moral dan budaya.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">2. Pasca Kemerdekaan (1945 dan seterusnya):</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Pengenalan Komik\r\nBarat:** Setelah Indonesia merdeka pada tahun 1945, pengaruh Barat, termasuk\r\nkomik, mulai merambah Tanah Air. Komik impor, terutama dari Eropa dan Amerika,\r\nmulai memberikan pengaruh.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">3. 1950an - 1960an:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Kreator Lokal:\r\nSeniman Indonesia mulai membuat komiknya sendiri, yang sering kali terinspirasi\r\noleh gaya Barat. Isinya beragam, mulai dari humor hingga cerita petualangan.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Balai Pustaka:\r\nBalai Pustaka, sebuah penerbit milik negara, berperan dalam menerbitkan dan\r\nmempopulerkan sastra pribumi, termasuk cerita bergambar. Publikasi-publikasi\r\nini berkontribusi pada pengembangan identitas nasional.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">4. 1970an - 1980an:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Komik Petualangan\r\n(Komik Petualangan): Pada tahun 1970-an, muncullah \"komik\r\npetualangan\" yang menampilkan pahlawan dan alur cerita buatan lokal.\r\nKarakter seperti Si Buta dari Gua Hantu menjadi populer.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">5. 1990an - 2000an:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Majalah Bobo:\r\n\"Majalah Bobo\", sebuah majalah anak-anak, berperan penting dalam\r\nmemperkenalkan komik kepada pembaca muda. Ini menampilkan campuran konten\r\npendidikan dan komik, termasuk serial buatan lokal.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Pengaruh Manga:\r\nManga Jepang meraih popularitas, memengaruhi seniman lokal, dan berkontribusi\r\npada beragam gaya dan genre.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">6. Era Digital (2000-an dan seterusnya):</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Platform Online:\r\nDengan munculnya internet, platform digital menjadi penting untuk distribusi\r\nkomik. Komunitas online dan komik web memungkinkan pencipta independen untuk\r\nberbagi karya mereka dengan khalayak yang lebih luas.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Kreator\r\nIndependen: Semakin banyak kreator independen yang bermunculan, memproduksi\r\nkomik yang mengeksplorasi beragam tema dan gaya. Platform media sosial\r\nmemainkan peran penting dalam menampilkan dan mempromosikan karya-karya ini.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">7. Pemandangan Kontemporer:</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Keberagaman\r\nGenre: Dunia komik Indonesia terus mengalami diversifikasi, dengan para\r\npencipta mengeksplorasi berbagai genre, termasuk cerita pahlawan super, irisan\r\nkehidupan, fantasi, dan tema sejarah.</font></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">&nbsp;&nbsp; - Novel Bergambar:\r\nKonsep novel grafis telah mendapatkan daya tarik, memungkinkan pengisahan\r\ncerita yang lebih luas dan bernuansa.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><font color=\"#000000\" style=\"\">Meskipun sejarah komik di Indonesia menghadapi tantangan dan\r\ndibentuk oleh berbagai pengaruh, hal ini mencerminkan lanskap budaya yang\r\ndinamis dan ketangguhan para pencipta lokal dalam mengekspresikan narasi mereka\r\nmelalui penceritaan visual.</font></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l2 level1 lfo1\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"></p><p></p></body></html>\n', 'images/news/Bmx7O6deU3ZSMyFsa3PSZRmVpqKXfGjnxxBE0fAd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `created_at`, `updated_at`, `nama`, `jabatan`, `email`, `instagram`, `foto`, `tentang`) VALUES
(1, '2023-10-04 21:18:05', '2023-10-04 21:18:05', 'Arsita Pinandita, S.Sn., M.Sn', '', 'arsita@ittelkom-pwt.ac.id', '@arsita_pinandita', 'dito.jpg', 'Selain sebagai ketua program studi di DKV IT Telkom Purwokerto ia juga aktif dalam beberapa agenda kreatif di luar kampus. Beberapa diantaranya ialah menjadi kurator untuk pameran international ‘Nandur Srawung’ (2018-sekarang), Taman Budaya Yogyakarta.  Creative Director ‘Hari Olah Raga Nasional”, Kemenpora R1 (2016-2018). Kurator pameran In Absurdum-Jogja Bandung, Djarum Coklat.com (2022-2023). Kurator ‘Collective Collegia’ Stone & Water, Korea (2022). Kurator pameran Beda ‘Segaris Art Center’, Malaysia (2019). Project Director Pameran perupa muda, Festival Kesenian Yogyakarta (2015-2018). Selain itu juga aktif menjadi juri & pemateri diantaranya; Pembicara seminar nasional ‘Inovasi dalam penciptaan seni’, UNESA Surabaya (2022). Juri Lomba Poster Nasional, UMP (2022). Pembicara Diskusi ‘MISINFORMATION’, Indonesia-Jerman, HONF (2021). Juri ADuin - Creative Advertising Festival Indonesia, UIN SUKA (2016-2022). Telah menulis beberapa buku & Zine, diantaranya; buku visual ‘Punk’ Fesyen, Subkultur dan Identitas’ (Halilintar Books) dan Rasa-rasa Emosional Desainer grafis (Bakbuk). \n                '),
(2, '2023-10-04 21:18:06', '2023-10-04 21:18:06', 'Riri Irma Suryani, S.Sn., M.Sn', '', 'riri@ittelkom-pwt.ac.id', '@riri_irma_s', 'riri.jpg', 'Merupakan dosen sekaligus Sekretaris Prodi DKV ITTP. Selain aktif secara akademisi, Riri juga aktif dalam industri perfilman. Beberapa kali diundang sebagai narasumber praktisi film dan juga menjadi juri Lomba, seperti Juri Lomba Video bertemakan teknologi tingkat Nasional yang diadakan oleh Universitas Pertamina (2022), Juri Lomba Video Company Profile tingkat SMK se-Kabupaten Banyumas (2022), dan lain-lain. Riri juga pernah terpilih sebagai Nominator Sutradara Perempuan terbaik dalam Jogja-NETPAC Asian Film Festival (JAFF) #17 Tahun 2022 dengan judul film dokumenter “Parsan The Legend of Rajawali”. Karya terakhirnya selain film Parsan, juga Film Omnibus dengan Judul “Don’t Just Shut Up” (2022) dan film Pendek “Demi Nama Baik?” (2022), 2 film ini bertemakan kekerasan seksual pada perempuan yang beberapa waktu lalu hangat dibicarakan media. Kedua film ini juga telah diputar dalam Ajang Internasional seperti Re:Karya International Video Festival. Selain konsen dalam dunia film, Riri juga beberapa kali mengikuti Pameran Internasional dalam bidang desain poster, seperti karya poster “Let’s Let & Enjoy” (2022)  yang dipamerkan pada Collective Exhibition Korea Selatan dan karya poster “Live in Pixel” (2022) yang dipamerkan pada International Poster Exhibition. Dalam bidang Tri Dharma, sebagai dosen Riri juga telah melakukan Pengabdian ke masyarakat seperti menjadi narasumber dalam “Pelatihan Pengembangan Media KIE dalam bentuk Video” tingkat nasional yang diselenggarakan oleh UPT Balai diklat Banyumas (2022), Pelatihan “Pembuatan Media ajar yang menarik” dengan peserta guru-guru yang tergabung dalam HIMPAUDI Banyumas (2022), dan lain-lain. Masih dalam lingkup Tri Dharma, Riri juga pernah menerima Hibah Pendanaan Penelitian baik dari Kemendikbud (2022), Internal ITTP (2022) dan Matching Fund Kedai Reka sebagai Ketua Peneliti (2023).\n                '),
(3, '2023-10-04 21:18:06', '2023-10-04 21:18:06', 'Elianna Gerda Pertiwi, S.Sn., M.Sn.', '', 'elianna@ittelkom-pwt.ac.id', '', 'gerda.jpg', 'Merupakan dosen lulusan Magister Pengkajian dan Penciptaan Seni ISI Yogyakarta yang kini aktif mengajar di prodi DKV ITTP. Kompetensi pada bidang desain dan memiliki Roadmap Penelitian jangka panjang pada topik rumah adat tradisional Indonesia. Selain Sebagai dosen, Gerda juga pernah menduduki beberapa jabatan struktural sebagai Sekretaris Prodi DKV dan kini menjadi Wakil Dekan Fakultas Rekayasa Industri dan Desain. Beberapa kali berhasil meraih pendanaan hibah penelitian baik sebagai ketua maupun anggota. Pendanaan yang berhasil diraih diantaranya adalah Hibah Penelitian Dosen Pemula Kementerian Pendidikan dan Kebudayaan, Program Pendampingan SMK Pusat Keunggulan Kemendikbud Ristek,  Program Pembelajaran Daring Kolaboratif oleh Kementerian Pendidikan dan Kebudayaan yang berkolaborasi dengan Universitas Bumigora Nusa Tenggara Barat. \n                '),
(4, '2023-10-04 21:18:06', '2023-10-04 21:18:06', 'Luqman Wahyudi, S.Sn., M.Sn', '', 'luqman@ittelkom-pwt.ac.id', '@antekwahyudi', 'luqman.jpg', 'Luqman Wahyudi merupakan pengajar aktif di IT Telkom Purwokerto yang berasal Solo, Jawa Tengah. Selain sebagai dosen, Luqman aktif sebagai freelance designer sejak 2013. Memiliki fokus keahlian dan riset pada visual identity / logo design. Beberapa tahun terakhir ikut berpartisipasi dalam visual exhibition seperti Post Human Exhibition (2022, 2023), dan Ampersand International Logo Exhibition (2022). Beberapa portofolio dapat diakses di instagram @antekwahyudi.\n                '),
(5, '2023-10-04 21:18:06', '2023-10-04 21:18:06', 'Alfiandi Eka Kusuma, S.Sn., M.Sn', '', 'alfiandi@ittelkom-pwt.ac.id', '@alfiandikid', 'alfiandi.jpg', 'Selain aktif mengajar, ia juga aktif sebagai ilustrator lepas mengerjakan project-project ilustrasi t-shirt dan album untuk beberapa band serta brand internasional. Beberapa band yang pernah berkolaborasi diantaranya Inter Arma, Bort, Demonauta, dan Regicide. Dimana sebagian besar band tersebut beraliran metal. Brand yang pernah berkolaborasi diantaranya Central Standard Brewing, Source Coffee, dan Zenith Climbing co. Portofolio karyanya dapat diakses melalui profil Instagram pribadinya @alfiandikid.\n                '),
(6, '2023-10-04 21:18:06', '2023-10-04 21:18:06', 'Gilang Ramadhan, S.Sn., M.Sn', '', 'gilang@ittelkom-pwt.ac.id', '', 'gram.jpg', 'Selain menjadi Dosen aktif di IT Telkom Purwokerto,  Dosen satu ini senang mengembangkan komunitas yang berkolaborasi dengan budaya daerah. Komunitas yang dikemas secara kreatif dalam berbagai bentuk event ini, mampu menciptakan sesuatu yang baru untuk Banyumas. Terdapat 10 program yang telah diciptakan dan dikembangkan sehingga dapat beroperasi dengan baik di wilayah Banyumas. Kemudian 3 program terpopuler diantaranya seperti: \n                    1. ‘Peken Banyumasan’ yang mengangkat history & budaya luhur Banyumas supaya tidak punah yang terletak di kawasan Banyumas Kota Lama (Bale Adipati Mrapat). \n                    2. ‘Biorama’ merupakan ruang bertemu dari para artisan lokal Komunitas Organik yang berlokasi di Hetero Space, yang termasuk Bangunan Cagar Budaya (Gedung Karesidenan sejak tahun 1939).  \n                    3. ‘Soetedja Maker Fest’ memberikan ruang bagi para Makers untuk memperkenalkan proses dibalik Karya dan sarana bertukar ide yang berlokasi di Pasar Manis (Ex-Gedung Kesenian Soetedja). Yang menjadi Creative Hub para aktor kreatif kesenian berkumpul pada tahun 1970\n                    \n                '),
(7, '2023-10-04 21:18:06', '2023-10-04 21:18:06', 'Adnan Setyoko, S.Pd., M.Pd.', '', 'adnan@ittelkom-pwt.ac.id', '@adnansetyoko', 'adnan.jpg', 'Adnan setyoko berasal dari Semarang, saat ini bekerja sebagai dosen di Institut Teknologi Telkom Purwokerto (ITTP). Selain sebagai dosen, beliau juga aktif sebagai ilustrator dan desainer grafis untuk produk merchandise. Dia menyukai semua bagian dari proses kreatif dan mempelajari keterampilan baru. Adnan saat ini tinggal dan bekerja di Purwokerto – Indonesia. Beberapa projek pribadinya dapat diakses melalui portal berikut https://linktr.ee/adnansetyoko\n                '),
(8, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Aditya Tama Isdiarto S.Sn, M.Sn.', '', 'aditya.tama@ittelkom-pwt.ac.id', '@adit505', 'nn.jpg', 'Selain menjadi pemimpi paruh waktu, Aditya Tama Isdiarto membagikan literasinya yang berfokus pada Audio Visual. Terkadang beliau juga mengisi waktu luangnya untuk kerja riset media alternatif secara personal dan akhir pekannya disibukan dengan kerja-kerja skema kolektif musik dan bandnya yang berada di Yogyakarta. Sosok yang suka mengoleksi CD sebagai arsip musik independen nasional ini juga tergabung dalam AV Node (AV Node merupakan jaringan internasional database seniman dan organisasi profesional yang berfokus pada pertunjukan seni Audio Visual). Beberapa proyek yang pernah dikerjakan adalah AV archives Japan Foundation dengan isu kerentanan masyarakat pesisir pantai selatan pulau Jawa dengan bencana Tsunami serta membuat peta 3D jalur evakuasi dengan melihat kontur tanah di 2019, Visual Jockey Jogja Noise Bombing Festival 2019 & 2020, ARKO art & Tech Festival Seoul, Korea Selatan sebagai Augmented Reality artist bersama dengan Honf Lab 2022,  Komisi AR artist merespon fasad kolektif grafis Krack! Pameran Internasional Nandur Srawung #9 Yogyakarta 2022.\n\n                '),
(9, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Ajeng Tita Negoro, S.Pd., M.Sn.', '', 'ajeng.tita@ittelkom-pwt.ac.id', '@a.tita.n', 'ajeng.jpg', 'Deskripsi kegiatan/prestasi: Ajeng Tita Negoro, yang kerap dipanggil Tita berasal dari Samarinda, Kalimantan Timur. Saat ini menjadi tenaga pengajar aktif di IT Telkom Purwokerto Prodi Desain Komunikasi Visual. Selain mengajar Tita juga menjadi illustrator lepas dan juri lomba. Karya-karyanya banyak berfokus pada illustrasi dan komik, salah satunya yang dapat diakses yaitu Komik “Cemeng” di Webtoon. Beberapa penghargaan yang juga pernah diraih diantaranya:\n                    Juara 5 - International Children’s Painting Competition for the Environment ke 19, Region Asia-Pacific, yang diselenggarakan oleh UNEP tahun 2011.  \n                    Juara 3 - Lomba Komik Strip PEKSIMINAS (Pekan Seni Mahasiswa Nasional) XIV D.I.Yogyakarta, yang diselenggarakan oleh Kementerian Riset, Teknologi dan Pendidikan Tinggi tahun 2018.\n                    Juara 1 - Lomba Komik Strip PEKSIMIDA (Pekan Seni Mahasiswa Daerah) XIV D.I.Yogyakarta, yang diselenggarakan oleh Badan Pembina Seni Mahasiswa Indonesia D.I.Y tahun 2018.\n                    Juara 1 - Lomba Komik Strip PEKSIMIDA (Pekan Seni Mahasiswa Daerah) XIII D.I.Yogyakarta, yang diselenggarakan oleh Badan Pembina Seni Mahasiswa Indonesia D.I.Y tahun 2016.\n                    Juara 1 - Lomba Desain Grafis HUT ke-71 Skadron 2 AU Halim Perdanakusuma yang diselenggarakan oleh Skadron 2 Angkatan Udara Halim Perdanakusuma tahun 2021.\n                    Juara Favorit - Lomba Komik 1000 Hari Mas Hasmi (creator Gundala Putra Petir) tahun 2019.\n                    '),
(10, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Bachrul Restu Bagja, S.Pd., M.Sn.', '', 'bachrul@ittelkom-pwt.ac.id', '@bachrulbach', 'bachrul.jpg', 'Bachrul Restu Bagja berasal dari salah satu kecamatan di kabupaten Majalengka, Jawa Barat. Seorang yang aktif sebagai tenaga pendidik, pekerja lepas pada bidang desain grafis serta terlibat dalam sebuah kolektif seni di Bandung dengan kegiatannya, yaitu pameran seni di ruang publik, diskusi seputar seni dan/atau pergerakan lain yang beririsan. Selain itu, Bachrul aktif mengikuti pameran seni rupa serta terlibat dalam beberapa projek seni dan projek penelitian yang beririsan dengan bidang keilmuan Seni Rupa dan Desain.\n                '),
(11, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Galih Putra Pamungkas, S.Sn., M.Sn.', '', 'galih@ittelkom-pwt.ac.id', '@galihcokrowardoyo', 'galih.jpg', 'Deskripsi kegiatan/prestasi: Galih adalah tenaga pengajar di Prodi DKV ITTP sejak 2019. Saat ini Galih juga sebagai Ketua Kelompok Keahlian Media Kreatif dan Periklanan ITTP. Beberapa tahun belakangan ini, Galih beberapa kali mendapatkan pendanaan hibah dengan topik pengembangan ekosistem kreatif sebuah wilayah. Selain itu Galih juga aktif sebagai editor / reviewer Jurnal ilmiah serta chair conference ilmiah international.\n                '),
(12, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Gladi Pawestri Utami, S.Sn., M.Sn.', '', 'gladi@ittelkom-pwt.ac.id', '@gladipawestri', 'gladi.jpg', 'Deskripsi kegiatan/prestasi: Gladi Pawestri Utami yang akrab dipanggil Gladi merupakan Ibu anak satu yang selain menjadi Dosen di Institut Teknologi Telkom Purwokerto Program Studi Desain Komunikasi Visual, juga berkegiatan mengelola bisnis keluarga di bidang FnB. Sehingga beberapa penelitiannya berkisar pada visual branding FnB. Gladi juga tertarik dan menyukai crafting kerajinan tangan dan merupakan founder Oh My Glad Craft. Beberapa kali mengikuti pameran poster internasional yang diadakan baik di dalam maupun di luar negeri.\n                '),
(13, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Gusnita Linda, S.Sn., M.Hum.', '', 'gusnita@ittelkom-pwt.ac.id', '@lindagusnita', 'linda.jpg', 'Selain menjadi dosen pada Prodi DKV IT Telkom Purwokerto, Gusnita Linda yang akrab disapa Linda menjadi Koordinator ASKARA: Jurnal Seni dan Desain, sekaligus Pembimbing Kelompok Riset Mahasiswa yang bernama Askara Creative Club. Linda juga  bertanggung jawab sebagai Gugus Humas dan Kerjasama Fakultas Rekayasa Industri dan Desain, IT Telkom Purwokerto. Selain aktif sebagai pengajar, Linda aktif sebagai supervisor peneliti di beberapa lembaga survei nasional, seperti CSIS dan Indoriset Konsultan. \n                Bersama Riri Irma Suryani, Linda terpilih sebagai Nominator Sutradara Perempuan terbaik dalam Jogja-NETPAC Asian Film Festival (JAFF) #17 Tahun 2022 dengan judul film dokumenter “Parsan The Legend of Rajawali”. Beberapa karya film dan audio visual Linda lainnya baik sebagai produser, di antaranya: Film Omnibus dengan Judul “Don’t Just Shut Up” (2022), film Pendek “Demi Nama Baik?” (2022), film “Menembus “Cakrawala” (2021), dan sutradara video “Gender Vertigo” (2022). Selain itu sebagai editor buku “Menatap yang Sehari-Hari” (2023), penulis pada buku “Seni Rupa Kontemporer di Indonesia: Anotasi Bibliografi IVAA 1973-2020, jilid 1 s.d 3” (2020), serta penulis buku “Demokrasi dan Pandemi: Bunga Rampai Pengetahuan Masyarakat Sipil di Indonesia” (2021). Secara khusus, minat penelitian Linda saat ini fokus pada seni visual, studi gender dan humaniora.\n                '),
(14, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Ratih Alifah Putri, S.Ds., M.Ds', '', 'ratih.alifah@ittelkom-pwt.ac.id', '@ratihalifah', 'ratih.jpg', 'Selain menjadi Dosen Animasi di IT Telkom Purwokerto, ia juga aktif dirumah dan diluar rumah. Ketika diluar rumah ia aktif sebagai Juri dan Praktisi penggiat event skala Nasional. Ibu beranak dua ini sering diundang sebagai juri di berbagai acara Instansi maupun pemerintahan. Salah satunya sebagai juri pada Lomba Mewarnai Anak-Anak dan juri Lomba Poster Digital tingkat Nasional pada Event yang diselenggarakan oleh Bank Indonesia Purwokerto dari tahun 2019 hingga saat ini. Kemudian pernah menjadi juri Lomba Mewarnai Anak-Anak dan juri Lomba Film Animasi Anak tingkat Nasional pada berbagai Event yang dilangsungkan oleh Otoritas Jasa Keuangan (OJK) Purwokerto. Selain menjadi juri, Ratih juga aktif menjadi praktisi dan penggiat berbagai event. Salah satu event yang pernah digarap seperti Virtual Event Festival UMKM & Ekonomi Syariah Bank Indonesia tahun 2020 dengan konsep event virtual pertama di Jawa Tengah dengan bintang tamu Fadly Padi Reborn  (ketika pandemi). Ia juga aktif sebagai praktisi dan juga ikut membantu dalam program branding desa serang kabupaten Purbalingga pada Festival Gunung Slamet (FGS) dalam rangka memperkenalkan budaya asli desa serang dalam skala Internasional dengan konsep Jazz diatas awan (kabut lembut) tahun 2019 dan tahun 2023.\n                '),
(15, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Robert Hendra Yudianto, S.Sn., M.Sn.', '', 'robert@ittelkom-pwt.ac.id', '@roberthendra', 'robert.jpg', 'Sebagai dosen fotografi dan videografi serta menjadi praktisi fotografi dan juri nasional perlombaan fotografi. \n                '),
(16, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Yanuar Ikhsan Pamuji, S. Pd., M. Sn.', '', 'yanuar@ittelkom-pwt.ac.id', '@yanuartuyul', 'yanuar.jpg', 'Deskripsi kegiatan/prestasi: aktif dalam dunia pameran seni rupa seperti :  underline” Redbase Gallery Sydney Australia.  “Collective Collegia” Stone & Water Gallery South Korea.   “Passion Of Three Kingdom” Redbase Gallery Sydney Australia.   “Hidup Berdampingan Dengan Musuh” Ciputra Artpreneur Jakarta.   “Manifesto VII : Pandemi” Galeri Nasional indonesia. Pernah mendapatkan penghargaan karya terbaik dalam ajang “Basoeki Abdullah Art Award #3” Museum Basoeki Abdullah. \n                '),
(17, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Achmad Sultoni, S.Pd., M.Pd.', '', 'sultoni@ittelkom-pwt.ac.id', '@a.su_ltoni', 'sultoni.jpg', 'Ia merupakan dosen di Prodi DKV, Institut Teknologi Telkom Purwokerto. Saat ini sedang menyelesaikan Program Doktor Pendidikan Bahasa Indonesia, FKIP, Universitas Sebelas Maret, Surakarta.Ia menyelesaikan jenjang pendidikan S-1 di Program Studi Pendidikan Bahasa dan Sastra Indonesia, FKIP, Universitas Muhammadiyah Purwokerto; S-2 di Program Studi Pendidikan Bahasa Indonesia, FKIP, Universitas Sebelas Maret, Surakarta. Bebeberapa tulisannya berupa puisi, cerpen, dan esai pernah dimuat di media-media massa lokal dan nasional. Demikian halnya tulisan-tulisan ilmiah sudah terpublikasikan di berbagai jurnal dan konferensi bereputasi, baik nasional maupun internasional. Ia kerap menjadi pembicara dalam forum-forum akademik. Pernah menjadi juara 2 penulisan kreatif BKKBN Jateng 2013 dan juara 1 penulisan artikel opini 2016. Karya buku yang pernah ditulis di antaranya buku puisi anak Dongeng Pohon Pisang (2019); Buku puisi Selepas Musim Menjauh (2021);. Buku kumpulan esai Perjumpaan dan Percakapan: Sepilihan Esai-esai Sastra (2022); Buku Cerita Rakyat Banyumas Sumber Bacaan Berwawasan Ekologis (2023); dan Cerita Rakyat Berwawasan Ekologis: Teori dan Aplikasi Kajian Ekokritik (2023).\n                '),
(18, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Ferdinanda, S.Sn., M.Sn.', '', '', '', 'nn.jpg', 'Saat ini sedang melanjutkan Program Doktor di Institut Seni Indonesia Solo.\n                '),
(19, '2023-10-04 21:18:07', '2023-10-04 21:18:07', 'Nofrizaldi, S.Sn., M.Sn.', '', '', '', 'nn.jpg', 'Saat ini sedang melanjutkan Program Doktor di Institut Seni Indonesia Yogyakarta.\n                ');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL,
  `bodytext` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `created_at`, `updated_at`, `judul`, `thumbnail`, `bodytext`) VALUES
(1, '2023-10-04 21:18:05', '2023-10-04 21:18:05', 'Post Human Exhibition 2023', 'image/events/thumbnail/UxqrkkyFgujLeNG0GbflTZbsezPpFWZo7SMVNGg1.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n                <html><body><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;\">\n                <img data-filename=\"news-2338.jpeg\" style=\"width: 50%;\" src=\"/storage/image/events/16956588080.png\">\n                </p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;\">\n                Post Human #2 merupakan event tahunan Prodi DKV ITTP yang berupa pameran poster internasional yang bergerak di bidang Visual Art &amp; Design. Tujuan dari acara ini adalah untuk menumbuhkan ruang belajar bersama bagi mahasiswa, dosen maupun artist yg terlibat dalam menyelenggarakan event pameran dan juga sebagai ajang kreatifitas bagi kreator, desainer, dan akademisi dalam ranah industri kreatif. Partisipan yang terlibat terdiri dari 20 negara dan 160 artist.\n                </p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;\">\n                Selain diselenggarakan di Galeri Satria IT Telkom Purwokerto, Post Human #2 juga digelar di Hetero Space Banyumas. Dua tempat tersebut menjadi pilihan penyelenggaraan event pameran dikarenakan tempat yang representatif dan lokasi yang sangat strategis di pusat kota.\n                </p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;\">\n                &acirc;&#128;&#156;Space Hetero sangat luas, sehingga mempermudah panitia dalam menyeting dan ploting tempat. Fasilitas sangat memadai, pelayanan sangat baik, ramah dan interaktif serta komunikatif, suasanya sangat nyaman&acirc;&#128;&#157; jelas salah satu panitia.\n                </p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;\">\n                Pameran hari pertama (30/01/2023) dimulai Pukul 10.00 WIB-18.00 WIB dengan peserta yang hadir lebih dari 200 orang.\n                </p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;\">\n                Gelaran pameran ini diharapkan dapat menjadi media pembacaan terhadap kondisi sosial atau perubahan social yg hadir di masyarakat. Mulai dari kritik sosial sampai ungkapan harapan bagi kehidupan manusia yg lebih baik.\n                </p></body></html>'),
(2, '2023-10-04 21:18:05', '2023-10-04 21:18:05', 'Pameran Seni AURORA #6 Kembali Digelar di IT Telkom Purwokerto', 'image/events/thumbnail/0juHlAhde5oo6y8IVrd0AlNdpGT62p06qTvYPlPm.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n                <html><body><p style=\"margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;\"><img data-filename=\"Bitmap (2).jpg\" style=\"width: 25%;\" src=\"/storage/image/events/16956601160.png\"></p><p style=\"margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;\">Himpunan Mahasiswa (HIMA) Desain Komunikasi Visual (DKV) IT Telkom Purwokerto gelar pembukaan AURORA edisi ke #6 yang mengangkat tema &acirc;&#128;&#156;The Soul of Creativity in Diversity&acirc;&#128;&#157;, Senin (17/10) kemarin.&nbsp;</p><p style=\"margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;\">Sesuai dengan temanya, AURORA #6 membicarakan tentang bagaimana mengekspresikan karya dengan kebebasan, sehingga tidak ada batasan untuk karya yang dipamerkan. Meningkat dari tahun sebelumnya, AURORA #6 berhasil menampilkan sebanyak 66 karya terbaik mahasiswa hasil seleksi oleh dosen maupun&nbsp;<em>open submission</em>.</p></body></html>'),
(3, '2023-10-04 21:18:05', '2023-10-04 21:18:05', 'Peken Banyumasan Edisi Mrapat 6', 'image/events/thumbnail/aXz3CzLiYXEKQ6jPfEfGFK7Yx7OtnKMMo8JxZgwI.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n                <html><body><p style=\"margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;\"><img data-filename=\"Bitmap (12).jpg\" style=\"width: 50%;\" src=\"/storage/image/events/16956605550.png\"><br>Peken Banyumasan Edisi Mrapat 6 Garapan DKV IT Telkom Purwokerto tampak berbeda dari sebelumnya. Acara yang diadakan pada (18/6) ini menghadirkan inovasi baru, yaitu Program Banyumas Culinary Taste.</p><p style=\"margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;\">Banyumas Culinary Taste sendiri merupakan program yang menyajikan berbagai sajian kuliner khas Banyumas, sekaligus sebagai jawaban dari rasa penasaran dan permintaan para pengunjung sebelumnya yang merasa rindu dengan makanan khas dan cita rasanya yang sudah semakin langka.&nbsp;</p></body></html>');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `created_at`, `updated_at`, `nama`, `deskripsi`, `gambar`) VALUES
(1, '2023-10-04 21:18:08', '2023-10-04 21:18:08', 'Laboratorium Komputer Grafis', 'Laboratorium dilengkapi dengan 32 unit iMac', 'images/fasilitas/20221223_122908-300x225.jpg'),
(2, '2023-10-04 21:18:08', '2023-10-04 21:18:08', 'Laboratorium Audio dan Visual', 'Bengkel Desain sama dengan Studio AUVI dari segi fungsi untuk kegiatan praktikum berkaitan dengan mata kuliah praktek yang masuk dalam kurikulum prodi desain komunikasi visual. Laboratorium ini dikelola oleh kepala laboratorium dan dibantu tenaga laboran.', 'images/fasilitas/1J5A8407-300x226.jpg'),
(3, '2023-10-04 21:18:08', '2023-10-04 21:18:08', 'Laboratorium Gambar', 'Laboratorium gambar adalah tempat yang mendalam bagi seniman dan pelajar seni. Dengan meja gambar, pensil, cat air, dan alat seni tradisional lainnya, ruang ini memberikan lingkungan yang tenang untuk eksplorasi kreatif, pelatihan keterampilan seni visual, dan pengembangan ekspresi artistik tanpa gangguan teknologi. Ini adalah tempat di mana individu dapat fokus sepenuhnya pada proses menggambar', 'images/dkv/Bitmap.jpg'),
(4, '2023-10-04 21:18:08', '2023-10-04 21:18:08', 'Bengkel DKV', 'Bengkel DKV merupakan tempat di mana mahasiswa dapat berkreasi dan eksplorasi segala jenis bidang seni visual', 'images/fasilitas/1J5A8410-300x226.jpg'),
(5, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Galeri Seni (SATRIA)', 'ITTP memiliki sebuah ruang pamer bernama Galeri Satria yang mulai berdiri pada tahun 2021. Bertempat di Gedung DSP Lantai 2, Galeri ini berfungsi untuk memamerkan dan menampilkan buah karya mahasiswa dan civitas akademika ITTP. Adapun karya yang ditampilkan berupa Desain, Grafis, Poster, Lukisan, Branding, Video Interaktif, dan lain sebagainya.', 'images/fasilitas/IMG_9960-300x200.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori_gambar_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `created_at`, `updated_at`, `gambar`, `judul`, `deskripsi`, `kategori_gambar_id`) VALUES
(1, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'images/galeri/DSCF5122.jpg', NULL, NULL, 3),
(2, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'images/galeri/DSCF5197.jpg', NULL, NULL, 3),
(3, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'images/galeri/Screenshot (749).jpg', NULL, NULL, 3),
(4, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'images/galeri/DSC02888.jpg', NULL, NULL, 3),
(5, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'images/galeri/DSCF5333.jpg', NULL, NULL, 3),
(6, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'images/galeri/DSCF5350.jpg', NULL, NULL, 3),
(7, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'images/galeri/DSCF5360.jpg', NULL, NULL, 3),
(8, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/dkv/Bitmap (1).jpg', NULL, NULL, 1),
(9, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/dkv/Bitmap (2).jpg', NULL, NULL, 1),
(10, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/dkv/Bitmap (3).jpg', NULL, NULL, 1),
(11, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/dkv/Bitmap (4).jpg', NULL, NULL, 1),
(12, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/dkv/Bitmap (5).jpg', NULL, NULL, 1),
(13, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/dkv/Bitmap (6).jpg', NULL, NULL, 1),
(14, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/gallery/a.webp', NULL, NULL, 4),
(15, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/gallery/b.webp', NULL, NULL, 4),
(16, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/gallery/c.webp', NULL, NULL, 4),
(17, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/gallery/d.webp', NULL, NULL, 4),
(18, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/gallery/e.webp', NULL, NULL, 4),
(19, '2023-10-04 21:18:17', '2023-10-04 21:18:17', 'images/gallery/f.webp', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hibahs`
--

CREATE TABLE `hibahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_hibah` varchar(255) NOT NULL,
  `judul_hibah` text NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hibahs`
--

INSERT INTO `hibahs` (`id`, `created_at`, `updated_at`, `jenis_hibah`, `judul_hibah`, `nama_dosen`, `tahun`) VALUES
(1, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'Kedaireka', 'Akselerasi Platform Hompimpaa.id Menggunakan AI untuk Menunjang Ekonomi Digital dalam Bentuk Industri Animasi', 'Riri Irma Suryani', '2022'),
(2, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'Kemendikbud (Hibah Dosen Pemula) ', 'Learning Management System dan Peningkatan Kemampuan Pembuatan Video Himpaudi Kabupaten Banyumas.', 'Riri Irma Suryani', '2022'),
(3, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'Kemendikbud (Hibah Dosen Pemula)', 'Strategi Pencegahan Kekerasan Seksual pada anak-anak dan Perempuan melalui film Omnibus \"Don’t Just Shut Up”.', 'Riri Irma Suryani, Gusnita Linda', '2022'),
(4, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'Kemendikbud (Hibah Dosen Pemula)', 'Kampanye Pencegahan dan Penanggulangan Kekerasan Seksual di Perguruan Tinggi melalui Motion Graphic.', 'Riri Irma Suryani', '2022'),
(5, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'Institut Teknologi Telkom Purwokerto (Hibah Internal LPPM) ', 'Strategi Pencegahan Kekerasan Seksual Pada Perempuan melalui Film Pendek \"Demi Nama Baik, #Don’t Just Shut UP\".', 'Riri Irma Suryani, Gusnita Linda', '2022'),
(6, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'Institut Teknologi Telkom Purwokerto (Hibah Internal LPPM) ', 'Perancangan Kreatif Digital Advertising (CDA) Dalam Promosi Kuliner Tradisional Banyumas untuk Mendukung Peningkatan Sektor Pariwisata di Masa New Normal.', 'Riri Irma Suryani, Galih Putra Pamungkas, Ferdinanda', '2021'),
(7, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'LPPM Universitas Sanata Dharma ', 'Gender sebagai Jalan: Pengalaman Keberagamaan dan Pembentukan Diri Perempuan', 'Gusnita Linda', '2021'),
(8, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'LPPM Universitas Sanata Dharma ', 'Kekerasan Seksual di Ranah Pendidikan Tinggi: Narasi dan Aktivisme di Dunia Maya', 'Gusnita Linda', '2022'),
(9, '2023-10-04 21:18:14', '2023-10-04 21:18:14', 'Kedaireka', 'Akselerasi Ruang Kreatif Biorama sebagai Optimalisasi Peningkatan Wisata Sejarah Kota Purwokerto', 'Riri Irma Suryani, Gusnita Linda, Robert Hendra Yudianto, Adnan Setioko, Gilang Ramadhan ', '2023'),
(10, '2023-10-04 21:18:14', '2023-10-04 21:18:14', 'Hibah Skema Pemberdayaan Berbasis Masyarakat (PBM) Kemendikbud 2023', 'PKM Artisanal Business Scaling pada Industri Kreatif Akar Jati Desa Kedungbenda Melalui Digitalisasi Pemasaran dan Efisiensi Produksi ', 'Gladi Pawestri Utami ', '2023'),
(11, '2023-10-04 21:18:14', '2023-10-04 21:18:14', 'Penelitian Dosen Pemula KEMENDIKBUD', 'Infografis Digital sebagai Panduan Wisata Religi Masjid Saka Tunggal Cikakak dalam Menghadapi Era New Norma di Kabupaten Banyumas ', 'Gladi Pawestri Utami, Arsita Pinandita ', '2022'),
(12, '2023-10-04 21:18:14', '2023-10-04 21:18:14', 'LPPM IT Telkom Purwokerto ', 'Coffee Table Book Kesenian Lengger Lanang dalam Fotografi Dokumenter ', 'Ferdinanda ', '2018'),
(13, '2023-10-04 21:18:14', '2023-10-04 21:18:14', 'LPPM IT Telkom Purwokerto ', 'Perancangan Video Iklan Layanan Masyarakat Diet Plastik ', 'Ferdinanda, Elianna Gerda', '2019'),
(14, '2023-10-04 21:18:14', '2023-10-04 21:18:14', 'Kemenristekdikti', 'Pemetaan Kesenian Tradisional Banyumas Melalui Film Dokumenter sebagai Upaya Pelestarian Budaya Lokal ', 'Ferdinanda, Elianna Gerda Pertiwi ', '2020'),
(15, '2023-10-04 21:18:14', '2023-10-04 21:18:14', 'Pengprov Jateng', 'Festival Panggung Kahanan-Gondolio', 'Ferdinanda', '2020'),
(16, '2023-10-04 21:18:14', '2023-10-04 21:18:14', 'LPPM IT Telkom Purwokerto', 'Perancangan Creative Digital Advertising (CDA) dalam Promosi Kuliner Tradisional Banyumas untuk Mendukung Peningkatan Sektor Pariwisata di Masa New Normal ', 'Ferdinanda, Galih Putra Pamungkas ', '2021'),
(17, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'HONF Foundation', 'The Ungovernable Structure Design With The Living ', 'FFerdinanda, Galih Putra Pamungkas ', '2021'),
(18, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'LPPM IT Telkom Purwokerto ', 'OPTIMALISASI LOCAL CREATIVE “BAWOR” DALAM DIGITAL EDUCATIONAL RESOURCE SEBAGAI PENGUATAN IKON BANYUMAS', 'Ajeng Tita Negoro ', '2023'),
(19, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'LPPM IT Telkom Purwokerto', 'Perancangan Motion Graphic Iklan layanan masyarakat: Stop Tolak Pemakaman Korban Covid-19', 'Luqman Wahyudi', '2020'),
(20, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'LPPM IT Telkom Purwokerto', 'Perancangan animasi 3d iklan layanan Masyarakat untuk kampanye sosial vaksinasi Covid-19 di Banyumas', 'Luqman Wahyudi, Elliana Gerda ', '2021'),
(21, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'Kemendikbud (Hibah Dosen Pemula)', 'Perancangan Prototype Mokit Rumah adat tradisional indonesia seri 1: Rumah Joglo', 'Luqman Wahyudi, Elliana Gerda ', '2022'),
(22, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'LPPM IT Telkom Purwokerto', 'Perancangan buku panduan Mokit Rumah Adat Indonesia: Joglo', 'Luqman Wahyudi, Elliana Gerda', '2022'),
(23, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'Hibah Dosen Pemula Kemdikbudristek ', 'Pembelajaran Berbasis Video Pengolahan Sampah Plastik Rumah Tangga di Masa Pandemi', 'Bachrul Restu Begja, Yanuar', '2022'),
(24, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'Goethe Institute', 'Tritangtu: Pengaruh Musik Tradisional Terhadap Pertumbuhan Tanaman', 'Bachrul Restu Begja ', '2021'),
(25, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'Hibah Skema Pemberdayaan Berbasis Masyarakat (PBM) Kemendikbud 2023', 'Optimalisasi Pengelolaan Sampah Plastik Bank Sampang Inyong serta Pemberdayaan Masyarakat dalam Peningkatan Ekonomi Warga Dusun Semingkir Purwokerto ', 'Bachrul Restu Begja, Luqman Wahyudi ', '2023'),
(26, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'LPPM IT Telkom Purwokerto', 'Analisis Poster Gejayan Memanggil ', 'Galih Putra Pamungkas, Arsita Pinandita', '2020'),
(27, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'LPPM IT Telkom Purwokerto', 'Sosialisasi KPU Kabupaten Banyumas bagi 100 Desa di Kabupaten Banyumas dengan Memanfaatkan Sinematografi dan Poster ', 'Galih Putra Pamungkas, Robert Hendra Yudianto', '2022'),
(28, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'Hibah Skema Pemberdayaan Berbasis Masyarakat (PBM) Kemendikbud 2023', 'Peken Banyumasan: Strategi Inovasi Kreatif pada Pemulihan Usaha Mikro Kecil Menengah (UMKM) Akibat Pandemi Covid-19 ', 'Galih Putra Pamungkas, Gilang Ramadhan', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyas`
--

CREATE TABLE `karyas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul_karya` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `link_portofolio` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyas`
--

INSERT INTO `karyas` (`id`, `created_at`, `updated_at`, `judul_karya`, `deskripsi`, `tahun`, `author`, `link_portofolio`, `gambar`) VALUES
(1, '2023-10-04 21:18:04', '2023-10-04 21:18:04', 'Cybernatic Geisha', 'no description.', '2023', 'Ajay Hidayat', '', 'image/beranda/section4/TB3h8ymDizmdJS3PceRLxkWSha0YwajfPXYuXFWk.png'),
(2, '2023-10-04 21:18:04', '2023-10-04 21:18:04', 'In.fact.ious', 'no description.', '2023', 'Ajeng Tita Negoro', '', 'image/beranda/section4/Ti6rjo6eLhtWfSnRMLQXvfqMk4Xay8qetYrYqHzh.png'),
(3, '2023-10-04 21:18:04', '2023-10-04 21:18:04', 'Massive Infection', 'no description.', '2023', 'Aka Krisnawan', '', 'image/beranda/section4/u5binHfRjY0mUZKXnag4NDQWpiDsysFQF0e7Dsce.png'),
(4, '2023-10-04 21:18:05', '2023-10-04 21:18:05', 'Human Machine Intellegence', 'no description.', '2023', 'Esra Jan', '', 'image/beranda/section4/iXAuK6VzuDgVeNnVofy3CgT5C1MTtW16KyUYUgdV.png'),
(5, '2023-10-04 21:18:05', '2023-10-04 21:18:05', 'Problematic', 'no description.', '2023', 'Muhammad Tegar Pangestu', '', 'image/beranda/section4/9uWjtV8jVC23acajnBzsN0rkyRG96kg55sXv4zG6.png'),
(6, '2023-10-04 21:18:05', '2023-10-04 21:18:05', 'The Future Life', 'no description.', '2023', 'Ganang Prioyudis Tyo Anggoro', '', 'image/beranda/section4/XJqFeB0uvBJ4olXTCwen73xSOSZUVvrAcxPqnEPU.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_gambars`
--

CREATE TABLE `kategori_gambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_gambars`
--

INSERT INTO `kategori_gambars` (`id`, `created_at`, `updated_at`, `kategori`) VALUES
(1, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'Akademik'),
(2, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'Penelitian'),
(3, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'Program'),
(4, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'Karya');

-- --------------------------------------------------------

--
-- Table structure for table `kenapa_harus_dkvs`
--

CREATE TABLE `kenapa_harus_dkvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `headline` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kenapa_harus_dkvs`
--

INSERT INTO `kenapa_harus_dkvs` (`id`, `created_at`, `updated_at`, `headline`, `isi`, `gambar`) VALUES
(1, '2023-10-04 21:18:04', '2023-10-04 21:18:04', 'Dosen-dosen Berpengalaman', 'Dosen-dosen yang ada di DKV ITTP memiliki pengalaman yang banyak lho di industri desain, jadi temen-temen dijamin bisa mendapatkan ilmu yang berkualitas tentunya', 'image/beranda/section3/uxatwVyzFVBD5GKiowC9Fgf7vzwk1vbJFVe0Uls7.jpg'),
(2, '2023-10-04 21:18:04', '2023-10-04 21:18:04', 'Fasilitas Lengkap', 'Program Studi Desain Komunikasi Visual (DKV) di Institut Teknologi Telkom Purwokerto (ITTP) menawarkan fasilitas lengkap dan modern yang mendukung pengembangan kreativitas mahasiswa dalam desain grafis, seni digital, dan komunikasi visual.', 'image/beranda/section3/BJsCjnn2L0I1H12a1rezI6EtPXrklKLq6Eiluybz.jpg'),
(3, '2023-10-04 21:18:04', '2023-10-04 21:18:04', 'Prospek Terjamin', 'Program Studi Desain Komunikasi Visual (DKV) di Institut Teknologi Telkom Purwokerto (ITTP) menjamin prospek karier yang cerah bagi lulusannya dengan koneksi industri yang kuat dan fokus pada keterampilan yang sangat dicari oleh pasar kerja.', 'image/beranda/section3/FEoUmohPHEI4reyFSRaO4Bi9H5XL4puDoTJPJdAn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kerjaprakteks`
--

CREATE TABLE `kerjaprakteks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuliah_umums`
--

CREATE TABLE `kuliah_umums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pembicara` varchar(255) NOT NULL,
  `moderator` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuliah_umums`
--

INSERT INTO `kuliah_umums` (`id`, `created_at`, `updated_at`, `pembicara`, `moderator`, `tema`, `deskripsi`, `tanggal`, `gambar`) VALUES
(1, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Hanes dan Gilang', '', 'Video Maping dan Video Jokey', 'Acara talk show tntg Video Mapping. / Video mapping adalah teknik seni visual dgn pendekatan video / motion graphic yg di proyeksikan untuk menciptakan ilusi optic pada objek. Pembicara video mapping kali ini adalah yg mengerjakan video mapping Asean games 2018 di Monas dan pernah mewakili Indonesia di festival video mapping dunia di Rusia.', NULL, 'images/kuliah_umum/75352162_216105679387808_7304766995438592142_n.jpg'),
(2, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Luqman Hidayat', '', 'Creative Sharing: Font Dalam Kehidupan ', 'Creative Sharing Font dalam Kehidupan memberikan pandangan alternatif terhadap aplikasi desain tulisan pada berbagai media. Lukman Hidayat memberikan gambaran bahwa tipografi memiliki makna serta fungsi yang luas. Apa lagi hal sederhana ini dapat membantu banyak kegiatan dan aktivitas seluruh kehidupan manusia.', NULL, 'images/kuliah_umum/145091872_2901219846868609_800046148206095762_n.jpg'),
(3, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Muklay dan Satriadi ', '', 'Tantangan Branding Visual di Era Pandemi', '', NULL, 'images/kuliah_umum/163237654_748454979151234_7808856988305635512_n.jpg'),
(4, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Ipung Kurniawan', '', 'Implementasi Konsep (Accetable + Relevance) sebagai Pendekatan Komunikasi Visual dalam Revitalisasi Kawasan Urban Jono Kampoeng Hepi', 'Berbagai macam definisi yang lazim terdengar saat ini seperti; kampung wisata, village tourism, ecotourism merupakan pendekatan pengembangan kepariwisataan yang berupaya untuk menjamin agar wisata dapat dilaksanakan di daerah tujuan wisata bukan perkotaan. Dengan pendekatan desain komunikasi visual citra kampung tidak hanya berpusat pada ‘kunjungan wisata’ tapi kampung juga menjadi kegiatan yang melibatkan masyarakat sehingga mampu berdampak ekonomi yang membuat masyarakat setempat mengalami metamorphose dalam berbagai aspeknya. Untuk membicarakan lebih lanjut tentang proses kreatif dalam membangun komunikasi visual kampung wisata Prodi DKV ITTP mengadakan webinar dengan tema:*“Implemetasi konsep (Acceptable + Relevance) sebagai Pendekatan Komunikasi Visual dalam Revitalisasi Kawasan Urban Joho Kampoeng Hepi.”', NULL, 'images/kuliah_umum/196321648_4142633175804853_3141678964112779382_n.jpg'),
(5, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Aditya Febrian ', '', 'Public Lecture: Visual Merchandising', 'Display dan ruang telah mengkonsepsikan dirinya sebagai situs yang mampu mengarahkan pada tindakan konsumen, pengalaman, dan kesenangan. Dengan cara inilah hasil desain dari merchandising pada ruang konsumsen, membuatnya tampak menjadi solusi, pilihan, dan terobosan yang masuk akal dan tak dapat di hindarkan.', NULL, 'images/kuliah_umum/202275440_828316387805331_8915891323027600403_n.jpg'),
(6, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Misbachul Munir ', '', 'Advertising Photography', 'Strategi dalam menjual foto dalam microstock merupakan salah solusi ketika karya foto hanya diarsipkan di hard drive penyimpanan. Misbachul Munir memberikan cara bagaimana menyimpan foto dengan resolusi tinggi namun juga mendapatkan pendapatan pasif.  Beliau adalah salah satu orang yang aktif dan memiliki reputasi yang baik pada platform shutterstock. Tidak hanya itu, fotografi ternyata dapat digunakan sebagai media periklanan dan menjadikan sebuah lini bisnis yang cukup menghasilkan.', NULL, 'images/kuliah_umum/205482868_965261554307028_325027636446022803_n.jpg'),
(7, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'Takuro Kotaka', '', 'Proses Kreatif dalam Sinema', 'TAKURO KOTAKA merupakan sutrada film dan seniman kontemporer yang berkarya secara lintas media. Karya-karyanya banyak mengangkat tema yang melekat pada narasi keseharian seperti mitos, rumor, simbol-simbol yang sudah mulai dilupakan dan disajikan dengan pendekatan humor, scient fiction dan fiksi/dokumenter.', NULL, 'images/kuliah_umum/243443384_279223324025294_4025955599924146214_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulums`
--

CREATE TABLE `kurikulums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mata_kuliah` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sks` varchar(255) DEFAULT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulums`
--

INSERT INTO `kurikulums` (`id`, `created_at`, `updated_at`, `mata_kuliah`, `deskripsi`, `sks`, `semester`) VALUES
(1, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Bahasa Inggris Umum', '', NULL, 1),
(2, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Nirmana', '', NULL, 1),
(3, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Pengantar Seni Budaya', '', NULL, 1),
(4, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Pengantar Ilmu Komunikasi', '', NULL, 1),
(5, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Gambar Bentuk', '', NULL, 1),
(6, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Fotografi Dasar', '', NULL, 1),
(7, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Studio DKV 1', '', NULL, 2),
(8, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Bahasa Indonesia', '', NULL, 2),
(9, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Pendidikan Agama', '', NULL, 2),
(10, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Gambar Karakter', '', NULL, 2),
(11, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Komputer Grafis 1', '', NULL, 2),
(12, '2023-10-04 21:18:09', '2023-10-04 21:18:09', 'Fotografi Desain', '', NULL, 2),
(13, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Studio DKV 2', '', NULL, 3),
(14, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Bahasa Inggris Komunikasi Bisnis', '', NULL, 3),
(15, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Literasi Teknologi', '', NULL, 3),
(16, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Tipografi Desan', '', NULL, 3),
(17, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Komputer Grafis 2', '', NULL, 3),
(18, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Estetika', '', NULL, 3),
(19, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Manajemen Umum', '', NULL, 3),
(20, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Kapita Selekta', '', NULL, 3),
(21, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Studio DKV 3', '', NULL, 4),
(22, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Ilustrasi', '', NULL, 4),
(23, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'SDesign Thinking', '', NULL, 4),
(24, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Videografi 1', '', NULL, 4),
(25, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Desain Kemasan', '', NULL, 4),
(26, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Semiotika Visual', '', NULL, 4),
(27, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Periklanan', '', NULL, 4),
(28, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Studio DKV 4', '', NULL, 5),
(29, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Ekosistem Kreatif', '', NULL, 5),
(30, '2023-10-04 21:18:10', '2023-10-04 21:18:10', 'Psikologi Persepsi', '', NULL, 5),
(31, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Videografi 2', '', NULL, 5),
(32, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Animasi 2D', '', NULL, 5),
(33, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Metodologi Perancangan', '', NULL, 5),
(34, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Metodologi Penelitian', '', NULL, 5),
(35, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Tinjauan Penelitian', '', NULL, 6),
(36, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Pendidikan Pancasila', '', NULL, 6),
(37, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'MK Pilihan 1', '', NULL, 6),
(38, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Animasi 3D', '', NULL, 6),
(39, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Creativepreneurship', '', NULL, 6),
(40, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Portofolio Strategi', '', NULL, 6),
(41, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Etika Profesi', '', NULL, 6),
(42, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Media Strategi', '', NULL, 7),
(43, '2023-10-04 21:18:11', '2023-10-04 21:18:11', 'Seminar', '', NULL, 7),
(44, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Kerja Praktek', '', NULL, 7),
(45, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Kritik Desain', '', NULL, 7),
(46, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Desain Pameran', '', NULL, 7),
(47, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'New Media', '', NULL, 7),
(48, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Kewarganegaraan', '', NULL, 7),
(49, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'MK Pilihan 2', '', NULL, 7),
(50, '2023-10-04 21:18:12', '2023-10-04 21:18:12', 'Tugas Akhir', '', NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_12_093536_create_beranda_heroes_table', 1),
(6, '2023_08_12_102027_create_dosens_table', 1),
(7, '2023_08_12_103944_create_penjurusans_table', 1),
(8, '2023_08_12_105104_create_beranda_video_sections_table', 1),
(9, '2023_08_12_110155_create_karyas_table', 1),
(10, '2023_08_12_111216_create_beritas_table', 1),
(11, '2023_08_12_114605_create_events_table', 1),
(12, '2023_09_02_133622_create_profils_table', 1),
(13, '2023_09_03_053815_create_akademiks_table', 1),
(14, '2023_09_03_110004_create_programs_table', 1),
(15, '2023_09_03_110259_create_penelitians_table', 1),
(16, '2023_09_03_110946_create_galeris_table', 1),
(17, '2023_09_04_150932_create_homes_table', 1),
(18, '2023_09_24_232643_create_berandas_table', 1),
(19, '2023_09_25_074907_create_kenapa_harus_dkvs_table', 1),
(20, '2023_09_25_180205_create_penawarans_table', 1),
(21, '2023_09_28_012308_create_visimisis_table', 1),
(22, '2023_09_28_013807_create_alumnis_table', 1),
(23, '2023_09_28_020018_create_fasilitas_table', 1),
(24, '2023_09_28_022602_create_kurikulums_table', 1),
(25, '2023_09_28_041339_create_kuliah_umums_table', 1),
(26, '2023_09_29_074733_create_pengmas_table', 1),
(27, '2023_09_29_082307_create_tugasakhirs_table', 1),
(28, '2023_09_29_085736_create_kerjaprakteks_table', 1),
(29, '2023_09_29_185729_create_hibahs_table', 1),
(30, '2023_09_29_203055_create_kategori_gambars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penawarans`
--

CREATE TABLE `penawarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `headline` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `action_link` varchar(255) NOT NULL,
  `action_label` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penawarans`
--

INSERT INTO `penawarans` (`id`, `created_at`, `updated_at`, `headline`, `isi`, `action_link`, `action_label`, `gambar`, `default`) VALUES
(1, '2023-10-04 21:18:05', '2023-10-04 21:18:05', 'Wujudkan Mimpimu dengan Menjadi Mahasiswa ITTP', 'Institut Teknologi Telkom Purwokerto menawarkan peluang pendidikan berkualitas dengan lingkungan inspiratif dan fasilitas modern. Dosen berpengalaman akan membimbing kamu meraih prestasi gemilang serta mengembangkan potensi. Bergabunglah untuk mengasah keterampilan sosial dan kepemimpinan dalam komunitas yang mendorong kesuksesan di masa depan.', 'https://pmb.ittelkom-pwt.ac.id', 'Daftar Sekarang', 'images/dkv/join.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penelitians`
--

CREATE TABLE `penelitians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengmas`
--

CREATE TABLE `pengmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `headline` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengmas`
--

INSERT INTO `pengmas` (`id`, `created_at`, `updated_at`, `headline`, `isi`, `gambar`) VALUES
(1, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'Pengabdian Masyarakat Desa Kemutug Kidul', 'Kemutug Kidul merupakan desa pengrajin bambu yang berada di Kecamatan Baturraden, Kabupaten Banyumas. Desa ini berada di jalur pariwisata Baturraden. Desa Kemutug Kidul merupakan sentra pengrajin bambu terbesar dan menjadi satu-satunya desa yang menjadi sentra pengrajin bambu di Kabupaten Banyumas. Produk kerajinan bambu yang terkenal dari desa ini adalah kursi malas dan gazebo.<br>\n                Desa Kemutug Kidul juga memiliki lokal wisata yang bagus namun masih kurang dalam memaksimalkan potensinya. Curug Orak-Arik dan Curug Carang merupakan salah satu lokal wisata di desa Kemutug Kidul yang masih belum terawat sepenuhnya. Beberapa akses dan penanda pada lokasi wisata tersebut belum tersedia.<br>\n                Pada pengabdian masyarakat ini dosen beserta mahasiswa merancang infografis terkait profil desa, katalog produk kerajinan bambu, aktivasi media sosial, dan sign system. Selain itu juga mencanangkan program yang bertujuan untuk membantu serta melestarikan wisata curug desa Kemutug Kidul dengan mengalokasikan sebagian penghasilan dari para pengrajin bambu, untuk pemberdayaan wisata curug agar berkembang dan lebih terawat.\n                <br>\n                Pelaksanaan sosialasasi dilakukan pada event Peken Banyumasan dan juga di Desa Kemutug Kidul. Program pengabdian masyarakat ini juga sebagai bentuk peran Institusi dalam tanggung jawab sosial kepada masyarakat sekitar, dan merupakan bentuk luaran dari mata kuliah Studio DKV 4.\n                ', 'images/pengmas/kemutug_kidul.png'),
(2, '2023-10-04 21:18:13', '2023-10-04 21:18:13', 'Pengabdian Masyarakat Bamboonesia', 'Pada Desa Bokol ditemukan sumber daya bambu yang melimpah dan belum dimaksimalkan potensinya sehingga Bambonesia ingin memakasimalkan potensi desa melalui workshop atau edukasi masyarakat desa tentang keunikan bambu dan bagaimana bambu dapat menjadi produk yang bernilai.<br>\n                Bambonesia.id merupakan sebuah wadah kreativitas yang bergerak di bidang pemberdayaan masyarakat berkelanjutan dengan mengoptimalkan potensi sosial dan lingkungan. Seni pengelolaan dan kerajinan dari bambu. Bambonesia.id memberikan layanan Jasa hasil seni dan konstruksi berbahan dasar bambu serta program satu juta pohon bambu sebagai program konservasi lingkungan.<br>\n                Pada pengabdian masyarakat ini dosen beserta mahasiswa melakukan riset mengenai UKM Kerajinan lokal Bambonesia untuk menemukan permasalahan yang bisa diselesaikan dengan keilmuan DKV. Terdapat dua program yang dilakukan sebagai solusi atas masalah yang telah diidentifikasi. Pertama, membantu Bamboonesia sendiri sebagai suatu brand lokal agar lebih dikenal dengan merancang branding dan juga promosi. Kedua mengangkat isu sosial sebagai konsep kampanye yang direalisasikan dengan memberdayakan masyarakat di sekitar Bambonesia. Pada realisasi program pemberdayaan masyarakat desa dilakukan dengan memberikan pelatihan berupa workshop yang dapat menambah skill mereka. Dengan adanya kampanye ini diharapkan dapat meningkatkan perekonomian masyarakat sekitar melalui kerajinan bambu.<br>\n                Pelaksanaan sosialasasi dilakukan pada event Peken Banyumasan. Program pengabdian masyarakat ini juga sebagai bentuk peran Institusi dalam tanggung jawab sosial kepada masyarakat sekitar, dan merupakan bentuk luaran dari mata kuliah Studio DKV 4.\n                .\n                ', 'images/pengmas/bamboonesia.png');

-- --------------------------------------------------------

--
-- Table structure for table `penjurusans`
--

CREATE TABLE `penjurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `subheadline` text NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `created_at`, `updated_at`, `nama`, `subheadline`, `deskripsi`, `foto`, `kategori`) VALUES
(1, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'PostHuman International Poster Exhibition', 'Sebagai event pameran poster internasional, PostHuman Exhibition berorientasi untuk merespon dan berefleksi gejala global yang terjadi dewasa ini.', 'Post Human #2 merupakan event tahunan Prodi DKV ITTP yang berupa pameran poster internasional yang bergerak di bidang Visual Art & Design. Tujuan dari acara ini adalah untuk menumbuhkan ruang belajar bersama bagi mahasiswa, dosen maupun artist yg terlibat dalam menyelenggarakan event pameran dan juga sebagai ajang kreatifitas bagi kreator, desainer, dan akademisi dalam ranah industri kreatif. Partisipan yang terlibat terdiri dari 20 negara dan 160 artist.\n\n                Selain diselenggarakan di Galeri Satria IT Telkom Purwokerto, Post Human #2 juga digelar di Hetero Space Banyumas. Dua tempat tersebut menjadi pilihan penyelenggaraan event pameran dikarenakan tempat yang representatif dan lokasi yang sangat strategis di pusat kota.\n                \n                “Space Hetero sangat luas, sehingga mempermudah panitia dalam menyeting dan ploting tempat. Fasilitas sangat memadai, pelayanan sangat baik, ramah dan interaktif serta komunikatif, suasanya sangat nyaman” jelas salah satu panitia.\n                \n                Pameran hari pertama (30/01/2023) dimulai Pukul 10.00 WIB-18.00 WIB dengan peserta yang hadir lebih dari 200 orang.\n                \n                Gelaran pameran ini diharapkan dapat menjadi media pembacaan terhadap kondisi sosial atau perubahan social yg hadir di masyarakat. Mulai dari kritik sosial sampai ungkapan harapan bagi kehidupan manusia yg lebih baik.', 'posthuman.jpg', 'internal'),
(2, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'Rekarya - International Video Festival', 'Festival yang melibatkan 12 negara, 44 partisipan, 60 video+film beserta 25 brand showcase ini bertempat di galeri satria, basement gedung DSP, dan lab auvi ITTP.', 'Festival yang melibatkan 12 negara, 44 partisipan, 60 video+film beserta 25 brand showcase ini bertempat di galeri satria, basement gedung DSP, dan lab auvi ITTP.', 'rekarya.jpg', 'internal'),
(3, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'Djagongan Kreatif', 'Salah satu event kreatif khusus mahasiswa DKV yang menghadirkan praktisi dalam dunia desain. Seperti halnya kuliah umum untuk para mahasiswa DKV.', 'Salah satu event kreatif khusus mahasiswa DKV yang menghadirkan praktisi dalam dunia desain. Seperti halnya kuliah umum untuk para mahasiswa DKV. Selain itu mahasiswa juga mendapatkan ilmu dari dunia akademis kampus sekaligus juga mendapatkan  ilmu dari dunia profesional kerja desain.\n                <br>\n                Berbagai program event telah terlaksana seperti \n                Mengundang praktisi profesional Ilustrator  Muklay dan Sony Wicaksana, Fotografer Roy Genggam, videographer Afton Brewok, hingga Hanes dan Gilang dari studio lepaskendali membahas video mapping dan video jockey.\n                <br>\n                Selain hal tersebut untuk menunjang pembelajaran, di beberapa mata kuliah kami juga mengundang Dosen Tamu dari Rege Luhur ketua ADGI, Hadi Ismanto founder Manual Jakarta, Adin ketua Komite Kreatif Jateng.\n                <br>\n                Untuk mendiskusikan desain secara lingkup global kami mengadakan International Symposium : Artificial Being. Mengundang Speaker:\n                <br>\n                <b>Rene TA Lyslof</b>, (Professor at University of California Riverside and Faculty Member. Studies Music, Electronic Music, and Media Arts)\n                Jeong-Ok Jeon (Korean curator who is actively engaging in Southeast Asian contemporary art)\n                <br>\n                <b>Venzha Christ</b> (Founder of and current director of HONF Foundation, v.u.fo.c and ISSS (Indonesia Space Science Society)\n                <br>\n                <b>Gilang Ramadhan</b> (Creative Brandpreneur, Founder Pasar Wiguna, Visual Communication Design lecturer Institut Teknologi Telkom Purwokerto)\n                <br>\n                <b>Obed Bima Wicandra</b>(Lecturer, Street Artist. Visual Communication Design, Petra Christian University and member of XDKVISIYK)\n                ', 'djagongan.jpg', 'internal'),
(4, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'Aurora', 'Prodi DKV ITTP memiliki program pameran tahunan bernama Pameran Aurora. Pameran Aurora adalah pameran yang khusus menampilkan karya-karya mahasiswa DKV baik melalui jalur pilihan dosen maupun melalui open submission.', 'Prodi DKV ITTP memiliki program pameran tahunan bernama Pameran Aurora. Pameran Aurora adalah pameran yang khusus menampilkan karya-karya mahasiswa DKV baik melalui jalur pilihan dosen maupun melalui open submission. Karya pilihan dosen merupakan karya-karya yang dipamerkan hasil dari tugas-tugas dari mata kuliah DKV dari beberapa semester. Sementara karya open submission merupakan karya di luar tugas mata kuliah DKV. Pameran ini dilaksanakan setiap tahun ajaran baru dengan tujuan untuk memperkenalkan prodi DKV kepada mahasiswa baru setiap tahunnya.', 'aurora.jpg', 'internal'),
(5, '2023-10-04 21:18:15', '2023-10-04 21:18:15', 'Biorama', 'Biorama merupakan manifestasi kolaborasi antara tim BKRWL*1939 yang notabenenya berasal dari DKV ITTP, Bank Indonesia, dan Hetero Space Banyumas dalam upaya menumbuhkan ekosistem publik yang mendukung proses aktivasi lingkungan Eks.', 'Biorama merupakan manifestasi kolaborasi antara tim BKRWL*1939 yang notabenenya berasal dari DKV ITTP, Bank Indonesia, dan Hetero Space Banyumas dalam upaya menumbuhkan ekosistem publik yang mendukung proses aktivasi lingkungan Eks. Rumah Jabatan Bakorwil sebagai ruang kreatif. Tempat ideal untuk bertemunya artisan, komunitas hingga seluruh lapisan masyarakat untuk bercengkrama dan berjejaring.\n                Biorama hadir di tengah hingar-bingar pusat Kabupaten Banyumas (Purwokerto) dengan mengusung konsep berpiknik santai dimana pengunjung dapat menikmati waktu akhir pekan. Melakukan aktivitas kreatif dengan suguhan berbagai macam sarapan sehat dan didukung oleh creative market dan suasana bersejarah nan tentram.', 'biorama.jpg', 'kolaborasi'),
(6, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'Peken Banyumasan', 'Peken Banyumasan hadir di tengah-tengah kearifan lokal budaya Banyumasan sebagai ruang insan kreatif untuk mengeksplorasi ide, berkarya, dan berjejaring dengan prinsip metode kolaborasi hexa helix. Ruang kreatif yang diinisiasi oleh dosen DKV ITTP ini diselenggarakan setiap satu bulan sekali.', 'Peken Banyumasan hadir di tengah-tengah kearifan lokal budaya Banyumasan sebagai ruang insan kreatif untuk mengeksplorasi ide, berkarya, dan berjejaring dengan prinsip metode kolaborasi hexa helix. Ruang kreatif yang diinisiasi oleh dosen DKV ITTP ini diselenggarakan setiap satu bulan sekali.\n                Dalam setiap gelaran acaranya, Peken Banyumasan menggunakan tagar #Mrapat sebagai bentuk penghargaan terhadap Adipati Mrapat yang telah mendirikan Banyumas dan sebagai bentuk campaign ajakan untuk merapat. Peken Banyumasan telah berjalan selama satu tahun pelaksanaan dan menjadi inspirasi pertumbuhan ekosistem kreatif di wilayah Banyumas dan sekitarnya.\n                Keberhasilan Peken Banyumasan sebagai ruang kreatif sempat disorot oleh Kemenparekraf dan terabadikan dalam sebuah film dokumenter singkat berjudul Mrapat Banyumasan yang ditayangkan di Lift Off Global Session 2023, United Kingdom.', 'peken.jpg', 'kolaborasi'),
(7, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'Mlampah Sareng', 'Mlampah Sareng sebagai program walking tour yang diinisiasi oleh program studi DKV ITTP berupaya mengajak dan turut serta melibatkan berbagai elemen seperti akademisi, pemerintahan setempat, tokoh masyarakat, hingga warga lokal untuk berkolaborasi bersama.', 'Sebuah tempat atau lokasi tentu memiliki histori. Sejarah dapat dikatakan bernilai tinggi dan memuat potensi untuk dikembangkan di bidang ilmu pengetahuan lainnya. Banyak tempat yang bisa dieksplorasi khususnya di beberapa titik seperti Pasar Manis, Sokaraja, dan Banyumas Kota Lama. Tiga titik tersebut menyimpan cerita dan sejarahnya masing-masing.\n                Mlampah Sareng sebagai program walking tour yang diinisiasi oleh program studi DKV ITTP berupaya mengajak dan turut serta melibatkan berbagai elemen seperti akademisi, pemerintahan setempat, tokoh masyarakat, hingga warga lokal untuk berkolaborasi bersama. Dengan tujuan bisa saling bertukar cerita, harapannya peserta Mlampah Sareng dapat lebih mengenal potensi suatu daerah sehingga diperoleh insight dari setiap perjalanan dan tempat yang dikunjungi.', 'mlampah.jpg', 'kolaborasi'),
(8, '2023-10-04 21:18:16', '2023-10-04 21:18:16', 'Soetedja Makerfest', 'oetedja Makerfest merupakan bentuk pergerakan yang dijalankan oleh program studi DKV ITTP untuk memberikan ruang kepada para insan kreatif untuk mengeksplorasi ide, berkarya, dan menjalin koneksi sehingga bisa tercipta ekosistem kreatif di dalam pasar yang memberikan dampak baik bagi pasar dan masyarkat di sekitar.', 'Soetedja Makerfest merupakan bentuk pergerakan yang dijalankan oleh program studi DKV ITTP untuk memberikan ruang kepada para insan kreatif untuk mengeksplorasi ide, berkarya, dan menjalin koneksi sehingga bisa tercipta ekosistem kreatif di dalam pasar yang memberikan dampak baik bagi pasar dan masyarkat di sekitar.\n                Soetedja Makerfest menyuguhkan enam program meliputi local makers, exhibition, pasar walking tour, workshop, creative sharing, dan performance.', 'soetedja.jpg', 'kolaborasi');

-- --------------------------------------------------------

--
-- Table structure for table `tugasakhirs`
--

CREATE TABLE `tugasakhirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visimisis`
--

CREATE TABLE `visimisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visimisis`
--

INSERT INTO `visimisis` (`id`, `created_at`, `updated_at`, `visi`, `misi`, `gambar`) VALUES
(1, '2023-10-04 21:18:08', '2023-10-04 21:18:08', 'Menjadi Program Studi Desain Komunikasi Visual berbasis Teknologi Informasi dan Komunikasi dalam mendukung bisnis industri kreatif pada sektor Healthcare, Agro Industry, Tourism dan Small Medium Enterprise dengan menghasilkan lulusan berkarakter dan berwawasan global.', '<ol>\n                <li>Menyelenggarakan Pendidikan Desain Komunikasi Visual yang adaptif terhadap kebaruan teknologi informasi dan komunikasi.</li>\n                <li>Melaksanakan penelitian di bidang industri kreatif yang bermanfaat bagi pengembangan ilmu pengetahuan dan teknologi.</li>\n                <li>Menyelenggarakan pengabdian masyarakat yang relevan dan berkelanjutan.</li>\n                 </ol>', 'images/profile/104203041_FOTOKAMPUS_1617176874376.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akademiks`
--
ALTER TABLE `akademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berandas`
--
ALTER TABLE `berandas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda_heroes`
--
ALTER TABLE `beranda_heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda_video_sections`
--
ALTER TABLE `beranda_video_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hibahs`
--
ALTER TABLE `hibahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyas`
--
ALTER TABLE `karyas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_gambars`
--
ALTER TABLE `kategori_gambars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenapa_harus_dkvs`
--
ALTER TABLE `kenapa_harus_dkvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerjaprakteks`
--
ALTER TABLE `kerjaprakteks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliah_umums`
--
ALTER TABLE `kuliah_umums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulums`
--
ALTER TABLE `kurikulums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penawarans`
--
ALTER TABLE `penawarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penelitians`
--
ALTER TABLE `penelitians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengmas`
--
ALTER TABLE `pengmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjurusans`
--
ALTER TABLE `penjurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugasakhirs`
--
ALTER TABLE `tugasakhirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visimisis`
--
ALTER TABLE `visimisis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akademiks`
--
ALTER TABLE `akademiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berandas`
--
ALTER TABLE `berandas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beranda_heroes`
--
ALTER TABLE `beranda_heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beranda_video_sections`
--
ALTER TABLE `beranda_video_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hibahs`
--
ALTER TABLE `hibahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyas`
--
ALTER TABLE `karyas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_gambars`
--
ALTER TABLE `kategori_gambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kenapa_harus_dkvs`
--
ALTER TABLE `kenapa_harus_dkvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kerjaprakteks`
--
ALTER TABLE `kerjaprakteks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuliah_umums`
--
ALTER TABLE `kuliah_umums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kurikulums`
--
ALTER TABLE `kurikulums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `penawarans`
--
ALTER TABLE `penawarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penelitians`
--
ALTER TABLE `penelitians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengmas`
--
ALTER TABLE `pengmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penjurusans`
--
ALTER TABLE `penjurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tugasakhirs`
--
ALTER TABLE `tugasakhirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visimisis`
--
ALTER TABLE `visimisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
