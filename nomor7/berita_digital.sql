-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 09:39 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tittle` varchar(22) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `create_time` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `tittle`, `image`, `deskripsi`, `create_time`, `user_id`) VALUES
(1, 'Bajir Badang', '', 'Bajir akan segera tiba pada tanggal sekian bulan sekian', '2019-11-06', 1),
(2, 'Angin Topan', '', 'Angin Topan Yang telah datang ke jepang talah menghancurakan sekitar sekian rumah dan warga yang telah meninggal sekian orang', '2019-11-22', 2),
(3, 'Ikan Besar', '', 'Seseorang nelayan berhasil mengakap ikan besar yang berada di lautan pasifik hanya memakaii umpat cacing saja', '2019-09-01', 4),
(4, 'Tersabar listrik', '', 'Seseorang tersambar listrik akibat men layangan diatas gendeng pada saat hujan tiba.', '2019-05-21', 3),
(5, 'Tsunami', '', 'Pada tahun 2005 aceh terkena dampak tsunami yang menewaskan sekian orang dan menghancurkan rumah sekitar sekian, dan total kerugian yang telah dirugikan sekitar sekian rupiah', '2005-11-06', 2),
(6, 'Longsor', '', 'Ketika hujan deras tiba, tiba tiba saja daerah puncak sekitar cibadak terkana longsor akibat pohon desikat tidak sanggup menahan beban air ditanah tersebut', '2015-02-05', 4),
(7, 'Hujan es batu', '', 'Cuaca yang sangat ekstim saking dinggin diindonesia hari ini adalah nya hujan tiba yang mengakibatkan hujan tersebut berubah menjadi es, beberapa rumah ancur akibat terjadinya fenomena tersebut', '2000-01-06', 3),
(8, 'pura pura keserupan', '', 'Diduga sesorang pengemudi kesurupan akibat mereka, tidak terima ditilah yang telah melanggar peraturan lalu lintas', '2015-05-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(27) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `role`) VALUES
(1, 'Tiara', 'tiara@go.id', 'Admin'),
(2, 'Luthfi', 'luthfi@gg.go', 'Berita'),
(3, 'Nurul', 'nrl@zz.id', 'rahasia'),
(4, 'rizki', 'rzi@ki.id', 'unknown');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
