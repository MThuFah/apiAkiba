-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 04:03 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akiba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `lembaga` varchar(50) NOT NULL,
  `pengurus` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sandi` varchar(50) NOT NULL,
  `hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`lembaga`, `pengurus`, `alamat`, `email`, `sandi`, `hp`) VALUES
('', '', '', '', '', ''),
('Nahdatul Ulama', 'Mukarramah', 'BTN. Manggarupi', 'ama@gmail.com', '1234', '08229245076'),
('Hipmi', 'Rizka', 'jalan Urip sumiharjo', 'hipmi@gmail.com', 'abcd', '081355121075'),
('Wahdah', 'Tri Wahyuni', 'Antang', 'wahdah@gmail.com', 'sandi', '089765876678'),
('Akiba', 'Mukarramah', 'Manggaruou', 'akiba@gmail.com', 'n/a', '0987654321'),
('Muslimah Saintek', 'A. Asti Abadi Islam', 'Fakultas Saintek UINAM', 'muslimah@gmail.com', '1234', '082292455076');

-- --------------------------------------------------------

--
-- Table structure for table `kajian`
--

CREATE TABLE `kajian` (
  `penyedia` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `penceramah` varchar(30) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `catatan` text,
  `video` text,
  `peserta` varchar(20) NOT NULL,
  `support` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kajian`
--

INSERT INTO `kajian` (`penyedia`, `judul`, `tema`, `kategori`, `penceramah`, `tempat`, `alamat`, `latitude`, `longitude`, `tanggal`, `waktu`, `catatan`, `video`, `peserta`, `support`, `timestamp`) VALUES
('A. Asti Abadi Islam', 'a', 'b', 'Thaharah', 'c', 't', 'y', '-5.1492849', '119.429359', 'Tue 23 Oct 2018', '16:17', 'hjkb', 'Tidak Tersedia Video Streaming', 'Umum', '2018-10-23', '2018-10-23 08:14:21'),
('Rizka', 'abcd', 'akidah', 'ama@gmail.com', '1234', 'Mesji', 'gowa', '-5.205291966207716', '119.49688754975796', '2018-10-05', '08:10', 'tes', 'n/a', 'Umum', '2018-10-27', '2018-10-27 13:18:54'),
('A. Asti Abadi Islam', 'b', 'b', 'Aqidah', 'b', 'b', 'n', '-5.1492849', '119.429359', 'Tue 23 Oct 2018', '16:16', 'n', 'Tidak Tersedia Video Streaming', 'Umum', '2018-10-23', '2018-10-23 08:16:31'),
('Tri Wahyuni', 'BE WONDERFUL WOMAN', 'tabligh akbar', 'Aqidah', 'Rini ariany', 'apartemen vida', 'makassar', '-5.2055358', '119.4968126', 'Fri 5 Oct 2018', '14:15', 'n/a', 'https://www.youtube.com', 'Umum', '2018-10-05', '2018-10-05 04:20:42'),
('Tri Wahyuni', 'beubd', 'nidn', 'Aqidah', 'jbsk ', 'knl', 'knk', '-5.2091852', '119.464903', 'Sat 27 Oct 2018', '23:22', 'jnj', 'Tidak Tersedia Video Streaming', 'Umum', '2018-10-27', '2018-10-27 13:20:44'),
('A. Asti Abadi Islam', 'h', 'j', 'Aqidah', 'j', 'ik', 'k', '-5.1504698', '119.4344372', 'Tue 23 Oct 2018', '16:19', 'k', 'Tidak Tersedia Video Streaming', 'Umum', '2018-10-23', '2018-10-23 08:17:55'),
('Tri Wahyuni', 'hg', 'uhh', 'Aqidah', 'jhb', 'jn', 'n', '-5.2091852', '119.464903', 'Sat 27 Oct 2018', '02:8', 'jnj', 'Tidak Tersedia Video Streaming', 'Umum', '2018-10-27', '2018-10-27 13:08:17'),
('A. Asti Abadi Islam', 'Islam dan Teknologi', 'Teknologi', 'Aqidah', 'Dra. Sohrah', 'LT fakultas Sains dan Teknologi UINAM', 'Samata', '-5.1699301', '119.4315354', 'Fri 19 Oct 2018', '11:48', 'memakai pakaian putih', 'http://www.google.com', 'Khusus Akhwat', '2018-10-19', '2018-10-19 04:20:42'),
('A. Asti Abadi Islam', 'Kesehatan dalam Islam', 'Kesehatan', 'Akhlak', 'dr. Resky ', 'LT Kampus UINAM', 'samata', '-5.1699301', '119.4315354', 'Fri 19 Oct 2018', '11:50', '', 'Tidak Tersedia Video Streaming', 'Umum', '2018-10-19', '2018-10-19 04:20:42'),
('A. Asti Abadi Islam', 'l', 'h', 'Aqidah', 'h', 'h', 'j', '-5.1489601', '119.4300845', 'Tue 23 Oct 2018', '16:23', 'km', 'Tidak Tersedia Video Streaming', 'Umum', '2018-10-23', '2018-10-23 08:20:16'),
('A. Asti Abadi Islam', 'o', 'o', 'Aqidah', 'o', 'o', 'o', '-5.1492849', '119.429359', 'Tue 23 Oct 2018', '16:27', 'o', 'Tidak Tersedia Video Streaming', 'Umum', '2018-10-23', '2018-10-23 08:25:46'),
('Rizka', 'tes', 'akidah', 'ama@gmail.com', '1234', 'Mesji', 'gowa', '-5.205291966207716', '119.49688754975796', '2018-10-05', '08:10', '', 'n/a', 'Umum', '2018-10-27', '2018-10-27 13:06:50'),
('Tri Wahyuni', 'z', 'z', 'Aqidah', 'z', 'x', 'z', '-5.2086453', '119.4641777', 'Sat 27 Oct 2018', '21:10', 'z', 'Tidak Tersedia Video Streaming', 'Umum', '2018-10-27', '2018-10-27 13:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` char(20) NOT NULL,
  `registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` char(3) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `registered`, `status`, `id`) VALUES
('ilhamsabar@gmail.com', '123131', '2018-07-22 09:19:13', '1', 1),
('ilhamsabar@gmail.com', '123131', '2018-07-22 09:19:33', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kajian`
--
ALTER TABLE `kajian`
  ADD PRIMARY KEY (`judul`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`email`) REFERENCES `kajian` (`judul`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
