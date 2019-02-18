-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 07:51 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
(65, 'What is Lorem Ipsum?', 'background-wallpaper-hd-6176504.jpg', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '2019-02-14 15:00:42'),
(66, 'Browser Makanan', 'Contoh-Brosur-Makanan-25.jpg', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p>MAKANAN</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '2019-02-15 16:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `db_data_siswa`
--

CREATE TABLE `db_data_siswa` (
  `id` int(15) NOT NULL,
  `nisn` char(10) NOT NULL,
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
  `status_pendaftaran` enum('Belum Diverifikasi','Diterima','Tidak Diterima') DEFAULT NULL,
  `tanggal_pendaftaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ipa` int(3) NOT NULL,
  `matematika` int(3) NOT NULL,
  `bahasa_indonesia` int(3) NOT NULL,
  `bahasa_inggris` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_data_siswa`
--

INSERT INTO `db_data_siswa` (`id`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_keluarga`, `alamat_siswa`, `nomor_siswa`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nomor_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nomor_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nomor_wali`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `tahun_lulus`, `status_pendaftaran`, `tanggal_pendaftaran`, `ipa`, `matematika`, `bahasa_indonesia`, `bahasa_inggris`) VALUES
(40, '9998548459', 'Haris', 'Laki - laki', 'Semarang', '2019-02-14', 'Islam', 'Anak kandung', '41DSfvdftvybvjdhsgf', '213141414141', '', '', '', '', '', '', '', '', '', '100', '', '', '', '', '', '13131412', 'SMA IT Ihsanul Fikri', 'Swasta', 'dasfasf', 2015, 'Diterima', '2019-02-14 14:41:15', 99, 100, 100, 100),
(41, '1234567891', 'Zakki Abdurrahma Haris', 'Laki - laki', 'Semarang', '2019-02-13', 'Islam', 'Anak kandung', 'Jl. Semarang No.1', '123456465465', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12456464', 'Magelang', 'Negeri', 'Magelang City', 2015, 'Diterima', '2019-02-14 15:16:31', 0, 0, 0, 0);

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
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_kode_form`
--

CREATE TABLE `db_kode_form` (
  `id` int(4) NOT NULL,
  `kode` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_kode_form`
--

INSERT INTO `db_kode_form` (`id`, `kode`) VALUES
(1, 14045),
(17, 12121212);

-- --------------------------------------------------------

--
-- Table structure for table `db_registrasi`
--

CREATE TABLE `db_registrasi` (
  `id` int(10) NOT NULL,
  `nisn` int(15) NOT NULL,
  `nama_pengirim` varchar(60) NOT NULL,
  `nomor_registrasi` int(20) NOT NULL,
  `gambar` varchar(256) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_registrasi`
--

INSERT INTO `db_registrasi` (`id`, `nisn`, `nama_pengirim`, `nomor_registrasi`, `gambar`, `email`) VALUES
(1, 2147483647, 'Zakki Haris', 2323232, 'background-wallpaper-hd-6176504.jpg', 'zakyharis33@gmail.com'),
(3, 2147483647, 'Zakki A Haris', 2147483647, 'Contoh-Brosur-Makanan-25.jpg', '15523164@students.uii.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `db_sekolah`
--

CREATE TABLE `db_sekolah` (
  `id` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nomor` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_sekolah`
--

INSERT INTO `db_sekolah` (`id`, `nama`, `alamat`, `nomor`, `email`) VALUES
(0, 'SMK Bina Utama Kendal', 'Jl. Kyai Tulus - Jetis, Jetis, Kendal, Jetis, Kendal, Kabupaten Kendal, Jawa Tengah 51315', '0813396373', 'smkbinautama@gmail.com');

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
(0, 'Zakki Abdurrahman Haris', 'Admin', 'rahasia@publik', 'informatika15uii@gmail.com');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_registrasi`
--
ALTER TABLE `db_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_sekolah`
--
ALTER TABLE `db_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_setting`
--
ALTER TABLE `db_setting`
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
-- AUTO_INCREMENT for table `db_berita`
--
ALTER TABLE `db_berita`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `db_data_siswa`
--
ALTER TABLE `db_data_siswa`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `db_email`
--
ALTER TABLE `db_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_kode_form`
--
ALTER TABLE `db_kode_form`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `db_registrasi`
--
ALTER TABLE `db_registrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_sekolah`
--
ALTER TABLE `db_sekolah`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

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
