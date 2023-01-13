-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 08:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_dac`
--

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_berobat` date NOT NULL,
  `keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter_id` bigint(20) UNSIGNED NOT NULL,
  `hasil_periksa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_rujuk` tinyint(4) NOT NULL,
  `nama_obat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_rs_id` bigint(20) UNSIGNED DEFAULT NULL,
  `biaya` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`id`, `nama_pasien_id`, `tanggal_berobat`, `keluhan`, `nama_dokter_id`, `hasil_periksa`, `confirm_rujuk`, `nama_obat_id`, `nama_rs_id`, `biaya`, `created_at`, `updated_at`) VALUES
(1, 3, '2023-01-11', 'Pusing dan demam', 2, 'COVID-19', 0, 1, NULL, 1500000, '2023-01-13 00:15:40', '2023-01-13 00:15:40'),
(2, 17, '2023-01-13', 'Sakit perut', 4, 'Maag', 0, 2, NULL, 35000, '2023-01-13 00:16:08', '2023-01-13 00:16:08'),
(3, 14, '2023-01-13', 'Sakit kepala', 5, 'Radang otak', 1, NULL, 5, 1800000, '2023-01-13 00:17:21', '2023-01-13 00:17:21'),
(4, 4, '2023-01-13', 'Demam', 3, 'COVID-19', 1, NULL, 3, 1800000, '2023-01-13 00:17:51', '2023-01-13 00:17:51'),
(5, 4, '2023-01-13', 'Demam', 3, 'Influenza', 0, 1, NULL, 1500000, '2023-01-13 00:18:26', '2023-01-13 00:18:26'),
(6, 17, '2023-01-13', 'Gatal-gatal', 3, 'Cacar air', 0, 1, NULL, 900000, '2023-01-13 00:19:05', '2023-01-13 00:19:05'),
(7, 2, '2023-01-13', 'Hidung tersumbat', 2, 'Flu', 0, 1, NULL, 15000, '2023-01-13 00:19:31', '2023-01-13 00:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` bigint(20) NOT NULL,
  `sip` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `nip`, `sip`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Daruna Widodo', 29506048676, 95366272015, '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(2, 'Dr. Atmaja Prabowo', 52672950883, 57019971801, '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(3, 'Dr. Latika Zulaika', 58337311348, 47557417023, '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(4, 'Dr. Aswani Gatra Januar', 30232926123, 69174947709, '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(5, 'Dr. Oni Farida', 3831242131, 81761062296, '2023-01-13 00:13:54', '2023-01-13 00:13:54');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_11_09_075222_create_pasien_table', 1),
(11, '2022_11_10_023727_create_dokter_table', 1),
(12, '2022_11_10_023843_create_rs_rujuk_table', 1),
(13, '2022_11_10_023908_create_obat_table', 1),
(14, '2022_11_10_023922_create_berobat_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_exp` date NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `jenis`, `deskripsi`, `tanggal_exp`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Paramex', 'Tablet', 'Membantu meredakan sakit kepala dan hidung tersumbat', '2023-10-12', 99, '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(2, 'Diapet', 'Kapsul', 'Membantu meredakan diare', '2023-09-08', 19, '2023-01-13 00:13:54', '2023-01-13 00:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `no_telepon`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Uli Suryatmi S.T.', 'Laki-laki', '1978-03-26', 'Jr. Tambak No. 177, Banjarmasin 87563, Lampung', '081726239202', 'aurora.hastuti@melani.mil.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(2, 'Labuh Samosir', 'Perempuan', '1973-06-11', 'Kpg. Tangkuban Perahu No. 677, Pekanbaru 90712, Papua', '089548993963', 'gina60@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(3, 'Ilsa Tantri Hastuti S.Pd', 'Perempuan', '1972-02-19', 'Gg. Industri No. 4, Kotamobagu 28578, DIY', '086665535964', 'adriansyah.candra@jailani.desa.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(4, 'Lega Hutasoit', 'Perempuan', '2014-08-10', 'Gg. Bhayangkara No. 503, Mojokerto 68642, Kaltim', '086732604476', 'eka61@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(5, 'Kenzie Jumadi Wibisono', 'Laki-laki', '1985-02-22', 'Dk. Rajawali Barat No. 75, Sungai Penuh 48778, Kaltara', '089335201702', 'amalia.suartini@saragih.biz.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(6, 'Dalima Nasyidah S.T.', 'Perempuan', '2020-11-30', 'Ds. Soekarno Hatta No. 817, Salatiga 65916, Sulteng', '083969734154', 'xkuswandari@rahayu.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(7, 'Paulin Kusmawati', 'Laki-laki', '2022-12-15', 'Psr. Bass No. 213, Sabang 51303, Riau', '089775594990', 'indra.nuraini@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(8, 'Elma Maryati', 'Laki-laki', '2003-10-09', 'Dk. Sudirman No. 889, Surakarta 40380, Sumsel', '085971530736', 'fathonah42@anggraini.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(9, 'Iriana Melani', 'Perempuan', '2022-10-30', 'Jln. Achmad Yani No. 9, Depok 44667, Kaltara', '081050505123', 'wibisono.gangsa@narpati.co', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(10, 'Bagus Habibi', 'Perempuan', '1986-11-19', 'Jln. Ters. Pasir Koja No. 562, Salatiga 90963, Sulsel', '084926751059', 'lanang.maryadi@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(11, 'Praba Darmana Maryadi S.Gz', 'Perempuan', '2018-08-28', 'Ki. B.Agam 1 No. 598, Manado 61579, Kalbar', '089978983543', 'mulyani.gilang@dabukke.my.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(12, 'Galih Uwais', 'Laki-laki', '1983-04-21', 'Psr. Sutarjo No. 658, Batu 24386, DKI', '080581361752', 'hfarida@wijayanti.info', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(13, 'Rini Uli Hastuti', 'Perempuan', '1990-10-11', 'Gg. Kalimantan No. 365, Surabaya 52017, Kaltim', '083306608716', 'farida.tania@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(14, 'Cawuk Jagaraga Simanjuntak M.Farm', 'Perempuan', '2001-06-29', 'Dk. Bayam No. 565, Sungai Penuh 26413, Jabar', '085210543617', 'wani95@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(15, 'Suci Puspasari M.Pd', 'Laki-laki', '2016-12-10', 'Jln. Babah No. 657, Yogyakarta 11796, Maluku', '089750587594', 'fathonah80@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(16, 'Wirda Yuliarti S.E.I', 'Laki-laki', '1998-11-26', 'Psr. Suryo Pranoto No. 659, Gorontalo 78927, Sulut', '088708654469', 'halimah.dariati@haryanto.biz.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(17, 'Sabar Soleh Natsir', 'Laki-laki', '2004-02-22', 'Ds. Baja Raya No. 899, Surabaya 83523, Sulsel', '080380517722', 'nrima.nuraini@yahoo.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(18, 'Janet Eva Pertiwi', 'Perempuan', '1991-11-10', 'Jln. Cihampelas No. 567, Cimahi 54271, Kalsel', '086103951420', 'heru.rajata@prasetyo.sch.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(19, 'Nilam Pertiwi', 'Perempuan', '2003-01-30', 'Ds. Gatot Subroto No. 496, Administrasi Jakarta Timur 51711, Banten', '085380898318', 'julia81@utami.org', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(20, 'Icha Hamima Rahmawati S.H.', 'Laki-laki', '1980-07-26', 'Jr. Merdeka No. 883, Pekanbaru 95734, Sumbar', '086034133677', 'haryanto.yance@novitasari.asia', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(21, 'Cindy Wijayanti', 'Perempuan', '2012-10-12', 'Kpg. Eka No. 560, Tarakan 48325, Sulteng', '085824877630', 'pwidiastuti@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(22, 'Uda Saptono', 'Perempuan', '1982-08-16', 'Dk. Pattimura No. 470, Bima 93805, Kalteng', '089610152200', 'usada.kajen@wulandari.name', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(23, 'Padmi Zulaika S.Psi', 'Perempuan', '2000-02-06', 'Kpg. Baabur Royan No. 416, Pontianak 85128, Sulbar', '082404012131', 'vanya.anggraini@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(24, 'Jelita Wirda Hastuti M.Pd', 'Laki-laki', '1984-02-13', 'Gg. Bah Jaya No. 857, Batam 56889, Sultra', '087802241077', 'nmaryadi@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(25, 'Aisyah Yessi Rahayu S.Pd', 'Perempuan', '2001-02-23', 'Gg. Bahagia No. 617, Surabaya 74237, Jabar', '081796560708', 'isamosir@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(26, 'Lalita Febi Wijayanti M.Kom.', 'Perempuan', '2017-09-06', 'Kpg. Bakau No. 4, Singkawang 23176, Bengkulu', '086095406439', 'empluk.kusmawati@yahoo.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(27, 'Eja Ihsan Wibowo S.Pd', 'Perempuan', '2006-09-18', 'Jln. Pacuan Kuda No. 620, Gunungsitoli 81569, DIY', '087918012584', 'luluh.budiman@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(28, 'Latika Paris Maryati S.IP', 'Laki-laki', '1996-11-05', 'Kpg. Suniaraja No. 78, Surakarta 11937, Sultra', '084464865133', 'jamil35@yahoo.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(29, 'Ilyas Prabowo', 'Perempuan', '1998-07-27', 'Dk. Baik No. 999, Surakarta 63525, Gorontalo', '080553323108', 'melinda.natsir@yahoo.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(30, 'Vanesa Usada M.Pd', 'Laki-laki', '1972-02-09', 'Jr. Achmad No. 628, Denpasar 96577, Jatim', '085284565520', 'wibisono.samsul@prasetya.biz', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(31, 'Genta Yolanda', 'Perempuan', '1994-12-31', 'Jln. Monginsidi No. 771, Jambi 64215, Malut', '080154117539', 'melani.dwi@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(32, 'Zulfa Laila Winarsih M.Farm', 'Laki-laki', '1975-04-23', 'Gg. Otto No. 697, Manado 65091, Aceh', '089980476240', 'xlailasari@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(33, 'Hilda Riyanti', 'Perempuan', '2015-09-21', 'Jr. Raden No. 370, Mataram 63987, Jatim', '083495378241', 'rusman.lailasari@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(34, 'Bakidin Suwarno', 'Perempuan', '1971-03-23', 'Jln. Raya Setiabudhi No. 814, Kediri 84419, Jateng', '081662515841', 'nova.kurniawan@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(35, 'Radit Siregar', 'Perempuan', '2008-10-25', 'Ki. R.M. Said No. 495, Tanjung Pinang 80636, Sulsel', '082908829693', 'alika.prabowo@yahoo.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(36, 'Prayoga Ganjaran Megantara S.Gz', 'Laki-laki', '2016-07-14', 'Ds. Ters. Kiaracondong No. 693, Tidore Kepulauan 20287, Jateng', '088707147078', 'rahmat10@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(37, 'Hari Hidayanto S.Kom', 'Perempuan', '1995-09-19', 'Kpg. Flores No. 113, Singkawang 73126, Kalsel', '086542389457', 'kiandra.sihombing@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(38, 'Samiah Zulaika S.Ked', 'Perempuan', '1973-09-21', 'Jln. Banda No. 758, Mataram 40357, NTT', '085262917214', 'nainggolan.ozy@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(39, 'Pangestu Hutasoit', 'Perempuan', '1994-04-01', 'Kpg. Baranang Siang Indah No. 785, Gunungsitoli 10497, Jabar', '089309353912', 'imanullang@prayoga.name', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(40, 'Emil Gunarto', 'Perempuan', '2010-02-01', 'Gg. Ters. Jakarta No. 489, Kupang 83956, NTT', '089535406028', 'pranowo.faizah@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(41, 'Agnes Padmi Yulianti S.T.', 'Laki-laki', '1999-10-07', 'Jr. Setia Budi No. 11, Cirebon 49695, Sumut', '082924909370', 'ibrahim50@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(42, 'Mustika Budiyanto', 'Laki-laki', '2006-11-19', 'Gg. Baranang No. 374, Bukittinggi 75127, Kepri', '082620956778', 'fujiati.koko@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(43, 'Ulva Aryani', 'Laki-laki', '1997-06-13', 'Psr. Agus Salim No. 838, Sorong 85495, Gorontalo', '086069083437', 'pradana.balidin@hastuti.my.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(44, 'Rudi Waluyo', 'Perempuan', '1986-11-24', 'Gg. R.M. Said No. 177, Bandar Lampung 90278, Maluku', '087015881085', 'rahimah.ida@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(45, 'Vicky Kusmawati', 'Perempuan', '1974-01-11', 'Ki. Bass No. 854, Administrasi Jakarta Barat 54777, Jabar', '083154600642', 'julia87@prayoga.tv', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(46, 'Irfan Permadi', 'Laki-laki', '2016-07-12', 'Kpg. Gading No. 445, Pontianak 28583, Sulsel', '083080324153', 'ajiono.andriani@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(47, 'Bagus Sitompul S.IP', 'Laki-laki', '1990-11-13', 'Psr. Sudirman No. 93, Tidore Kepulauan 77014, Sulteng', '087660424494', 'oktaviani.ulva@mansur.web.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(48, 'Rahmi Farida', 'Laki-laki', '2022-04-15', 'Jr. Jayawijaya No. 231, Ambon 38602, DKI', '087869877436', 'ganep.prasetyo@prayoga.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(49, 'Wage Nainggolan', 'Perempuan', '1971-11-19', 'Ds. Ters. Pasir Koja No. 921, Kendari 75970, Kalteng', '084218778104', 'zahra84@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(50, 'Rendy Gaduh Sihombing', 'Laki-laki', '2017-03-28', 'Psr. Bambon No. 334, Surabaya 68049, Kalbar', '088035016078', 'kani16@wahyuni.info', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(51, 'Elon Mangunsong', 'Perempuan', '2019-05-08', 'Gg. Zamrud No. 723, Kediri 22807, Riau', '086249236244', 'humaira.pratama@wijayanti.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(52, 'Raharja Panca Tamba M.TI.', 'Perempuan', '1988-04-13', 'Psr. Sugiyopranoto No. 755, Denpasar 12544, Maluku', '084802775090', 'riyanti.titin@nasyiah.in', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(53, 'Luluh Cawisono Simanjuntak', 'Perempuan', '1972-04-19', 'Jr. Bakit  No. 426, Subulussalam 76443, Jatim', '080179014745', 'ismail98@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(54, 'Umar Akarsana Manullang S.Farm', 'Perempuan', '1986-10-02', 'Ki. Dr. Junjunan No. 551, Metro 65172, Papua', '089490815962', 'kawaca41@hakim.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(55, 'Karman Omar Hutapea S.H.', 'Perempuan', '1994-07-24', 'Dk. Kalimalang No. 361, Tangerang Selatan 43133, Babel', '085740614346', 'mandasari.samiah@tamba.biz.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(56, 'Rahmat Hidayat', 'Perempuan', '2015-12-04', 'Dk. Bahagia No. 238, Samarinda 80114, Sumbar', '082707452264', 'jailani.emas@yahoo.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(57, 'Faizah Silvia Uyainah S.Pd', 'Laki-laki', '1982-02-06', 'Ds. Taman No. 26, Surabaya 69007, Sulteng', '089586999653', 'mayasari.iriana@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(58, 'Yani Rahimah S.I.Kom', 'Perempuan', '1989-05-16', 'Dk. Sumpah Pemuda No. 527, Tasikmalaya 90585, Sulut', '085521776052', 'lili.marpaung@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(59, 'Genta Haryanti', 'Perempuan', '1999-12-12', 'Jln. Basoka No. 402, Administrasi Jakarta Timur 11257, Pabar', '084338489073', 'byulianti@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(60, 'Harjo Heru Sitompul S.Pd', 'Laki-laki', '1979-06-05', 'Dk. Supomo No. 792, Bitung 17965, Sumut', '083255177567', 'siska.maheswara@iswahyudi.or.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(61, 'Yunita Titin Anggraini S.IP', 'Laki-laki', '2006-03-31', 'Gg. Radio No. 171, Manado 58989, Sumbar', '085419190779', 'fhardiansyah@pertiwi.biz', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(62, 'Hamima Anggraini', 'Perempuan', '1979-04-12', 'Psr. Baya Kali Bungur No. 58, Bekasi 76358, Kalbar', '085172010863', 'rrahimah@saputra.sch.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(63, 'Aurora Namaga', 'Laki-laki', '1970-07-31', 'Jln. Cikutra Timur No. 625, Denpasar 69342, Lampung', '089513872171', 'sidiq06@pudjiastuti.my.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(64, 'Ibrani Wijaya S.Kom', 'Laki-laki', '2007-01-22', 'Ds. Wahidin No. 403, Pangkal Pinang 87475, Sumbar', '083340533251', 'cawuk09@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(65, 'Darman Kanda Prayoga', 'Perempuan', '2013-07-12', 'Dk. Bakau Griya Utama No. 801, Probolinggo 31057, Sumbar', '087461399588', 'najib33@nurdiyanti.desa.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(66, 'Jasmin Yuni Utami S.Sos', 'Laki-laki', '1991-10-25', 'Kpg. Ciwastra No. 575, Lubuklinggau 40927, Banten', '089777423001', 'handayani.cecep@utami.asia', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(67, 'Maria Ghaliyati Puspita', 'Perempuan', '1992-11-10', 'Ki. Sudirman No. 947, Tangerang 48154, Jabar', '081736218805', 'ysafitri@wibisono.mil.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(68, 'Mahmud Nainggolan', 'Laki-laki', '1972-08-28', 'Dk. Bakau No. 830, Tebing Tinggi 10920, Sulteng', '080603589057', 'citra.yulianti@yahoo.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(69, 'Mahmud Tarihoran M.M.', 'Perempuan', '2013-10-01', 'Ki. Soekarno Hatta No. 188, Prabumulih 15673, Lampung', '088205226319', 'ganda.pratama@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(70, 'Almira Aryani', 'Laki-laki', '1976-05-17', 'Jr. Halim No. 459, Surabaya 86153, Sumbar', '082465754065', 'pangestu.catur@sinaga.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(71, 'Farhunnisa Wastuti', 'Perempuan', '1985-05-07', 'Psr. Umalas No. 321, Batu 69175, Lampung', '089375325563', 'jinawi45@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(72, 'Dadi Tamba M.Ak', 'Laki-laki', '1979-09-17', 'Jln. Padang No. 388, Tegal 30934, Banten', '084371530362', 'queen.nasyidah@saefullah.go.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(73, 'Siska Zamira Zulaika M.Farm', 'Laki-laki', '2007-11-23', 'Dk. Babah No. 793, Tual 95683, Banten', '085463640643', 'lpradana@nababan.web.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(74, 'Praba Sidiq Wacana S.Pd', 'Perempuan', '1986-11-26', 'Jln. Babadak No. 944, Pangkal Pinang 57782, Jateng', '084777537221', 'yulianti.eli@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(75, 'Kacung Hidayat S.H.', 'Laki-laki', '2001-05-22', 'Ki. Imam Bonjol No. 799, Tegal 83781, Gorontalo', '083060319326', 'prabowo.indah@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(76, 'Maya Rahmawati M.Kom.', 'Laki-laki', '1989-01-27', 'Jr. Lumban Tobing No. 80, Sungai Penuh 24469, Sulsel', '083580955834', 'amalia88@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(77, 'Kacung Kenzie Wijaya S.IP', 'Laki-laki', '1978-03-20', 'Ki. Bahagia  No. 591, Lhokseumawe 38436, DKI', '083883106548', 'wahyuni.nadine@tampubolon.org', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(78, 'Estiawan Rudi Maryadi M.Pd', 'Perempuan', '1988-05-10', 'Psr. Ir. H. Juanda No. 560, Tangerang 69741, Sulut', '088104030120', 'bakiman.mandasari@lestari.net', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(79, 'Bahuwarna Marpaung', 'Laki-laki', '2001-08-27', 'Dk. Mahakam No. 240, Sungai Penuh 83624, Sumbar', '089362219790', 'vanya72@yuliarti.co', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(80, 'Jane Susanti S.H.', 'Laki-laki', '1988-11-17', 'Ds. Sadang Serang No. 901, Banjarmasin 55236, Sulsel', '085178775832', 'lnamaga@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(81, 'Sakura Hariyah', 'Laki-laki', '1985-03-04', 'Jln. Karel S. Tubun No. 697, Gorontalo 31889, Papua', '080857297304', 'janet.nurdiyanti@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(82, 'Taufan Sihombing', 'Perempuan', '2015-10-02', 'Jln. Bazuka Raya No. 324, Kendari 16672, Kepri', '087248784674', 'taufan.najmudin@marbun.desa.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(83, 'Safina Utami', 'Laki-laki', '2013-12-05', 'Dk. Lembong No. 64, Madiun 85110, Maluku', '080993100611', 'lzulkarnain@yahoo.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(84, 'Rusman Sirait', 'Laki-laki', '1980-08-13', 'Psr. Bakit  No. 955, Bandar Lampung 60338, Bali', '087636259607', 'permadi.candrakanta@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(85, 'Eva Pia Suryatmi', 'Laki-laki', '1971-05-09', 'Gg. Bayam No. 711, Depok 92005, Kaltara', '083343346229', 'yahya.hastuti@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(86, 'Atma Sitorus', 'Laki-laki', '2022-11-29', 'Psr. Krakatau No. 173, Magelang 99577, Sulsel', '089633143415', 'caturangga.pradipta@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(87, 'Enteng Kurniawan', 'Laki-laki', '1989-11-06', 'Kpg. Kartini No. 647, Pontianak 40060, Bengkulu', '084811980914', 'melani.ciaobella@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(88, 'Lukita Prayogo Kusumo M.Farm', 'Laki-laki', '1977-09-12', 'Kpg. Umalas No. 555, Banjarmasin 12104, NTB', '085612593687', 'purnawati.puput@nashiruddin.desa.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(89, 'Sadina Handayani S.Farm', 'Laki-laki', '2018-01-06', 'Psr. Aceh No. 580, Banjarbaru 96783, Sulut', '080739414212', 'hendra.prabowo@safitri.asia', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(90, 'Zamira Oktaviani', 'Laki-laki', '1987-04-04', 'Gg. Setiabudhi No. 737, Semarang 33012, Pabar', '080069149160', 'vhidayat@mardhiyah.org', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(91, 'Shania Mardhiyah', 'Perempuan', '2013-09-12', 'Kpg. Kalimantan No. 532, Prabumulih 38095, Jatim', '083502311484', 'gasti55@yahoo.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(92, 'Bancar Anggriawan', 'Laki-laki', '1970-04-04', 'Dk. Ki Hajar Dewantara No. 186, Cilegon 60226, Gorontalo', '089114482030', 'kanda.puspasari@fujiati.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(93, 'Nugraha Damanik', 'Perempuan', '2001-05-25', 'Jr. Abdul. Muis No. 797, Bontang 19316, Sulut', '087713300330', 'kardi.pratama@padmasari.desa.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(94, 'Cici Maryati', 'Perempuan', '1989-12-02', 'Jr. Merdeka No. 246, Madiun 47538, Sulut', '087774207894', 'hprayoga@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(95, 'Laras Purnawati', 'Perempuan', '2012-03-23', 'Ki. Baan No. 647, Malang 83082, Banten', '085209033400', 'cmanullang@gmail.com', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(96, 'Gantar Sirait S.Ked', 'Perempuan', '2006-02-16', 'Dk. Baung No. 897, Bau-Bau 78740, Jabar', '085934705755', 'vicky.hassanah@kuswandari.org', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(97, 'Unggul Manullang', 'Laki-laki', '2007-12-09', 'Dk. Baung No. 217, Prabumulih 43571, Kepri', '082212693296', 'hariyah.argono@wastuti.org', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(98, 'Talia Hastuti', 'Perempuan', '2018-05-01', 'Dk. Reksoninten No. 135, Pekanbaru 21358, Kalbar', '084810602504', 'mustofa.karsa@yahoo.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(99, 'Elisa Winarsih', 'Laki-laki', '2007-02-26', 'Dk. Yoga No. 293, Gorontalo 21903, Pabar', '089276862200', 'chandra.dabukke@gmail.co.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(100, 'Najwa Agustina', 'Laki-laki', '1987-01-17', 'Kpg. Setiabudhi No. 46, Prabumulih 89529, Bali', '081200454162', 'argono.firmansyah@hariyah.ac.id', '2023-01-13 00:13:54', '2023-01-13 00:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rs_rujuk`
--

CREATE TABLE `rs_rujuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rs_rujuk`
--

INSERT INTO `rs_rujuk` (`id`, `nama_rs`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'RS. Cinta', 'Gg. Teuku Umar No. 920, Bandung 31683, Sulsel', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(2, 'RS. Asirwanda', 'Ds. Cihampelas No. 605, Mojokerto 99747, Malut', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(3, 'RS. Bakiono', 'Kpg. Babakan No. 770, Cilegon 32871, Sumsel', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(4, 'RS. Syahrini', 'Jln. Jakarta No. 315, Batam 69535, Jateng', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(5, 'RS. Rahmi', 'Ds. Kali No. 54, Langsa 65205, NTB', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(6, 'RS. Oliva', 'Ki. Astana Anyar No. 531, Padang 10186, Bengkulu', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(7, 'RS. Rahmi', 'Dk. K.H. Maskur No. 405, Serang 88061, Sultra', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(8, 'RS. Dacin', 'Jr. Sutami No. 121, Lubuklinggau 55082, Bengkulu', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(9, 'RS. Tira', 'Dk. Salam No. 889, Parepare 69056, Malut', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(10, 'RS. Winda', 'Gg. Flora No. 219, Langsa 28684, Kaltara', '2023-01-13 00:13:54', '2023-01-13 00:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'M. Rian Basari', 'admin', '$2y$10$kgnYfwrdUtOMJl0AHc4XeO7WqyNJPfUYLzxZTffH0tyLf/qJ5VgeG', '2023-01-13 00:13:54', '2023-01-13 00:13:54'),
(2, 'John Doe', 'root', '$2y$10$TIAg8NiH7gbCshAjjMLvjeVAkuaZ6gJ7NBhZRtM.BLi0EmQTq/ZNy', '2023-01-13 00:13:54', '2023-01-13 00:13:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berobat_nama_pasien_id_foreign` (`nama_pasien_id`),
  ADD KEY `berobat_nama_dokter_id_foreign` (`nama_dokter_id`),
  ADD KEY `berobat_nama_obat_id_foreign` (`nama_obat_id`),
  ADD KEY `berobat_nama_rs_id_foreign` (`nama_rs_id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rs_rujuk`
--
ALTER TABLE `rs_rujuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rs_rujuk`
--
ALTER TABLE `rs_rujuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berobat`
--
ALTER TABLE `berobat`
  ADD CONSTRAINT `berobat_nama_dokter_id_foreign` FOREIGN KEY (`nama_dokter_id`) REFERENCES `dokter` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `berobat_nama_obat_id_foreign` FOREIGN KEY (`nama_obat_id`) REFERENCES `obat` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `berobat_nama_pasien_id_foreign` FOREIGN KEY (`nama_pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `berobat_nama_rs_id_foreign` FOREIGN KEY (`nama_rs_id`) REFERENCES `rs_rujuk` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
