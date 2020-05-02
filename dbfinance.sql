-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 07:58 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldeanmark`
--

CREATE TABLE `tbldeanmark` (
  `id` int(11) UNSIGNED NOT NULL,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldeanmark`
--

INSERT INTO `tbldeanmark` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`, `type`) VALUES
(1, 'S050220084449', '2020-05-02 14:44:50', 'signup', 0, 0, 0, 'deanmark', ''),
(2, 'D050220101548', '2020-05-02 16:15:48', 'deposit', 0, 10000, 10000, 'deanmark', 'Deposit');

-- --------------------------------------------------------

--
-- Table structure for table `tbldudaybels`
--

CREATE TABLE `tbldudaybels` (
  `id` int(11) UNSIGNED NOT NULL,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldudaybels`
--

INSERT INTO `tbldudaybels` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`, `type`) VALUES
(1, 'S050220075633', '2020-05-03 01:56:33', 'signup', 0, 0, 0, 'dudaybels', 'signup'),
(2, 'D050220075719', '2020-05-03 01:57:19', 'deposit', 0, 20000, 20000, 'dudaybels', 'Deposit');

-- --------------------------------------------------------

--
-- Table structure for table `tbllorence2`
--

CREATE TABLE `tbllorence2` (
  `id` int(11) UNSIGNED NOT NULL,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllorence2`
--

INSERT INTO `tbllorence2` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`, `type`) VALUES
(1, 'S050120063034', '2020-05-02 00:30:34', 'signup', 0, 0, 0, 'lorence2', ''),
(2, 'D050120063129', '2020-05-02 00:31:29', 'deposit', 0, 3000, 3000, 'lorence2', ''),
(3, 'D050120063229', '2020-05-02 00:32:29', 'deposit', 0, 100, 3100, 'lorence2', ''),
(4, 'W050120063248', '2020-05-02 00:32:48', 'withraw', 200, 0, 2900, 'lorence2', ''),
(5, 'D050120073735', '2020-05-02 01:37:35', 'deposit', 0, 3000, 5900, 'lorence2', ''),
(6, 'D050120073819', '2020-05-02 01:38:19', 'deposit', 0, 3000, 5900, 'lorence2', ''),
(7, 'D050120073852', '2020-05-02 01:38:52', 'deposit', 0, 100, 6000, 'lorence2', ''),
(8, 'D050120073924', '2020-05-02 01:39:24', 'deposit', 0, 1000, 6900, 'lorence2', ''),
(9, 'D050120073951', '2020-05-02 01:39:51', 'deposit', 0, 1000, 7000, 'lorence2', ''),
(10, 'D050120074008', '2020-05-02 01:40:08', 'deposit', 0, 1000, 7900, 'lorence2', ''),
(11, 'D050120074320', '2020-05-02 01:43:20', 'deposit', 0, 1000, 8900, 'lorence2', ''),
(12, 'D050220061652', '2020-05-02 12:16:52', 'deposit', 0, 1000, 9900, 'lorence2', 'Deposit'),
(13, 'W050220061746', '2020-05-02 12:17:46', 'withraw', 100, 0, 9800, 'lorence2', 'Withraw'),
(14, 'W050220014423', '2020-05-02 19:44:23', 'withraw', 300, 0, 9500, 'lorence2', 'Withraw'),
(15, 'D050220015001', '2020-05-02 19:50:01', 'deposit', 0, 3000, 12500, 'lorence2', 'Deposit'),
(16, 'D050220054852', '2020-05-02 23:48:52', 'deposit', 0, 3, 12503, 'lorence2', 'Deposit'),
(17, 'W050220055346', '2020-05-02 23:53:46', 'withraw', 200, 0, 12303, 'lorence2', 'Withraw'),
(18, 'D050220073029', '2020-05-03 01:30:29', 'deposit', 0, 20, 12323, 'lorence2', 'Deposit'),
(19, 'W050220073458', '2020-05-03 01:34:58', 'withraw', 2000, 0, 10323, 'lorence2', 'Withraw'),
(20, 'W050220073535', '2020-05-03 01:35:35', 'withraw', 323, 0, 10000, 'lorence2', 'Withraw');

-- --------------------------------------------------------

--
-- Table structure for table `tblmarknino`
--

CREATE TABLE `tblmarknino` (
  `id` int(11) UNSIGNED NOT NULL,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmarknino`
--

INSERT INTO `tblmarknino` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`, `type`) VALUES
(1, 'S050220085007', '2020-05-02 14:50:07', 'signup', 0, 0, 0, 'marknino', ''),
(2, 'W050220105500', '2020-05-02 16:55:00', 'withraw', 200, 0, -200, 'marknino', 'Withraw'),
(3, 'D050220105507', '2020-05-02 16:55:07', 'deposit', 0, 10000, 9800, 'marknino', 'Deposit');

-- --------------------------------------------------------

--
-- Table structure for table `tbltoolates`
--

CREATE TABLE `tbltoolates` (
  `id` int(11) UNSIGNED NOT NULL,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltoolates`
--

INSERT INTO `tbltoolates` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`, `type`) VALUES
(1, 'S050220084916', '2020-05-02 14:49:16', 'signup', 0, 0, 0, 'toolates', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `usr` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `usr_role` varchar(255) NOT NULL,
  `lastlogin` varchar(255) NOT NULL,
  `profpic` varchar(255) NOT NULL,
  `datereg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `usr`, `psw`, `usr_role`, `lastlogin`, `profpic`, `datereg`) VALUES
(1, 'lorence', 'lorence', 'admin', '2020-05-02 11:56:42', 'profpic/lorence.jpg', ''),
(2, 'lorence2', 'lorence2', '0', '2020-05-03 01:26:04', 'profpic/lorence2.jpg', '2020-05-02 00:30:34'),
(3, 'deanmark', 'deanmark', '0', '2020-05-02 16:17:50', 'profpic/deanmark.jpg', '2020-05-02 14:44:49'),
(4, 'toolates', 'toolates', '0', '2020-05-03 01:45:33', 'profpic/profpic.jpg', '2020-05-02 14:49:16'),
(5, 'marknino', 'marknino', '0', '2020-05-02 16:53:58', 'profpic/marknino.jpg', '2020-05-02 14:50:07'),
(11, 'dudaybels', 'dudaybels', '0', '2020-05-03 01:58:03', 'profpic/dudaybels.jpg', '2020-05-03 01:56:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldeanmark`
--
ALTER TABLE `tbldeanmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldudaybels`
--
ALTER TABLE `tbldudaybels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllorence2`
--
ALTER TABLE `tbllorence2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmarknino`
--
ALTER TABLE `tblmarknino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltoolates`
--
ALTER TABLE `tbltoolates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldeanmark`
--
ALTER TABLE `tbldeanmark`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldudaybels`
--
ALTER TABLE `tbldudaybels`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbllorence2`
--
ALTER TABLE `tbllorence2`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblmarknino`
--
ALTER TABLE `tblmarknino`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbltoolates`
--
ALTER TABLE `tbltoolates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
