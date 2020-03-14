-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 12:34 AM
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
-- Table structure for table `transferts`
--

CREATE TABLE `transferts` (
  `id` int(11) NOT NULL,
  `agence_user_id` int(11) NOT NULL,
  `exp_nom` varchar(225) NOT NULL,
  `exp_prenom` varchar(225) NOT NULL,
  `exp_addresse` varchar(225) DEFAULT NULL,
  `exp_phone` varchar(225) DEFAULT NULL,
  `exp_pid_nature` varchar(225) NOT NULL,
  `exp_pid_numero` varchar(225) NOT NULL,
  `ifm_montant_letre` varchar(225) DEFAULT NULL,
  `ifm_montant_chiffre` varchar(225) NOT NULL,
  `exp_etablie_le` varchar(225) NOT NULL,
  `exp_etablie_a` varchar(225) NOT NULL,
  `exp_bene_habituel` varchar(225) DEFAULT NULL,
  `exp_pay_emission_piece` varchar(225) DEFAULT NULL,
  `exp_email` varchar(225) DEFAULT NULL,
  `exp_alert_email_sms` tinyint(2) NOT NULL,
  `bene_nom` varchar(225) NOT NULL,
  `bene_prenom` varchar(225) NOT NULL,
  `bene_pays_id` int(11) NOT NULL,
  `ifm_frai_envoi_ttc` varchar(30) DEFAULT NULL,
  `ifm_taxe` varchar(30) DEFAULT NULL,
  `ifm_montant_en_devise` varchar(30) DEFAULT NULL,
  `ifm_cthu` varchar(30) DEFAULT NULL,
  `ifm_frai_envoi_ht` varchar(30) DEFAULT NULL,
  `date` varchar(225) NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transferts`
--

INSERT INTO `transferts` (`id`, `agence_user_id`, `exp_nom`, `exp_prenom`, `exp_addresse`, `exp_phone`, `exp_pid_nature`, `exp_pid_numero`, `ifm_montant_letre`, `ifm_montant_chiffre`, `exp_etablie_le`, `exp_etablie_a`, `exp_bene_habituel`, `exp_pay_emission_piece`, `exp_email`, `exp_alert_email_sms`, `bene_nom`, `bene_prenom`, `bene_pays_id`, `ifm_frai_envoi_ttc`, `ifm_taxe`, `ifm_montant_en_devise`, `ifm_cthu`, `ifm_frai_envoi_ht`, `date`, `time`, `status`) VALUES
(10, 1, 'ex nom', 'ex prenom', 'x addr', 'x phone', 'x nature p id', 'num p id', '', '12000', '2020-03-19', 'somwhere', 'someone', 'cote ivoir', 'email@email.com', 1, 'bene nom', 'b prenom', 1, '0', '0', '0', '0', NULL, '13-03-2020 11:21:08', 1584098468, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transferts__cashacash`
--

CREATE TABLE `transferts__cashacash` (
  `id` int(11) NOT NULL,
  `transferts_id` int(11) NOT NULL,
  `question_secret` varchar(225) NOT NULL,
  `reponse` varchar(225) DEFAULT NULL,
  `addresse` varchar(225) NOT NULL,
  `bene_phone` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transferts__cashacash`
--

INSERT INTO `transferts__cashacash` (`id`, `transferts_id`, `question_secret`, `reponse`, `addresse`, `bene_phone`) VALUES
(4, 10, 'qui', 'lui', 'x addr', '9999999999999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transferts`
--
ALTER TABLE `transferts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transferts__cashacash`
--
ALTER TABLE `transferts__cashacash`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transferts`
--
ALTER TABLE `transferts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transferts__cashacash`
--
ALTER TABLE `transferts__cashacash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
