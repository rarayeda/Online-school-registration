-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2023 at 12:34 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_pendaftar` int(11) NOT NULL,
  `kode_pendaftaran` varchar(14) NOT NULL,
  `jurusan` varchar(65) NOT NULL,
  `nama_pendaftar` varchar(125) NOT NULL,
  `jenis_kelamin` varchar(125) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(45) NOT NULL,
  `email` varchar(125) NOT NULL,
  `provinsi` varchar(125) NOT NULL,
  `kab_kota` varchar(125) NOT NULL,
  `kecamatan` varchar(125) NOT NULL,
  `desa_kel` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(11) NOT NULL,
  `nama_asal_sekolah` varchar(125) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `wali` varchar(125) NOT NULL,
  `nama_wali` varchar(125) NOT NULL,
  `pekerjaan_wali` text NOT NULL,
  `no_hp_wali` varchar(45) NOT NULL,
  `alamat_wali` text NOT NULL,
  `status` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_pendaftar`, `kode_pendaftaran`, `jurusan`, `nama_pendaftar`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `email`, `provinsi`, `kab_kota`, `kecamatan`, `desa_kel`, `alamat`, `kode_pos`, `nama_asal_sekolah`, `alamat_sekolah`, `wali`, `nama_wali`, `pekerjaan_wali`, `no_hp_wali`, `alamat_wali`, `status`) VALUES
(1, '', 'Rekayasa Perangkat Lunak', 'Ahmad', 'Laki-Laki', 'Banjarmasin', '2012-12-02', '081288262626', 'ahmad@mail.com', 'KALIMANTAN SELATAN', 'Banjarmasin', 'Banjarmasin Tengah', 'Melayu', 'Jln Melayu', '70232', 'SMP 10', 'J', 'ayah', 'Ali', 'Guru', '081111111', 'Jln Melayu', 'Lulus'),
(2, 'R-2023051548', 'Rekayasa Perangkat Lunak', 'sopyan', 'Perempuan', 'Banjarmasin', '2012-12-11', '081288262626', 'kajak@gmail.com', 'KALIMANTAN SELATAN', 'kaiad', 'Banjarmasin Tengah', 'Melayu', 'jl tongkang', '018398', 'SMP 10', 'jl. busra', 'ayah', 'aida', 'Guru', '81283821', 'jl. flamboyan', 'Lulus'),
(3, 'R-2023051699', 'Rekayasa Perangkat Lunak', 'Rayeda', 'Perempuan', 'kala', '2005-12-15', '0813652637', 'rae@gmail.com', 'KALIMANTAN SELATAN', 'Banjarmasin', 'Banjar', 'Kendati', 'Jl. Anuee', '71291', 'SMPN 12', 'Jl. Kendati II', 'ayah', 'Ryleght', 'CEO', '08137268348', 'Jl. Busra', 'Tidak Lulus'),
(4, 'R-2023051614', 'Rekayasa Perangkat Lunak', 'Rara', 'Perempuan', 'Kuala', '2006-12-15', '0812782726', 'aye@mail.com', 'KALIMANTAN TENGAH', 'Banjarmasin', 'Banjar', 'Komp. Melati ', 'Jl. Anuee', '71291', 'SMPN 10', 'Jl. Ponti anak', 'ayah', 'Daniel', 'DPR', '0813617381', 'Jl. Anumarman', 'Lulus'),
(5, 'M-2023051689', 'Multimedia', 'Daniel', 'Perempuan', 'Kanaan', '2005-12-11', '081237287842', 'la@gmail.com', 'KALIMANTAN TENGAH', 'Palangkaraya', 'Rayasang', 'LhoLho', 'Jl. Ponti anak', '71291', 'SMPN 14', 'jl. kambing', 'ayah', 'Rizxxx', 'Pahlawan', '081273828833', 'Jl. Anuee', 'Tidak Lulus'),
(6, 'R-2023051659', 'Rekayasa Perangkat Lunak', 'Levi Ackerman', 'Laki-Laki', 'Cikagai', '2004-12-25', '081324354756', 'ackerman@gmail.com', 'KALIMANTAN SELATAN', 'Mitras', 'Miayala', 'Gunanja', 'Jl. Flamingo', '71291', 'traning corps', 'paradise', 'ibu', 'Kuchel Ackerman', 'ehe', '081263748428', 'jl. Underground', 'Tidak Lulus'),
(7, 'K-2023051827', 'Tata Kecantikan Kulit dan Rambut', 'Raisyaa', 'Perempuan', 'Banjarbaru', '2007-12-14', '0812536373', 'raisha@mail.com', 'KALIMANTAN SELATAN', 'Banjarbaru', 'Banjarbaru Selatan', 'Gunung Paikat', 'Jl. Kota Halilintar', '721016', 'SMP 12', 'Jl. Mangga 2', 'ayah', 'Rifqun', 'Penyanyi', '08135262729', 'Jl. Badai Petir', 'Lulus'),
(8, 'F-2023052224', 'Farmasi Klinis dan Komunitas', 'Sri Hidayati', 'Perempuan', 'Jakarta', '2005-05-07', '081354367456', 'shidayati@gmail.com', 'KALIMANTAN SELATAN', 'Banjarmasin', 'Banjarmasin Utara', 'Antasan Kecil Timur Dalam', 'Jl. reformasi Kemerdekaan, RT, 20, No. 1', '712021', 'SMPN 13 Banjarmasin', 'Jl. HKSN ', 'wali', 'Nor Apsari', 'BPOM', '083150043926', 'Jl. reformasi Kemerdekaan, RT, 20, No. 1', NULL),
(9, 'R-2023052252', 'Rekayasa Perangkat Lunak', 'Algarafi', 'Laki-Laki', 'Jakarta', '2005-03-11', '081365273718', 'Algafa@gmail.com', 'KALIMANTAN SELATAN', 'Banjarbaru', 'Banjarbaru Selatan', 'Sungai Anggang', 'JL. Palatehan', '72017', 'SMPN 2', 'Jl. Anjayani', 'ibu', 'Ruspita Sari', 'Kuli Panggul', '08126373828', 'Jl. Antarankah kita', NULL),
(11, 'F-2023052278', 'Farmasi Klinis dan Komunitas', 'lucanne', 'Laki-Laki', 'Parayangan', '2012-12-12', '08126373848', 'lcca@mail.com', 'KALIMANTAN SELATAN', 'banjarmasin', 'banjarmasin utara', 'kaka', 'akjdjl', '0189384', 'masdnm', 'lialhfkj', 'ayah', 'nqjhefk', 'kfje', '018398194', 'fjkekKH', NULL),
(12, 'F-2023052332', 'Farmasi Klinis dan Komunitas', 'Aditya Allucye', 'Laki-Laki', 'Sutra', '2005-04-07', '081235276782', 'adtyll@gmail.com', 'Sumatra Selatan', 'Makasar', 'Uanang Kiri', 'Kula Kanan', 'Jl. Kaluanan', '72101', 'SMPN 1 ', 'JL. Andah', 'ayah', 'BroXi', 'Ngulung', '081364756859', 'Jl. Kulanan', 'Lulus'),
(13, 'M-2023052512', 'Multimedia', 'Lucy', 'Laki-Laki', 'East Blue', '2004-11-10', '08135262738', 'luci@mail.com', 'Jawa Barat', 'Bandung', 'Bandung Barat', 'Magesla', 'Jl. Aduka 8A', '721012', 'SMP Sandata Banjdung', 'Jl. Blutaka', 'ibu', 'Anuakatan', 'ibu rumah tanggga', '0813523647', 'jl. akialata', 'Lulus'),
(14, 'F-2023052542', 'Farmasi Klinis dan Komunitas', 'nana', 'Laki-Laki', '09', '2012-12-19', '8990790798', 'kontol@gmail.com', 'kontol', 'babi', 'asu', 'anjing', 'fufu2gsbcdwi', '08770', 'smp anjing', 'hiuqbvjbvuirb', 'ayah', 'farhan', 'babu', '979866906', 'lknfiowhfcbbf', NULL),
(15, 'R-2023052537', 'Rekayasa Perangkat Lunak', 'Lucy', 'Laki-Laki', 'East Blue', '2012-12-02', '08135262738', 'luci@mail.com', 'Jawa Barat', 'Bandung', 'Bandung Barat', 'Magesla', 'Jl. Aduka 8A', '721012', 'SMP Sandata Banjdung', 'Jl. Aduka 8A', 'ayah', 'Lucy', 'ibu rumah tanggga', '0979866906', 'Jl. Blutaka', 'Tidak Lulus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
