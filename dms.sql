-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2013 at 11:42 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assigned_date` date NOT NULL,
  `deadline_date` date NOT NULL,
  `last_update` date NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `comments` text NOT NULL,
  `tags` text NOT NULL,
  `keywords` text NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `assigned_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `assigned_date`, `deadline_date`, `last_update`, `project_name`, `description`, `status`, `comments`, `tags`, `keywords`, `assigned_to`, `assigned_by`) VALUES
(1, '2013-09-01', '2013-09-20', '2013-09-18', 'Te', '<p>\r\n	Test</p>\r\n', 1, '<p>\r\n	Test</p>\r\n', '<p>\r\n	Test</p>\r\n', '<p>\r\n	Test</p>\r\n', 2, 1),
(2, '2013-09-19', '2013-09-19', '0000-00-00', 'dfsdf', '<p>\r\n	adasd</p>\r\n', 2, '<p>\r\n	asdasdaf</p>\r\n', '<p>\r\n	afaf</p>\r\n', '<p>\r\n	asfasf</p>\r\n', 2, 1),
(3, '2013-09-18', '2013-09-18', '0000-00-00', 'dfgdfg', '<p>\r\n	sgf</p>\r\n', 1, '<p>\r\n	dsf</p>\r\n', '<p>\r\n	sfsf</p>\r\n', '<p>\r\n	ad</p>\r\n', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'username', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(2, 'user', '1a1dc91c907325c69271ddf0c944bc72', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
