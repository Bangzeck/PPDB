-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 07:34 AM
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
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_berita`
--

INSERT INTO `db_berita` (`id`, `judul`, `isi`, `tanggal`) VALUES
(15, 'What is Lorem Ipsum? Dolor Sit Amet', '<p>pengumuman PPPP</p>\r\n', '2019-02-12 06:05:02'),
(19, 'Bismillah', '<p><em><strong>Bismillah</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-01-28 09:17:23'),
(20, 'Pengumuman tanggal pelaksanaan ujian', '<p>140</p>\r\n', '2019-02-08 03:18:10'),
(21, 'OPo', '<p>Laptopr Asus</p>\r\n', '2019-02-13 06:21:01');

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
  `ipa` int(4) NOT NULL,
  `matematika` int(4) NOT NULL,
  `bahasa_indonesia` int(4) NOT NULL,
  `bahasa_inggris` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_data_siswa`
--

INSERT INTO `db_data_siswa` (`id`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_keluarga`, `alamat_siswa`, `nomor_siswa`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nomor_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nomor_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nomor_wali`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `tahun_lulus`, `status_pendaftaran`, `tanggal_pendaftaran`, `ipa`, `matematika`, `bahasa_indonesia`, `bahasa_inggris`) VALUES
(14, '1131313', 'Haris AH', 'Laki - laki', 'Semarang', '1996-08-05', 'Islam', 'Anak kandung', 'Jalan Rajawali No.11', '081339637475', 'Slamet', 'Diploma', 'Tani', '500-1jt', '4545455', 'Sri', 'S1', 'PNS', '3jt-5jt', '565656565', 'Risdy', 'S3', 'Lainnya', '5jt-10jt', '78787878', '1452', 'Magelang', 'Swasta', 'Jalan Jalan', 2015, 'Belum Diverifikasi', '2019-02-10 08:02:19', 0, 0, 0, 0),
(17, '12121212', 'Abdul Rahman', 'Laki - laki', 'Semarang', '2019-02-08', 'Islam', 'Anak kandung', 'Semarng', '151515151', 'WWWW', 'SMP/MTs', 'Wiraswasta', '1jt-3jt', '1212121', 'wwww', 'S1', 'PNS', '3jt-5jt', '1212121', 'wwww', 'SMP/MTs', 'Buruh', '-500rb', '22222', '12121', 'Magelang', 'Swasta', 'Magelang', 2015, 'Diterima', '2019-02-10 15:31:44', 0, 0, 0, 0),
(19, '2222222222', 'We On World', 'Laki - laki', 'sasa', '2019-02-19', 'Kristen Protestan', 'Anak angkat', 'asasasasa', '2121', 'sasa', 'SMP/MTs', 'Wiraswasta', '1jt-3jt', '1313', 'sasas', 'Diploma', 'Wiraswasta', '3jt-5jt', '213131', 'sasa', 'SMP/MTs', 'Wiraswasta', '3jt-5jt', '313131', '2121', 'Sasasa', 'Swasta', 'sadada', 2121, 'Belum Diverifikasi', '2019-02-10 16:27:41', 0, 0, 0, 0),
(20, '9998548459', 'Harits', 'Perempuan', 'sasas', '2019-02-21', 'Kristen Katolik', 'Anak kandung', 'sasas', '13131', 'dada', 'Tidak sekolah', 'Wiraswasta', '', '', '', '', '', '', '', '', '', '', '', '', '31313131', 'sasasa', 'Swasta', 'sasasa', 2121, 'Belum Diverifikasi', '2019-02-10 16:58:26', 0, 0, 0, 0),
(22, '9998548459', 'Haris', 'Perempuan', 'sasas', '2019-02-07', 'Hindu', 'Anak angkat', '3131edasszdszfd', '131313', 'sasa', 'Tidak sekolah', 'PNS', '1jt-3jt', '24134', '', 'SD/MI', 'Tani', '500-1jt', '14314', '', '', '', '', '', '21313131', 'safvscdf', 'Swasta', 'asfsa', 0000, 'Tidak Diterima', '2019-02-10 17:24:06', 0, 0, 0, 0),
(23, '1234567890', 'Jack Sparrow', 'Laki - laki', 'Kendal', '2019-02-18', 'Islam', 'Anak kandung', 'safrghjknhbgvfdcsxs', '121212121212', 'sasasa', 'SD/MI', 'Tani', '3jt-5jt', '313143', '', '', '', '', '', '', '', '', '', '', '21212121', 'waecdesfs', 'Swasta', 'dasdasdf', 2015, 'Tidak Diterima', '2019-02-10 17:25:38', 0, 0, 0, 0);

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

--
-- Dumping data for table `db_email`
--

INSERT INTO `db_email` (`id`, `nama`, `email`, `subjek`, `tanggal`, `pesan`) VALUES
(1, 'Zakki Haris', 'zakyharis33@gmail.com', 'Uji Coba', '2019-02-09 00:52:27', 'Lorem Ipsum Dolor Sit Amet');

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
(48, 2147483647, '', 2323232, 'Screenshot_(10).png', 'zakyharis33@gmail.com'),
(49, 12121212, '', 111, 'IMG.jpg', '15523164@students.uii.ac.id'),
(50, 1615248456, 'Zakki Haris', 2147483647, '28168504_2031068123826444_8246829599507103986_n.jpg', '15523164@students.uii.ac.id');

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
(0, 'Zakki Abdurrahman Haris', 'Admin', 'Admin', 'informatika15uii@gmail.com');

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
-- Indexes for table `db_nilai_un`
--
ALTER TABLE `db_nilai_un`
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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `db_data_siswa`
--
ALTER TABLE `db_data_siswa`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `db_email`
--
ALTER TABLE `db_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_kode_form`
--
ALTER TABLE `db_kode_form`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `db_nilai_un`
--
ALTER TABLE `db_nilai_un`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_registrasi`
--
ALTER TABLE `db_registrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
