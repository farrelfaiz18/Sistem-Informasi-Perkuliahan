-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 09:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmipa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen_web`
--

CREATE TABLE `dosen_web` (
  `id_dosen` int(11) NOT NULL,
  `nrp` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `agama` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `prodi` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen_web`
--

INSERT INTO `dosen_web` (`id_dosen`, `nrp`, `nama`, `jenis_kelamin`, `agama`, `tgl_lahir`, `prodi`) VALUES
(1, '197409302003121001', 'Roni Salambue,S.Kom., M.Si.', '1', '1', '1974-09-30', '603124'),
(4, '196312311997021 001', 'Zaiful Bahri, S.Si., M.Kom.', '1', '1', '1963-12-31', '603124'),
(5, '197502152001122002', 'Evfi Mahdiyah, S.Kom., M.I.T.', '0', '1', '1975-02-15', '603125'),
(6, '198603202015041001', 'Ibnu Daqiqil Id, S.Kom., M.T.I.', '1', '1', '1986-03-20', '603124');

-- --------------------------------------------------------

--
-- Table structure for table `matkul_web`
--

CREATE TABLE `matkul_web` (
  `id_matkul` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `kelas` char(1) NOT NULL,
  `jenis_kelas` varchar(15) NOT NULL,
  `wp` char(1) NOT NULL,
  `sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul_web`
--

INSERT INTO `matkul_web` (`id_matkul`, `kode`, `nama`, `dosen`, `kelas`, `jenis_kelas`, `wp`, `sks`) VALUES
(2, 'PAS22122', 'Evaluasi Antarmuka', 'FATAYAT, SKom, M.Kom', 'A', 'Reguler', 'W', 3),
(3, 'MSI2207', 'Pemrograman Bahasa Alami', 'ZUL INDRA, S.T., M.Sc.', '1', '1', 'P', 3),
(4, 'MSI2202', 'Komputasi Awan	', 'TISHA MELIA, B.Sc., M.Sc., Ph.D.	', '1', '1', 'W', 3),
(5, 'MSI2203', 'Pengembangan Sistem Informasi ', 'ZAIFUL BAHRI, S.Si, M.Kom	', '1', '1', 'W', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mhs_web`
--

CREATE TABLE `mhs_web` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `agama` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `prodi` char(6) NOT NULL,
  `status` char(1) NOT NULL,
  `alamat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs_web`
--

INSERT INTO `mhs_web` (`id_mahasiswa`, `nim`, `nama`, `jenis_kelamin`, `agama`, `tgl_lahir`, `prodi`, `status`, `alamat`) VALUES
(8, '2103110233', 'Najmi Fadhila Atsari', '0', '1', '2003-09-16', '603125', '1', 'Jl. Ahmad Dahlan'),
(9, '2103110836', 'Musdalifah', '0', '1', '2003-05-14', '603125', '1', 'Jl. Bangau Sakti'),
(10, '2103110837', 'Nia Ivanka', '0', '1', '2003-05-08', '603125', '1', 'Jl. Bangau Sakti'),
(11, '2103110838', 'Yuni Afrida ', '0', '1', '2003-03-12', '603125', '1', 'Jl. Bangau Sakti'),
(12, '2103110639', 'Sri Nurhidayati', '0', '1', '2003-05-08', '603125', '1', 'Jl. Bangau Sakti'),
(13, '2103110840', 'Vivianika Nathania Harsan', '0', '1', '2003-05-12', '603125', '1', 'Jl. Bangau Sakti'),
(14, '2103110841', 'Ikhwan Albar', '1', '1', '2004-05-20', '603125', '1', 'Jl. Mangga'),
(15, '2103111525', 'Irkhas Perdana', '1', '1', '2003-02-20', '603125', '1', 'Jl. Mawar'),
(16, '2103111605', 'Azra Andiwinata', '1', '1', '2004-05-26', '603125', '1', 'Jl. Bangau Sakti'),
(18, '2103111608', 'Diki Suganda Amir', '1', '1', '2004-05-15', '603125', '1', 'Jl. Bangau Sakti'),
(19, '2103112016', 'Cinta Fitria', '0', '1', '2004-05-14', '603125', '1', 'Jl. Bangau Sakti'),
(20, '2103112017', 'Raisa Fitri', '0', '1', '2003-05-08', '603125', '1', 'Jl. Bukit Barisan'),
(21, '2103112019', 'Anindhita Wahyu Prameswari', '0', '1', '2003-06-19', '603125', '1', 'Jl. Paus'),
(22, '2103112020', 'Natania Adela Surya Anggraeni', '0', '1', '2003-09-17', '603125', '1', 'Jl. Bangau Sakti'),
(23, '2103112021', 'Windi Julianti', '0', '1', '2003-05-12', '603125', '1', 'Jl. Cendrawasih'),
(25, '2103112023', 'Alifia Putri Saqina', '0', '1', '2003-08-16', '603125', '1', 'Jl. Bangau Sakti'),
(26, '2103112024', 'M. Zaky Alhafiz', '1', '1', '2004-05-14', '603125', '1', 'Jl. Kubang Raya'),
(27, '2103112025', 'Tya Fannie Putri', '0', '1', '2004-06-11', '603125', '1', 'Jl. Kaharduddin Nasution'),
(28, '2103112026', 'Osa Selvianti', '0', '1', '2004-01-21', '603125', '1', 'Jl. Cendrawasih'),
(29, '2103112618', 'Mimi Sahira', '0', '1', '2003-09-29', '603125', '1', 'Jl. Mawar'),
(30, '2103113576', 'T. Afdhal Dzaki Alghafari', '1', '1', '2004-02-11', '603125', '1', 'Jl. Sakuntala'),
(31, '2103113577', 'Wahyu', '1', '1', '2003-05-09', '603125', '1', 'Jl. Riau'),
(32, '2103125622', 'M. Fajri Ramadhan', '1', '1', '2003-02-05', '603125', '1', 'Jl. Bangau Sakti'),
(33, '2103126216', 'Muhammad Asyraf', '1', '1', '2003-09-29', '603125', '1', 'Jl. Tengku Bey'),
(34, '2103126217', 'Alzirah Salsabilla', '0', '1', '2003-11-06', '603125', '1', 'Jl. Bangau Sakti'),
(35, '2103126219', 'Raihan Yudra', '1', '1', '2003-12-05', '603125', '1', 'Jl. Kaharuddin Nasution'),
(36, '2103126220', 'Rifqi Al Fitrah', '1', '1', '2003-05-21', '603125', '1', 'Jl Tengku Bey'),
(37, '2103126221', 'Siti Rahayu', '0', '1', '2003-05-09', '603125', '1', 'Jl. Bangau Sakti'),
(38, '2103126222', 'Ikhwanul Fadli', '1', '1', '2004-05-12', '603125', '1', 'Jl. Sudirman'),
(39, '2103126342', 'Panji Ramadan Saputra', '1', '1', '2003-04-08', '603125', '1', 'Jl. Cipta Karya'),
(40, '2103126561', 'Muhammad Alfhat Ramadhan', '1', '1', '2003-05-24', '603125', '1', 'Jl. Lembaga Pemasyarakatan'),
(41, '2103135391', 'Ghinaa Aurina', '0', '1', '2003-08-15', '603125', '1', 'Jl. Rajawali'),
(42, '2103135903', 'M. Athallah Dzikri Alhady', '1', '1', '2003-07-10', '603125', '1', 'Jl. Ahmad Dahlan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `tgl_lahir`, `email`, `password`) VALUES
(1, 'farrel faiz fadhilah', 'farrel123', '2023-01-16', 'Farrelfaiz1000@gmail.com', 'farrel1234'),
(2, 'faiz fadhilah', 'cece', '2023-06-14', 'Farrelfaiz1000@gmail.com', 'cece'),
(3, 'qwerty', 'qwerty', '2013-07-08', 'alfhat@ganteng.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_web`
--
ALTER TABLE `dosen_web`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `matkul_web`
--
ALTER TABLE `matkul_web`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `mhs_web`
--
ALTER TABLE `mhs_web`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen_web`
--
ALTER TABLE `dosen_web`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matkul_web`
--
ALTER TABLE `matkul_web`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mhs_web`
--
ALTER TABLE `mhs_web`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
