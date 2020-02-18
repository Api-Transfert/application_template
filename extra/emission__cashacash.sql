-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 04:10 PM
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
-- Table structure for table `emission__cashacash`
--

CREATE TABLE `emission__cashacash` (
  `id` int(11) NOT NULL,
  `exp_nom` varchar(225) NOT NULL,
  `exp_prenom` varchar(225) NOT NULL,
  `exp_addresse` varchar(225) DEFAULT NULL,
  `exp_phone` varchar(225) NOT NULL,
  `pid_nature` varchar(225) NOT NULL,
  `pid_numero` varchar(225) NOT NULL,
  `etablie_a` varchar(225) NOT NULL,
  `etablie_le` varchar(225) NOT NULL,
  `pay_emission_piece` varchar(225) NOT NULL,
  `question_secret` varchar(225) NOT NULL,
  `reponse` varchar(225) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `alert_email_sms` tinyint(2) NOT NULL,
  `bene_habituel` varchar(225) NOT NULL,
  `bene_nom` varchar(225) NOT NULL,
  `bene_prenom` varchar(225) NOT NULL,
  `bene_addresse` varchar(225) DEFAULT NULL,
  `bene_phone` varchar(225) NOT NULL,
  `bene_pays_id` int(11) NOT NULL,
  `montant_letre` varchar(225) DEFAULT NULL,
  `montant_chiffre` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emission__cashacash`
--

INSERT INTO `emission__cashacash` (`id`, `exp_nom`, `exp_prenom`, `exp_addresse`, `exp_phone`, `pid_nature`, `pid_numero`, `etablie_a`, `etablie_le`, `pay_emission_piece`, `question_secret`, `reponse`, `email`, `alert_email_sms`, `bene_habituel`, `bene_nom`, `bene_prenom`, `bene_addresse`, `bene_phone`, `bene_pays_id`, `montant_letre`, `montant_chiffre`) VALUES
(1, 'john', 'doe', 'queslquepar', '010101', 'original', '02022', 'new york', '2020-02-19', 'un pays magique', 'qui sui\'je', 'persone', 'johndoe@gmail.com', 1, 'peut etre', 'Doe', 'Mark', 'quelque part en cote d\'ivoire', '055056659', 1, 'quize milliard', '15000000000'),
(2, 'john', 'doe', 'queslquepar', '010101', 'original', '02022', 'new york', '2020-02-19', 'un pays magique', 'qui sui\'je', 'persone', 'johndoe@gmail.com', 1, 'peut etre', 'Doe', 'Mark', 'quelque part en cote d\'ivoire', '055056659', 1, 'quize milliard', '15000000000'),
(3, 'john', 'doe', 'queslquepar', '010101', 'original', '02022', 'new york', '2020-02-19', 'un pays magique', 'qui sui\'je', 'persone', 'johndoe@gmail.com', 1, 'peut etre', 'Doe', 'Mark', 'quelque part en cote d\'ivoire', '055056659', 1, 'quize milliard', '15000000000'),
(4, 'john', 'doe', 'queslquepar', '010101', 'original', '02022', 'new york', '2020-02-19', 'un pays magique', 'qui sui\'je', 'persone', 'johndoe@gmail.com', 1, 'peut etre', 'Doe', 'Mark', 'quelque part en cote d\'ivoire', '055056659', 1, 'quize milliard', '15000000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emission__cashacash`
--
ALTER TABLE `emission__cashacash`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emission__cashacash`
--
ALTER TABLE `emission__cashacash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
