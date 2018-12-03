-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2018 at 05:05 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7730312_hasanah`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuans`
--

CREATE TABLE `bantuans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bantuans`
--

INSERT INTO `bantuans` (`id`, `nama`, `email`, `WA`, `subjek`, `slug`, `pesan`, `created_at`, `updated_at`) VALUES
(4, 'Teguh Rijanandi', 'teguh@goeroeku.net', '082137285380', 'CSRF Testing', 'csrf-testing', '<p>CSFR Testing In Forms</p>', '2018-11-04 21:56:44', '2018-11-04 21:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oleh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email Pemosting Barang ini',
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `harga`, `oleh`, `kategori`, `stok`, `gambar`, `slug`, `deskripsi`, `created_at`, `updated_at`) VALUES
(5, 'Ciput 1 warna', '8000', 'edudwi257@gmail.com', 'Ciput', '30', 'Ciput 1 warna-IMG-20181012-WA0052.jpg', 'ciput-1-warna', '<p>Ciput/ bandana rajut 1 warna , bisa dipakai bolak-balik, dipakainya nyaman, tidak geser-geser dikepala, adem saat dipakai, kualitas baik, harga ramah, yang minat silahkan jangan ragu chat ya??</p>\r\n\r\n<p>*IDR : 8*☺</p>\r\n\r\n<p>Pre Order gaes?</p>', '2018-11-05 00:18:00', '2018-11-05 06:11:19'),
(6, 'Ciput 2 Warna', '8000', 'edudwi257@gmail.com', 'Ciput', '30', 'Ciput 2 Warna-CiputRajutanpus_2.jpg.jpg', 'ciput-2-warna', '<p>Ciput/ bandana rajut 2 warna , bisa dipakai bolak-balik, dipakainya nyaman, tidak geser-geser dikepala, adem saat dipakai, kualitas baik, harga ramah, yang minat silahkan jangan ragu chat ya??</p>\r\n\r\n<p>*IDR : 8K*☺</p>\r\n\r\n<p>Pre Order?</p>', '2018-11-05 00:22:22', '2018-11-05 06:12:52'),
(12, 'Ciput 4 warna', '8000', 'edudwi257@gmail.com', 'Ciput', '30', 'Ciput 4 warna-1541377421-picsay.jpg', 'ciput-4-warna', '<p>Ciput/ bandana rajut 4 warna, bisa dipakai bolak-balik, dipakainya nyaman, tidak geser-geser dikepala, adem saat dipakai, kualitas baik, harga ramah, yang minat silahkan jangan ragu chat ya??</p>\r\n\r\n<p>Pre Order?</p>\r\n\r\n<p>Klik Pesan Sekarang</p>', '2018-11-05 01:41:48', '2018-11-05 06:13:31'),
(18, 'Ciput kerut', '8000', 'edudwi257@gmail.com', 'Ciput', '30', 'Ciput kerut-Ciputrajutbandanarajut2warnakerutdannonkerut_1.jpg.jpg', 'ciput-kerut', '<p>Ciput/ bandana rajut 2 warna depan kerut belakang non kerut, bisa dipakai bolak-balik, dipakainya nyaman, tidak geser-geser dikepala, adem saat dipakai, kualitas baik, harga ramah, yang minat silahkan jangan ragu chat ya??</p>\r\n\r\n<p>Pre Order</p>', '2018-11-05 02:22:06', '2018-11-05 06:13:43'),
(19, 'Manset atau Handshock (Rajut)', '15000', 'edudwi257@gmail.com', 'Manset', '30', 'Manset atau Handshock (Rajut)-SAVE_20181105_091508.jpeg', 'manset-atau-handshock-rajut', '<p>Mangset rajut dengan kualitas baik, harga ramah, langsung dari pabrik, handfeel lembut, panjang 35 cm, terdapat pilihan warna cantik.</p>\r\n\r\n<p>*Pilihan warna:*<br />\r\nHitam, Putih, Merah, Maroon, Baby pink, Pink, Fanta, Dusty Pink, dusty purple, Army, Hijau Muda, hijau tua, Kuning, Mocca, Cream, Kopsu, Birel/ Biru Tua, Biru langit, Ungu tua, Ungu Muda, Abu Tua, Abu muda, silver muda, silver tua, abu monyet, Kuning, Denim, Mustard</p>\r\n\r\n<p>Pre Order</p>', '2018-11-05 02:26:02', '2018-11-05 06:14:06'),
(20, 'Khimar Simple pet', '25000', 'edudwi257@gmail.com', 'Hijab', '30', 'Khimar Simple pet-KhimarSimplePetlJilbabsimplePetlkhimarantem_2.jpg.jpg', 'khimar-simple-pet', '<p>Khimar simple pet<br />\r\nMatt : Wolfice Grade A<br />\r\nnyaman , sangat lembut,&nbsp;jajitan rapi dan teratur pinggiran neci</p>\r\n\r\n<p>Ukuran seperti gambar</p>\r\n\r\n<p>Tersedia warna:<br />\r\nHitam, Navy, Coklat, Mustard, Coksu, Lavender, Pink, Cream, salem, Maroon, Moca, Toska, Putih, Abu muda, Fanta.&nbsp;</p>\r\n\r\n<p><br />\r\n#Pre Order</p>', '2018-11-05 03:00:24', '2018-11-05 06:14:24'),
(21, 'Khimar pet Jumbo', '35000', 'edudwi257@gmail.com', 'Hijab', '30', 'Khimar pet Jumbo-KhimarSyaripetjumbo_1.jpg.jpg', 'khimar-pet-jumbo', '<p>Khimar syari jumbo<br />\r\nMatt : Wolfice Grade A<br />\r\nnyaman , sangat lembut<br />\r\njajitan rapi dan terarur</p>\r\n\r\n<p>Detail ukuran<br />\r\ndepan : 75 cm<br />\r\nbelakang: 110 cm</p>\r\n\r\n<p>Tersedia warna:<br />\r\nHitam, Navy, Mustard, Coksu, Moca, Lavender, Soft Pink, Cream, Maroon, Dusty, Fanta, mint, abu muda, Putih, Toska, Hijau Botol, Khaki.&nbsp;</p>\r\n\r\n<p><br />\r\n#Pre Order</p>', '2018-11-05 03:05:26', '2018-11-05 06:14:36'),
(22, 'Instan Salwa', '25000', 'edudwi257@gmail.com', 'Hijab', '30', 'Instan Salwa-1541387450-picsay.jpg', 'instan-salwa', '<p>*Instan Salwa*<br />\r\nBahan Buble, nyaman ketika dipakai, ringan, tidak mudah kusut, tidak terawang dan jatuh tapi tidak licin.&nbsp;<br />\r\nSuper nyaman untuk digunakan sehari-hari dan dapat digunakan untuk acara formal.<br />\r\nUkuran seperti photo,</p>\r\n\r\n<p>_Pilihan warna Instan Salwa :_<br />\r\nHitam, Navy, Marun, Milo, Abu Silver, Pink Muda, Abu Tua, Lavender, Coksu, Coklat Tua, Salem Pastel, Toska tua, Peach, Biru Langit, Coksu Pastel, Mustard, Pink, Putih, Cream, Merah cabe.&nbsp;</p>', '2018-11-05 03:17:26', '2018-11-05 06:14:51'),
(23, 'Pashmina semi Instan SABYAN', '35000', 'edudwi257@gmail.com', 'Hijab', '30', 'Pashmina semi Instan SABYAN-IMG-20181031-WA0015.jpg', 'pashmina-semi-instan-sabyan', '<p>*Pashmina semi Instan SABYAN*<br />\r\nPastan yang lagi Hits<br />\r\n*Bahan Buble, nyaman ketika dipakai, ringan, tidak mudah kusut, tidak terawang dan jatuh tapi tidak licin.&nbsp;<br />\r\n*Super nyaman untuk digunakan sehari-hari dan dapat digunakan untuk acara formal.<br />\r\n*Ukuran seperti photo, untuk leher sudah dijahit dagu</p>\r\n\r\n<p>Pilihan warna Pastan Sabyan:&nbsp;</p>\r\n\r\n<p>Hitam, Navy, Marun, Milo, Abu Silver, Pink Muda, Coksu, Lavender, Peach, Coklat Tua, Coksu pastel, Abu tua, Salem pastel, Toska, Biru muda, Turkish, Pink, Abu tua.&nbsp;</p>', '2018-11-05 03:20:11', '2018-11-05 06:15:45'),
(24, 'Instan Segitiga Keyra', 'Rp. 30000', 'edudwi257@gmail.com', 'Hijab', '30', 'Instan Segitiga Keyra-JilbabSegitigaInstanJulyapastankeyraartamikahijabsegi3khimar_1.jpg.jpg', 'instan-segitiga-keyra', '<p>*Segitiga Instan Keyra*</p>\r\n\r\n<p>Bahan Buble, nyaman ketika dipakai, ringan, tidak mudah kusut, tidak terawang dan jatuh tapi tidak licin.</p>\r\n\r\n<p>Super nyaman untuk digunakan sehari-hari dan dapat digunakan untuk acara formal.</p>\r\n\r\n<p>Ukuran seperti photo, dipinggir terdapat pita yang membuat jilbab ini sangat cantik</p>\r\n\r\n<p>Pilihan warna Segitiga Instan Keyra:&nbsp;<br />\r\n1. Hitam<br />\r\n2. Navy<br />\r\n3. Marun<br />\r\n4. Milo<br />\r\n5. Abu Silver<br />\r\n6. Pink Muda<br />\r\n7. Salem pastel<br />\r\n8. Lavender</p>\r\n\r\n<p>Bisa request warna tapi lebih lama??</p>', '2018-11-05 05:31:57', '2018-11-05 05:31:57'),
(25, 'Segitiga Instan', '30000', 'edudwi257@gmail.com', 'Hijab', '30', 'Segitiga Instan-1540776821-picsay.jpg', 'segitiga-instan', '<p>*Segitiga Instan*<br />\r\n*Bahan Buble, nyaman ketika dipakai, ringan, tidak mudah kusut, tidak terawang dan jatuh tapi tidak licin.&nbsp;<br />\r\n*Super nyaman untuk digunakan sehari-hari dan dapat digunakan untuk acara formal.<br />\r\n*Ukuran seperti photo, atas dua lapis ke belakang 1 lapis tapi tidak menerawang.&nbsp;</p>\r\n\r\n<p>Pilihan warna Segitiga Instan :&nbsp;<br />\r\n_Selalu restok_<br />\r\nHitam, Navy, Marun, Milo, Abu Silver, Pink Muda, Abu Tua, Coksu, Putih, Toska, Coklat Tua, Merah cabe, Pink, Lavender, Coklat tua, Salem pastel, Mustard, Biru langit, Turkish, Coksu pastel</p>', '2018-11-05 05:40:06', '2018-11-05 06:15:35'),
(26, 'Rok Wolfis', '45000', 'edudwi257@gmail.com', 'Rok', '30', 'Rok Wolfis-1541396555-picsay.jpg', 'rok-wolfis', '<p>*rok wolfis!*<br />\r\nBahan Grade A lembut :)<br />\r\nRok yang cocok untuk kegiatan sehari-hari<br />\r\nBisa dipakai formal atau santai :D</p>\r\n\r\n<p>READY<br />\r\nHITAM, NAVY, Peach, COKSU pastel, SKY BLUE, TOSKA MUDA, TOSKA TUA, MUSTARD, Ungu muda, Ungu violet tua, Hijau botol.&nbsp;</p>\r\n\r\n<p>Size : All size fit to XL<br />\r\nLingkar bawah rok 145 cm s/d 150 cm<br />\r\nLingkar pinggang meral pakai karet 60cm-120cm<br />\r\nPanjang standar 93cm-95cm&nbsp;<br />\r\nTidak ada saku, tidak ada furing.&nbsp;</p>', '2018-11-05 05:50:09', '2018-11-05 06:15:24'),
(27, 'Pashmina Instan Sala atau Hafizah', '30000', 'edudwi257@gmail.com', 'Hijab', '30', 'Pashmina Instan Sala atau Hafizah-PastanSalaSyariJilbabHijabKhimarOshiMurahPashminaInstanBuble_1.jpg.jpg', 'pashmina-instan-sala-atau-hafizah', '<p>HAFIZAH<br />\r\n*Pashmina instan Sala / Hafizah*<br />\r\nBahan Buble, nyaman ketika dipakai, ringan, tidak mudah kusut, tidak terawang dan jatuh tapi tidak licin. Super nyaman untuk digunakan sehari-hari dan dapat digunakan untuk acara formal.<br />\r\nUkuran 150x75 dijamin syar&#39;i&nbsp;</p>\r\n\r\n<p>_Pilihan Warna_<br />\r\nHITAM, NAVY, MILO, MARUN, ABU SILVER, ABU SMA, ABU TUA, PINK, PINK MUDA, PUTIH BERSIH, BIRU ELEKTRIK, LAVENDER, UNGU MUDA, MAGENTA, BABY BLUE, BIRU TURKISH, TOSKA, SALEM PASTEL, MINT, HIJAU MELON, MERAH CABE, CREAM, MUSTARD, COKLAT TUA, COKSU, SOFT SALEM.&nbsp;</p>', '2018-11-05 05:52:23', '2018-11-05 06:15:13'),
(28, 'Pashmina Instan Sala atau Zafina', '30000', 'edudwi257@gmail.com', 'Hijab', '30', 'Pashmina Instan Sala atau Zafina-1540778158-picsay.jpg', 'pashmina-instan-sala-atau-zafina', '<p>*ZAFINA*<br />\r\n*Pashmina instan Sala / Zafina*<br />\r\nBahan Buble, nyaman ketika dipakai, ringan, tidak mudah kusut, tidak terawang dan jatuh tapi tidak licin. Super nyaman untuk digunakan sehari-hari dan dapat digunakan untuk acara formal.<br />\r\nUkuran Medium 120x75 dijamin menutup dada dan pundak</p>\r\n\r\n<p>_Pilihan warna:_<br />\r\nHITAM, NAVY, MILO, MARUN, ABU SILVER, ABU SMA, ABU TUA, PINK, PINK MUDA, PUTIH BERSIH, PUTIH TULANG, LAVENDER, UNGU MUDA, MAGENTA, BABY BLUE, BIRU TURKISH, TOSKA MUDA, TOSKA TUA, MINT, HIJAU MELON, MERAH CABE, CREAM, MUSTARD, COKLAT TUA, COKSU, SOFT SALEM, SALEM PASTEL.&nbsp;</p>', '2018-11-05 05:55:29', '2018-11-05 06:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Hasanah Hijab</strong> merupakan situs yang melayani jual beli online kebutuhan wanita muslimah, untuk saat ini layanan kami hanya bisa dilakukan dengan sistem COD atau <em>Cash On Delivery</em> di area Purwokerto dan sekitarnya saja, dan insyaallah kami terus berupaya untuk terus mengembangkan usaha dan toko ini sehingga tercapai kepuasan pelanggan, karena puasnya pelanggan adalah <code>prioritas kami</code>.</p>\r\n\r\n<p>Jika anda merasa puas dengan pelayanan dan produk kami,anda dapat membagikan informasi tentang toko kami ini dengan membagikan alamat situs ini ke berbagai sosial media yang anda miliki, sehingga dapat berkembangnya toko kami ini.</p>', NULL, '2018-10-31 06:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Hijab', '2018-10-31 23:10:12', '2018-10-31 23:10:12'),
(2, 'Ciput', '2018-10-31 23:10:31', '2018-10-31 23:10:31'),
(3, 'Manset', '2018-11-05 01:45:19', '2018-11-05 01:45:19'),
(4, 'Rok', '2018-11-05 05:47:16', '2018-11-05 05:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `loadings`
--

CREATE TABLE `loadings` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `skrip` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loadings`
--

INSERT INTO `loadings` (`id`, `status`, `skrip`, `created_at`, `updated_at`) VALUES
(1, 1, '<div class=\"hide-large hide-medium\">\r\n      <div id=\"loader-wrapper\">\r\n        <br><br><br><br>\r\n        <div id=\"loader\"></div>\r\n        <br><br><br>\r\n        <h2 class=\"loading mt-5 text-dark\">Memuat Barang</h2>\r\n        <div class=\"loader-section section-left\"></div>\r\n        <div class=\"loader-section section-right\"></div>\r\n      </div>\r\n    </div>', NULL, '2018-11-06 21:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_31_102411_create_homes_table', 1),
(2, '2018_11_01_052929_create_barangs_table', 2),
(3, '2018_11_01_055903_create_kategoris_table', 3),
(4, '2018_11_03_061708_create_pesans_table', 4),
(5, '2018_11_03_113635_create_bantuans_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Apakah bisa dihubungi melalui Telp / SMS biasa melalui nomor yg disertakan?',
  `barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oleh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email Pemosting Barang ini',
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id`, `invoice`, `nama`, `telp`, `pertanyaan`, `barang`, `oleh`, `keterangan`, `jumlah`, `harga`, `alamat`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'HH12341050', 'Lala', '123', 'ya', 'Khimar Simple pet', 'edudwi257@gmail.com', 'Abu abu', 1, '25000', '<p>Sekolah</p>', 'pesanan-khimar-simple-pet-dari-lala', '2018-11-06 00:08:50', '2018-11-06 00:08:50'),
(8, 'HH12342621823', 'Wahyu', '1234', 'ya', 'Rok Wolfis', 'edudwi257@gmail.com', 'Lavender', 1, '45000', '<p>Sekolah</p>', 'pesanan-rok-wolfis-dari-wahyu', '2018-11-06 00:16:24', '2018-11-06 00:16:24'),
(9, 'HH123449527', 'Wahyu', '1234', 'ya', 'Pashmina Instan Sala atau Hafizah', 'edudwi257@gmail.com', 'Lavender', 1, '30000', '<p>Sekolah</p>', 'pesanan-pashmina-instan-sala-atau-hafizah-dari-wahyu', '2018-11-06 00:17:28', '2018-11-06 00:17:28'),
(11, 'HH1200799', 'Vega', '1', 'ya', 'Ciput 4 warna', 'edudwi257@gmail.com', 'No 8', 7, '56000', '<p>Sekolah</p>', 'pesanan-ciput-4-warna-dari-vega', '2018-11-06 00:19:42', '2018-11-06 00:19:42'),
(12, 'HH18285', 'Vega', '1', 'ya', 'Ciput 2 Warna', 'edudwi257@gmail.com', '*Hijau tua hijau muda, *hitam putih', 2, '16000', '<p>Sekolah</p>', 'pesanan-ciput-2-warna-dari-vega', '2018-11-06 00:21:00', '2018-11-06 00:21:00'),
(13, 'HH1232791', 'Dinda', '12', 'ya', 'Ciput 2 Warna', 'edudwi257@gmail.com', '*Hitam putih, *hitam maron', 2, '16000', '<p>Kroya</p>', 'pesanan-ciput-2-warna-dari-dinda', '2018-11-06 00:23:48', '2018-11-06 00:23:48'),
(14, 'HH12344119', 'Dinda', '1234', 'ya', 'Ciput 4 warna', 'edudwi257@gmail.com', 'No 4', 1, '8000', '<p>Kroya</p>', 'pesanan-ciput-4-warna-dari-dinda', '2018-11-06 00:25:10', '2018-11-06 00:25:10'),
(15, 'HH123458215', 'Mba bila', '12345', 'ya', 'Segitiga Instan', 'edudwi257@gmail.com', '*Pink,  *Navy', 2, '60000', '<p>Kroya</p>', 'pesanan-segitiga-instan-dari-mba-bila', '2018-11-06 00:27:19', '2018-11-06 00:27:19'),
(17, 'HH1211045', 'Vega', '121', 'ya', 'Ciput 4 warna', 'edudwi257@gmail.com', 'No 1', 1, '8000', '<p>Sekolah</p>', 'pesanan-ciput-4-warna-dari-vega', '2018-11-06 09:36:09', '2018-11-06 09:36:09'),
(18, 'HH12311011792', 'Hani', '1231', 'ya', 'Ciput 2 Warna', 'edudwi257@gmail.com', '*Hitam putih (2) *No 8 (2)', 4, '32000', 'Sekolah', 'pesanan-ciput-2-warna-dari-hani', '2018-11-06 09:39:22', '2018-11-06 09:39:22'),
(19, 'HH12137190', 'Cinung', '1213', 'ya', 'Khimar pet Jumbo', 'edudwi257@gmail.com', 'Warna lite pink', 1, '35000', '<p>Sokawera</p>', 'pesanan-khimar-pet-jumbo-dari-cinung', '2018-11-06 09:51:04', '2018-11-06 09:51:04'),
(20, 'HH12137190', 'Cinung', '1213', 'ya', 'Khimar pet Jumbo', 'edudwi257@gmail.com', 'Warna lite pink', 1, '35000', '<p>Sokawera</p>', 'pesanan-khimar-pet-jumbo-dari-cinung', '2018-11-06 09:51:05', '2018-11-06 09:51:05'),
(21, 'HH12137190', 'Cinung', '1213', 'ya', 'Khimar pet Jumbo', 'edudwi257@gmail.com', 'Warna lite pink', 1, '35000', '<p>Sokawera</p>', 'pesanan-khimar-pet-jumbo-dari-cinung', '2018-11-06 09:51:05', '2018-11-06 09:51:05'),
(23, 'HH12137190', 'Cinung', '1213', 'ya', 'Khimar pet Jumbo', 'edudwi257@gmail.com', 'Warna lite pink', 1, '35000', '<p>Sokawera</p>', 'pesanan-khimar-pet-jumbo-dari-cinung', '2018-11-06 09:51:05', '2018-11-06 09:51:05'),
(24, 'HH123418197', 'Cinung', '12341', 'ya', 'Ciput 2 Warna', 'edudwi257@gmail.com', '*No 14, *Hitam putih, *No 6, *No 8 (2) *', 7, '56000', '<p>Sokawera</p>', 'pesanan-ciput-2-warna-dari-cinung', '2018-11-06 09:54:43', '2018-11-06 09:54:43'),
(25, 'HH121337909', 'Cinung', '1213', 'ya', 'Manset atau Handshock (Rajut)', 'edudwi257@gmail.com', 'Hitam', 1, '15000', '<p>Sokawera</p>', 'pesanan-manset-atau-handshock-rajut-dari-cinung', '2018-11-06 09:56:20', '2018-11-06 09:56:20'),
(26, 'HH019478', 'Serli', '0', 'ya', 'Manset atau Handshock (Rajut)', 'edudwi257@gmail.com', 'Hitam,  silver', 2, '30000', '<p>Sokawera</p>', 'pesanan-manset-atau-handshock-rajut-dari-serli', '2018-11-06 09:59:18', '2018-11-06 09:59:18'),
(27, 'HH1230840727', 'Cinung', '1230', 'ya', 'Khimar Simple pet', 'edudwi257@gmail.com', 'Warna abu', 1, '25000', '<p>Sokawera</p>', 'pesanan-khimar-simple-pet-dari-cinung', '2018-11-06 10:02:47', '2018-11-06 10:02:47'),
(28, 'HH103092', 'Cinung', '10', 'tidak', 'Ciput 2 Warna', 'edudwi257@gmail.com', 'Hitam putih', 1, '8000', '<p>Sokawera</p>', 'pesanan-ciput-2-warna-dari-cinung', '2018-11-06 10:03:28', '2018-11-06 10:03:28'),
(29, 'HH1202068', 'Serli', '120', 'ya', 'Ciput 2 Warna', 'edudwi257@gmail.com', '*Hitam putih, *no 8', 2, '16000', '<p>Sokawera</p>', 'pesanan-ciput-2-warna-dari-serli', '2018-11-06 12:38:08', '2018-11-06 12:38:08'),
(30, 'HH10261522', 'Cinung', '102', 'ya', 'Manset atau Handshock (Rajut)', 'edudwi257@gmail.com', 'Dongker', 1, '15000', '<p>Sokawera</p>', 'pesanan-manset-atau-handshock-rajut-dari-cinung', '2018-11-06 12:39:13', '2018-11-06 12:39:13'),
(31, 'HH12309196688', 'Vega', '12309', 'ya', 'Ciput 4 warna', 'edudwi257@gmail.com', 'No 13', 1, '8000', '<p>Sekolah</p>', 'pesanan-ciput-4-warna-dari-vega', '2018-11-06 12:41:37', '2018-11-06 12:41:37'),
(32, 'HH12310569436', 'Afri', '12310', 'ya', 'Ciput 4 warna', 'edudwi257@gmail.com', '*No 8(7) *No 1(3)* No 2(1)', 11, '88000', '<p>Sawangan</p>', 'pesanan-ciput-4-warna-dari-afri', '2018-11-06 22:30:46', '2018-11-06 22:30:46'),
(34, 'HH10923573', 'Ismah', '109', 'tidak', 'Khimar pet Jumbo', 'edudwi257@gmail.com', 'coksu,  navy', 2, '70000', '<p><br />\r\n&nbsp;</p>', 'pesanan-khimar-pet-jumbo-dari-ismah', '2018-11-07 09:12:19', '2018-11-07 09:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Teguh Rijanandi', 'teguh@goeroeku.net', NULL, '$2y$10$g4iXqIOeTEEAzOZ2ZiU3/uL5/Q7DueDrfpVhsxxdOX9e2I/21N3PK', 'admin', 'YlE1fc6mkUYfMMM1ZIkhASSq3c12k4cFUdWjjt9iAUYTvVYifbQeO8Qz6xjo', '2018-10-31 03:35:15', '2018-10-31 03:35:15'),
(2, 'Edu Dwi H', 'edudwi257@gmail.com', NULL, '$2y$10$NdMuVckjSBiBVLy1MkNcoOByM0/s81FyxLmcDpSuHWsqHRTunddoO', 'admin', '512hZm0MsSNaTW29bcMErz0oVS5D2MGZ2aKw9MRDCvZktnmjenbB7xxxdNq1', '2018-11-04 21:59:38', '2018-11-04 21:59:38'),
(3, 'Elsa Norma S', 'elsanorma277@gmail.com', NULL, '$2y$10$mWXb8AhSS2Ejek.rMM2qaeDRtAp8Jv3ovHeNbSJ00PhpvAhgV18CG', 'admin', '1nlv3eluDH8niqd3w7jGQsvoR9hKwrcxMGoLSgo1v7x0aXlYXjqOAwujdRnB', '2018-11-10 02:58:30', '2018-11-10 02:58:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuans`
--
ALTER TABLE `bantuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loadings`
--
ALTER TABLE `loadings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuans`
--
ALTER TABLE `bantuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loadings`
--
ALTER TABLE `loadings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
