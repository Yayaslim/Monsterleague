-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2019 at 05:44 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monstre`
--

-- --------------------------------------------------------

--
-- Table structure for table `monstres`
--

CREATE TABLE `monstres` (
  `nom` varchar(30) NOT NULL,
  `strength` int(10) NOT NULL,
  `life` int(10) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monstres`
--

INSERT INTO `monstres` (`nom`, `strength`, `life`, `type`) VALUES
('Acidpaw', 250, 1000, 'Toxic'),
('Barbling', 300, 800, 'Plante'),
('Infernaltree', 400, 700, 'Feu'),
('Toxinscream', 150, 1000, 'Toxic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monstres`
--
ALTER TABLE `monstres`
  ADD PRIMARY KEY (`nom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
