-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 02:48 AM
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
-- Table structure for table `db_data_siswa`
--

CREATE TABLE `db_data_siswa` (
  `id` int(15) NOT NULL,
  `nisn` char(10) DEFAULT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen Katolik','Kristen Protestan','Hindu','Budha') NOT NULL,
  `status_keluarga` enum('Anak kandung','Anak angkat') NOT NULL,
  `alamat_siswa` text NOT NULL,
  `nomor_siswa` varchar(12) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` enum('Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') NOT NULL,
  `pekerjaan_ayah` enum('Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Nelayan','Lainnya') NOT NULL,
  `penghasilan_ayah` enum('-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') NOT NULL,
  `nomor_ayah` varchar(12) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` enum('Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') NOT NULL,
  `pekerjaan_ibu` enum('Ibu Rumah Tangga','Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Lainnya') NOT NULL,
  `penghasilan_ibu` enum('-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') NOT NULL,
  `nomor_ibu` varchar(12) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `pendidikan_wali` enum('Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') NOT NULL,
  `pekerjaan_wali` enum('Ibu Rumah Tangga','Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Lainnya') NOT NULL,
  `penghasilan_wali` enum('-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') NOT NULL,
  `nomor_wali` varchar(12) NOT NULL,
  `npsn_sekolah` char(8) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `status_sekolah` int(11) NOT NULL,
  `alamat_sekolah` enum('Negeri','Swasta') NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `status_pendaftaran` enum('Belum Diverifikasi','Diterima','Tidak Diterima') DEFAULT NULL,
  `tanggal_pendaftaran` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_data_siswa`
--

INSERT INTO `db_data_siswa` (`id`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_keluarga`, `alamat_siswa`, `nomor_siswa`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nomor_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nomor_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nomor_wali`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `tahun_lulus`, `status_pendaftaran`, `tanggal_pendaftaran`) VALUES
(10, '9994567888', 'sasa', 'Laki - laki', 'dadada', '0000-00-00', 'Kristen Protestan', 'Anak kandung', 'dasfghjk', '1234567', 'adsfgh', 'Tidak sekolah', 'Tani', '500-1jt', '1234567', 'asdfdghj', 'Diploma', 'Polri/TNI', '3jt-5jt', '12345678', 'sfasf', 'SD/MI', 'Tani', '1jt-3jt', '12345678', '123456', 'dasfghj', 0, '', 2121, 'Diterima', NULL),
(14, '14045', 'Zakki', 'Laki - laki', 'Semarang', '1996-08-05', 'Islam', 'Anak kandung', 'Jalan Rajawali No.11', '081339637475', 'Slamet', '', 'Tani', '500-1jt', '4545455', 'Sri', 'S1', 'PNS', '3jt-5jt', '565656565', 'Risdy', 'S3', 'Lainnya', '5jt-10jt', '78787878', '1452', 'Magelang', 0, '', 2015, 'Tidak Diterima', NULL),
(15, '9998548459', 'sas', 'Perempuan', 'asas', '2018-01-15', 'Kristen Protestan', 'Anak angkat', 'sasad', '13131', 'dada', 'Diploma', 'Tani', '-500rb', '13131', 'dadada', 'Diploma', 'PNS', '1jt-3jt', '13131', 'dasdaw', '', 'Buruh', '500-1jt', '1313', '1232', 'afasf', 0, '', 0000, 'Belum Diverifikasi', NULL);

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
(1, 14045);

-- --------------------------------------------------------

--
-- Table structure for table `db_nilai_un`
--

CREATE TABLE `db_nilai_un` (
  `id` int(5) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama_siswa` varchar(60) NOT NULL,
  `ipa` int(3) NOT NULL,
  `matematika` int(3) NOT NULL,
  `bahasa_indonesia` int(3) NOT NULL,
  `bahasa_ingrish` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_pengumuman`
--

CREATE TABLE `db_pengumuman` (
  `id` int(4) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_pengumuman`
--

INSERT INTO `db_pengumuman` (`id`, `judul`, `isi`, `tanggal`) VALUES
(1, 'sasa', '<p>sasa</p>\r\n', '2019-01-24 08:51:38'),
(5, 'Pengumuman tanggal pelaksanaan ujian', '<p>14045</p>\r\n', '2019-01-24 19:15:33'),
(15, 'What is Lorem Ipsum?', '<p>pengumuman</p>\r\n', '2019-01-28 08:58:08'),
(18, 'Uji Coba', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-01-28 09:16:27'),
(19, 'Bismillah', '<p><em><strong>Bismillah</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-01-28 09:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `db_registrasi`
--

CREATE TABLE `db_registrasi` (
  `id` int(4) NOT NULL,
  `nisn` int(15) NOT NULL,
  `nomor_registrasi` int(15) NOT NULL,
  `gambar` varchar(256) DEFAULT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_registrasi`
--

INSERT INTO `db_registrasi` (`id`, `nisn`, `nomor_registrasi`, `gambar`, `email`) VALUES
(4, 14045, 2323232, NULL, '15523164@students.ui'),
(5, 123456, 123525252, NULL, 'zakyharis33@gmail.co'),
(6, 33333, 33333, 'default.png', '15523164@students.ui'),
(7, 12121212, 2323232, 'default.png', '15523164@students.ui'),
(8, 12121212, 2323232, 'default.png', '15523164@students.ui'),
(9, 12121212, 1245678, 'default.png', 'zakyharis33@gmail.co'),
(10, 12121212, 212121, 'default.png', 'zakyharis33@yahoo.co'),
(11, 2147483647, 2323232, 'default.png', '15523164@students.ui'),
(12, 14045, 212121, 'default.png', '15523164@students.ui'),
(13, 12121212, 2323232, 'default.png', '15523164@students.ui'),
(14, 2147483647, 212121, 'default.png', '15523164@students.ui'),
(15, 2147483647, 2323232, 'default.png', '15523164@students.ui');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `db_nilai_un`
--
ALTER TABLE `db_nilai_un`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_pengumuman`
--
ALTER TABLE `db_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_registrasi`
--
ALTER TABLE `db_registrasi`
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
-- AUTO_INCREMENT for table `db_data_siswa`
--
ALTER TABLE `db_data_siswa`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `db_email`
--
ALTER TABLE `db_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_kode_form`
--
ALTER TABLE `db_kode_form`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_nilai_un`
--
ALTER TABLE `db_nilai_un`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_pengumuman`
--
ALTER TABLE `db_pengumuman`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `db_registrasi`
--
ALTER TABLE `db_registrasi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
