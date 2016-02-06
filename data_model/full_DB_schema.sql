SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE IF NOT EXISTS `propheis_ablesail` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `propheis_ablesail`;

CREATE TABLE IF NOT EXISTS `infosheet` (
  `ID` int(4) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emergency_contact` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `lenses` tinyint(1) NOT NULL,
  `wheelchair_power` tinyint(1) NOT NULL,
  `wheelchair_manual` tinyint(1) NOT NULL,
  `scooter` tinyint(1) NOT NULL,
  `cane` tinyint(1) NOT NULL,
  `walker` tinyint(1) NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transfer_assistance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disabilities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `waiver` tinyint(1) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `networkID` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID_UNIQUE` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
