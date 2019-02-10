-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 03:24 PM
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
(5, 'Pengumuman tan Santai', '<p>14045</p>\r\n', '2019-02-08 04:21:51'),
(15, 'What is Lorem Ipsum?', '<p>pengumuman PPPP</p>\r\n', '2019-02-08 04:15:52'),
(19, 'Bismillah', '<p><em><strong>Bismillah</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-01-28 09:17:23'),
(20, 'Pengumuman tanggal pelaksanaan ujian', '<p>140</p>\r\n', '2019-02-08 03:18:10');

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
  `status_sekolah` enum('Negeri','Swasta') NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `status_pendaftaran` enum('Belum Diverifikasi','Diterima','Tidak Diterima') DEFAULT 'Belum Diverifikasi',
  `tanggal_pendaftaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_data_siswa`
--

INSERT INTO `db_data_siswa` (`id`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_keluarga`, `alamat_siswa`, `nomor_siswa`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nomor_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nomor_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nomor_wali`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `tahun_lulus`, `status_pendaftaran`, `tanggal_pendaftaran`) VALUES
(10, '9994567888', 'sasa', 'Laki - laki', 'dadada', '0000-00-00', 'Kristen Protestan', 'Anak kandung', 'dasfghjk', '1234567', 'adsfgh', 'Tidak sekolah', 'Tani', '500-1jt', '1234567', 'asdfdghj', 'Diploma', 'Polri/TNI', '3jt-5jt', '12345678', 'sfasf', 'SD/MI', 'Tani', '1jt-3jt', '12345678', '123456', 'dasfghj', '', '', 2121, 'Belum Diverifikasi', '2019-02-10 08:02:19'),
(14, '14045', 'Haris', 'Laki - laki', 'Semarang', '1996-08-05', 'Islam', 'Anak kandung', 'Jalan Rajawali No.11', '081339637475', 'Slamet', 'Diploma', 'Tani', '500-1jt', '4545455', 'Sri', 'S1', 'PNS', '3jt-5jt', '565656565', 'Risdy', 'S3', 'Lainnya', '5jt-10jt', '78787878', '1452', 'Magelang', 'Swasta', 'Jalan Jalan', 2015, 'Diterima', '2019-02-10 08:02:19'),
(15, '9998548459', 'Kirin', 'Perempuan', 'afsdasda', '2019-02-05', 'Kristen Katolik', 'Anak angkat', 'asdasd', '231231', 'dadas', 'SD/MI', 'Tani', '3jt-5jt', '312312', 'adsdasd', 'S1', 'Wiraswasta', '1jt-3jt', '31232', 'dawda', 'SD/MI', 'Buruh', '1jt-3jt', '3213', '21', 'dasd', 'Swasta', 'JL. Imam Bonjol Nomor 1 Majapahit', 0000, 'Tidak Diterima', '2019-02-10 13:59:51'),
(16, '1234567', 'Jack', 'Laki - laki', 'Semarang', '2013-06-04', 'Islam', 'Anak kandung', 'Magelang KM.17', '12345678', 'Ma', 'Diploma', 'Perangkat Desa', '10jt+', '1234567', 'Janc', 'S1', 'Buruh', '500-1jt', '12121212121', 'Ass', 'Tidak sekolah', 'Tani', '1jt-3jt', '12121212', '1234', 'Jogja', '', '', 0000, 'Diterima', '2019-02-10 08:02:19');

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
(1, 'Zakki Haris', 'zakyharis33@gmail.com', 'Uji Coba', '2019-02-09 00:52:27', 'Lorem Ipsum Dolor Sit Amet'),
(2, 'Zakki Haris', '15523164@students.uii.ac.id', 'Pengumuman', '2019-02-09 01:10:07', 'Bismillah');

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
(2, 121212),
(14, 2147483647),
(15, 12121212),
(16, 111);

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
  `nomor_registrasi` int(15) NOT NULL,
  `gambar` varchar(256) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_registrasi`
--

INSERT INTO `db_registrasi` (`id`, `nisn`, `nomor_registrasi`, `gambar`, `email`) VALUES
(48, 2147483647, 2323232, 'Screenshot_(10).png', 'zakyharis33@gmail.com'),
(49, 12121212, 111, 'IMG.jpg', '15523164@students.uii.ac.id');

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
(0, 'Buka', 'Tutup');

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
(0, 'informatika15uii@gmail.com', 'rahasia@publik', 'informatika15uii@gmail.com');

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `db_data_siswa`
--
ALTER TABLE `db_data_siswa`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `db_email`
--
ALTER TABLE `db_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_kode_form`
--
ALTER TABLE `db_kode_form`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `db_nilai_un`
--
ALTER TABLE `db_nilai_un`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_registrasi`
--
ALTER TABLE `db_registrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
