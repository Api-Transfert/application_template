-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 10:00 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platetransfert`
--

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `zone_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(225) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `zone_date`, `name`, `size`, `type`) VALUES
(1, '2013-02-24 16:36:24', 'Côte d\'Ivoire', 1, 'destination'),
(2, '2013-02-24 16:36:29', 'UMOA', 7, 'destination'),
(3, '2013-02-24 19:42:06', 'Burkina Faso', 1, 'destination'),
(4, '2013-03-07 22:42:18', 'Mali', 1, 'destination'),
(5, '2013-03-07 22:42:36', 'Sénégal', 1, 'destination'),
(6, '2013-03-07 22:42:56', 'Niger', 1, 'destination'),
(7, '2013-02-23 17:17:26', 'UMOA', 7, 'emission'),
(8, '2013-02-24 14:34:45', 'Côte d\'Ivoire', 1, 'emission'),
(9, '2013-02-24 19:19:41', 'Burkina Faso', 1, 'emission'),
(10, '2013-03-07 22:39:13', 'Mali', 1, 'emission'),
(11, '2013-08-21 12:02:33', 'Niger', 1, 'emission');

-- --------------------------------------------------------

--
-- Table structure for table `zone_pays`
--

CREATE TABLE `zone_pays` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `paysId` int(11) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone_pays`
--

INSERT INTO `zone_pays` (`id`, `zone_id`, `paysId`, `date`) VALUES
(1, 1, 1, '2013-02-24 16:36:24.000000 +00'),
(2, 2, 1, '2013-02-24 16:36:29.000000 +00'),
(3, 2, 2, '2013-02-24 16:36:29.000000 +00'),
(4, 3, 2, '2013-02-24 19:42:06.000000 +00'),
(5, 2, 3, '2013-02-24 16:36:29.000000 +00'),
(6, 6, 3, '2013-03-07 22:42:56.000000 +00'),
(7, 2, 4, '2013-02-24 16:36:29.000000 +00'),
(8, 4, 4, '2013-03-07 22:42:18.000000 +00'),
(9, 2, 5, '2013-02-24 16:36:29.000000 +00'),
(10, 2, 6, '2013-02-24 16:36:29.000000 +00'),
(11, 2, 7, '2013-02-24 16:36:29.000000 +00'),
(12, 5, 7, '2013-03-07 22:42:36.000000 +00'),
(31, 7, 7, '2013-02-23 17:17:26.000000 +00'),
(30, 7, 6, '2013-02-23 17:17:26.000000 +00'),
(29, 7, 5, '2013-02-23 17:17:26.000000 +00'),
(28, 7, 4, '2013-02-23 17:17:26.000000 +00'),
(27, 7, 3, '2013-02-23 17:17:26.000000 +00'),
(26, 7, 2, '2013-02-23 17:17:26.000000 +00'),
(25, 7, 1, '2013-02-23 17:17:26.000000 +00'),
(35, 11, 3, '2013-08-21 12:02:33.000000 +00'),
(34, 10, 4, '2013-03-07 22:39:13.000000 +00'),
(33, 9, 2, '2013-02-24 19:19:41.000000 +00'),
(32, 8, 1, '2013-02-24 14:34:45.000000 +00');

-- --------------------------------------------------------

--
-- Table structure for table `zone_tarif`
--

CREATE TABLE `zone_tarif` (
  `id` int(11) NOT NULL,
  `tarif_id` int(11) NOT NULL,
  `tarif_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `zone_tarif_name` varchar(255) NOT NULL,
  `tarif_zone_emis` int(11) NOT NULL,
  `tarif_zone_dest` int(11) NOT NULL,
  `opration_type_id` tinyint(3) UNSIGNED NOT NULL,
  `tarif_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone_tarif`
--

INSERT INTO `zone_tarif` (`id`, `tarif_id`, `tarif_date`, `zone_tarif_name`, `tarif_zone_emis`, `tarif_zone_dest`, `opration_type_id`, `tarif_type`) VALUES
(2, 29, '2013-02-24 17:22:34', 'New Tarif CA-CA Local CI-CI', 2, 1, 1, 1),
(8, 13, '2013-03-28 16:19:37', 'Cash à Compte UMOA-UMOA', 1, 2, 2, 1),
(10, 8, '2013-08-21 12:04:06', 'CaCo Niger-UMOA', 5, 2, 2, 1),
(29, 30, '2019-04-23 12:33:46', 'KATARI', 1, 4, 18, 1),
(30, 31, '2019-05-27 13:38:45', 'MALI-BF', 4, 3, 18, 1),
(13, 10, '2013-10-07 13:07:44', 'CaCo Sanfo', 2, 2, 2, 2),
(19, 12, '2014-06-09 16:53:29', 'CaCo BOA Burkina Local', 3, 3, 2, 2),
(20, 17, '2016-02-25 19:56:59', 'Offre Pro 50 CI Local', 2, 1, 13, 2),
(21, 20, '2016-12-22 08:54:09', 'Cash à Mobile Money - tarif', 2, 2, 14, 1),
(22, 22, '2017-04-25 16:37:55', 'Offre Pro 100', 2, 1, 13, 2),
(23, 24, '2017-10-03 08:37:30', 'Cash à wallet airtel bf', 1, 2, 18, 1),
(27, 28, '2018-07-20 06:27:32', 'New Tarif CA-CA Inter UEMOA', 1, 2, 1, 1),
(31, 32, '2019-10-18 19:49:22', 'CACAPG', 2, 3, 22, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone_pays`
--
ALTER TABLE `zone_pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone_tarif`
--
ALTER TABLE `zone_tarif`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `joinzonetarifTarifId_2` (`tarif_type`,`tarif_id`,`tarif_zone_emis`,`opration_type_id`,`tarif_zone_dest`),
  ADD KEY `joinzonetarifTarifId` (`tarif_id`),
  ADD KEY `joinzonetarifZoneId` (`tarif_zone_emis`),
  ADD KEY `joinzonetarifOperationType` (`opration_type_id`),
  ADD KEY `joinzonetarifZonedestId` (`tarif_zone_dest`),
  ADD KEY `joinzonetarifAgenceId` (`tarif_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `zone_pays`
--
ALTER TABLE `zone_pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `zone_tarif`
--
ALTER TABLE `zone_tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
