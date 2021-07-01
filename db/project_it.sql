-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2021 at 03:16 AM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `human_status`
--

CREATE TABLE `human_status` (
  `human_id` varchar(6) NOT NULL,
  `id` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `priority` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_image` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  `url` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image`, `name`, `datetime`, `url`, `status`) VALUES
(10, 'me (10).png', '2021-01-10 13:11:34', 'me (10).png', 'Things'),
(11, 'me (6).png', '2021-01-10 21:35:54', 'me (6).png', 'Things'),
(12, 'me (7).png', '2021-01-10 21:37:31', 'me (7).png', 'Person'),
(13, 'me (11).png', '2021-01-11 15:07:14', 'me (11).png', 'Laoshi'),
(14, 'me (12).png', '2021-01-11 15:20:40', 'me (12).png', 'Laoshi'),
(15, 'me (13).png', '2021-01-11 16:27:27', 'me (13).png', 'Laoshi'),
(17, 'me (1).png', '2021-01-16 20:07:50', 'me (1).png', 'Things'),
(19, 'me (14).png', '2021-04-03 10:08:22', 'me (14).png', 'Bottle');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `status`, `date`) VALUES
(3, 'test2.jpg', 'Person', '2021-01-09 00:00:00'),
(4, 'FocusArea__Weather-02.jpg', 'Things', '2021-01-09 16:27:34'),
(5, 'test.jpg', 'Things', '2021-01-09 16:32:42'),
(6, 'test.jpg', 'Things', '2021-01-10 00:56:39'),
(7, 'test.jpg', 'Person', '2021-01-10 11:34:28'),
(8, 'test1.png', 'Things', '2021-01-10 11:34:54'),
(9, 'test2.jpg', 'Person', '2021-01-10 11:37:55'),
(10, 'test1.png', 'Person', '2021-01-10 12:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `level`, `username`, `password`) VALUES
('USR001', 'admin', 'administrator@gmail.com', 'Monitoring', 'admin', '$2y$10$0ocz3VgOzjGOMeLsJxv0Q.hCEjGjKbaApbF2KqE3r9ckuzp7j8sYe'),
('USR002', 'Syahrul', 'rizalhackers4rt@yahoo.com', 'Monitoring', 's108004316', '$2y$10$Ps.nWjYMIHwwtXVN4QSm7.i1qL.odrRm8iiJCb/Y2hHOQH7fFSIv.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `human_status`
--
ALTER TABLE `human_status`
  ADD PRIMARY KEY (`human_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
