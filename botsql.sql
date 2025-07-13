-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-badboychx66.alwaysdata.net
-- Generation Time: May 20, 2024 at 03:41 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `badboychx66_bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `auchat`
--

CREATE TABLE `auchat` (
  `chats` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auchat`
--

INSERT INTO `auchat` (`chats`) VALUES
(1764351005),
(-2147483648),
(-2147483648),
(-2147483648),
(2147483647),
(2147483647),
(2147483647),
(2147483647),
(-2147483648),
(-2147483648),
(2147483647),
(2147483647),
(-2147483648),
(-2147483648),
(-1001923390974),
(-1001826548725),
(-1001603854783);

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `code` varchar(50) NOT NULL,
  `credit` int(20) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'Vip',
  `remby` varchar(10) NOT NULL,
  `redeemed` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`code`, `credit`, `role`, `remby`, `redeemed`) VALUES
('BadBoy-PH0l-zhBZ-ymPC', 100, 'VIP', '', ''),
('BadBoy-OCqL-7jf9-294p', 100, 'VIP', 'Mpliex', 'yes'),
('BadBoy-WrPc-kINz-TJrN', 100, 'VIP', 'Ripxtar', 'yes'),
('BadBoy-btQH-SIDG-WKIq', 10, 'VIP', '', ''),
('Ripxtar-Bot-God', 99999, 'GOD', 'Ripxtar', 'yes'),
('IMHACKER', 2147483647, 'HACKER', 'Ripxtar', 'yes'),
('BadBoy-3fQD-pG3l-8pZ6', 5000, 'VIP', 'Sir_PrOfeS', 'yes'),
('BadBoy-bGzX-Lkuo-YMf0', 5000, 'VIP', 'abhixcpz', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `teleid` varchar(50) NOT NULL,
  `credit` int(11) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'free'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `teleid`, `credit`, `role`) VALUES
('badboychx', '1764351005', 92727, 'owner'),
('Mpliex', '5880960339', 92727, 'owner'),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;