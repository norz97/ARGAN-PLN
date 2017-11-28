-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 02:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln_kaltimra`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_person`
--

CREATE TABLE `contact_person` (
  `id_cp` int(11) NOT NULL,
  `nm_cp` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_person`
--

INSERT INTO `contact_person` (`id_cp`, `nm_cp`, `email`) VALUES
(1, 'Indah Puspita', 'indahpuspt@pln.co.id'),
(2, 'Eko Prasetyo', 'ekoprasetyo@pln.co.id'),
(3, 'Yahya Hidayat', 'yahyahdyt@pln.co.id'),
(4, 'Devi Anggraeni', 'devi.angg@pln.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `data_lapor`
--

CREATE TABLE `data_lapor` (
  `id` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_pic` int(11) NOT NULL,
  `id_pic2` int(11) NOT NULL,
  `ip_wan` varchar(50) NOT NULL,
  `ip_lan` varchar(50) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `telp_kantor` varchar(50) NOT NULL,
  `icon_sid` varchar(50) NOT NULL,
  `telkom_sid` varchar(50) NOT NULL,
  `id_gprov` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_lapor`
--

INSERT INTO `data_lapor` (`id`, `id_unit`, `id_pic`, `id_pic2`, `ip_wan`, `ip_lan`, `perangkat`, `telp_kantor`, `icon_sid`, `telkom_sid`, `id_gprov`) VALUES
(1, 1, 1, 2, '172.02.25.36', '10.32.1.22', 'Cisco', '0542732660', '.:Balikpapan:.', '.:BalikpapanII:.', 1),
(2, 2, 3, 4, '172.02.00.25', '10.32.1.22', 'V-Sat', '0541273203', '.:KP_MJ:.', '.:KP_MJ2:.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `grup_provider`
--

CREATE TABLE `grup_provider` (
  `id_gprov` int(11) NOT NULL,
  `nm_gprov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup_provider`
--

INSERT INTO `grup_provider` (`id_gprov`, `nm_gprov`) VALUES
(1, 'Telkom'),
(2, 'Icon+');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) DEFAULT NULL,
  `id_lapor` int(11) NOT NULL,
  `no_tiket` int(50) NOT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `id_gprov` int(11) DEFAULT NULL,
  `wktu_down` varchar(50) DEFAULT NULL,
  `wktu_up` varchar(50) DEFAULT NULL,
  `lama_gangguan` varchar(50) DEFAULT NULL,
  `no_tiket_icon` int(11) DEFAULT NULL,
  `no_tiket_telkom` int(11) DEFAULT NULL,
  `sebab_gangguan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `id_lapor`, `no_tiket`, `id_unit`, `id_gprov`, `wktu_down`, `wktu_up`, `lama_gangguan`, `no_tiket_icon`, `no_tiket_telkom`, `sebab_gangguan`) VALUES
(NULL, 3, 1, 1, 1, '11/28/2017 9:34 PM', '11/28/2017 9:35 PM', '0 Hari 0 Jam 1 Menit', 1, 1, 'Cuaca Buruk');

-- --------------------------------------------------------

--
-- Table structure for table `pic_unit`
--

CREATE TABLE `pic_unit` (
  `id_pic` int(11) NOT NULL,
  `nm_pic` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pic_unit`
--

INSERT INTO `pic_unit` (`id_pic`, `nm_pic`, `no_telp`, `email`) VALUES
(1, 'Zainuddin Nor', '081254420063', 'zainuddinnor@gmail.com'),
(2, 'Joko Yuniar', '089954321187', 'jokoyun99@gmail.com'),
(3, 'Indra Gunawan', '081233109987', 'Indra87@gmail.com'),
(4, 'Dina Andini', '085287119809', 'dina.andini@gmail.com'),
(5, 'Julia Handayani', '089981776121', 'julian77@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nm_unit` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nm_unit`, `alamat`) VALUES
(1, 'Balikpapan', 'Kota Balikpapan, Kalimantan Timur'),
(2, 'KP. Muara Jawa', 'Jl. Muarajawa-Samboja, Muara Jawa Pesisir, Muara Jawa, Kabupaten Kutai Kartanegara, Kalimantan Timur'),
(3, 'Anggana', 'Pulau Atas, Kec. Sambutan, Kota Samarinda, Kalimantan Timur 75256'),
(4, 'Tenggarong', 'Jl. K.H. Ahmad Muksin, Timbau, Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur 75511'),
(5, 'Desa Perangat', 'Jl. A. Yani, Perangat Sel., Marang Kayu, Kabupaten Kutai Kartanegara, Kalimantan Timur 75385');

-- --------------------------------------------------------

--
-- Table structure for table `user_provider`
--

CREATE TABLE `user_provider` (
  `id_uprov` int(11) NOT NULL,
  `nm_uprov` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_gprov` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_provider`
--

INSERT INTO `user_provider` (`id_uprov`, `nm_uprov`, `email`, `id_gprov`) VALUES
(1, 'Unit Balikpapan', 'zainuddinnor@gmail.com', 1),
(2, 'Unit Tenggarong', 'norz914@gmail.com', 2),
(3, 'Unit Samarinda', 'znor78@gmail.com', 1),
(4, 'Unit Samboja', 'zennor79@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_person`
--
ALTER TABLE `contact_person`
  ADD PRIMARY KEY (`id_cp`);

--
-- Indexes for table `data_lapor`
--
ALTER TABLE `data_lapor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_pic` (`id_pic`),
  ADD KEY `id_gprov` (`id_gprov`),
  ADD KEY `id_pic2` (`id_pic2`),
  ADD KEY `id_pic2_2` (`id_pic2`);

--
-- Indexes for table `grup_provider`
--
ALTER TABLE `grup_provider`
  ADD PRIMARY KEY (`id_gprov`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_lapor`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_gprov` (`id_gprov`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pic_unit`
--
ALTER TABLE `pic_unit`
  ADD PRIMARY KEY (`id_pic`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `user_provider`
--
ALTER TABLE `user_provider`
  ADD PRIMARY KEY (`id_uprov`),
  ADD KEY `id_gprov` (`id_gprov`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_person`
--
ALTER TABLE `contact_person`
  MODIFY `id_cp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_lapor`
--
ALTER TABLE `data_lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `grup_provider`
--
ALTER TABLE `grup_provider`
  MODIFY `id_gprov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pic_unit`
--
ALTER TABLE `pic_unit`
  MODIFY `id_pic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_provider`
--
ALTER TABLE `user_provider`
  MODIFY `id_uprov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_lapor`
--
ALTER TABLE `data_lapor`
  ADD CONSTRAINT `fk_grup_provider` FOREIGN KEY (`id_gprov`) REFERENCES `grup_provider` (`id_gprov`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pic` FOREIGN KEY (`id_pic`) REFERENCES `pic_unit` (`id_pic`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pic2` FOREIGN KEY (`id_pic2`) REFERENCES `pic_unit` (`id_pic`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_unit` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_gprov_lapor` FOREIGN KEY (`id_gprov`) REFERENCES `data_lapor` (`id_gprov`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_nmunit` FOREIGN KEY (`id`) REFERENCES `data_lapor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_unit_lapor` FOREIGN KEY (`id_unit`) REFERENCES `data_lapor` (`id_unit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_provider`
--
ALTER TABLE `user_provider`
  ADD CONSTRAINT `fk_gprov` FOREIGN KEY (`id_gprov`) REFERENCES `grup_provider` (`id_gprov`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
