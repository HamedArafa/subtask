-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2014 at 11:06 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `subtask`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  `quote` varchar(300) NOT NULL,
  `score` int(11) NOT NULL,
  `member_since` date NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `password`, `email`, `country`, `quote`, `score`, `member_since`, `image`) VALUES
(1, 'n', 'n', 'n', '', 'n@n', 'n', '			TYPE YOUR QUOTE\r\n			', 0, '2014-12-27', NULL),
(2, 'n', 'n', 'n', '', 'n@n', 'n', '			TYPE YOUR QUOTE\r\n			', 0, '2014-12-27', NULL),
(3, 'n', 'n', 'n', '', 'n@n', 'n', '			TYPE YOUR QUOTE\r\n			', 0, '2014-12-27', NULL),
(4, 'n', 'n', 'n', '', 'n@n', 'n', '			TYPE YOUR QUOTE\r\n			', 0, '2014-12-27', NULL),
(5, 'n', 'n', 'n', '', 'n@n', 'n', '			TYPE YOUR QUOTE\r\n			', 0, '2014-12-27', ''),
(6, '', '', '', '', '', '', '', 0, '0000-00-00', ''),
(7, '', '', '', '', '', '', '', 0, '0000-00-00', 'uploads/code.jpg'),
(8, '', '', '', '', '', '', '			TYPE YOUR QUOTE\r\n			', 0, '2014-12-27', 'uploads/code.jpg'),
(9, 'aa', 'aa', '', 'aa', 'aa@aa', 'aa', '			TYPE YOUR QUOTE\r\nhello', 0, '2014-12-27', 'uploads/code.jpg'),
(10, 'nada', 'ahmed', 'nada-elnokaly', '123', 'aa@aa', 'aa', 'i hope it workds', 0, '2014-12-27', 'uploads/code.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
