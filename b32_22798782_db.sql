-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql209.byetcluster.com
-- Generation Time: Jun 05, 2019 at 08:18 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b32_22798782_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldave`
--

CREATE TABLE IF NOT EXISTS `tbldave` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbldave`
--

INSERT INTO `tbldave` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`) VALUES
(1, 'S100718060313', '2018-10-07 06:13:52', 'signup', 0, 0, 0, 'dave');

-- --------------------------------------------------------

--
-- Table structure for table `tblDimple`
--

CREATE TABLE IF NOT EXISTS `tblDimple` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblDimple`
--

INSERT INTO `tblDimple` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`) VALUES
(1, 'S022719012310', '2019-02-27 01:25:37', 'signup', 0, 0, 0, 'Dimple'),
(2, 'D022719012549', '2019-02-27 01:28:17', 'deposit', 0, 1200, 1200, 'Dimple'),
(3, 'W022719012619', '2019-02-27 01:28:47', 'withraw', 200, 0, 1000, 'Dimple');

-- --------------------------------------------------------

--
-- Table structure for table `tblMatts`
--

CREATE TABLE IF NOT EXISTS `tblMatts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblMatts`
--

INSERT INTO `tblMatts` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`) VALUES
(1, 'S100618075617', '2018-10-06 08:06:56', 'signup', 0, 0, 0, 'Matts'),
(2, 'D100618075659', '2018-10-06 08:07:37', 'deposit', 0, 200, 200, 'Matts '),
(3, 'W100618075723', '2018-10-06 08:08:02', 'withraw', 100, 0, 100, 'Matts ');

-- --------------------------------------------------------

--
-- Table structure for table `tblprincess`
--

CREATE TABLE IF NOT EXISTS `tblprincess` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblprincess`
--

INSERT INTO `tblprincess` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`) VALUES
(1, 'S102818061152', '2018-10-28 06:12:31', 'signup', 0, 0, 0, 'princess'),
(2, 'D102818061232', '2018-10-28 06:13:10', 'deposit', 0, 500, 500, 'princess'),
(3, 'W102818061304', '2018-10-28 06:13:43', 'withraw', 150, 0, 350, 'princess');

-- --------------------------------------------------------

--
-- Table structure for table `tblRay`
--

CREATE TABLE IF NOT EXISTS `tblRay` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblRay`
--

INSERT INTO `tblRay` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`) VALUES
(1, 'S110818061358', '2018-11-08 18:15:11', 'signup', 0, 0, 0, 'Ray');

-- --------------------------------------------------------

--
-- Table structure for table `tblrenz`
--

CREATE TABLE IF NOT EXISTS `tblrenz` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `refno` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `bal` int(11) DEFAULT NULL,
  `exec` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblrenz`
--

INSERT INTO `tblrenz` (`id`, `refno`, `datetime`, `remarks`, `debit`, `credit`, `bal`, `exec`) VALUES
(1, 'S100418113737', '2018-10-04 11:48:15', 'signup', 0, 0, 0, 'renz'),
(2, 'D100418113809', '2018-10-04 11:48:46', 'deposit', 0, 10000, 10000, 'renz'),
(3, 'W100418122253', '2018-10-04 12:33:30', 'withraw', 300, 0, 9700, 'renz'),
(4, 'D100418080631', '2018-10-04 20:17:08', 'deposit', 0, 100, 9800, 'renz'),
(5, 'W100418084843', '2018-10-04 20:59:20', 'withraw', 800, 0, 9000, 'renz'),
(6, 'D100818051804', '2018-10-08 05:28:44', 'deposit', 0, 100, 9100, 'renz'),
(7, 'W102018081532', '2018-10-20 08:15:47', 'withraw', 100, 0, 9000, 'renz');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usr` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `usr_role` varchar(255) NOT NULL,
  `lastlogin` varchar(255) NOT NULL,
  `profpic` varchar(255) NOT NULL,
  `datereg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `usr`, `psw`, `usr_role`, `lastlogin`, `profpic`, `datereg`) VALUES
(1, 'renz', '000000', '0', '2019-02-28 07:58:04', '/profpic/renz.jpg', ''),
(2, 'Matts', '123456', '0', '2018-10-06 08:08:02', '/profpic/profpic.jpg', ''),
(6, 'dave', '123456', '0', '2018-10-07 06:17:01', '/profpic/dave.jpg', ''),
(9, 'admin', 'pm9dsy11', '1', '2019-02-28 08:30:36', '/profpic/admin.jpg', ''),
(18, 'princess', 'password', '0', '2019-02-28 07:31:43', '/profpic/profpic.jpg', '2018-10-28 06:12:30'),
(19, 'Ray', '09478668632', '0', '2019-06-05 08:07:29', '/profpic/profpic.jpg', '2018-11-08 18:15:11'),
(20, 'Dimple', '123456', '0', '2019-02-27 01:25:59', '/profpic/profpic.jpg', '2019-02-27 01:25:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
