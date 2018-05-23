-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 08:31 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `rights` varchar(10) NOT NULL DEFAULT 'user',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `logged` int(11) NOT NULL DEFAULT '0',
  `in_ip` varchar(20) NOT NULL,
  `ext_ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `rights`, `timestamp`, `ip`, `email`, `logged`, `in_ip`, `ext_ip`) VALUES
('Eric', 'eric', 'user', '2015-10-06 16:36:12', '  150.129.29.77', 'ericfiger14@gmail.com', 0, '', ''),
('Mark', 'markmark', 'user', '2015-09-30 16:50:24', '', '', 0, '127.0.0.1', '127.0.0.1'),
('mk', 'mk', 'user', '2015-10-01 03:10:04', '  127.0.0.1', 'mk@mk', 0, '127.0.0.1', '127.0.0.1'),
('Sneha', 'barbie', 'user', '2015-09-30 16:50:24', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `msg` varchar(80) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`, `timestamp`, `ip`) VALUES
(1, 'mark', 'hiiiii', '2015-03-28 10:38:31', ''),
(2, 'mk', 'Mark....', '2015-03-28 10:38:31', ''),
(3, 'mark', 'kytdekythdkh,', '2015-03-28 10:38:31', ''),
(4, 'mark', '1111', '2015-03-28 10:38:31', ''),
(5, 'qw', 'sfd', '2015-03-28 10:40:46', ''),
(6, 'mark', '', '2015-03-28 10:44:42', '127.0.0.1'),
(7, 'mark', '123456789', '2015-03-28 10:45:58', '127.0.0.1'),
(8, 'mark', '7\r\n', '2015-03-28 11:07:35', '127.0.0.1'),
(9, 'mark', 'Hiiii!!!!!!!!!!!!', '2015-03-28 14:02:07', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `msg` varchar(80) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `username`, `msg`, `timestamp`, `ip`) VALUES
(1, 'test', 'aaa', '2015-03-28 10:32:17', ''),
(4, 'mark', 'qqq', '2015-03-28 10:39:28', '127.0.0.1'),
(7, 'mark', '1234567890', '2015-03-28 10:46:12', '127.0.0.1'),
(1, 'mark', 'asdasd', '2015-03-28 11:00:43', '127.0.0.1'),
(3, 'mark', 'ewewe', '2015-03-28 11:01:02', '127.0.0.1'),
(1, 'mark', '78787878787', '2015-03-28 11:08:42', '127.0.0.1'),
(1, 'mark', 'qawrsdfsdfsdfsdfsdfa ,bndkfj  kasf uhasdkf kuasuskfd kuagsf gkuas fkug uaisgiu u', '2015-03-28 14:00:52', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `single`
--

CREATE TABLE IF NOT EXISTS `single` (
  `id` int(11) NOT NULL,
  `msg` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sender` varchar(25) NOT NULL,
  `receiver` varchar(25) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `single`
--

INSERT INTO `single` (`id`, `msg`, `sender`, `receiver`, `timestamp`, `ip`) VALUES
(1, '±Ï2;	½q[éØ¬”Ð)6@­-n§•kÓë8å€', 'Mark', 'Sneha', '2015-10-05 04:03:43', '127.0.0.1'),
(2, 'kàÇì÷³áùÉß—0¢ ‘ŠF0žYœ¿DªË›', 'Mark', 'Sneha', '2015-10-05 15:39:06', '192.168.1.102'),
(3, '¦$Û¡£’€Öò8eÅÒ­iÎ‚,\0þ|\rà	oLJ', 'Mark', 'mk', '2015-10-05 15:39:52', '192.168.1.102'),
(4, 'ëMäKV¡úÕà]„5c¬Ißg½Üù¦—Ò(W', 'Mark', 'mk', '2015-10-05 16:04:45', '127.0.0.1'),
(5, ',ûÒ4X="CÇª´!2†³ÌºÜüŸ[ne¶Ð', 'Mark', 'Sneha', '2015-10-05 16:05:11', '127.0.0.1'),
(6, '5·h\n­t½Q¾³˜£¾1ÞA9]Â×ñvþÊ†¤', 'Mark', 'Sneha', '2015-10-05 17:10:41', '115.69.251.34'),
(7, 'SŠ0Àú&ÙuµqLb-ýV%;úRŒ³õ”6(}Ù', 'test', 'Mark', '2015-10-05 17:15:51', '115.69.251.34'),
(8, 'l‰æXoVÄÎYèAQ¾>ƒ½B_Gˆê–Š¥:2Ž', 'Tejal', 'Mark', '2015-10-06 19:54:10', '114.143.229.206'),
(9, '„Ød?ä	¨ÿxXI%kŠÖnÚŸ˜qíÅO6', 'Tejal', 'Mark', '2015-10-06 19:54:39', '114.143.229.206'),
(10, '”šÙ¸Ô™Ž[ø<Ü1xRÖ|^@ôß´*:æïï.þr¤', 'Mark', 'Tejal', '2015-10-06 19:54:49', '114.143.229.227'),
(11, '³Í¥FK²åon³»µñhöüß´íý€²jð', 'Mark', 'Tejal', '2015-10-06 22:37:13', '114.143.229.206'),
(12, 'ñ…NÈDB»ó…š¤%D\r_Tò„çÞ­%ûÑjeN', 'Mark', 'nad.napello', '2015-10-06 22:56:28', '114.143.229.206'),
(13, '\Z®&5ìÌ\ZÐ7=ö‡b[84SÜLHa¥“]8VóŽW', 'dimple', 'Mark', '2015-10-06 22:56:36', '114.143.229.206'),
(14, 'OJžáÔÚAèŸ‹DfžßU×1w­ø·s—`§³ô', 'nad.napello', 'Mark', '2015-10-06 22:56:58', '114.143.229.206'),
(15, '»GÚñŠÜ\0“ÿ·ÛáÀþ¯ñ}‹W\ZLô?!ôÊ,g‚+', 'dimple', 'Mark', '2015-10-06 22:57:40', '114.143.229.206'),
(16, '4¿ÃLñðÑúÃáyf"G—ŠSm±›cmÊ¼MˆZñ', 'nad.napello', 'Mark', '2015-10-06 22:58:01', '114.143.229.206'),
(17, '{nµy#¤ð½L_»[E~.ç˜Ú¬.mšÕ', 'Mark', 'nad.napello', '2015-10-06 22:58:41', '114.143.229.206'),
(18, ' ï/g{`“i%šJB‹¹§V0‹ö›éZysë¶Pg"', 'Mark', 'nad.napello', '2015-10-17 22:51:12', '115.69.254.162'),
(19, 'hello', 'Mark', 'mk', '2016-02-10 01:50:46', '127.0.0.1'),
(20, 'hi', 'mk', 'Eric', '2016-02-10 22:39:46', '127.0.0.1'),
(21, 'hey', 'mk', 'Mark', '2016-03-15 07:25:05', '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD KEY `id` (`id`);

--
-- Indexes for table `single`
--
ALTER TABLE `single`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `single`
--
ALTER TABLE `single`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`id`) REFERENCES `logs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
