-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 06:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `messages` longtext NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `messages`, `time`) VALUES
(1, '', 'asfadsf', '2023-02-18 20:06:26'),
(2, '', 'asdfasdf', '2023-02-18 20:06:29'),
(3, '', 'asfasfa', '2023-02-18 20:10:19'),
(4, '', 'louie', '2023-02-18 20:10:24'),
(5, '', 'jay', '2023-02-18 20:10:30'),
(6, '', 'louie', '2023-02-18 20:12:56'),
(7, '', 'jay', '2023-02-18 20:13:02'),
(8, '', 'louie', '2023-02-18 20:13:52'),
(9, '', 'jay', '2023-02-18 20:14:25'),
(10, '', 'asfasfa', '2023-02-18 20:14:29'),
(11, '', 'This is some text', '2023-02-18 20:38:50'),
(12, '', 'This is some text', '2023-02-18 20:40:05'),
(13, '', 'louie', '2023-02-18 20:40:44'),
(14, '', 'jay', '2023-02-18 20:40:50'),
(15, '', 'This is some text', '2023-02-18 20:41:55'),
(16, '', 'This is some text', '2023-02-18 20:42:51'),
(17, '', 'jay', '2023-02-18 20:43:02'),
(18, '', 'louie', '2023-02-18 20:43:07'),
(19, '', 'This is some text', '2023-02-18 20:49:45'),
(20, '', 'yo', '2023-02-18 21:16:57'),
(21, '', 'jay', '2023-02-18 21:17:18'),
(22, '', 'This is some text', '2023-02-18 21:21:45'),
(23, '', 'This is a new text', '2023-02-18 21:27:41'),
(24, '', 'new text', '2023-02-18 21:27:53'),
(25, '', 'This is super new text', '2023-02-18 21:28:22'),
(26, '', 'fgsdg', '2023-02-18 21:31:56'),
(27, '', 'adsfadsf', '2023-02-18 21:33:47'),
(28, '', 'jay', '2023-02-18 21:34:15'),
(29, '', 'This is some text', '2023-02-18 21:42:14');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `time`) VALUES
(6, 'louie', 'louiejaycantores@gma', '123', '2023-02-19 12:14:18'),
(7, 'hello world', 'louiejaycantores@gma', '123', '2023-02-19 12:14:58'),
(8, 'Close Open Store', 'louiejaycantores@gma', '123', '2023-02-19 12:15:50'),
(9, 'louie', 'louiejaycantores@gmail.com', '123', '2023-02-19 12:57:45');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
