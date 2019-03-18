-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2019 at 04:12 PM
-- Server version: 10.1.37-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(36) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_password` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_phonenumber` int(8) NOT NULL,
  `user_email` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_zipcode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_phonenumber`, `user_email`, `user_zipcode`) VALUES
('', 'persha955', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('124214', 'persha95', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8e89cd6ec88', 'persha95', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8e9a8241da9', 'asda123', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8eb7c089a8d', 'Jens', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8f6986a3ded', 'asda', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8fa43a364e5', 'Jens', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8fadac1818b', 'Jens233', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8fb02a4d190', 'Jens2332', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8fb2f41bb81', 'Jens23322', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8fb3d358c4b', 'ananas', '123123pp', 22456150, 'persha95@gmail.com', 5240),
('5c8fb4a73ee5f', 'hansen123', '123123pp', 22456150, 'persha95@gmail.com', 5240);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
