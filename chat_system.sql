-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 10:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `groupchat`
--

CREATE TABLE `groupchat` (
  `id` int(11) NOT NULL,
  `chat_name` varchar(255) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `messages` longtext NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groupchat`
--

INSERT INTO `groupchat` (`id`, `chat_name`, `creator_id`, `guest_id`, `messages`, `time`) VALUES
(1, 'newchat', 22, 33, 'adsf', '2023-03-01 14:54:02'),
(2, 'Close-Open-Store-Alyson123', 10, 6, '', '2023-03-01 16:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `messages` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `messages`, `user_id`, `time`) VALUES
(26, '', 'fgsdg', 0, '2023-02-18 21:31:56'),
(27, '', 'adsfadsf', 0, '2023-02-18 21:33:47'),
(28, '', 'jay', 0, '2023-02-18 21:34:15'),
(29, '', 'This is some text', 0, '2023-02-18 21:42:14'),
(30, '', 'message23', 9, '2023-03-01 09:00:00'),
(31, '', 'message234', 9, '2023-03-01 09:00:39'),
(32, '', 'message2', 6, '2023-03-01 09:06:53'),
(33, '', 'message23', 6, '2023-03-01 09:16:59'),
(34, '', 'message234', 6, '2023-03-01 09:46:31'),
(35, '', 'message2', 6, '2023-03-01 09:46:36'),
(36, '', 'this is some message', 6, '2023-03-01 09:46:41'),
(37, '', 'this is some message too', 6, '2023-03-01 09:46:47'),
(38, '', 'message2', 6, '2023-03-01 09:55:56'),
(39, '', 'message234', 6, '2023-03-01 09:56:04'),
(40, '', 'this is some message too', 6, '2023-03-01 09:57:10'),
(41, '', 'this is some message', 6, '2023-03-01 09:57:52'),
(42, '', 'message23', 6, '2023-03-01 09:57:59'),
(43, '', 'message2', 6, '2023-03-01 10:17:54'),
(44, '', '123', 9, '2023-03-01 10:28:06'),
(45, '', '123', 9, '2023-03-01 10:34:06'),
(46, '', 'adf', 9, '2023-03-01 11:40:04'),
(47, '', 'adasd', 9, '2023-03-01 11:57:43'),
(48, '', 'aaa', 9, '2023-03-01 12:04:10'),
(49, '', 'hello', 6, '2023-03-01 12:11:39'),
(50, '', 'ssss', 9, '2023-03-01 12:13:06'),
(51, 'louie', 'this is some message too', 9, '2023-03-01 12:24:46'),
(52, 'louie', 'this is some message too', 6, '2023-03-01 12:25:03'),
(53, 'hello world', 'message234', 7, '2023-03-01 12:25:28'),
(54, 'Alyson123', 'Hello I am new here!', 10, '2023-03-01 13:09:04'),
(55, 'louie', 'wow', 9, '2023-03-01 13:09:29'),
(56, 'louie', '123', 9, '2023-03-01 13:10:41'),
(57, 'Alyson123', '121212', 10, '2023-03-01 13:10:47'),
(58, 'louie', '123asfasdfasf', 9, '2023-03-01 13:11:04'),
(59, 'Alyson123', 'this is some message', 10, '2023-03-01 13:11:16'),
(60, 'Alyson123', 'this is some message too', 10, '2023-03-01 13:11:23'),
(61, 'louie', '123asfasdfasf1212213', 9, '2023-03-01 13:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `time`) VALUES
(6, 'louie', 'louiejaycantores@gma', '123', '2023-02-19 12:14:18'),
(7, 'hello world', 'louiejaycantores@gma', '1234', '2023-02-19 12:14:58'),
(8, 'Close Open Store', 'louiejaycantores@gma', '12345', '2023-02-19 12:15:50'),
(9, 'louie', 'louiejaycantores@gmail.com', '123', '2023-02-19 12:57:45'),
(10, 'Alyson123', 'alyson@email', '123', '2023-03-01 13:08:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupchat`
--
ALTER TABLE `groupchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groupchat`
--
ALTER TABLE `groupchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
