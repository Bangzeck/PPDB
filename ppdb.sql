-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 03:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_alumni`
--

CREATE TABLE `db_alumni` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `kutipan` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_alumni`
--

INSERT INTO `db_alumni` (`id`, `nama`, `titel`, `kutipan`, `gambar`) VALUES
(1, 'Rudiantara', 'Mentri Komunikasi Informatika', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', ''),
(2, 'Zakki Haris', 'Co-Founder', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_berita`
--

CREATE TABLE `db_berita` (
  `id` int(4) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(256) DEFAULT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_berita`
--

INSERT INTO `db_berita` (`id`, `judul`, `gambar`, `isi`, `tanggal`) VALUES
(65, 'What is Lorem Dolor?', 'Sampah.png', '<h2>What&nbsp;</h2>\r\n\r\n<p><strong>&nbsp; &nbsp; Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '2019-03-28 10:41:59'),
(66, 'Browser Makanan', 'Contoh-Brosur-Makanan-25.jpg', '<h3>&nbsp; &nbsp; &nbsp; &nbsp;What is Lorem Ipsum?</h3>\r\n\r\n<blockquote>\r\n<p><strong>&nbsp; &nbsp; &nbsp;Lorem Ipsum</strong>&nbsp;<em>is simply dummy text of the printing</em><s> and typesetting industry.</s><samp> Lorem Ipsum has been</samp> the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</blockquote>\r\n\r\n<h3>&nbsp; &nbsp; &nbsp; Why do we use it?</h3>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '2019-02-22 15:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `db_data_siswa`
--

CREATE TABLE `db_data_siswa` (
  `id` int(14) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen Katolik','Kristen Protestan','Hindu','Budha') NOT NULL,
  `status_keluarga` enum('Anak kandung','Anak angkat') NOT NULL,
  `alamat_siswa` text NOT NULL,
  `nomor_siswa` varchar(12) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `pendidikan_ayah` enum('Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') DEFAULT NULL,
  `pekerjaan_ayah` enum('Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Nelayan','Lainnya') DEFAULT NULL,
  `penghasilan_ayah` enum('-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') DEFAULT NULL,
  `nomor_ayah` varchar(12) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pendidikan_ibu` enum('Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') DEFAULT NULL,
  `pekerjaan_ibu` enum('Ibu Rumah Tangga','Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Lainnya') DEFAULT NULL,
  `penghasilan_ibu` enum('-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') DEFAULT NULL,
  `nomor_ibu` varchar(12) DEFAULT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `pendidikan_wali` enum('Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') DEFAULT NULL,
  `pekerjaan_wali` enum('Ibu Rumah Tangga','Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Lainnya') DEFAULT NULL,
  `penghasilan_wali` enum('-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') DEFAULT NULL,
  `nomor_wali` varchar(12) DEFAULT NULL,
  `npsn_sekolah` char(8) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `status_sekolah` enum('Negeri','Swasta') NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `status_pendaftaran` varchar(15) DEFAULT NULL,
  `tanggal_pendaftaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ipa` int(3) NOT NULL,
  `matematika` int(3) NOT NULL,
  `bahasa_indonesia` int(3) NOT NULL,
  `bahasa_inggris` int(3) NOT NULL,
  `nilai_ujian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_data_siswa`
--

INSERT INTO `db_data_siswa` (`id`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_keluarga`, `alamat_siswa`, `nomor_siswa`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nomor_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nomor_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nomor_wali`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `tahun_lulus`, `status_pendaftaran`, `tanggal_pendaftaran`, `ipa`, `matematika`, `bahasa_indonesia`, `bahasa_inggris`, `nilai_ujian`) VALUES
(42, 14516516, 'We On World', 'Laki - laki', 'Semarang', '2019-02-13', 'Islam', 'Anak kandung', 'SASASASA', '111111111111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12131332', 'SMA IT Ihsanul Fikri', 'Negeri', 'wawawa', 2015, 'Diterima', '2019-04-08 14:28:15', 99, 100, 100, 100, 75),
(43, 212121212, 'Jack Sparrow', 'Laki - laki', 'Semarang', '2019-02-12', 'Islam', 'Anak kandung', 'WAWAWAWAW', '111111111111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12131332', 'SMA IT Ihsanul Fikri', 'Negeri', 'WAWAWAW', 2015, 'Diterima', '2019-04-08 14:28:15', 99, 100, 100, 100, 70),
(48, 14045, 'SIC', 'Laki - laki', 'Semaranng', '2019-02-14', 'Kristen Katolik', 'Anak kandung', 'sasas', '111111111111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12131332', 'SMA IT Ihsanul Fikri', 'Negeri', 'sasasa', 2015, 'Diterima', '2019-04-08 14:28:15', 100, 80, 100, 70, 90),
(49, 12121212, 'Haris', 'Perempuan', 'sadad', '2019-02-14', 'Kristen Katolik', 'Anak kandung', 'dada', '111111111111', 'dada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12131332', 'SMA IT Ihsanul Fikri', 'Negeri', 'dadad', 2015, 'Diterima', '2019-04-08 14:28:15', 99, 80, 100, 100, 80),
(50, 111, 'Haris', 'Laki - laki', 'dadad', '2019-02-13', 'Kristen Katolik', 'Anak angkat', 'dada', '111111111111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12131332', 'SMA IT Ihsanul Fikri', 'Swasta', 'dadad', 2015, 'Diterima', '2019-03-30 16:22:23', 99, 80, 100, 100, 70),
(51, 1324343534, 'WQWQ', 'Perempuan', 'sejfytrhgrghr', '2019-02-19', 'Kristen Katolik', 'Anak angkat', 'sregeehtsehgdrgtetfer', '111111111111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12131332', 'SMA IT Ihsanul Fikri', 'Negeri', 'dytdrhryftreregefgdgdeg', 2015, 'Diterima', '2019-04-08 14:28:15', 100, 100, 100, 100, 90);

-- --------------------------------------------------------

--
-- Table structure for table `db_email`
--

CREATE TABLE `db_email` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pesan` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_email`
--

INSERT INTO `db_email` (`id`, `nama`, `email`, `subjek`, `tanggal`, `pesan`, `status`) VALUES
(2, 'Zakki Abdurrahman Haris', 'zakyharis33@gmail.com', 'wqwq', '2019-04-07 13:28:48', 'Sudah 2 hari NISN belum diaktifkan.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_kode_form`
--

CREATE TABLE `db_kode_form` (
  `id` int(4) NOT NULL,
  `kode` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_kode_form`
--

INSERT INTO `db_kode_form` (`id`, `kode`) VALUES
(48, 2147483647),
(49, 34124324),
(50, 8768786768);

-- --------------------------------------------------------

--
-- Table structure for table `db_maps`
--

CREATE TABLE `db_maps` (
  `id` int(1) NOT NULL,
  `link` text NOT NULL,
  `height` int(4) NOT NULL,
  `width` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_maps`
--

INSERT INTO `db_maps` (`id`, `link`, `height`, `width`) VALUES
(0, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.875044765957!2d110.1913404!3d-6.9241838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9418345c08254aba!2sSMK+Bina+Utama+Kendal!5e0!3m2!1sid!2sid!4v1547650266696', 380, 100);

-- --------------------------------------------------------

--
-- Table structure for table `db_profil`
--

CREATE TABLE `db_profil` (
  `id` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nomor` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_profil`
--

INSERT INTO `db_profil` (`id`, `nama`, `alamat`, `nomor`, `email`, `pengumuman`) VALUES
(0, 'SMK Bina Utama Kendal', 'Jl. Kyai Tulus - Jetis, Jetis, Kendal, Jetis, Kendal, Kabupaten Kendal, Jawa Tengah 51315', '14045000', 'smkbinautama@gmail.com', 'Pengumuman akan di buka pada hari senin tanggal 10 Oktober 2020');

-- --------------------------------------------------------

--
-- Table structure for table `db_registrasi`
--

CREATE TABLE `db_registrasi` (
  `id` int(10) NOT NULL,
  `nisn` bigint(15) NOT NULL,
  `nama_pengirim` varchar(60) NOT NULL,
  `nomor_rekening` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `gambar` varchar(256) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_registrasi`
--

INSERT INTO `db_registrasi` (`id`, `nisn`, `nama_pengirim`, `nomor_rekening`, `tanggal`, `waktu`, `gambar`, `email`, `tanggal_registrasi`, `status`) VALUES
(34, 1325468153, 'Terbaru', 2147483647, '2019-04-09', '09:05:04', 'Walisongo', 'terbaru@gmail.com', '2019-04-03 18:26:11', 0),
(36, 2147483647, 'Jack', 2147483647, '2019-04-09', '00:00:00', '30_juta1.PNG', 'jack@gmail.com', '2019-04-07 13:12:58', 1),
(40, 34124324, 'Salman', 2147483647, '2019-04-11', '45:45:45', '30_juta5.PNG', 'salman@gmail.com', '2019-04-07 13:13:14', 1),
(41, 1264785432, 'Susi', 2147483647, '2019-04-17', '00:00:00', 'alur3.png', 'Susi@gmail.com', '2019-04-07 08:06:16', 0),
(49, 999999, 'Sasa', 999999999, '2019-04-17', '45:45:45', '30_juta8.PNG', 'sasa@gmail.com', '2019-04-07 13:13:07', 0),
(51, 8768786768, 'Dia', 9223372036854775807, '2019-04-17', '00:00:00', 'alur5.png', 'Dhiya@gmail.com', '2019-04-07 13:13:22', 1),
(52, 6186583658, 'Terbaru', 9223372036854775807, '2019-04-15', '00:00:00', '30_juta9.PNG', 'Terbaru@gmail.com', '2019-04-03 18:22:13', 0),
(53, 14134221, 'Jack', 4134124124121242, '2019-04-16', '00:00:00', 'alur1.png', 'Jack@gmail.com', '2019-04-06 14:41:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_setting`
--

CREATE TABLE `db_setting` (
  `id` int(2) NOT NULL,
  `pengumuman` varchar(5) NOT NULL,
  `daftar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_setting`
--

INSERT INTO `db_setting` (`id`, `pengumuman`, `daftar`) VALUES
(0, 'Buka', 'Buka');

-- --------------------------------------------------------

--
-- Table structure for table `db_setting_daftar`
--

CREATE TABLE `db_setting_daftar` (
  `id` int(1) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `nomor_rekening` bigint(20) NOT NULL,
  `nama_rekening` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_setting_daftar`
--

INSERT INTO `db_setting_daftar` (`id`, `gambar`, `nomor_rekening`, `nama_rekening`) VALUES
(0, 'alur.png', 42343268723654723, 'Zakki Abdurrahman Haris');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(4) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `nama_lengkap`, `username`, `password`, `email`) VALUES
(0, 'Zakki Abdurrahman Haris', 'Admin', 'bismilla', 'informatika15uii@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_alumni`
--
ALTER TABLE `db_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_berita`
--
ALTER TABLE `db_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_data_siswa`
--
ALTER TABLE `db_data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_email`
--
ALTER TABLE `db_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_kode_form`
--
ALTER TABLE `db_kode_form`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `db_maps`
--
ALTER TABLE `db_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_profil`
--
ALTER TABLE `db_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_registrasi`
--
ALTER TABLE `db_registrasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `db_setting`
--
ALTER TABLE `db_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_setting_daftar`
--
ALTER TABLE `db_setting_daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_alumni`
--
ALTER TABLE `db_alumni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_berita`
--
ALTER TABLE `db_berita`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `db_data_siswa`
--
ALTER TABLE `db_data_siswa`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `db_email`
--
ALTER TABLE `db_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_kode_form`
--
ALTER TABLE `db_kode_form`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `db_profil`
--
ALTER TABLE `db_profil`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_registrasi`
--
ALTER TABLE `db_registrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `db_setting`
--
ALTER TABLE `db_setting`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
