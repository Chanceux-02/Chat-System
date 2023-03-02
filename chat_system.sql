-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 09:44 AM
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
  `creator_name` varchar(255) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `chat_id` varchar(11) NOT NULL,
  `messages` longtext NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groupchat`
--

INSERT INTO `groupchat` (`id`, `chat_name`, `creator_id`, `creator_name`, `guest_id`, `chat_id`, `messages`, `time`) VALUES
(1, 'newchat', 22, '', 33, '0', '', '2023-03-01 14:54:02'),
(2, 'Close-Open-Store-Alyson123', 10, '', 6, '0', '', '2023-03-01 16:59:42'),
(3, 'Close-Open-Store-louie', 9, '', 6, '0', '', '2023-03-02 08:45:41'),
(4, 'Close-Open-Store-louie', 9, '', 6, '0', '', '2023-03-02 08:47:53'),
(5, 'Close-Open-Store-louie', 9, '', 6, '9', '', '2023-03-02 08:58:02'),
(6, 'Close-Open-Store-louie', 9, '', 6, '9', '', '2023-03-02 09:01:27'),
(7, 'Close-Open-Store-louie', 9, '', 6, '9-6', '', '2023-03-02 09:02:43'),
(8, 'Close-Open-Store-louie', 9, '', 6, '9-6', '', '2023-03-02 09:07:22'),
(9, 'hello-world-louie', 9, '', 6, '9-6', '', '2023-03-02 09:20:31'),
(10, 'hello-world-hello world', 7, '', 6, '7-6', '', '2023-03-02 10:34:27'),
(11, 'hello-world-louie', 9, '', 6, '9-6', '', '2023-03-02 10:34:42'),
(12, 'louie-hello world', 7, '', 6, '7-6', '', '2023-03-02 10:34:47'),
(13, 'louie-hello world', 7, '', 6, '7-6', '', '2023-03-02 10:34:52'),
(14, 'louie-hello world', 7, '', 6, '7-6', '', '2023-03-02 10:35:07'),
(15, 'louie-hello world', 7, '', 6, '7-6', '', '2023-03-02 10:35:13'),
(16, 'hello-world-hello world', 7, '', 6, '7-6', '', '2023-03-02 10:35:20'),
(17, 'louie-hello world', 7, '', 7, '7-7', '', '2023-03-02 10:43:14'),
(18, 'hello-world-louie', 9, '', 7, '9-7', '', '2023-03-02 10:44:15'),
(19, 'hello-world-louie', 9, '', 7, '9-7', '', '2023-03-02 11:14:08'),
(20, 'hello-world-louie', 9, '', 7, '', 'yo', '2023-03-02 11:26:10'),
(21, 'Close-Open-Store-louie', 9, '', 7, '', 'yo', '2023-03-02 11:27:36'),
(22, 'hello-world-louie', 9, '', 7, '', 'asd', '2023-03-02 11:29:30'),
(23, 'hello-world-louie', 9, '', 7, '', 'adfadfsads', '2023-03-02 11:31:21'),
(24, 'hello-world-louie', 9, '', 7, '', 'hghhghg', '2023-03-02 11:33:20'),
(25, 'hello-world-louie', 9, '', 7, '', 'asdfas', '2023-03-02 11:41:53'),
(26, '9', 9, '', 7, '', 'asdf', '2023-03-02 11:43:19'),
(27, 'hello-world-louie', 9, '', 7, '', 'adsf', '2023-03-02 11:51:07'),
(28, 'hello-world-louie', 9, '', 7, '', '', '2023-03-02 11:55:01'),
(29, 'hello-world-louie', 9, '', 7, '', '', '2023-03-02 12:06:40'),
(30, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:42'),
(31, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:43'),
(32, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:43'),
(33, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:44'),
(34, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:44'),
(35, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:44'),
(36, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:45'),
(37, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:45'),
(38, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:45'),
(39, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:45'),
(40, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:46'),
(41, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:46'),
(42, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:46'),
(43, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:46'),
(44, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:47'),
(45, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:47'),
(46, '-louie', 9, '', 0, '', '', '2023-03-02 12:06:50'),
(47, '-louie', 9, '', 0, '', '', '2023-03-02 12:07:01'),
(48, '-louie', 9, '', 0, '', '', '2023-03-02 12:07:01'),
(49, '-louie', 9, '', 0, '', '', '2023-03-02 12:07:01'),
(50, '-louie', 9, '', 0, '', '', '2023-03-02 12:07:01'),
(51, '-louie', 9, '', 0, '', '', '2023-03-02 12:07:02'),
(52, '-louie', 9, '', 0, '', '', '2023-03-02 12:07:02'),
(53, '<br', 0, '', 7, '', '', '2023-03-02 12:07:26'),
(54, 'louie-7-9', 9, '', 7, '', 'asasas', '2023-03-02 13:24:24'),
(55, 'louie-7-9', 9, '', 7, '', 'asas', '2023-03-02 13:24:50'),
(56, 'louie-7-9', 9, '', 7, '', 'as', '2023-03-02 13:29:12'),
(57, 'louie-7-9', 9, '', 7, '', 'asd', '2023-03-02 13:30:15'),
(58, 'louie-7-9', 9, '', 7, '', 'asd', '2023-03-02 13:38:10'),
(59, 'louie-7-9', 9, '', 7, '', 'adfads', '2023-03-02 13:46:20'),
(60, 'louie-$id>-9', 9, '', 0, '', 'as', '2023-03-02 13:50:13'),
(61, 'louie-$id>-9', 9, '', 0, '', '123', '2023-03-02 13:51:07'),
(62, 'louie-$id>-9', 9, '', 0, '', 'asd', '2023-03-02 13:52:19'),
(63, 'louie-$id>-9', 9, '', 0, '', 'as', '2023-03-02 13:57:07'),
(64, 'louie-7>-9', 9, '', 7, '', 'asd', '2023-03-02 13:58:06'),
(65, 'louie-7 >-9', 9, '', 7, '', 'ads', '2023-03-02 13:59:00'),
(66, 'louie-7>-9', 9, '', 7, '', 'adsf', '2023-03-02 14:00:25'),
(67, 'louie-7-9', 9, '', 7, '', 'adf', '2023-03-02 14:00:56'),
(68, 'louie-7-9', 9, '', 7, '', 'adsf', '2023-03-02 14:01:36'),
(69, 'louie--9', 9, '', 0, '', 'adsf', '2023-03-02 14:02:00'),
(70, 'louie--9', 9, '', 0, '', '', '2023-03-02 14:02:01'),
(71, 'louie--9', 9, '', 0, '', 'adf', '2023-03-02 14:02:03'),
(72, 'louie-7-9', 9, '', 7, '', 'adf', '2023-03-02 14:02:49'),
(73, 'louie-7-9', 9, '', 7, '', 'asd', '2023-03-02 14:03:19'),
(74, 'hello world-7-9', 9, '', 7, '', 'asdfads', '2023-03-02 14:24:40'),
(75, 'hello world-7-7', 7, '', 7, '', 'adasd', '2023-03-02 14:30:33'),
(76, 'hello world-9-7', 7, '', 9, '', '123asfasdfasf', '2023-03-02 14:35:57'),
(77, 'hello world-9-7', 7, '', 9, '', 'adfadf', '2023-03-02 14:39:52'),
(78, 'hello world-7-9', 9, '', 7, '', 'adsfadsf', '2023-03-02 14:40:57'),
(79, 'hello world-9-7', 7, '', 9, '', 'asdfadsf', '2023-03-02 14:41:47'),
(80, 'louie-7-9', 9, '', 7, '', 'adsfasdf', '2023-03-02 15:19:40'),
(81, 'louie-7-9', 9, '', 7, '', 'adfadsf', '2023-03-02 16:42:11'),
(82, 'Close Open Store-9-8', 8, '', 9, '', 'asdfa', '2023-03-02 16:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `messages` longtext NOT NULL,
  `chat_id` varchar(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `messages`, `chat_id`, `time`) VALUES
(26, '', 'fgsdg', '0', '2023-02-18 21:31:56'),
(27, '', 'adsfadsf', '0', '2023-02-18 21:33:47'),
(28, '', 'jay', '0', '2023-02-18 21:34:15'),
(29, '', 'This is some text', '0', '2023-02-18 21:42:14'),
(30, '', 'message23', '9', '2023-03-01 09:00:00'),
(31, '', 'message234', '9', '2023-03-01 09:00:39'),
(32, '', 'message2', '6', '2023-03-01 09:06:53'),
(33, '', 'message23', '6', '2023-03-01 09:16:59'),
(34, '', 'message234', '6', '2023-03-01 09:46:31'),
(35, '', 'message2', '6', '2023-03-01 09:46:36'),
(36, '', 'this is some message', '6', '2023-03-01 09:46:41'),
(37, '', 'this is some message too', '6', '2023-03-01 09:46:47'),
(38, '', 'message2', '6', '2023-03-01 09:55:56'),
(39, '', 'message234', '6', '2023-03-01 09:56:04'),
(40, '', 'this is some message too', '6', '2023-03-01 09:57:10'),
(41, '', 'this is some message', '6', '2023-03-01 09:57:52'),
(42, '', 'message23', '6', '2023-03-01 09:57:59'),
(43, '', 'message2', '6', '2023-03-01 10:17:54'),
(44, '', '123', '9', '2023-03-01 10:28:06'),
(45, '', '123', '9', '2023-03-01 10:34:06'),
(46, '', 'adf', '9', '2023-03-01 11:40:04'),
(47, '', 'adasd', '9', '2023-03-01 11:57:43'),
(48, '', 'aaa', '9', '2023-03-01 12:04:10'),
(49, '', 'hello', '6', '2023-03-01 12:11:39'),
(50, '', 'ssss', '9', '2023-03-01 12:13:06'),
(51, 'louie', 'this is some message too', '9', '2023-03-01 12:24:46'),
(52, 'louie', 'this is some message too', '6', '2023-03-01 12:25:03'),
(53, 'hello world', 'message234', '7', '2023-03-01 12:25:28'),
(54, 'Alyson123', 'Hello I am new here!', '10', '2023-03-01 13:09:04'),
(55, 'louie', 'wow', '9', '2023-03-01 13:09:29'),
(56, 'louie', '123', '9', '2023-03-01 13:10:41'),
(57, 'Alyson123', '121212', '10', '2023-03-01 13:10:47'),
(58, 'louie', '123asfasdfasf', '9', '2023-03-01 13:11:04'),
(59, 'Alyson123', 'this is some message', '10', '2023-03-01 13:11:16'),
(60, 'Alyson123', 'this is some message too', '10', '2023-03-01 13:11:23'),
(61, 'louie', '123asfasdfasf1212213', '9', '2023-03-01 13:11:29'),
(62, 'louie', 'this is some message too', '9-6', '2023-03-02 09:34:56'),
(63, 'hello world', '123asfasdfasf1212213', '7-6', '2023-03-02 10:34:57'),
(64, 'hello world', '123asfasdfasf1212213', '7-7', '2023-03-02 10:43:20'),
(65, 'louie', 'adfad', '9-7', '2023-03-02 10:44:17');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
